<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg  bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
  <nav class="navbar">
        <div class="container-fluid">
        <a class="navbar-brand" href="principal.php"><img src="..\Recursos/dentista.png" alt="" width="160px"></a>
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

          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-disabled="true">Consultoria</a>
        </li>
      </ul>
      <form class="d-flex" role="search" >
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>


  
</nav>

<div class="container mt-4 text-center">
        <h2>Agende sua Consulta</h2>
        <p>Preencha as informações.</p>


        <form method="POST" action="bdconsulta.php">

        <div class="row py-2">
                <div class="col-md-6">
                    <select class="form-control" name="profissional" id="" required>
                        <option value="">Selecione o profissional</option>
                        <option value="fem">Doutora Feliciana</option>
                        <option value="masc">Doutor Alberto</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <input class="form-control" type="date" name="Dia" id="" required>
                </div>
            </div>

            <div class="row py-2">
                <div class="col-md-6">
                    <select class="form-control" name="horario" id="" required>
                        <option value="">Selecione o horário</option>
                        <option value="fem">09:00</option>
                        <option value="masc">10:00</option>
                        <option value="fem">11:00</option>
                        <option value="masc">12:00</option>
                        <option value="fem">13:00</option>
                        <option value="masc">14:00</option>
                        <option value="fem">15:00</option>
                        <option value="masc">16:00</option>
                        <option value="fem">17:00</option>
                        <option value="masc">18:00</option>
                        <option value="fem">19:00</option>
                        <option value="masc">20:00</option>
                        <option value="fem">21:00</option>
                        <option value="masc">22:00</option>
                    </select>

                    
            <div class="row py-2">
                <div class="col-md-6">
                    <select class="form-control" name="unidade" id="" required>
                        <option value="">Selecione a unidade</option>
                        <option value="fem">SODB - SOCIEDADE ODONTOLÓGICA DO BRASIL</option>
                        <option value="masc">Clinica Odontológia ultra</option>
                        <option value="fem">Clinica Dentista Odonto</option>
                        <option value="masc">Clinica Dentista perfeito!</option>
                </div>

                <input class="btn btn-lg btn-success mb-5 mt-3" type="submit" value="Cadastrar Usuário">
        </form>





        <?php
        if (!empty($_SESSION['ok'])) {
    echo $_SESSION['ok'];
    unset($_SESSION['ok']);
}


?>


</div>
<br>
<br>
<br>
<footer class="footer text-center fixed-bottom bg-dark py-3">
    <div class="container">
        <p class="text-light">Todos os direitos reservados 2023 /
          Contato do fundador: (77) 99657-0000</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>