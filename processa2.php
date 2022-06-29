<?php
include_once 'includes/conn.php';
$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];

switch($acao){
    case 'excluir':
        $sql = "DELETE FROM livros WHERE LivroID = ". $id;
        mysqli_query($conn, $sql);

        header('location: ./tabela2.php');
        break;

        case 'salvar':
            

}