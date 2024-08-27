<?php
    
    echo "<br>" . $_POST['nome'];
    echo "<br>" . $_POST['email'];
    echo "<br>" . $_POST['senha'];
    echo "<br>" . $_POST['Ender'];
    echo "<br>" . $_POST['nEnder'];
    echo "<br>" . $_POST['comp'];
    echo "<br>" . $_POST['Cidade'];
    echo "<br>" . $_POST['RG'];
    echo "<br>" . $_POST['CPF'];
    echo "<br>" . $_POST['Estado'];

    $pdo = new PDO('mysql:host=localhost;dbname=phpbd','root','');

    $sql = $pdo->prepare("INSERT INTO `cadastrocliente` VALUES (null,?,?,?,?,?,?,?,?,?,?,?)");

    $sql->execute(
        array($_POST['nome'],
            $_POST['email'],
            sha1($_POST['senha']),
            $_POST['Ender'],
            $_POST['nEnder'],
            $_POST['comp'],
            $_POST['Cidade'],
            $_POST['RG'],
            $_POST['CPF'],
            $_POST['Estado'],
            date("d-m-Y H:i:s")  
        ));

?>