<?php
    print_r($_POST);

     /* CONEXÃO COM O BANCO DE DADOS */
     $pdo = new PDO('mysql:host=localhost;dbname=dentista','root','');

     /* PREPARAÇÃO PARA A GRAVAÇÃO */
     $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE email=? AND senha=?");
     $sql ->execute(array ($_POST ['user'], $_POST['senha']));

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    //print_r($result);
    if (empty($result)) {
        session_start();
        $_SESSION ['ok'] = "<div class='alert alert-success' role='alert'>Usuário e senha não encontrados</div>";
        echo "<meta http-equiv= 'refresh' content='0; URL=../index.php'/>";
    } else {
        session_start();
        /* INICIA A SESSÃO USUÁRIO E GUARDA O USUÁRIO ATIVO */
        $_SESSION['usuario'] = $_POST['user'];
        echo "<meta http-equiv= 'refresh' content='0; URL=principal.php'/>";

    }
?> 