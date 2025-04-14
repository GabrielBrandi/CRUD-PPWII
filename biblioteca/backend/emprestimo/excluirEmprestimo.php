<?php
require '../conexao.php';

try {
    if (isset($_GET['id_emprestimo']) && !empty($_GET['id_emprestimo'])) {
        $id_emprestimo = addslashes($_GET['id_emprestimo']);

        $stmt = $pdo->prepare("SELECT ID_Livro FROM emprestimo WHERE ID_Emprestimo = ?");
        $stmt->execute([$id_emprestimo]);
        $emprestimo = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$emprestimo) {
            throw new Exception("Empréstimo não encontrado.");
        }

        $idLivro = $emprestimo['ID_Livro'];

        $stmt = $pdo->prepare("DELETE FROM emprestimo WHERE ID_Emprestimo = ?");
        $stmt->execute([$id_emprestimo]);

        $stmt = $pdo->prepare("UPDATE livro SET Emprestado = 'N' WHERE ID_Livro = ?");
        $stmt->execute([$idLivro]);

        echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0; URL=verificaEmprestimos.php'>
            <script type=\"text/javascript\">
                alert(\"Empréstimo excluído com sucesso!\");
            </script>
        ";
    }
} catch (PDOException $e) {
    echo "Erro ao excluir empréstimo: " . $e->getMessage();
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>