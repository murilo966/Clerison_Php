<?php
// pegando o input text lá em baixo e imprimindo em cor
$cor1 = $_POST['cor1'];
$cor2 = $_POST['cor2'];
$cor3 = $_POST['cor3'];


// puxa o resultado para dentro de vetcores
$vetcores = [];
$vetCores = array_push($vetcores, $cor1, $cor2, $cor3);
// exibe esse resultado na tela {Array ( [0] => red )}
// print_r($vetcores);

// exibe somente as cores
echo "As cores inseridas são: <br>".$vetcores[0]."<br>".$vetcores[1]."<br>".$vetcores[2]."<br><br>";

$div = $vetcores[0];

array_pop($vetcores);
print_r($vetcores);




?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Vetores</title>
    <!-- Css para estilo da página -->
    <link rel="stylesheet" href="style.css"/>
    
</head>
<body>
    <div class = "container">
        <h3>Preencha o cadastro</h3>

        <!-- Inserindo dados no vetor -->
        <form action="" method="post">
            <label for="">Digite uma cor:</label> <br>
            <input type ="text" name ="cor1" id="" placeholder="Red / Blue / Brown"><br>
            <input type ="text" name ="cor2" id="" placeholder="Red / Blue / Brown"><br>
            <input type ="text" name ="cor3" id="" placeholder="Red / Blue / Brown"><br>
            <input type="submit" value="Enviar">
        </form>

        <h2>Sua cor é: </h2>
        <div class = 'color' style= "width: 50px;height: 50px;background-color:"+$div></div>

    </div>
    
</body>
</html>