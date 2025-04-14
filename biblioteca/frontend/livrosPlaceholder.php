<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Livro</title>
    <?php include 'templates/header.php'; ?>
</head>

<body class="bg-branco">
    <header class="pb-5">
        <?php include 'templates/navbar.php'; ?>
    </header>
    <main class="pt-5">
        <div class="container pt-5">
            <div class="placeholder position-relative">
                <img src="assets/img/Library-amico.svg" class="placeholder-img" alt="">
                <div class="d-inline-block w-50 position-absolute p-5 mt-5">
                    <h2 class="text-center text-azul-10">Cadastre um livro!</h2>
                    <p class="text-center">Você ainda não cadastrou nenhum livro, é só clicar no botão abaixo para escolher um livro para emprestar.</p>
                    <a href="cadastroLivro.php">
                        <button class="btn-padrao w-100">Cadastrar Livro</button>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include 'templates/footer.php'; ?>
    </footer>
</body>

</html>