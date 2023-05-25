<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php
        $nome = $_GET['nome'] ?? "Seu";
        $sobrenome = $_GET['sobrenome'] ?? "Desconhecido";
            echo "<p>Olá, $nome $sobrenome! Seja Bem vindo ao meu Site!</p>";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>

</body>
</html>
