<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Polimorfismo: Sobreposição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <div class="container bg-white mt-5 rounded">
        <h1 class="text-center">Tipo de Polimorfismo: Sobreposição</h1>
        <pre class="">
            <?php
            require_once "class/Mamifero.php";
            require_once "class/Canguru.php";
            require_once "class/Cachorro.php";

            $m = new Mamifero;
            $c = new Canguru;
            $k = new Cachorro;

            $m->setPeso(7.86);
            $m->setIdade(6);
            $m->setMembros(4);
            $m->locomover(); // Correndo
            $m->alimentar(); // Mamando
            $m->emitirSom(); // Som de Mamífero
            print_r($m);

            $c->setPeso(56.2);
            $c->setIdade(4);
            $c->setMembros(4);
            $c->locomover(); // Saltando
            $c->alimentar(); // Mamando
            $c->emitirSom(); // Som de Mamífero
            $c->usarBolsa();
            print_r($c);

            $k->setPeso(23.4);
            $k->setIdade(4);
            $k->setMembros(4);
            $k->locomover(); // Correndo
            $k->alimentar(); // Mamando
            $k->emitirSom(); // Latindo
            $k->abanarRabo();
            $k->enterrarOsso();
            print_r($k);
            ?>
        </pre>
        <div class="text-center"><input class="btn bg-dark text-center text-white mb-2" type="button" value="Voltar Página" onclick="window.location.href='index.php'"></div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>