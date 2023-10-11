<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <div class="container bg-white mt-5 rounded">
        <h1 class="text-center">Projeto Final</h1>

        <pre class="">
            <?php
            require_once "class/Video.php";
            require_once "class/Gafanhoto.php";
            require_once "class/Visualizacao.php";
            $videos[0] = new Video("Aula 1 de JavaScript");
            $videos[1] = new Video("Aula 1 de Segurança da Informação");
            $videos[2] = new Video("Aula 1 de Python");
            print_r($videos);
            echo "<hr>";
            $gafanhoto[0] = new Gafanhoto("Juca", 23, "M", "Juqueira");
            print_r($gafanhoto);
            $view[0] = new Visualizacao($gafanhoto[0],$videos[1]);
            $view[1] = new Visualizacao($gafanhoto[0],$videos[2]);
            $view[0]->avaliar();
            $view[0]->avaliarPorNota(5);
            $view[0]->avaliarPorPorcentagem(60);
print_r($view);

            ?>
        </pre>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>