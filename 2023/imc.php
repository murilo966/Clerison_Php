<?php
$altura =3.30;
$peso =100;

$calc = $peso/($altura**2);
echo "Sua altura é de: $altura <br>";
echo "Seu peso é de: $peso <br>";
echo "Seu imc é: $calc <br> <br>";

if ($calc < 18.5) {
    echo "Você está na categoria: Baixo peso";
} elseif ($calc >= 18.5 and $calc <= 24.9){
    echo "Você está na categoria: Normal";
} elseif ($calc >= 25 and $calc <= 29.9) {
    echo "Você está na categoria: Pré-obeso";
} else {
    echo "Você está na categoria: Obeso";
}

?>