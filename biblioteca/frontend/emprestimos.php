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
                <img src="assets/img/Library-amico.svg" class="placeholder-img" alt="">
                <div class="d-inline-block w-50 position-absolute p-5 mt-5">
                    <h2 class="text-center text-azul-10">Cadastre um empréstimo!</h2>
                    <p class="text-center">Você ainda não emprestou nenhum livro, é só clicar no botão abaixo para escolher um livro para emprestar.</p>
                    <a href="emprestarLivro.php">
                        <button class="btn-padrao w-100">Emprestar Livro</button>
                    </a>
                </div>
            </div>
            <table class="table table-striped" hidden>
                <thead class="bg-azul-10 text-branco-10">
                    <tr>
                        <th>Cód.</th>
                        <th>Livro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <?php include 'templates/footer.php'; ?>
    </footer>
</body>

</html>