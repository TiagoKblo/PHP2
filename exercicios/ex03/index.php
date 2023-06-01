<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Váriaveis e Constantes</title>
</head>
<body>
<?php
$nome="Tiago";
$sobreNome="de Moraes";
$idade= 37;
$peso= 105.5;
$casado= false;

const PAIS = "Brasil";
echo "Muito prazer meu mome é: ", $nome," ", $sobreNome, " e sou do " .PAIS;
?>

<?php
//0x = hexadecimal, 01 = octal, 0b = binário
// $num= 0x1A;
// echo "<br> $num";
$v=300;
var_dump($v);
?>
</body>
</html>
