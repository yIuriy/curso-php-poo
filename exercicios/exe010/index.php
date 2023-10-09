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
            require_once "class/Reptil.php";
            require_once "class/Peixe.php";
            require_once "class/Ave.php";

            $m = new Mamifero;
            $r = new Reptil;
            $p = new Peixe;
            $a = new Ave;


            $m->setPeso(85.4);
            $m->setIdade(2);
            $m->setMembros(4);
            $m->locomover(); // Correndo
            $m->alimentar(); // Mamando
            $m->emitirSom(); // Som de Mamífero
            print_r($m);

            $p->setPeso(0.35);
            $p->setIdade(1);
            $p->setMembros(0);
            $p->locomover(); // Nadando
            $p->alimentar(); // Comendo Substâncias
            $p->emitirSom(); // Som de Ave
            $p->soltarBolha();
            print_r($p);

            $a->setPeso(0.74);
            $a->setIdade(3);
            $a->setMembros(2);
            $a->locomover(); // Voando
            $a->alimentar(); // Comendo Frutas
            $a->emitirSom(); // Som de Ave
            $a->fazerNinho();
            print_r($a);
            ?>
        </pre>
        <div class="text-center"><input class="btn bg-dark text-center text-white" type="button" value="Próxima Página" onclick="window.location.href='pag1.php'"></div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>