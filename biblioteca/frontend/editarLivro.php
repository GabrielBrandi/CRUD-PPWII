<?php
require '../backend/conexao.php';

$id_livro = $_GET['id_livro'] ?? null;

if (!$id_livro) {
    echo "ID do livro não fornecido.";
    exit;
}

$sql = $pdo->prepare("SELECT * FROM livro WHERE ID_Livro = ?");
$sql->execute([$id_livro]);
$livro = $sql->fetch();

if (!$livro) {
    echo "Livro não encontrado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Livro</title>
    <?php include 'templates/header.php'; ?>
</head>
<body>
    <header class="pb-5">
        <?php include 'templates/navbar.php'; ?>
    </header>
    <div class="container mt-5">
        <h2>Editar Livro</h2>
        <form action="../backend/livros/editarLivro.php?id_livro=<?= $livro['ID_Livro'] ?>" method="POST">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" value="<?= $livro['Nome'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Sinopse</label>
                <textarea name="sinopse" class="form-control" required><?= $livro['Sinopse'] ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Gênero</label>
                <input type="text" name="genero" class="form-control" value="<?= $livro['Genero'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Páginas</label>
                <input type="number" name="paginas" class="form-control" value="<?= $livro['Paginas'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <a href="livros.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    <footer>
        <?php include 'templates/footer.php'; ?>
    </footer>
</body>
</html>