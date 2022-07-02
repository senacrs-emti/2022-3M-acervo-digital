<?php
include_once 'includes/conn.php';
$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];

switch($acao){
    case 'excluir':
        $sql = "DELETE FROM usuarios WHERE usuariosID = ". $id;
        mysqli_query($conn, $sql);

        header('location: ./tabela3.php');
        break;

        case 'salvar':
            

}