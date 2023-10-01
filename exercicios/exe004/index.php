<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Prático</title>
</head>

<body>
    <pre>
<?php 
require_once "ContaBanco.php"; 
//criarConta(num,nome,tipo,saldo);
$pessoa1 = new ContaBanco;
$pessoa2 = new ContaBanco;
$pessoa1 -> criarConta(1111,"Jubileu","Corrente",300);
$pessoa2 -> criarConta(2222,"Creuza","Poupança",500);
$pessoa2 -> sacarValor(650);
$pessoa1 -> pagarMensalidade(true);
$pessoa2 -> fecharConta(2222);

print_r($pessoa1);
print_r($pessoa2);
?>

</pre>
</body>

</html>