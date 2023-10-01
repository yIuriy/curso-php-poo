<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos Especiais</title>
</head>
<body>
    <pre>
    <?php
    require_once "Caneta.php";
    $caneta1 = new Caneta("BIC","Vermelha",0.6);
    print_r($caneta1);
   $caneta2 = new Caneta("Faber","Preta",1.0);
   print_r($caneta2);
    ?>
    <pre>
</body>
</html>