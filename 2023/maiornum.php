<?php
    $n1 = 2;
    $n2 = 1;
    $n3 = 5;

    if ($n1 > $n2){
        if ($n1 > $n3) {
            echo "entrou elseif 1  <br/>";
            echo "o primeiro número é o maior número -> $n1 <br/>";
        }
    }
    elseif ($n2 > $n1){
        echo "entrou elseif 2  <br/>";
        if ($n2 > $n3) {
            echo "o segundo número é o maior número -> $n2 <br/>";
        }
    }
    elseif ($n3 > $n1) {
        echo "entrou elseif 3  <br/>";
        if ($n3 > $n2) {
            echo "o terceiro número é o maior número -> $n3 <br/>";
        }
    }



?>