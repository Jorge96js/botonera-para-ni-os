<?php

    namespace Controllers;

    use Model\User;
    use MVC\Router;

    class LoginController{
        public static function login(Router $router){
            $alertas = [];
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $auth = new User($_POST);
                $alertas = $auth->validarLogin();
                
                if(empty($alertas)){
                    $user = User::where('email', $auth->email);
                    if($user->comprobarPasswordAndVerificado($auth->password)){
                        session_start();

                        $_SESSION['id'] = $user->id;
                        $_SESSION['name'] = $user->name . ' ' . $user->lstat_name;
                        $_SESSION['email'] = $user->email;
                        $_SESSION['login'] = $user->true;

                        if($user->admin === '1'){
                            $_SESSION['admin'] = $user->admin ?? null;
                            header('Location:/auth/admin-panel');
                        } 
                        
                        else{
                            header('Location: /');
                        }

                    } else{
                        User::setAlerta('error', 'Usuario no encontrado');
                    }
                }
            }

            $alertas = User::getAlertas();
            $router->render('auth/login', []);
        }

        public static function admin(Router $router){
            $router->render('auth/admin-panel',[]);
        }
    }