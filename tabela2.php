<?php
include_once 'includes/conn.php';
include_once 'includes/head.php';
include_once 'includes/header.php';
$sql = "select * from livros";
$resultado = mysqli_query($conn, $sql);
$total = mysqli_num_rows($resultado);
?>
<body>
<h3>Tabela Livros</h3>
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
							Livro Id
						</th>
						<th>
							Livro Titulo
						</th>
						<th>
							Livro Autor
						</th>
                        <th>
							Livro Imagem
						</th>
						<th>
					</tr>
<?php
if ($resultado){
    while ($dado = mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td><?php echo $dado['LivroID'];?></td>
            <td><a href="salvar.php?acao=salvar&id=<?php echo $dado['LivroTitulo'];?>"><?php echo $dado['LivroTitulo'];?></td>
            <td><a href="salvar.php?acao=salvar&id=<?php echo $dado['LivroAutor'];?>"><?php echo $dado['LivroAutor'];?></td>  
            <td><a href="salvar.php?acao=salvar&id=<?php echo $dado['LivroImagem'];?>"><?php echo $dado['LivroImagem'];?></td>   
            <td><a href="processa2.php?acao=excluir&id=<?php echo $dado['LivroID'];?>">excluir<a><td>
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
			<a href="tabela.php" class="button">Autores</a>
			</button>
		</div>
		<div class="col-md-4">
			 
			<button type="button" class="btn btn-success btn-block">
            <a href="tabela3.php" class="button">Usuarios</a>
			</button>



</footer>
