<?php
require '../conexao.php';

try {
    if (isset($_GET['id_livro']) && empty($_GET['id_livro']) == false) {
        $id_livro = addslashes($_GET['id_livro']);

        $sql = "DELETE FROM livro WHERE id_livro = '$id_livro' ";
        $sql = $pdo->query($sql);
        
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0; URL=verificaLivros.php'>
            <script type=\"text/javascript\">
                alert(\"Livro excluído com sucesso! \");
            </script>
        ";
    }
} catch (PDOException $e) {
    echo "Erro ao excluir livro: " . $e->getMessage();
}
?>