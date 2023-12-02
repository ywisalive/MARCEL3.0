<?php
    session_start();
    //print_r($_POST);

    if ($_POST['email'] == $_POST['conf'] AND $_POST['senha'] == $_POST['confsenha']) {
        
        /* CONEXÃO COM O BANCO DE DADOS */
        $pdo = new PDO('mysql:host=localhost;dbname=dentista','root','');

        /* PREPARAÇÃO PARA A GRAVAÇÃO */
        $sql = $pdo->prepare("INSERT INTO `usuarios` VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?)");
        
        /* GRAVAÇÃO DOS DADOS NO BANCO */
        $sql->execute(array($_POST['nome'],
                            $_POST['endereco'],
                            $_POST['numero'],
                            $_POST['cidade'],
                            $_POST['estado'],
                            $_POST['rg'],
                            $_POST['cpf'],
                            $_POST['sexo'],
                            $_POST['datanasc'],
                            $_POST['email'],
                            $_POST['senha'],
                            'vazio'
                                                  
        ));

        //echo "Dados iguais!!";
        $_SESSION['ok'] = "<div class='alert alert-success' role='alert'>Usuário cadastrado com sucesso!</div>";
        echo "<meta http-equiv= 'refresh' content='0; URL=../index.php'/>";

    } else {
        $_SESSION['ok'] = "<div class='alert alert-danger' role='alert'>Dados não conferem!</div>";
        echo "<meta http-equiv= 'refresh' content='0; URL=cadastrar.php'/>";

        
    }
    

?>