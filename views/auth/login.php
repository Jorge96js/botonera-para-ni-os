<main class="contenedor-login">
<h1 class="nombre-pagina">Ingrese sus datos de sesion</h1>
<?php
        foreach($alertas as $key => $mensajes):
            foreach($mensajes as $mensaje):
                ?>
                <div class="alerta <?php echo $key;?>">
                    <?php echo $mensaje?>
                </div>
                <?php
            endforeach;
        endforeach;
    ?>
<form action="/" method="POST" class="login">

    <div class="field">
        <label for="email">Correo electronico</label>
        <input type="email" id="email" name="email" placeholder="Escriba su e-mail">
    </div>

    <div class="field">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Escriba su contraseña">
    </div>

    <input type="submit" class="boton boton-rojo" value="Entrar">


</form>

</main>
