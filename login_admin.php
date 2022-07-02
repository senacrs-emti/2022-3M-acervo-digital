<?php
include_once 'includes/conn.php';
include_once 'includes/head.php';
session_start();
?>

<body>
<br> 
<br> 
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			 
			<button type="button" class="btn btn-success" >
            <a href="html.php" class="button">Home</a>
			</button>
		</div>









		<div class="col-md-4">
			<form method="post" action="tabela_conn.php">
				<div class="form-group">
                <br> 
                <br> 
					<label for="exampleInputEmail1">
						Usuario
					</label>
					<input type="text" class="form-control" id="usuario" name="usuario" />
				</div>
                <br> 
                <br> 
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Senha
					</label>
					<input type="password" class="form-control" id=senha" name="senha">
				</div>
                <br> 
                <br> 
				<button type="submit" class="btn btn-primary">
					Entrar
				</button>
			</form>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>






</body>
