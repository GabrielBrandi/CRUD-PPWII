<?php
require '../backend/conexao.php';

$id = $_GET['id_emprestimo'] ?? null;

if (!$id) {
    echo "ID do empréstimo não fornecido.";
    exit;
}

$sql = $pdo->prepare("
    SELECT e.*, l.nome AS nome_livro 
    FROM emprestimo e 
    JOIN livro l ON e.ID_Livro = l.ID_Livro 
    WHERE e.ID_Emprestimo = ?
");
$sql->execute([$id]);
$emprestimo = $sql->fetch();

if (!$emprestimo) {
    echo "Empréstimo não encontrado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Empréstimo</title>
    <?php include 'templates/header.php'; ?>
</head>
<body>
    <header class="pb-5">
        <?php include 'templates/navbar.php'; ?>
    </header>
    <div class="container mt-5">
        <h2>Editar Empréstimo</h2>
        <form action="../backend/emprestimo/editarEmprestimo.php?id_emprestimo=<?= $emprestimo['ID_Emprestimo'] ?>" method="POST">
            <div class="mb-3">
                <label class="form-label">Livro</label>
                <input type="text" class="form-control" value="<?= $emprestimo['nome_livro'] ?>" readonly>
                <input type="hidden" name="idLivro" value="<?= $emprestimo['ID_Livro'] ?>">
            </div>
            <div class="mb-3">
                <label for="dataEmprestimo" class="form-label">Data de Empréstimo</label>
                <input type="date" name="dataEmprestimo" class="form-control" value="<?= $emprestimo['Data_Emprestimo'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="dataDevolucao" class="form-label">Data de Devolução</label>
                <input type="date" name="dataDevolucao" class="form-control" value="<?= $emprestimo['Data_Devolucao'] ?>" required>
            </div>
            <input type="hidden" name="nome" value="1"> 
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <a href="emprestimos.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    <footer>
        <?php include 'templates/footer.php'; ?>
    </footer>
</body>
</html>