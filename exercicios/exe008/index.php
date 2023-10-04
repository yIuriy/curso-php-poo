<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança em PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <div class="container bg-white mt-5 rounded">
        <h1 class="text-center">Herança em PHP</h1>
        <pre class="text-wrap">
            <?php
            require_once "Pessoa1.php";
            require_once  "Aluno.php";
            require_once "Professor.php";
            require_once "Funcionario.php";
            $pessoa1 = new Pessoa1;
            $pessoa2 = new Aluno;
            $pessoa3 = new Professor;
            $pessoa4 = new Funcionario;

            $pessoa1->setNome("Pedro");
            $pessoa2->setNome("Maria");
            $pessoa3->setNome("Cláudio");
            $pessoa4->setNome("Fabiana");

            $pessoa2->setCurso("Informática");
            $pessoa3->setSalario(2500.75);
            $pessoa4->setSetor("Estoque");
         

            ?>
        </pre>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>