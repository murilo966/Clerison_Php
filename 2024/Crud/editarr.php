<?php
    include_once "atualizar.php";

    session_start();

    if (empty($_SESSION['email'])) {
        echo "<script>alert('Usuário não logado! Faça o Login...')</script>"; 
        echo "<meta http-equiv='refresh' content='0; url=login.php'>"; 
    } else {
        $dados = BuscarDados($_GET['id']);
        print_r($dados);
        
    }


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>

    <!-- Cabeçalho -->
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

<!-- Body -->
    <body>
        <br><br><br>
            <div class="container">
                <h2>Editar dados do Usuários</h2>
            </div>
                <div class="centralizar">

                    <form action="bd.php" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <input class="form-control" type="text" placeholder="Nome" name="nome" value="<?php echo $dados[0]['nome']; ?>" required>
                            </div>
                            <div class="col-md-4" >
                                <input class="form-control" type="text" placeholder="Email" name="email" value="<?php echo $dados[0]['email']; ?>" required>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="password" placeholder="Senha" name="senha" required>
                            </div>
            
            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control mt-2" type="text" name="Ender" id="" placeholder="Digite o endereço...." value="<?php echo $dados[0]['endereco']; ?>" required>
                            </div>
                            <div class="col-md-2">
                                <input class="form-control mt-2" type="text" name="nEnder" id="" placeholder="Núm" value="<?php echo $dados[0]['nendereco']; ?>" required>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control mt-2" type="text" name="comp" id="" placeholder="Complemento" value="<?php echo $dados[0]['complemento']; ?>" required>
                            </div>
                        </div>
            
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <input class="form-control" type="text" placeholder="Cidade" name="Cidade" value="<?php echo $dados[0]['cidade']; ?>" required>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" placeholder="RG" name="RG" value="<?php echo $dados[0]['rg']; ?>" required>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" placeholder="CPF" name="CPF" value="<?php echo $dados[0]['cpf']; ?>" required>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4-mt-26">
                                <select class="form-control mt-2"name="Estado" id="" required>
                                    <option value="">Selecione o estado...</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                    <option value="EX">Estrangeiro</option>
                                </select>
                            </div>
                        </div>
                        <div class="container text-center">
                            <input class="btn btn-primary btn-m w-50 mt-2" type="submit" value="Enviar">
                        </div>
                        
            
                    </form>
                </div>
        <br><br>




        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

    <!-- Rodapé -->
    <footer>
        <nav class="navbar">
            <div class="rodape">
                Meu rodapé
            </div>
        </nav>
    </footer>
</html>


