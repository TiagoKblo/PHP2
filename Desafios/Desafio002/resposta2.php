<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado da Porcentagem</h1>
    </header>
    <main>

    <?php
    $valor = $_GET['valor'];
    $porcentagem = $_GET['porcentagem'];
    $resultado = $valor * $porcentagem / 100;
    echo "$porcentagem% de $valor é $resultado";
    ?>

        <p><a href="index.html">&#8592; Voltar</a></p>

    </main>

</body>

</html>

