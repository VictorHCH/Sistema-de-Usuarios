<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">
<?php
    $usuario = filter_input(0,"usuarios");

    function accion($x){
        if($x == "Agregar"){
            return 1;
        }
        if($x == "Modificar"){
            return 2;
        }
        if($x == "Borrar"){
            return 3;
        }
        if($x == "Seleccinar"){
            return 4;
        }
        if($x == "Cancelar"){
            return 0;
        }
    }
    $accion = accion(filter_input(0,"action"));
    switch ($accion){
        case 0:
            header('Location: index.php');
            break;
        case 1:
            ?>
                <h1>Agregar Usuarios</h1>
                <form action="agregarUsuarios.php" method="post">
                    Usuario: <input type="text" name="usuario"><br><br>
                    Tipó: <select name="tipo"><option value="0">Usuario</option><option value="1">Administrador</option></select><br><br>
                    Contraseña: <input type="password" name="pass1"><br><br>
                    Contraseña: <input type="password" name="pass2"><br><br>
                    <input type="submit" value="Guardar">
                    <input type="submit" value="Cancelar">
                </form>
            <?php
            break;
        case 4:
            session_start();
            $_SESSION['mod'] = $usuario;
            header('Location: index.php');
            break;

    }
?>
</body>
</html>