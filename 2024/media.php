<?php 
$n1=7;
$n2=2;
$n3=10;
$n4=5;
$media=($n1+$n2+$n3+$n4)/4;

if (isset($n1) and isset($n2) and isset($n3) and isset($n4)) {
    echo('Notas preenchidas <br>');
    if ($media >= 6) {
        echo ("Aluno(a) foi aprovado, Nota: $media");
    } elseif ($media >= 3) {
        echo ("Média $media, Aluno(a) em recuperação !");
    } 
    else {
        echo("Média $media, Aluno(a) reprovado !");
    }
}
?>