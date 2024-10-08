<?php 

include_once "buscarUsuarios.php";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <H1>Entrou na home, parabens zé!</H1>
    <br>
    <a href="sair.php">deslogar?</a>

    <?php 
        $dados = BuscarUsuário();
    
    ?>
    <div class="container text-center">
        <div class="row border border-2">
            <div class="col-md-3">
                <h3>ID</h3>
            </div>
            <div class="col-md-3">
                <h3>NOME</h3>
            </div>
            <div class="col-md-3">
                <h3>E-MAIL</h3>
            </div>
            <div class="col-md-3">
                <h3>BOTÕES</h3>
            </div>
        </div>
        
        
        <?php
            foreach ($dados as $key => $value) {
                echo"<div class='row border border-2'>";
                    echo"<div class='col-md-3'>";
                        echo $dados[$key]['id'];
                    echo"</div>";
                    echo"<div class='col-md-3'>";
                        echo $dados[$key]['nome'];
                    echo "</div>";
                    echo"<div class='col-md-3'>";
                        echo $dados[$key]['email'];
                    echo"</div>";
                    echo"<div class='col-md-3'>";
                        echo "<a class='btn btn-primary'href='editar.php'>Editar</a>";
                        echo "<a class='btn btn-danger'href='excluir.php?id=".$dados[$key]['id']."'>Excluir</a>";
                    echo "</div>";
                echo"</div>";
                
            }

        ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>
</html>
