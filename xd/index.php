<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XD</title>
    <link rel="stylesheet" href="../styles-global.css" />
</head>
<body>
    <form method="GET" action="converter.php">
    <h1>Conversor de moeda</h1>
        <div class="input-group">
            <label for="real">Informe o valor em Real (R$):</label>
            <input type="number" name="real" id="real" required/>
        </div>
        <div>
            <input type="radio" name="moeda" id="dolar" value="dolar" required/>
            <label for="name">Dolar</label>
        </div>
        <div>
            <input type="radio" name="moeda" id="euro" value="euro" required/>
            <label for="name">Euro</label>
        </div>
        <button>Converter</button>
    </form>
</body>
</html>