<?php
include_once "includes/conn.php";
include_once "includes/head.php";
include_once "includes/header.php";


$id = $_GET ['ID'];
$sql = "SELECT * FROM autores WHERE AutorID = ".$id;
$resultado = mysqli_query($conn,$sql);
$autores = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
?>


<br>
<br>
<br>
<br>



<body>
 <!--Sobre-->
 <div class="nomeautor">
	<?php echo '<h4>'.$autores['AutorNome'].'</h4>'; ?>


 </div>
<div class="container">
  <div class="row align-items-center">

  <div class="col">
  <?php echo '<img src="images/'.$autores['AutorImagem'] .'width=200px height=200px>'; ?>
  </div>

    <div class="col">
<div class= "wittertxt">
<?php echo '<h5>'.$autores ['AutorData'].'</h5>'?>
<?php echo '<p>'.$autores['AutorDescricao'].'</p>'; ?>
</div>
    </div>
  </div>
</div>

<div class="destaques">
	<h4>Maiores destaques:</h4>


</div>

<!--Fim sobre-->
<?php
while ($a <= 10) {
?>
    <div class="txt7">
	<img style=" width: 300px; height: 150px; margin-top: 15px;margin-bottom: 15px;margin-left: 35px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcGN55Coi1qOh6xqihjhpl9OXaX3YCZBA1ew&usqp=CAU" alt="..." class="img-thumbnail">
	<div class="p">
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec eros purus. Aenean congue sem sit amet lacus blandit ultricies. Ut fermentum, dolor vel sagittis accumsan, ex orci aliquet risus, quis semper orci eros eu orci. Vestibulum a sapien vestibulum, fringilla mauris vitae, ultricies nunc. Cras id tempus nibh, sit amet vehicula justo. Curabitur quis vehicula neque. Quisque ac dui at tellus maximus cursus. Donec sed felis laoreet, tristique neque a, scelerisque velit.	<button class="btn1" href="writtersPage.php" class="BUTTON_VGE">Baixe Já!</button></p>
	</div>
    </div>
<?php

}

?>
		<div class="txt7">
		<img style=" width: 300px; height: 150px; margin-top: 15px;margin-bottom: 15px;margin-left: 35px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcGN55Coi1qOh6xqihjhpl9OXaX3YCZBA1ew&usqp=CAU" alt="..." class="img-thumbnail">
		<div class="p">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec eros purus. Aenean congue sem sit amet lacus blandit ultricies. Ut fermentum, dolor vel sagittis accumsan, ex orci aliquet risus, quis semper orci eros eu orci. Vestibulum a sapien vestibulum, fringilla mauris vitae, ultricies nunc. Cras id tempus nibh, sit amet vehicula justo. Curabitur quis vehicula neque. Quisque ac dui at tellus maximus cursus. Donec sed felis laoreet, tristique neque a, scelerisque velit.	<button class="btn1" href="writtersPage.php" class="BUTTON_VGE">Baixe Já!</button></p>
		</div>
        </div>
		<div class="txt7">
		<img style=" width: 300px; height: 150px; margin-top: 15px;margin-bottom: 15px;margin-left: 35px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcGN55Coi1qOh6xqihjhpl9OXaX3YCZBA1ew&usqp=CAU" alt="..." class="img-thumbnail">
		<div class="p">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec eros purus. Aenean congue sem sit amet lacus blandit ultricies. Ut fermentum, dolor vel sagittis accumsan, ex orci aliquet risus, quis semper orci eros eu orci. Vestibulum a sapien vestibulum, fringilla mauris vitae, ultricies nunc. Cras id tempus nibh, sit amet vehicula justo. Curabitur quis vehicula neque. Quisque ac dui at tellus maximus cursus. Donec sed felis laoreet, tristique neque a, scelerisque velit.	<button class="btn1" href="writtersPage.php" class="BUTTON_VGE">Baixe Já!</button></p>
		</div>
        </div>
    







<!-- Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


<?php

include_once 'includes/footer.php';

?>

      