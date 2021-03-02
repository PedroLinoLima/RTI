<?php

if(!isset($_GET["nome"]) 
||  !isset($_GET["salarioAtual"])) {

 //redirecionar o usuário para a tela index.php
 header("location: index.php");
}

$nome = $_GET["nome"];
$salrioAtual = $_GET["salarioAtual"];

$salarioSuperior = ($salrioAtual / 100) * 10 + $salrioAtual;
$salarioInferior = ($salrioAtual / 100) * 20 + $salrioAtual;
$aumentoSuperior = ($salrioAtual / 100) * 10;
$aumentoInferior = ($salrioAtual / 100) * 20;

if($salrioAtual > 5000){
    $salarioSuperior = ($salrioAtual / 100) * 10 + $salrioAtual;
}else{
    $salarioInferior = ($salrioAtual / 100) * 20 + $salrioAtual;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento salarial</title>
    <link rel="stylesheet" href="../styles-global.css" />
</head>
<body>
    <h1 style="color: red">Valor do salario atual: R$ <em><?=$salrioAtual?></em></h1>
    <?php 

    if($salrioAtual > 5000){
        echo  "<h1 style='color: green'>$nome seu aumento salarial foi de: R$ <em>$aumentoSuperior</em></h1>";
        echo  "<h1><em>$nome seu reajuste salarial foi de: R$ <em>$salarioSuperior</em></h1>";
    }else{
        echo  "<h1 style='color: green'>$nome seu aumento salarial foi de: R$ <em>$aumentoInferior</em></h1>";
        echo  "<h1 style='color: red'>$nome seu reajuste salarial foi de: R$ <em>$salarioInferior</em></h1>";
    }
    
    ?>
</body>
</html>