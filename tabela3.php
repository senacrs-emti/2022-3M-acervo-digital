<?php
include_once 'includes/conn.php';
include_once 'includes/head.php';
include_once 'includes/header.php';
$sql = "select * from usuarios";
$resultado = mysqli_query($conn, $sql);
$total = mysqli_num_rows($resultado);
?>
<body>
<h3>Tabela Usuarios</h3>
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
							Usuario Id
						</th>
						<th>
							Usuario
						</th>
						<th>
							Senha
						</th>
                     
						<th>
					</tr>
<?php
if ($resultado){
    while ($dado = mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td><?php echo $dado['usuariosID'];?></td>
            <td><a href="salvar.php?acao=salvar&id=<?php echo $dado['usuario'];?>"><?php echo $dado['usuario'];?></td>
            <td><a href="salvar.php?acao=salvar&id=<?php echo $dado['senha'];?>"><?php echo $dado['senha'];?></td>     
            <td><a href="processa3.php?acao=excluir&id=<?php echo $dado['usuariosID'];?>">excluir<a><td>
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
</body><footer>
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
            <a href="tabela.php" class="button">Autores</a>
			</button>



</footer>