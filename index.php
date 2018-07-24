<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Somar</title>
</head>
<body>
    <form action="calcular.php" method="POST">
        <h3>Somar</h3>
        <label for="n1">Número 1</label><br><br>
        <input type="number" name="n1" id="n1" min="0" value="0" required><br><br>
        <label for="n2">Número 2</label><br><br>
        <input type="number" name="n2" id="n2" min="0" value="0" required><br><br>
        <select name="op">
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select><br><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>