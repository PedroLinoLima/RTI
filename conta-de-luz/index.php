<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luz</title>
    <link rel="stylesheet" href="../styles-global.css" />
</head>
<body>
    <form method="GET" action="calculo-conta-de-luz.php">
        <h1>Calculo conta de luz</h1>
        <div class="input-group">
            <label for="consumo">Consumo em Quilowatts-hora:</label>
            <input type="number" name="consumo" id="consumo" required/>
        </div>
        <div class="input-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required/>
        </div>
        <div class="input-group">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco" required/>
        </div>
        <div class="input-group">
            <label for="numero">Numero:</label>
            <input type="number" name="numero" id="numero" required/>
        </div>
        <button>Calcular</button>
    </form>
</body>
</html>