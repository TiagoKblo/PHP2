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
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php
        $numero = $_GET['numero'] ?? 0;
        //$antecessor = $numero - 1;

            echo "<p>O número escolhido foi: <strong>$numero</strong></p>";
            echo "<p>O <em>Sucessor</em> do é: ". ($numero+1) ."</p>";
            echo "<p>O <em>Antecessor</em> do é:". ($numero-1) ."</p>";

        ?>
        <p><button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button></p>
    </main>

</body>
</html>
