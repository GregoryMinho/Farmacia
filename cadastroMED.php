<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Medicamentos</title>
</head>
<body>
    <h1>Cadastro de Medicamentos</h1>
    <form action="cadastroMED.php" method="$_GET">
        <label for="nome">Nome do medicamento:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="preco">Preço unitário (R$):</label><br>
        <input type="number" id="preco" name="preco" required><br><br>

        <label for="quantidade">Quantidade disponível em estoque:</label><br>
        <input type="number" id="quantidade" name="quantidade" required><br><br>

        <label for="categoria">Categoria:</label><br>
        <input type="text" id="categoria" name="categoria" required><br><br>

        <label for="validade">Data de validade:</label><br>
        <input type="date" id="validade" name="validade" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>