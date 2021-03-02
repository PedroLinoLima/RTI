<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FulBank</title>
    <link rel="stylesheet" href="../styles-global.css" />
</head>
<body>
    <form method="GET" action="aumento-salario.php">
    <h1>Aumento slarial</h1>
        <div class="input-group">
            <label for="nome">Nome do funconário: </label>
            <input type="text" name="nome" id="nome" required/>
        </div>

        <div class="input-group">
            <label for="salarioAtual">Salário atual</label>
            <input type="number" name="salarioAtual" id="salarioAtual" required/>
        </div>

        <button>Enviar</button>
    </form>
</body>
</html>