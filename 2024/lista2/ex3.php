<?php
$Sexo = "Masculino";
$Altura = 1.70;

if ($Sexo === "Feminino") {
    $PesoIdeal = (62.1*$Altura) - 44.7;
    echo("Seu peso ideal como mulher é: $PesoIdeal");
} elseif ($Sexo === "Masculino") {
    $PesoIdeal = (72.7*$Altura) - 58;
    echo("Seu peso ideal como homem é:$PesoIdeal");
}

?>