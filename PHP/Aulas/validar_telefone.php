<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões Regulares - Validação de telefone</title>
</head>
<body>
    <form action="fone.php" method="post">
        Telefone:
        <input type="text" name="telefone" placeholder="(00) 00000-0000">
        <input type="submit" value="Validar">
        <!-- No momento é necessário digitar os dois primeiros números entre parênteses e colocar um hífen entre os dois grupos principais. -->
    </form>

    <!-- Expressões regulares são para validação, não máscaras de entrada. -->
</body>
</html>