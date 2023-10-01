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
$contaJoao = new ContaBanco;
$contaJoao -> criarConta(01,"João","Corrente",500);
print_r($contaJoao);
$contaJoao -> pagarMensalidade(true);
$contaJoao -> sacarValor(11);


print_r($contaJoao);
?>

</pre>
</body>

</html>