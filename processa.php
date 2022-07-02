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
        $nome = $_POST['AutorNome'];
        $descricao = $_POST['AutorDescricao'];
        $frase = $_POST['AutorFrase'];
        $nomearquivo = '';
        if($_FILES['foto']['size']>0){
            $uploaddir = '../imagens';
            $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            $nomearquivo='categoria-'.$id.'-'.rand().'.'.$extensao;
            $uploadfile=$uploaddir.$nomearquivo;
            move_uploaded_file($_FILES['foto']["tmp_name"], $uploadfile);
        } else {
            $nomearquivo = $_POST['AutorImagem'];
        }
    if (!isset($_POST['id']) || empty($_POST['id'])) {
        $sql = "INSERT INTO `autores` (`AutorID`, `AutorNome`, `AutorDescricao`, `AutorImagem`, `AutorFrase`) VALUES (NULL, '".$nome."', '".$descricao."', '".$frase."', '".$nomearquivo."')";
    }
    
    else {
        $sql = "UPDATE 'autores' SET 'Nome'='".$nome."', 'Descricao'='".$descricao."','Frase'='".$frase."','AutorImagem'='".$nomearquivo."' WHERE 'AutorID'='".$id."' ";
    }

    exit($sql);
    mysqli_query($conexao, $sql);

    header('location: ./tabela.php');
    break;
    }
