<?php
require 'conexao.php';

$nome_medicamento = $_POST['nome_medicamento'] ?? null;
$preco_unitario = $_POST['preco_unitario'] ?? null;
$quantidade_estoque = $_POST['quantidade_estoque'] ?? null;
$categoria = $_POST['categoria'] ?? null;
$data_validade = $_POST['data_validade'] ?? null;

if ($nome_medicamento && $preco_unitario && $quantidade_estoque && $categoria && $data_validade) {
    $sql = $pdo->prepare("INSERT INTO Medicamentos (nome_medicamento, preco_unitario, quantidade_estoque, categoria, data_validade) VALUES (:nome_medicamento, :preco_unitario, :quantidade_estoque, :categoria, :data_validade)");
    $sql->bindValue(':nome_medicamento', $nome_medicamento);
    $sql->bindValue(':preco_unitario', $preco_unitario);
    $sql->bindValue(':quantidade_estoque', $quantidade_estoque);
    $sql->bindValue(':categoria', $categoria);
    $sql->bindValue(':data_validade', $data_validade);

    if ($sql->execute()) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql->errorInfo()[2];
    }
} else {
    echo "NULO";
}
?>


<?php
// Arquivo banco.php

// Conexão com o banco de dados
$dsn = 'mysql:host=localhost;dbname=SistemaFarmacia';
$username = '';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
    exit();
}

// Função para cadastrar usuário
function cadastrarUsuario($username, $password, $email) {
    global $pdo;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = $pdo->prepare("INSERT INTO Usuarios (username, password, email) VALUES (?, ?, ?)");
    $sql->execute([$username, $hashed_password, $email]);
}

// Função para verificar se o usuário existe
function usuarioExiste($username) {
    global $pdo;
    $sql = $pdo->prepare("SELECT * FROM Usuarios WHERE username = ?");
    $sql->execute([$username]);
    return $sql->rowCount() > 0;
}

// Função para verificar se o email existe
function emailExiste($email) {
    global $pdo;
    $sql = $pdo->prepare("SELECT * FROM Usuarios WHERE email = ?");
    $sql->execute([$email]);
    return $sql->rowCount() > 0;
}

// Função para logar usuário
function logarUsuario($username, $password) {
    global $pdo;
    $sql = $pdo->prepare("SELECT * FROM Usuarios WHERE username = ?");
    $sql->execute([$username]);
    $usuario = $sql->fetch();
    if ($usuario && password_verify($password, $usuario['password'])) {
        return true;
    } else {
        return false;
    }
}

?>