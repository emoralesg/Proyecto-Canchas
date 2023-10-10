<?php

require_once("db.php");




if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
            //casos de registros

        case 'acceso_user';
            acceso_user();
            break;

        case 'editar_user':
            editar_user();
            break;

    }
}


function acceso_user()
{
    include("db.php");
    extract($_POST);

    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $password = $conexion->real_escape_string($_POST['password']);
    session_start();
    $_SESSION['nombre'] = $nombre;

    $consulta = "SELECT*FROM user where nombre='$nombre' and password='$password'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_array($resultado);

    if (isset($filas['rol']) == 1) {

        header('Location: ../views/usuarios.php');


        if ($filas['rol'] == 2) { //empleado


            header('Location: ../views/index.php');
        }
    } else {


        echo "<script language='JavaScript'>
        alert('Usuario o Contraseña Incorrecta');
        location.assign('./_sesion/login.php');
        </script>";
        session_destroy();
    }
}





function editar_user()
{
    include "db.php";
    extract($_POST);
    $consulta = "UPDATE user SET nombre = '$nombre', correo = '$correo', password = '$password',
     rol ='$rol' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "<script language='JavaScript'>
        alert('El registro fue actualizado correctamente');
        location.assign('../views/usuarios.php');
        </script>";
    } else {
        echo "<script language='JavaScript'>
         alert('Uy no! ya valio hablale al ing :v');
         location.assign('../views/usuarios.php');
         </script>";
    }
}

