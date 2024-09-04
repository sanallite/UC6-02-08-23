<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="formulario_calc.css">
</head>
<body>
    <main>
        <header>
            <h1>Calculadora fria e calculista</h1>
        </header>
        
        <form method="post" action="calc.php">
            <p>
                <label for="v1">1º Valor:</label>
                <input type="text" id="v1" name="v1">
            </p>

            <p>
                <label for="v2">2º Valor:</label>
                <input type="text" id="v2" name="v2">
            </p>

            <p>
                <input type="submit" name="op" class="op" value="+">
                <input type="submit" name="op" class="op" value="-">
                <input type="submit" name="op" class="op" value="x">
                <input type="submit" name="op" class="op" value="/">
            </p>
        </form>
    </main>
</body>
</html>