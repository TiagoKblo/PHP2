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
        *//random_int — Gera um inteiro aleatório criptografado utilizar em senhas*<br>
        *//mt_rand — Gera um número inteiro aleatório*<br>
        *//rand — Gera um inteiro aleatório*<br>
        <?php
        $resposta = $_GET['resposta'] ?? 0;
        if ($resposta == "S") {
            $numero = mt_rand(1, 100);
            if (isset($_POST['meuBotao'])) {
                $numero = rand(1, 100);
            }
            echo "<p>O número aleatório gerado foi: <strong>$numero</strong></p>";
        } else {
            echo "<p><strong>Não foi gerado um número Aleatório</strong></p>";
        }


        ?>
        <form method="post">
            <input type="submit" name="meuBotao" value="Gerar Novamente">
        </form>
        <p><a href="index.html">&#x2b05; Voltar</a></p>

    </main>

</body>

</html>
