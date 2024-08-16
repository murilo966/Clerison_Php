<?php



?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <nav class="navbar bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="https://cdn-icons-png.flaticon.com/512/187/187879.png" width="30px" height="24px">
                    Bootstrap
                </a>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">   
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>
    <body>
        <br><br><br>
        <div class="container">
            <h2>Cadastro de Usuários</h2>
        </div>
        <div class="formCont">
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-8">
                        <input class="form-control" type="text" placeholder="Nome" name="nome"> 
                    </div>
                    <div class="col-md-8" >
                        <input class="form-control" type="text" placeholder="Email" name="email"> 
                    </div>    
                    <div class="col-md-8">
                        <input class="form-control" type="text" placeholder="Senha" name="nome"> 
                    </div>
                    
                    
                </div>
                
            </form>
        </div>
        <br><br>




        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    <footer>
        <nav class="navbar">
            <div class="rodape">
                Meu rodapé
            </div>
        </nav>
    </footer>
</html>


