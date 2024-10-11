<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
        
    <div class="container text-center w-25 mt-5">
        <?php
            session_start();
            if ($_SESSION['erro']) {
                $_SESSION['erro']='';
                echo $_SESSION['erro'];
                
            }

        ?>
        <img src="https://cdn-icons-png.flaticon.com/512/187/187879.png" alt="" width="50px" height="50px">

        
        <form class="mt-3"action="buscar.php" method="post">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <input class="form-control" type="email" name="email" placeholder="digite seu email aqui..." required>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 mt-2">
                    <input class="form-control" type="password" name="senha" placeholder="digite sua senha aqui..." required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <input class="form-control btn btn-primary w-25" type="submit" value="Entrar">
                </div>
            </div>
            <div class="row"><a href="cadastro.php">Cadastre-se</a></div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>