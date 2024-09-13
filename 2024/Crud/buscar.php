<?php

echo"Dados inseridos errados";

$pdo = new PDO('mysql:host=localhost;dbname=phpbd','root','');
$sql = $pdo->prepare("SELECT * FROM `cadastrocliente` WHERE email=? AND senha=?");


$sql->execute(array($_POST['email'], sha1($_POST['senha'])));

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);
/* echo"<br> dados do bd: <br>";
print_r($dados); */

if (!empty($dados)) {
    session_start();

    $_SESSION['email'] = $dados[0]['email'];
    echo "<meta http-equiv='refresh' content='0; url=inicio.php'>"; 
}else{
    echo "<meta http-equiv='refresh' content='0; url=login.php'>"; 
}

?>



