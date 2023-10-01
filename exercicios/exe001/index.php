<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Teste de Classe</title>
</head>

<body>
    <?php
    require_once "Caneta.php";
    $caneta1 = new Caneta;
    $caneta1->cor = "Azul";
    $caneta1->ponta = 0.5;
    $caneta1->tampar();
    $caneta1->rabiscar();
    echo "<pre>";
    print_r($caneta1);
    echo "</pre>";

    $caneta2 = new Caneta;
    $caneta2->cor = "Vermelho";
    $caneta2->carga = 50;
    $caneta1->destampar();
    echo "<pre>";
    print_r($caneta1);
    echo "</pre>";

    ?>
</body>

</html>