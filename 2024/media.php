<?php 
$n1=7;
$n2=2;
$n3=-1;
$n4=5;
$media=($n1+$n2+$n3+$n4)/4;

if (isset($n1) and isset($n2) and isset($n3) and isset($n4)) {
    echo('Notas preenchidas <br><br>');
    
        if ($n1 <= 10 and $n1 > 0) {
            if ($n2 <= 10 and $n2 > 0) {
                if ($n3 <= 10 and $n3 > 0) {
                    if ($n4 <= 10 and $n4 > 0) {
                        if ($media >= 6) {
                            echo ("Aluno(a) foi aprovado, Nota: $media");
                        } elseif ($media >= 3) {
                            echo ("Média $media, Aluno(a) em recuperação !");
                        } 
                        else {
                            echo("Média $media, Aluno(a) reprovado !");
                        }
                    } else {
                        echo("Quarto valor inválido, insira outro valor");
                    }
                } else {
                    echo("Terceiro valor inválido, insira outro valor");
                }
            } else {
                echo("Segundo valor inválido, insira outro valor");
            }
        } else {
            echo("Primeiro valor inválido, insira outro valor");
        }
    }
    

?>