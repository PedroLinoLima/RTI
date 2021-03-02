<?php

if(!isset($_GET["real"]) 
|| !isset($_GET["moeda"]) ) {

    //redirecionar o usuário para a tela index.php
    header("location: index.php");

}

$real = $_GET["real"];
$moeda = $_GET["moeda"];

$moedaConvertida = 0;
$valorDoDolar = 5.41;
$valorDoEuro = 6.57;

if($moeda == "dolar"){
    $moedaConvertida = $real / $valorDoDolar;
}else if($moeda == "euro"){
    $moedaConvertida = $real / $valorDoEuro;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="../styles-global.css" />
</head>
<body>
    <h1>Valor em <?=$moeda?> é: <?= number_format($moedaConvertida, 2, ",", ".")?></h1>
</body>
</html>