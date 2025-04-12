<?php
require 'config.php';

try {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO cliente (nome, email, senha) 
            VALUES (:nome, :email, :senha)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    $stmt->execute();

    echo "Cliente cadastrado com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao cadastrar cliente: " . $e->getMessage();
}
?>