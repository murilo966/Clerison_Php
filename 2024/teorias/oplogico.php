<?php

$usuario = 'admin';
echo("user: $usuario <br>");
$senha=12345678;
echo("senha: $senha<br>");

if (isset($usuario) and isset($senha)) {
    echo('campos preenchidos <br>');
    if ($usuario == "admin" and $senha == 12345678) {
        echo('Login efetuado com sucesso');
    } else { 
        echo('Login errado !');
    }    
} else {
    echo('campos NÃO preenchidos <br>');
}



?>