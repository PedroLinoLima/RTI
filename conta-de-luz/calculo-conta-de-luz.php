<?php

if(!isset($_GET["consumo"]) 
|| !isset($_GET["nome"]) 
|| !isset($_GET["endereco"]) 
|| !isset($_GET["numero"]) ){

    //redirecionar o usuário para a tela index.php
    header("location: index.php");

}

$consumo = $_GET["consumo"];
$nome = $_GET["nome"];
$endereco = $_GET["endereco"];
$numero = $_GET["numero"];

$totalPagar = 0;

if($consumo > 120){
    $totalPagar = $consumo * 0.42;
}else if($consumo <= 120){
    $totalPagar = $consumo * 0.32;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo conta de luz</title>
    <link rel="stylesheet" href="../styles-global.css" />
</head>
<body>
    <h1>Conta de luz do(a) <?=$nome?>.</h1>
    <h1><?= $endereco, $numero?>.</h1>

    <?php

    if($consumo){
        echo  "<h1 style='color: red'>Consumo: $consumo kWh.</h1>";
    }else{
        echo  "<h1>Consumo: $consumo kWh.</h1>";
    }

    ?>

    <h1>Valor a pagar: R$ <?=$totalPagar?></h1>
</body>
</html>