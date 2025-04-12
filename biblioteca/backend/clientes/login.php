<?php
require_once 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

try {
    $stmt = $pdo->prepare("SELECT * FROM cliente WHERE email = :email AND senha = :senha");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha); // Idealmente, a senha deve estar com hash (bcrypt, etc)
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Bem-vindo, " . $cliente['nome'] . "!";
        // Aqui pode redirecionar para área logada, se quiser
    } else {
        echo "E-mail ou senha inválidos.";
    }
} catch (PDOException $e) {
    echo "Erro ao tentar logar: " . $e->getMessage();
}
?>