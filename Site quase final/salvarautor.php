<?php

include_once 'includes/conn.php';
include_once 'includes/head.php';
include_once 'includes/header.php';

if(isset ($_GET['id'])) 
$sql = "SELECT * FROM autores";
$resultado = mysqli_query($conn, $sql);
$total = mysqli_num_rows($resultado);
?>

    