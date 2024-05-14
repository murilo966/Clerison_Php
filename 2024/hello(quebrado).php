<?php
    $a ='poct poct';

    //input de usuario
    function fechaOzoi(){
        
        function solicitarEntrada() {
            // nome de usuário
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Retorna o valor inserido pelo usuário
                echo $_POST["valor"];
                return $_POST["valor"]; //= [$email,$password]
            }
        };
        $user = solicitarEntrada();
        echo $user[0];
        echo $user[1];
        echo "O tipo de usuário foi: $user";

        // Exibe um formulário
        echo "<form method=\"post\">";
        //solicita
        echo "<label for=\"req\">Por favor, insira um valor:</label><br>";
        //cria um input para digitar o tipo de usuario
        echo "<input type=\"text\" name=\"valor[0]\"><br>";
        echo "<input type=\"text\" pass=\"valor[1]\"><br>";
        //botão para enviar
        echo "<input type=\"submit\" value=\"Enviar\">";
        //fechamento
        echo "</form>";

        return $user;
    }
     $user = fechaOzoi();

    // fazendo conta
    if($user == "ADMIN" and $user){
        echo 'hello world!! <br> <br>';
        echo "$a <br>";
        $txt = "afs";
        if (strlen($txt) > 8) {
            echo"esse texto é maior do que oito";
        } else {
            echo"esse texto é menor que oito";
        }
    }


?>