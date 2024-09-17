<?php 
    session_start();
    if (empty($_SESSION['email'])) {
        echo "<script>alert('Usuário não logado! Faça o Login...')</script>"; 
        echo "<meta http-equiv='refresh' content='0; url=login.php'>"; 
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <H1>Entrou na home, parabens zé!</H1>
    <br>
    <a href="sair.php">deslogar?</a>
</body>
</html>
