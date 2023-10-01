<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificadores de Visibilidade</title>
</head>

<body>
    <?php
    require_once "Caneta.php";
    $caneta1 = new Caneta;
    $caneta1->modelo = "BIC cristal";
    $caneta1->cor = "Verde";
    // $caneta1 -> ponta = 0.5;
    // $caneta1 -> carga = 99;
    $caneta1->rabiscar();
    $caneta1->tampar();
    formatarCodigo($caneta1);


    function formatarCodigo($nomeVar)
    {
        echo "<pre>";
        print_r($nomeVar);
        echo "</pre>";
    }


    ?>
</body>

</html>