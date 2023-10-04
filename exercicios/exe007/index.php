<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <div class="container bg-white mt-5 rounded text-wrap">
        <h1 class="text-center">Exercício em PHP</h1>
        <pre class="text-wrap">
                <?php
                require_once "Pessoa.php";
                require_once "Livro.php";
                $pessoa1 = new Pessoa("João", 22, "Masculino");
                $pessoa1->fazerAniversario();
                $pessoa1->apresentar();
                $livro1 = new Livro("Python Básico", "Pedro", 121, $pessoa1);
                $livro1->abrir();
                $livro1->voltarPagina();
                $livro1->folhear(-10);
                $livro1->detalhes();
                ?>
        </pre>
        <pre><?php print_r($livro1)?></pre>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>