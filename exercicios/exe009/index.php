<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança Parte(2)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <div class="container bg-white mt-5 rounded">
        <h1 class="text-center">Herança Parte(2)</h1>
        <pre class="">
            <?php
            require_once "Visitante2.php";
            require_once "Aluno2.php";
            require_once "Bolsista2.php";
            


            $visitante1 = new Visitante2;
            $visitante1->setNome("Juvêncio");
            $visitante1->setIdade(19);
            $visitante1->setSexo("Masculino");
            print_r($visitante1);

            $aluno1 = new Aluno2;
            $aluno1->setNome("Henry");
            $aluno1->setIdade(25);
            $aluno1->setSexo("Masculino");
            $aluno1->setMatricula(111);
            $aluno1->setCurso("Informática");
            print_r($aluno1);
            $aluno1->pagarMensalidade();

           
            $alunoComBolsa = new Bolsista2;
            $alunoComBolsa -> setNome("Jasmin");
            $alunoComBolsa -> setIdade(22);
            $alunoComBolsa->setSexo("Feminino");
            $alunoComBolsa->setMatricula(222);
            $alunoComBolsa->setBolsa(25);
            $alunoComBolsa->setCurso("Engenharia Civil");
            print_r($alunoComBolsa);
            $alunoComBolsa->pagarMensalidade();

            ?>
        </pre>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>