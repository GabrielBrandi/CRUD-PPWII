<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Emprestar Livro</title>
    <?php include 'templates/header.php'; ?>
    <?php require '../backend/conexao.php' ?>
</head>

<body class="bg-branco">
    <header class="pb-5">
        <?php include 'templates/navbar.php'; ?>
    </header>
    <main class="pt-5">
        <div class="container">
            <table class="table table-striped">
                <thead class="bg-azul-10 text-branco-10">
                    <tr>
                        <th>Cód.</th>
                        <th>Livro</th>
                        <th>Dt. Devolução</th>
                        <th>Dt. Empréstimo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select e.*, l.nome from emprestimo e join livro l on e.ID_Livro = l.ID_Livro";
                    $sql = $pdo->query($sql);
                    if ($sql->rowCount() > 0) {
                        foreach ($sql->fetchall() as $emprestimo) {
                            echo '<tr>';
                            echo '<td>' . $emprestimo['ID_Emprestimo'] . '</td>';
                            echo '<td>' . $emprestimo['nome'] . '</td>';
                            echo '<td>' . $emprestimo['Data_Emprestimo'] . '</td>';
                            echo '<td>' . $emprestimo['Data_Devolucao'] . '</td>';
                            echo '<td>' . "Editar - Excluir" . '</td>';
                            echo '<tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <?php include 'templates/footer.php'; ?>
    </footer>
</body>

</html>