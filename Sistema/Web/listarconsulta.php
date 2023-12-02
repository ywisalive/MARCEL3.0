<?php

session_start();

if (empty($_SESSION['usuario'])) {
    echo "<script>alert('Não agendado')</script>";
    echo "<meta http-equiv= 'refresh' content='0; URL=../index.php'/>";
}

$pdo = new PDO("mysql:host=localhost;dbname=dentista","root","");
$sql = $pdo->prepare("SELECT id, profissional, dia, horario, unidade FROM `agendamento`");
$sql->execute(array());
$info = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class=bg-secondary>
    
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

    <div class="container text-center mt-4">
        <h2>Lista de Usuários cadastrados</h2>

        <?php
          
            if (!empty($_SESSION['erro'])) {
                echo $_SESSION['erro'];
                unset($_SESSION['erro']);
            }
        ?>
        
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">profissional</th>
                <th scope="col">dia</th>
                <th scope="col">horario</th>
                <th scope="col">unidade</th>

                </tr>
            </thead>
            <tbody>
      
            <?php
             
                $pdo = new PDO('mysql:host=localhost;dbname=dentista','root','');
                $sql = $pdo->prepare("SELECT id, profissional, dia, horario, unidade  FROM `agendamento`");
                $sql->execute(array());
                $info = $sql->fetchAll(PDO::FETCH_ASSOC);

               

                foreach ($info as $key => $value) {

                    echo "<form action='editar.php' method='get'>";
                    echo "<tr>";
                        echo "<th scope='row'>".$info[$key]['id']."</th>";
                        echo "<td>".$info[$key]['profissional']."</td>";
                        echo "<td>".$info[$key]['dia']."</td>";
                        echo "<td>".$info[$key]['horario']."</td>";
                        echo "<td>".$info[$key]['unidade']."</td>";


                        
                }
            ?>
        
        </tbody>
        </table>
    </div>

   
    <footer class="footer text-center fixed-bottom bg-dark py-3">
        <div class="container">
            <p class="text-light">Todas as suas informações estão seguras em nossa site</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>