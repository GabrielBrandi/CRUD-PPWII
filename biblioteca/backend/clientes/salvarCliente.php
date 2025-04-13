<?php
require '../conexao.php';

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

    echo "<META HTTP-EQUIV=REFRESH CONTENT='0; URL=inicio.php>";
} catch (PDOException $e) {
    echo "Erro ao cadastrar cliente: " . $e->getMessage();
}
?>