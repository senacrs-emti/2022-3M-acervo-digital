<?php
include_once 'includes/conn.php';
$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];

switch($acao){
    case 'excluir':
        $sql = "DELETE FROM autores WHERE AutorID = ". $id;
        mysqli_query($conn, $sql);

        header('location: ./tabela.php');
        break;

        case 'salvar':
            

}
