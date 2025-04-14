<?php
require '../conexao.php';

try {
    $idLivro = addslashes($_POST['idLivro']);
    $dataEmprestimo = addslashes($_POST['dataEmprestimo']);
    $dataDevolucao = addslashes($_POST['dataDevolucao']);    
    
    $stmt = $pdo->prepare("SELECT Emprestado FROM livro WHERE ID_Livro = ?");
    $stmt->execute([$idLivro]);
    $livro = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($livro['Emprestado'] === 'S') {
        echo "
            <script type=\"text/javascript\">
                alert(\"Este livro já está emprestado!\");
                window.location.href='../../frontend/emprestimos.php';
            </script>
        ";
        exit;
    }

    $sql = "INSERT INTO emprestimo SET ID_Livro = '$idLivro', Data_Emprestimo = '$dataEmprestimo', Data_Devolucao = '$dataDevolucao' ";
    $sql = $pdo->query($sql);

    $stmt = $pdo->prepare("UPDATE livro SET Emprestado = 'S' WHERE ID_Livro = ?");
    $stmt->execute([$idLivro]);

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
