<?php

    $pdo = new PDO('mysql:host=localhost;dbname=phpbd','root','');

    $sql = $pdo->prepare("UPDATE `cadastrocliente` SET nome=?,email=?,endereco=?,nendereco=?,complemento=?,cidade=?,rg=?,cpf=?,Estado=? WHERE id=?");

    $sql->execute(
        array($_POST['nome'],
            $_POST['email'],
            $_POST['Ender'],
            $_POST['nEnder'],
            $_POST['comp'],
            $_POST['Cidade'],
            $_POST['RG'],
            $_POST['CPF'],
            $_POST['Estado'],
            $_POST['id']
        ));

    echo "<meta http-equiv='refresh' content='0; url=inicio.php'>"; 

?>