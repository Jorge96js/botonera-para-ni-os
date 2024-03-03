<?php   

    namespace Model;

    class User extends ActiveRecord{

        protected static $tabla = 'users';
        protected static $columnasDB = ['id','name','last_name','email','admin','password', 'confirm'];

        public $id;
        public $name;
        public $last_name;
        public $email;
        public $admin;
        public $password;
        public $confirm;

        public function __construct($args = [])
        {
            $this-> id = $args['id'] ?? null;
            $this-> name = $args['name'] ?? '';
            $this-> last_name = $args['last_name'] ?? '';
            $this-> email = $args['email'] ?? '';
            $this-> admin = $args['admin'] ?? '0';
            $this->password = $args['password'] ?? '';
            $this->confirm = $args['confirm'] ?? '0';
        }

        public function validarLogin(){
            if(!$this->email){
                self::$alertas['error'][] = 'El E-mail es obligatorio';
            }
            if(!$this->password){
                self::$alertas['error'][] = 'El Password es obligatorio';
            }

            return self::$alertas;
        }

        public function existeUsuario(){
            $query = " SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1";
            $resultado = self::$db->query($query);



            if($resultado->num_rows){
                self::$alertas['error'][] = 'El usuario ya se encuentra registrado';
            }
            
            return $resultado;
        }

        public function hashPassword(){
            $this->password = password_hash($this->password, PASSWORD_BCRYPT);
        }

        public function comprobarPasswordAndVerificado($password){
            $resultado = $password;//password_verify($password, $this->password);

            if(!$resultado || !$this->confirm){
                self::$alertas['error'][] = 'Contraseña incorrecta o tu usuario no esta confirmado';
            }else{
                return true;
            }
}
    }