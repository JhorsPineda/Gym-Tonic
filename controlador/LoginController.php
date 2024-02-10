<?php
include_once '../modelo/Usuario.php';
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];
$usuario = new Usuario();

if (!empty($_SESSION['tipo_usuario'])) {
    
    switch ($_SESSION['tipo_usuario']) {
        case '1':
            header('Location:../vista/adm_catalogo.php');
            break;     
        case '2':
            header('Location:../vista/tec_catalogo.php');
            break;
    }
}
else{ 
    $usuario->login($user, $pass);
    if (!empty($usuario->objetos)) {
        foreach ($usuario->objetos as $objeto) { // se llaman así porque así están en la base de datos
            $_SESSION['usuario'] = $objeto->id_usuario;
            $_SESSION['tipo_usuario'] = $objeto->tipo_usuario;
            $_SESSION['nombre'] = $objeto->nombre;
        }
    }
    switch ($_SESSION['tipo_usuario']) {
        case 1:
            header('Location:../vista/adm_catalogo.php');
            break;
        case 2:
            header('Location:../vista/tec_catalogo.php');
            break;
    }
}

header('Location: ../index.php');

?>