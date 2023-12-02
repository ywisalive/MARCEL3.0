<?php
   session_start();
    print_r($_POST);
  /*  if (isset($_POST['profissional']) && isset($_POST['dia']) && isset($_POST['horario']) && isset($_POST['unidade'])) { */
       /* CONEXÃO COM O BANCO DE DADOS */
       $pdo = new PDO('mysql:host=localhost;dbname=dentista', 'root', '');
       /* PREPARAÇÃO PARA A GRAVAÇÃO */
       $sql = $pdo->prepare("INSERT INTO `agendamento` VALUES (null,?,?,?,?)");
       /* GRAVAÇÃO DOS DADOS NO BANCO */


        $sql->execute(array($_POST['profissional'],
                            $_POST['Dia'],
                            $_POST['horario'],
                            $_POST['unidade'],
                            
                            
                            
                            
                            
                           
                           
                            
                                                  
));
        
    
       echo "<meta http-equiv='refresh' content='0; URL=../index.php'/>";
   /* } else {
       $_SESSION['ok'] = "<div class='alert alert-danger' role='alert'>Dados não conferem!</div>";
       echo "<meta http-equiv='refresh' content='0; URL=cadastrar.php'/>";
   } */
?>
