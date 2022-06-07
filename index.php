<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="menu.css">
  <!--Estilo bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!---->
    <title>Acervo Digital</title>
    <h1></h1>
</head>
<header>
  
  <div class="container">
    <div class="row">
      <div class="col">
         <!--Menu -->
 
    <div id="mySidenav" class="sidenav">
  
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.php">Home </a>
      <a href="#">Sobre o Acervo</a>
      <a href="escritores.php">Escritores </a>
      <a href="escritor1.php">Confira mais livros</a>
    </div>
    
    <div id="main">
     
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    </div>
    
    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }
    </script>
  

    <!--"Fim do menu"-->
      </div>
      <div class="col">
       <h2> Dondoni</h2>
      </div>
      
    </div>
  </div>
  
</header>

<body>
<div id="corpo">
  <p></p>
<!--Carossel-->
<div class="container">
  <div class="row">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/Livros.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="image/img3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="image/img2.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

</div>

<!--Fim do carossel-->
  
<!--Cards autores-->


    
        

<div class="container">
  <div class="row row-cols-2">
    <div class="col"><div class="card" style="width: 18rem;">
      <img src="image/img1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ecritor 1</h5>
        <p class="card-text">Fulano era Top.</p>
        <a href="escritor1.html" class="btn btn-primary">Confira</a>
    
        
            
      </div>
    </div>
  </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="image/img1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ecritor 1</h5>
          <p class="card-text">Fulano era Top.</p>
          <a href="escritor1.html" class="btn btn-primary">Confira</a>
      
          
              
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="image/img1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ecritor 1</h5>
          <p class="card-text">Fulano era Top.</p>
          <a href="escritor1.html" class="btn btn-primary">Confira</a>
      
          
              
        </div>
      </div>

    </div>
    <div class="col">
<div class="card" style="width: 18rem;">
  <img src="image/img1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ecritor 1</h5>
    <p class="card-text">Fulano era Top.</p>
    <a href="escritor1.html" class="btn btn-primary">Confira</a>

    
        
  </div>
</div>

    </div>
  </div>
</div>
<!-- Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</div>
</body>


  
</html>