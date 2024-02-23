<?php
header("Content-type:text/html; charset=utf8");
//variaveis
$numero = 0;

//calculos
//verificar se o usuario preencheu o formulario
if(isset($_POST["numero"]) && !empty($_POST["numero"])){
    //receber os dados do formulario
    $numero = $_POST["numero"];
    //utilizar estruturas de repeticao para calcular a tabuada
    // dividas em 4 partes ( inicializacao / teste / codigos / atualizacao)
    echo "<h1>WHILE</h1>";
    $i = 1; // variavel contadora / inicializacao
    while ($i <= 10){ // teste logico
        // numero X contador = (numero * contador)
        echo $numero." X ".$i." = ".($numero * $i)."<br>"; // codigo que vai repetir
        $i++; // atualizacao -> ++ significa +1 na variavel
    }

    echo "<h1>DO WHILE</h1>";
    $i = 1; // variavel contadora / inicializacao
    do{ // faça
        echo $numero." X ".$i." = ".($numero * $i)."<br>"; // codigo que vai repetir
        $i++; // atualizacao
    }while($i <= 10); // teste logico

    echo "<h1>FOR</h1>";
    // inicializacao / teste / atualizacao
    for($i = 1; $i <= 10; $i++){
        echo $numero." X ".$i." = ".($numero * $i)."<br>"; // codigo que vai repetir
    }
}else{ // devolver para o index.html
    header("location: index.html");
}

//saida para usuario

?>