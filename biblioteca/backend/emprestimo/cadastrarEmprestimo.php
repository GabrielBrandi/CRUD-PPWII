<?php
require '../conexao.php';

try {
    $idLivro = addslashes($_POST['idLivro']);
    $dataEmprestimo = addslashes($_POST['dataEmprestimo']);
    $dataDevolucao = addslashes($_POST['dataDevolucao']);    
    $sql = "INSERT INTO emprestimo SET ID_Livro = '$idLivro', Data_Emprestimo = '$dataEmprestimo', Data_Devolucao = '$dataDevolucao' ";
    $sql = $pdo->query($sql);

    echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0; URL=../../frontend/emprestimos.php'>
            <script type=\"text/javascript\">
                alert(\"Emprestimo cadastrado com sucesso! \");
            </script>
        ";
} catch (PDOException $e) {
    echo "Erro ao emprestar livro: " . $e->getMessage();
}
?>
