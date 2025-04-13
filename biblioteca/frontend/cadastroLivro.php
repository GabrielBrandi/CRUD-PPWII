<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Emprestimos</title>
    <?php include 'templates/header.php'; ?>
</head>

<body class="bg-branco">
    <header class="pb-5">
        <?php include 'templates/navbar.php'; ?>
    </header>
    <main class="pt-5">
        <div class="container pt-5">
            <div class="placeholder position-relative">
                <img src="assets/img/Dictionary-amico.svg" class="position-absolute end-0" alt="">
                <div class="d-inline-block w-50 position-absolute p-5 mt-5">
                    <h2 class="text-center text-azul-10">Cadastro de Livro</h2>
                    <form action="../backend/livros/cadastrarLivro.php" method="post">
                        <div class="mb-4">
                            <label for="nome" class="d-block">Nome do Livro</label>
                            <input type="text" class="input-texto w-100" name="nome" required>
                        </div>
                        <div class="mb-4">
                            <label for="genero" class="d-block">Gênero</label>
                            <input type="text" class="input-texto w-100" name="genero" required>
                        </div>
                        <div class="mb-4">
                            <label for="totalPaginas" class="d-block">Total de Páginas</label>
                            <input type="number" class="input-texto w-100" name="totalPaginas" required>
                        </div>
                        <input type="submit" value="Cadastrar" class="btn-padrao w-100">
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include 'templates/footer.php'; ?>
    </footer>
</body>

</html>