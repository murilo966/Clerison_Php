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
            <h2>Cadastro de Usuários</h2>
        </div>
            <div class="centralizar">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <input class="form-control" type="text" placeholder="Nome" name="nome">
                        </div>
                        <div class="col-md-4" >
                            <input class="form-control" type="text" placeholder="Email" name="email">
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="text" placeholder="Senha" name="senha">
                        </div>
            
            
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <input class="form-control mt-2" type="text" name="end" id="" placeholder="Digite o endereço....">
                        </div>
                        <div class="col-md-2">
                            <input class="form-control mt-2" type="text" name="nEnd" id="" placeholder="Núm">
                        </div>
                        <div class="col-md-4">
                            <input class="form-control mt-2" type="text" name="comp" id="" placeholder="Complemento">
                        </div>

                    </div>
                    
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <input class="form-control" type="text" placeholder="Cidade" name="Cidade">
                        </div>
                        <div class="col-md-3" >
                            <input class="form-control" type="text" placeholder="Estado" name="Estado">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" placeholder="RG" name="RG">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" placeholder="CPF" name="CPF">
                        </div>

                        <div class="col-md-4"></div>
                        <div class="col-md-4-mt-26">
                            <select class="form-control"name="estado" id="">
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


