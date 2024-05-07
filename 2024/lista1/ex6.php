<?php
$esc = "impar";
$val = 1;
echo("Minha escolha: $esc<br>");
echo("Meu valor: $val");


$pcEsc;
if ($esc === "impar") {
    $pcEsc = "par";
} else {
    $pcEsc = "impar";
}
$pcVal = rand(0,10);
echo("<br>Valor do pc:  $pcVal<br>");
echo("Escolha do pc:  $pcEsc");


$soma = $val + $pcVal;
$result = $soma%2;
if ($result == 0) {
    $result = "par";
} else {
    $result = "impar";
}
echo("<br>Resultado:  $result");

if ($result === "impar") {
    if ($esc === "impar") {
        echo("<br><br><br>os humanos ganharam");

    } if ($esc === "par"){
        echo("<br><br><br>a máquina ganhou");
    }
}

if ($result === "par") {
    if ($esc === "par") {
        echo("<br><br><br>os humanos ganharam");

    } if ($esc === "impar"){
        echo("<br><br><br>a máquina ganhou");
    }
}
?>