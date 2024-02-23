<?php
header("Content-type:text/html;charset=utf8");
//variaveis
$produto="";
$valor=0;
$parcelas=0;
//calculo
if (isset($_POST["nome"])&& !empty($_POST["nome"]) &&
    isset($_POST["valor"])&& !empty($_POST["valor"]) &&
    isset($_POST["parcelas"])&& !empty($_POST["parcelas"])
) {
    $produto = $_POST["nome"];
    $valor = $_POST["valor"];
    $parcelas = $_POST["parcelas"];
    echo("Nome do produto : $produto<br>Valor do Produto: $valor<br>Parcelas desejadas: $parcelas<br>");
for ($i=1;$i<=$parcelas;$i++){
    echo("Parcela $i= ".($valor/$parcelas).NumberFormatter::DECIMAL."<br>");
}
}
else{
    header("location:index.html");
}
//saida para o usuario


?>
