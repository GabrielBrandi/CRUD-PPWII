<?php
require '../conexao.php';

$id_emprestimo = addslashes($_GET['id_emprestimo']);


try {
    if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
        $idLivro = addslashes($_POST['idLivro']);
        $dataEmprestimo = addslashes($_POST['dataEmprestimo']);
        $dataDevolucao = addslashes($_POST['dataDevolucao']);   

        $sql = "UPDATE emprestimo SET ID_Livro = '$idLivro', Data_Emprestimo = '$dataEmprestimo', Data_Devolucao = '$dataDevolucao' WHERE id_emprestimo = '$id_emprestimo'";
        $sql = $pdo->query($sql);
        
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0; URL=../../frontend/emprestimos.php'>
            <script type=\"text/javascript\">
                alert(\"Emprestimo editado com sucesso! \");
            </script>
        ";
    }
} catch (PDOException $e) {
    echo "Erro ao editar emprestimo: " . $e->getMessage();
}
?>