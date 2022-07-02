<?php
//includes com conexão com banco de dados (BD) - no arquivo conn.php -,a head do do HTML - no arquivo
//head.php - e o conteúdo do cabeçalho na tag header - no arquivo header.php.
//Todos na pasta de includes.
include_once "includes/head.php";
include_once "includes/header.php";
include_once "includes/conn.php";

// monta SQL dos dados
$sql = "SELECT * FROM autores";
// recupera os dados
$registro = mysqli_query($conn, $sql);
//pega a ID do banco de dados
$AutorID = "SELECT 'AutorID' FROM autores";

?>


<br>
<br>
<br>
<br>






<body>
    
    


<div class="txts">

</div>
        <?php 
  // laco que pega dado por dado
   while ($dados = mysqli_fetch_array($registro,MYSQLI_ASSOC)) {
		// lista os dados
    ?>
        <div class="txt4">
            <img style=" width: 300px; height: 150px; margin-top: 15px;margin-bottom: 15px;" src = <?php $dados ['AutorImagem']; ?> alt="..." class="img-thumbnail">
            <p><?php echo $dados['AutorNome']?>
            <a class="BUTTON_VGE" href="autor-detalhe.php?ID=<?php echo $dados['AutorID'];?>"><?php echo $dados['AutorDescricao'];?></a>            
        </div>
    <?php
   }
?>
        </div>  
    </div>




	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  
</body>	

<?php

//conteúdo do footer e fechamento das tags body e html
include_once "includes/footer.php";

?>




