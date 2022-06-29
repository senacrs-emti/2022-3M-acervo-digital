<!-- <input type="text" value="< echo $dados['AutorImagem'];?>" name="imagem"> -->


<?php

include_once 'includes/conn.php';
include_once 'includes/head.php';
include_once 'includes/header.php';

if(isset ($_GET['id']) || !empty($_GET['id'])){ 
$id = $_GET['id'];



$sql = "SELECT * FROM autores";
$resultado = mysqli_query($conn, $sql);
$dados = mysqli_fetch_array($resultado,MYSQLI_ASS0C);
}else{
$id = '';
$dados['AutorNome'] = 'Nome';
$dados['AutorDescricao'] = 'Descricao';
$dados['AutorImagem'] = 'Imagem';
$dados['AutorFrase'] = 'Frase';


}
?>
<main>
    <h2>Administração Categorias</h2>
    <hr>
    <form action="processa.php" method ="post" enctype="multipart/form-data">
        <input type="hidden" value="salvar" name="acao">
        <label for="AutorID">ID:</label><br>
        <input type="text" name="AutorID" value="<?php echo $id;?>"><br> 
        <label for="AutorNome">Nome:</label><br>
        <input type="text" id="AutorNome" name="AutorNome" value="<?php echo $dados['AutorNome'];?>"><br>
        <label for="AutorDescricao">Descrição:</label><br>
        <textarea id="AutorDescricao" name="AutorDescricao"><?php echo $dados['AutorDescricao'];?></textarea><br>
        <label for="AutorFrase">Frase:</label><br>
        <textarea id="AutorFrase" name="AutorFrase"><?php echo $dados['AutorFrase'];?></textarea><br>
        <label for="AutorImagem">Imagem:</label><br>
        <?php
        if ( !empty ($dados['AutorImagem']) ){?>
            <img src="../imagens <?php echo $dados['AutorImagem'];?>" width="150" /> <br>
            <?php
        }
        ?>
        <input type = "file" name="foto">
        <hr>
        <input type = "submit" value="Enviar">
    </form>
    </main>
    





</main>

    