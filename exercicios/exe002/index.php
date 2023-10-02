<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificadores de Visibilidade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container bg-white mt-5 rounded">
        <?php
        require_once "Caneta.php";
        $caneta1 = new Caneta2;
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
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>