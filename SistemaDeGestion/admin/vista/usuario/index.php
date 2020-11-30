<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gestión de usuarios</title>
        <link rel="stylesheet" href="../../../public/vista/css/style_index.css">
    </head>
    <body>
        <?php
            session_start();
            if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE){
                header("Location: /SistemaDeGestion/public/vista/login.html");
            }
        ?>
        <header id="cabecera">
            <nav class="menu">
                <h3 class="titulo_menu">Menu</h3>
                <ul>
                    <li><a href="../../../public/vista/crear_usuario.html">Crear Usuario</a></li>
                    <li><a href="../../../public/vista/buscar.html">Buscar Usuario</a></li>
                    <li><a href="../../../config/cerrar_sesion.php">Cerrar Sesión</a></li>
                </ul>
            </nav>
        </header>
        <br>
        <br>
        <div class="ctitulo">
            <h2 class="titulo_2">Tabla de Datos</h2>
        </div>
        <table class="tabla" style="width:100%">
            <tr>
                <th>Cedula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Fecha Nacimiento</th>
                <th>Eliminar</th>
                <th>Modificar</th>
                <th>Contraseña</th>    
            </tr>
            
            <?php
                include '../../../config/conexionBD.php';
                $sql = "SELECT * FROM usuario";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo " <td>" . $row["usu_cedula"] . "</td>";
                        echo " <td>" . $row['usu_nombres'] ."</td>";
                        echo " <td>" . $row['usu_apellidos'] . "</td>";
                        echo " <td>" . $row['usu_direccion'] . "</td>";
                        echo " <td>" . $row['usu_telefono'] . "</td>";
                        echo " <td>" . $row['usu_correo'] . "</td>";
                        echo " <td>" . $row['usu_fecha_nacimiento'] . "</td>";
                        echo " <td> <a href='eliminar.php?codigo=" . $row['usu_codigo'] . "'>Eliminar</a> </td>";
                        echo " <td> <a href='modificar.php?codigo=" . $row['usu_codigo'] . "'>Modificar</a> </td>";
                        echo " <td> <a href='cambiar_contrasena.php?codigo=" . $row['usu_codigo'] . "'>Cambiar
                       contraseña</a> </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr>";
                    echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
                    echo "</tr>";
                }
                $conn->close();
            ?>
        </table>
    <br>
    </body>
</html>