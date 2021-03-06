<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../public/vista/css/style_modificar.css">
        <title>Modificar datos de persona</title>
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
            $sql = "SELECT * FROM usuario where usu_codigo=$codigo";
            include '../../../config/conexionBD.php';
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                ?>
                    <form id="formulario01" method="POST" action="../../controladores/usuario/modificar.php">
                        <div class="modificar"> 
                            <h3 class=titulo>Modificar usuario</h3>
                        </div>
                        <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
                        <label for="cedula">&#8226; Cedula (*)</label>
                        <input type="text" id="cedula" name="cedula" value="<?php echo $row["usu_cedula"]; ?>"
                        required placeholder="Ingrese la cedula ..."/>
                        <br>
                        <label for="nombres">&#8226; Nombres (*)</label>
                        <input type="text" id="nombres" name="nombres" value="<?php echo $row["usu_nombres"];
                        ?>" required placeholder="Ingrese los dos nombres ..."/>
                        <br>
                        <label for="apellidos">&#8226; Apelidos (*)</label>
                        <input type="text" id="apellidos" name="apellidos" value="<?php echo $row["usu_apellidos"];
                        ?>" required placeholder="Ingrese los dos apellidos ..."/>
                        <br>
                        <label for="direccion">&#8226; Dirección (*)</label>
                        <input type="text" id="direccion" name="direccion" value="<?php echo $row["usu_direccion"];
                        ?>" required placeholder="Ingrese la dirección ..."/>
                        <br>
                        <label for="telefono">&#8226; Teléfono (*)</label>
                        <input type="text" id="telefono" name="telefono" value="<?php echo $row["usu_telefono"];
                        ?>" required placeholder="Ingrese el teléfono ..."/>
                        <br>
                        <label for="fecha">&#8226; Fecha Nacimiento (*)</label>
                        <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo
                        $row["usu_fecha_nacimiento"]; ?>" required placeholder="Ingrese la fecha de nacimiento ..."/>
                        <br>
                        <label for="correo">&#8226; Correo electrónico (*)</label>
                        <input type="email" id="correo" name="correo" value="<?php echo $row["usu_correo"]; ?>"
                        required placeholder="Ingrese el correo electrónico ..."/>
                        <br>

                        <input type="submit" id="modificar" name="modificar" value="Modificar" />
                        <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
                    </form>
                <?php
                }
            } else {
                echo "<p>Ha ocurrido un error inesperado !</p>";
                echo "<p>" . mysqli_error($conn) . "</p>";
            }
            $conn->close();
        ?> 
    </body>
</html>     
        