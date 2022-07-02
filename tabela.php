<?php
include_once 'includes/conn.php';
include_once 'includes/head.php';

include_once 'includes/header.php';
$sql = "select * from autores";
$resultado = mysqli_query($conn, $sql);
$total = mysqli_num_rows($resultado);
?>
<body>
<h3>Tabela Autores</h3>
<br>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<table class="table">
				<thead>
					<tr>
						<th>
							Autor Id
						</th>
						<th>
							Autor Nome
						</th>
						<th>
							Autor Imagem
						</th>
						<th>
							Autor Frase
						</th>
					</tr>
<?php
if ($resultado){
    while ($dado = mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td><?php echo $dado['AutorID'];?></td>
            <td><a href="salvar.php?acao=salvar&id=<?php echo $dado['AutorID'];?>"><?php echo $dado['AutorNome'];?></td>
           
            <td><a href="salvar.php?acao=salvar&id=<?php echo $dado['AutorImagem'];?>"><?php echo $dado['AutorImagem'];?></td>
			<td><a href="salvar.php?acao=salvar&id=<?php echo $dado['AutorFrase'];?>"><?php echo $dado['AutorFrase'];?></td>    
            <td><a href="processa.php?acao=excluir&id=<?php echo $dado['AutorID'];?>">excluir<a><td>
    </tr>
    <?php
    }
}else{
    ?>
    <tr>
        <td colspan ="3">Resultados não encontrados</td>

    </tr>
    <?php
}
?>
<tr>
    <td colspan = "3">Total de Registros: <?php echo $total;?></td>
</tr>

				
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>
</table>





</body>
<footer>
<div class="row">
		<div class="col-md-4">
			 
			<button type="button" class="btn btn-success btn-block">
            <a href="tabela-central.php" class="button">Home</a>
			</button>
		</div>
		<div class="col-md-4">
			 
			<button type="button" class="btn btn-success btn-block">
			<a href="tabela2.php" class="button">Livros</a>
			</button>
		</div>
		<div class="col-md-4">
			 
			<button type="button" class="btn btn-success btn-block">
            <a href="tabela3.php" class="button">Usuarios</a>
			</button>
			<div class="col-md-4">
			 
			<button type="button" class="btn btn-success btn-block">
            <a href="salvarautor.php" class="button">Salvar novo autor</a>
			</button>
		</div>



</footer>
