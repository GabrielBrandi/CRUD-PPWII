<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Emprestar Livro</title>
    <?php include 'templates/header.php'; ?>
    <?php require '../backend/conexao.php'; ?>
</head>

<body class="bg-branco">
    <header class="pb-5">
        <?php include 'templates/navbar.php'; ?>
    </header>
    <main class="pt-5">
        <div class="container pt-5">
            <div class="placeholder position-relative">
                <img src="assets/img/Date picker-amico.svg" class="position-absolute end-0" alt="">
                <div class="d-inline-block w-50 position-absolute p-5 mt-5">
                    <h2 class="text-center text-azul-10">Emprestar Livro</h2>
                    <form action="../backend/emprestimo/cadastrarEmprestimo.php" method="post">
                        <div class="mb-3 mt-3">
                            <label for="idLivro" class="d-block">Livro</label>
                            <select class="input-texto w-100" name="idLivro" required>
                                <option value=""></option>
                                <?php
                                $sql = "select * from livro";
                                $sql = $pdo->query($sql);
                                if ($sql->rowCount() > 0) {
                                    foreach ($sql->fetchall() as $livro) {
                                        echo '<option value="' . $livro['ID_Livro'] . '">' . $livro['Nome'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="dataEmprestimo" class="d-block">Data de Empréstimo</label>
                            <input type="date" class="input-texto w-100" name="dataEmprestimo" required>
                        </div>
                        <div class="mb-4">
                            <label for="dataDevolucao" class="d-block">Data de Devolução</label>
                            <input type="date" class="input-texto w-100" name="dataDevolucao" required>
                        </div>
                        <input type="submit" value="Emprestar" class="btn-padrao w-100">
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