<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>

<body>

    <?php
    require 'conexao.php'
    ?>

    <?php
    $sql = $pdo->query("SELECT * FROM Medicamentos");

    $lista = [];
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <h1>FARMACIA - Cadastro de Medicamentos</h1>

    <table>
        <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>PREÇO</td>
            <td>QUANTIDADE</td>
            <td>CATEGORIA</td>
            <td>VALIDADE</td>
        </tr>

        <?php foreach ($lista as $dados) : ?>
            <tr>
                <td><?php echo $dados['id']; ?></td>
                <td><?php echo $dados['nome_medicamento']; ?></td>
                <td><?php echo $dados['quantidade_estoque']; ?></td>
                <td><?php echo $dados['preco_unitario']; ?></td>
                <td>
                    <a href="editar.php?id_prod=<?= $dados['id_prod']; ?>">[Editar]</a>
                    <a href="excluir.php?id_prod=<?= $dados['id_prod']; ?>">[Excluir]</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>