<?php
require_once '../conexao.php';

$idCliente = $_POST['id_cliente'];
$idLivro = $_POST['id_livro'];
$dataEmprestimo = $_POST['data_emprestimo'];
$dataDevolucao = $_POST['data_devolucao'];

try {
    $sql = "INSERT INTO emprestimo (id_cliente, id_livro, data_emprestimo, data_devolucao)
            VALUES (:id_cliente, :id_livro, :data_emprestimo, :data_devolucao)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id_cliente', $idCliente);
    $stmt->bindParam(':id_livro', $idLivro);
    $stmt->bindParam(':data_emprestimo', $dataEmprestimo);
    $stmt->bindParam(':data_devolucao', $dataDevolucao);
    $stmt->execute();

    echo "Empréstimo cadastrado com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao cadastrar empréstimo: " . $e->getMessage();
}
?>