<?php
$db_host='localhost';
$db_usuario='root';
$db_senha='';
$db_base='acervo';

$conn = mysqli_connect($db_host, $db_usuario, $db_senha, $db_base);

if (!$conn){

    die("Connection failed:" . mysqli_connect_error());

}



?>