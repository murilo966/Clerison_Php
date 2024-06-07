<?php 
$vetbiblioteca = [
    'nome' => 'Joaquim',
    'idade' => 35,
    'end' => 'Rua das ...',
    'bairro' => 'Jardim das ...'
];

echo 'Nome =  '.$vetbiblioteca['nome'].'<br>idade = '.$vetbiblioteca['idade'].'<br><br>';

$cadusuario = ["Joaquim","rua das flores",5,4055588896,33366655588];

$cadusubiblio = [
    'nome' => 'Joaquim',
    'rua' => 'Rua das Flores',
    'numero' => 5,
    'RG' => 4055588896,
    'CPF' => 33366655588
];

echo 'Nome = '.$cadusubiblio['nome'].'<br>Rua = '.$cadusubiblio['rua'].$cadusubiblio['numero'].'<br><br>';


?>