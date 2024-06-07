<?php
/* Principais estruturas de repetição: while, for e foreach */





/* repetição while que imprime o valor de i enquanto for menor do que 10 */
echo"*******************REPETIÇÃO******************* <br>";
$i = 0;
while ($i < 10) {
    echo "$i <br>";
    $i++;
}
echo"VALOR = $i<br><br><br>";


/* repetição for que imprime o valor de index enquanto for menor do que 10 */
        
        /* for ($index=0; $index < 10 ; $index++) { 
            echo "$index <br>";
        }
        echo"valor = $index" */
    

/* Cores em repetição */
echo"*******************CORES*******************<br>";
$cores = ['amarelo', 'rosa', 'vermelho'];
$biblio = [
    'cidade'=> 'bauru',
    'nº primo'=> '13',
    'esporte'=> 'vôlei'
];
$numeros = [111,222,333];

for ($i=0; $i < 3; $i++) { 
    echo "CORES = ".$cores[$i]."<br>";
}
echo"<br><br><br>";

echo"-----------FOREACH------------<br>";
foreach ($biblio as $key => $value) {
    echo "Chave = $key | Valor = $value <br>";
}



?>