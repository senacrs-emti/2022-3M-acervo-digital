<?php
//informações do servidor de banco de dados
$db_host='localhost';
$db_usuario='root';
$db_senha='';
$db_base='teupc';

//conexao com o servidor de banco de dados

$conn = mysqli_connect($db_host, $db_usuario, $db_senha, $db_base);

//verefica se houve erro no banco de dados

if (!$conn) {

    die("connection failed: " . mysqli_connect_error());
}

?>