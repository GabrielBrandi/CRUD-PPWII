<?php
require '../conexao.php';

try {
    $stmt = $pdo->query("SELECT COUNT(*) AS total FROM emprestimo");
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($resultado && $resultado['total'] > 0) {
        header("Location: ../../frontend/cadastroEmprestimo.php");
        exit;
    } else {
        header("Location: ../../frontend/emprestimosPlaceholder.php");
        exit;
    }
} catch (PDOException $e) {
    echo "Erro ao verificar empréstimos: " . $e->getMessage();
    exit;
}
?>