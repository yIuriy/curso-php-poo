<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliformismo de Sobrecarga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-dark">
    
    <div class="container bg-white mt-5 rounded">
    <h1 class="text-center">Poliformismo de Sobrecarga</h1>
    <h2 class="text-center">Não suportado por PHP</h2>
        <pre class="">
            <?php 
            require_once "class/Cachorro.php";
            $c  = new Cachorro;
            $c->reagirFrase("Bom garoto");
            $c->reagirHora(19,32);
            $c->reagirIsDono(false);
            $c->reagirIdadePeso(1,1);
            $c->emitirSom();
            ?>
        </pre> 
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>