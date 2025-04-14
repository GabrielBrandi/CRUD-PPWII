<?php
require '../conexao.php';

try {
    $stmtLivros = $pdo->query("SELECT COUNT(*) AS total_livros FROM livro");
    $resultadoLivros = $stmtLivros->fetch(PDO::FETCH_ASSOC);

    $stmtEmprestimos = $pdo->query("SELECT COUNT(*) AS total FROM emprestimo");
    $resultadoEmprestimos = $stmtEmprestimos->fetch(PDO::FETCH_ASSOC);

    if ($resultadoLivros['total_livros'] == 0) {
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0; URL=../../frontend/cadastroLivro.php'>
            <script type=\"text/javascript\">
                alert(\"Para cadastrar um empréstimo, primeiro cadastre um livro!\");
            </script>
        ";
        exit;
    } else if ($resultadoEmprestimos['total'] > 0) {
        header("Location: ../../frontend/emprestimos.php");
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