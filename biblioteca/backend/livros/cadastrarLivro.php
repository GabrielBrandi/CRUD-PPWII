<?php
require_once '../conexao.php';

$nome = $_POST['nome'];
$paginas = $_POST['paginas'];
$genero = $_POST['genero'];

try {
    $sql = "INSERT INTO livro (nome, paginas, genero) 
            VALUES (:nome, :paginas, :genero)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':paginas', $paginas);
    $stmt->bindParam(':genero', $genero);
    $stmt->execute();

    echo "Livro cadastrado com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao cadastrar livro: " . $e->getMessage();
}
?>