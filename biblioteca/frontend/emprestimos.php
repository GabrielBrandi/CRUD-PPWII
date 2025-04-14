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
            <h2 class="text-center text-azul">Livros Emprestados</h2>
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
                            echo '  <td>' .
                                "<a href=\"editarEmprestimo.php?id_emprestimo={$emprestimo['ID_Emprestimo']}\" class=\"text-decoration-none\">
                                                <img src=\"assets/img/editar.svg\" class=\"btn btn-primary d-inline-block p-1\">
                                            </a> 
                                            <a href=\"../backend/emprestimo/excluirEmprestimo.php?id_emprestimo={$emprestimo['ID_Emprestimo']}\" class=\"text-decoration-none\" onclick=\"return confirm('Tem certeza que deseja excluir este empréstimo?');\">
                                                <img src=\"assets/img/excluir.svg\" class=\"btn btn-danger d-inline-block p-1\">
                                             </a>" . 
                                '</td>';
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