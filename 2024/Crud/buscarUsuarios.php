<?php 
    function BuscarUsuário(){
        $pdo = new PDO('mysql:host=localhost;dbname=phpbd','root','');
        $sql = $pdo->prepare("SELECT id, nome, email FROM `cadastrocliente`");
        $sql->execute(array());

        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $dados;
    }

?>