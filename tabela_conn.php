<?php
session_start();

include_once 'includes/conn.php';

if (empty($_POST['usuario'])|| empty($_POST['senha'])){
exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "select usuario from usuarios where usuario = '{$usuario}' and senha = '{$senha}'"; 
$result = mysqli_query($conn,$query);
$row = mysqli_num_rows($result);

if ($row == 1){
    $_SESSION['admin'] = $usuario;
    header('Location: tabela-central.php');
    exit();
} else {
    header('Location: login_admin.php');
    exit();
}


?>