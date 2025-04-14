<?php
require '../conexao.php';

try {
    $stmt = $pdo->query("SELECT COUNT(*) AS total FROM livro");
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($resultado && $resultado['total'] > 0) {
        header("Location: ../../frontend/livros.php");
        exit;
    } else {
        header("Location: ../../frontend/livrosPlaceholder.php");
        exit;
    }
} catch (PDOException $e) {
    echo "Erro ao verificar livros: " . $e->getMessage();
    exit;
}
?>