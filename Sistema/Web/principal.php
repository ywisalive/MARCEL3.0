<?php

session_start();

if (empty($_SESSION['usuario'])) {
    echo "<script>alert('Usuario não logado!')</script>";
    echo "<meta http-equiv= 'refresh' content='0; URL../=index.php'/>"; 
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>


<!-- <nav class="navbar bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="..\Recursos/dentista.png" alt="" width="170 px"></a>
            <a class="btn btn-dark" href="logout.php">Sair</a>
        </div>
    </nav> -->
    
    <nav class="navbar navbar-expand-lg  bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
  <nav class="navbar">
        <div class="container-fluid">
        <a class="navbar-brand" href="../index.php"><img src="..\Recursos/dentista.png" alt="" width="160px"></a>
        </div>
    </nav>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="principal.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspInício</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Sobre.php">Sobre</a>
        </li>
        
          <ul class="dropdown-menu">
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fazerconsulta.php" aria-disabled="true">Fazer Consulta</a>
        </li>
      </ul>
    
      </form>
    </div>
  </div>
</nav>

<!-- Começo -->
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

    <!-- FIM DE INDICADORES -->

    <!-- Inicio dos slides -->
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..\Recursos/Banner.png" class="d-block w-90" alt="Categoria 1">
    </div>
    <div class="carousel-item">
      <img src="..\Recursos/Banner 2.png" class="d-block w-90" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..\Recursos/Banner 3.gif" class="d-block w-100" alt="...">
    </div>
  </div>
    <!-- Fim dos slides -->

<!-- Inicio anterior dos slides e proximo slide -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <!-- FIM anterior dos slides e proximo slide -->

</div>

<section class="testimonial">
  <h2>Depoimentos de Clientes Felizes</h2>
    <div class="testimonial-card">
      <p>"Gostei muito do atendimento, obrigado a todos!"</p>
      <p class="client-name">- Felipe Dantas</p>
    </div>
    <div class="testimonial-card">
      <p>"Muito obrigado pela consulta, gostei muito do atendimento !"</p>
      <p class="client-name">- Cintia Silva</p>
</div>
      <div class="testimonial-card">
      <p>"A plataforma facilita muito o atendimento!"</p>
      <p class="client-name">- Martinelli</p>
      
    </div>
</section>

    <br><br>



    <footer class="footer text-center fixed-bottom bg-dark py-3">
        <div class="container">
            <p class="text-light">Todos os direitos reservados 2023 /
              Contato do fundador: (77) 99657-0000
            </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>