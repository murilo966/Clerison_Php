<?php
    function BuscarDados($id){
        /* Cria uma conxão com o banco de dados */
        $pdo = new PDO('mysql:host=localhost;dbname=phpbd','root','');

        /* Criar comando sql de excluir dados */
        $sql = $pdo->prepare("SELECT * FROM `cadastrocliente` WHERE id=?");

        /* Executar o sql no banco de dados */
        $sql->execute(array($id));

        /* Organiza is dados pesquisados */
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $dados;
    }
?>