<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../public/vista/css/style_contrasena.css">
        <title>Cambiar contraseña</title>
    </head>
    <body>
        <?php
            session_start();
            if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE){
                 header("Location: /SistemaDeGestion/public/vista/login.html");
            }
        ?>
        <?php
            $codigo = $_GET["codigo"];
        ?>
        <form id="formulario01" method="POST" action="../../controladores/usuario/cambiar_contrasena.php">
            <div>
                <h3 class="titulo">Cambiar contraseña</h3>
            </div>    
            <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
            <label for="cedula">&#8226; Contraseña Actual (*)</label>
            <input type="password" id="contrasena1" name="contrasena1" value="" required
            placeholder="Ingrese su contraseña actual ..."/>
            <br>
            <label for="cedula">&#8226; Contraseña Nueva (*)</label>
            <input type="password" id="contrasena2" name="contrasena2" value="" required
            placeholder="Ingrese su contraseña nueva ..."/>
            <br>

            <input type="submit" id="modificar" name="modificar" value="Modificar" />
            <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
        </form>
    </body>
</html>