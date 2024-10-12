<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Medicamentos</title>
</head>
<body>
    <h1>Cadastro de Medicamentos</h1>
    <form>
        <label for="nome-medicamento">Nome do medicamento:</label><br>
        <input type="text" id="nomeMed" name="nomeMed" required><br><br>

        <label for="preco">Preço unitário (R$):</label><br>
        <input type="number" id="preco" name="preco" required><br><br>

        <label for="quantidade">Quantidade disponível em estoque:</label><br>
        <input type="number" id="quantidade" name="quantidade" required><br><br>

        <label for="categoria">Categoria:</label><br>
        <select id="categoria" name="categoria" required>
            <option value="">Selecione uma categoria</option>
            <option value="Analgesico">Analgésico</option>
            <option value="Antibiotico">Antibiótico</option>
            <option value="Anti-inflamatorio">Anti-inflamatório</option>
        </select><br><br>

        <label for="data-validade">Data de validade:</label><br>
        <input type="date" id="dataValidade" name="dataValidade" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>