<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Estilo bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!---->
<link rel="stylesheet" href="style2.css">
    <title>Escritores</title>

</head>
<header>
  <!--Menu-->
 <nav class="navbar navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dondoni</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Dondoni</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
<!--"Fim do menu"-->
</header>

<body>
 

<!--Sobre-->
<div class="container">
<div class="row align-items-center">
    <div class="col ">

    <h2>Cruz e Souza</h2>
<h5>(1861-1891)</h5>
<img src="image/souza.png">
<p>Cruz e Sousa, principal nome do Simbolismo brasileiro, nasceu em 24 de novembro de 1861. Filho de escravos alforriados, teve acesso à educação formal graças ao apadrinhamento do ex-“dono” de sua mãe. Durante toda a sua vida, sofreu com o preconceito racial, mas lutou contra a escravidão e o racismo. Para sobreviver, trabalhou na Companhia Dramática Julieta dos Santos e, mais tarde, na Estrada de Ferro Central do Brasil,
   quando adquiriu tuberculose, o que o levou à morte em 19 de março de 1898.</p>
    </div>
  </div>
</div>
<!--Fim sobre-->

<!--List-->

<div class="accordion accordion-flush" id="accordionFlushExample">
  <!--livro1-->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Broquéis
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body"> 

      <h5>É composto por 54 poemas, demarcados com a presença da cor branca em variados jogos e matizes - seja a presença da luminosidade do luar, da neblina; seja a presença da neve, das imagens vaporosas, dos cristais, como no belíssimo 'Antífona', poema de abertura da obra.
</h5>
      <img src="image/broqueis.png" alt=""> 
   
  </div>
    </div>
  </div>
<!--Livro2-->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Últimos Sonetos
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <h5> Nesse livro de sonetos, Cruz e Souza revela grande ansiedade diante do descaso com a sua obra artística. O desejo pelo reconhecimento pauta grande parte de seus poemas, que foram escritos já próximos a sua morte; o que pode justificar em parte seus desabafos. Ao chegar ao fim da vida sem ter seus méritos aclamados pelos escritores da época, seus sonetos a todo momento transmitem a angústia de um sofrimento constante com tal realidade.
Em um dos sonetos, "Grande momento", o autor fala sobre como gostaria de ter sentir tal consagração, já em outro, "Vida obscura", ele revela sua mágoa diante da obscuridade de suas obras. Muito drama envolve seu livro, e a opção de fazer uso de uma linguagem exuberante contribui ainda mais para que sua dor torne-se ainda mais trágica e intensa.</h5>
        <img src="image/sonetos.png" alt="Últimos Sonetos">  
       
      </div>
    </div>
  </div>

<!--Livro3-->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Faróis
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
    <h5> </h5>
      </div>
      <img src="image/farois.png" alt="">
    
    </div>
  </div>
</div>

<!-- Fim List-->





<!-- Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>