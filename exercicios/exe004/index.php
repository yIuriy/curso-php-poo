<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Prático</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container bg-white mt-5 rounded p-1">
        <pre>
        <?php 
        require_once "ContaBanco.php"; 
        //criarConta(num,nome,tipo,saldo);
        $pessoa1 = new ContaBanco;
        $pessoa2 = new ContaBanco;
        $pessoa1 -> criarConta(1111,"Jubileu","Corrente",300);
        $pessoa2 -> criarConta(2222,"Creuza","Poupança",500);
        $pessoa2 -> sacarValor(650);
        $pessoa1 -> pagarMensalidade(true);
        $pessoa2 -> fecharConta(2222);
        
        print_r($pessoa1);
        print_r($pessoa2);
        ?>
        </pre>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>