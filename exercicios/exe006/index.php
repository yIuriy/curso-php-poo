<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilares da POO: Herança</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <div class="container bg-white mt-5 rounded">
        <h1 class="text-center">Ultra Emoji Combate</h1>
        <pre>
            <?php
            require_once "Lutador.php";
            require_once "Luta.php";
            $lutadores = [];
            $lutadores[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
            $lutadores[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $lutadores[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $lutadores[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
            $lutadores[4] = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $lutadores[5] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);

            $luta = new Luta;
            $luta->marcarLuta($lutadores[5],$lutadores[4]);
            $luta->lutar();
            $lutadores[5]->status();
            $lutadores[4]->status();
            ?>
        </pre>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>