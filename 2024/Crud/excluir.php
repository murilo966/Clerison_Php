<?php
    $id = $_GET['id'];
    
    /* Cria uma conxão com o banco de dados */
    $pdo = new PDO('mysql:host=localhost;dbname=phpbd','root','');

    /* Criar comando sql de excluir dados */
    $sql = $pdo->prepare("DELETE FROM `cadastrocliente` WHERE id=?");

    /* Executar o sql no banco de dados */
    $sql->execute(array($id));

    print_r($sql);

    session_start();
    $_SESSION['erro']= "<div class='alert alert-danger' role='alert'>Usuário apagado com sucesso!</div>";
    echo "<meta http-equiv='refresh' content='0; url=inicio.php'>"; 



?>