<?php
require '../conexao.php';

try {
    $idLivro = addslashes($_POST['id_livro']);
    $data_Emprestimo = addslashes($_POST['data_emprestimo']);
    $data_Devolucao = addslashes($_POST['data_devolucao']);    

    $sql = "INSERT INTO emprestimo SET idLivro = '$idLivro', data_emprestimo = '$data_emprestimo', data_devolucao = '$data_devolucao' ";

    echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0; URL=home.php'>
            <script type=\"text/javascript\">
                alert(\"Emprestimo cadastrado com sucesso! \");
            </script>
        ";
} catch (PDOException $e) {
    echo "Erro ao emprestar livro: " . $e->getMessage();
}
?>
