<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Livros Cadastrados</title>
    <?php include 'templates/header.php'; ?>
    <?php require '../backend/conexao.php' ?>
</head>

<body class="bg-branco">
    <header class="pb-5">
        <?php include 'templates/navbar.php'; ?>
    </header>
    <main class="pt-5">
        <div class="container">
            <h2 class="text-center text-azul">Livros Cadastrados</h2>
            <table class="table table-striped">
                <thead class="bg-azul-10 text-branco-10">
                    <tr>
                        <th>Cód.</th>
                        <th>Nome</th>
                        <th>Sinopse</th>
                        <th>Gênero</th>
                        <th>Páginas</th>
                        <th>Emprestado</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from livro";
                    $sql = $pdo->query($sql);
                    if ($sql->rowCount() > 0) {
                        foreach ($sql->fetchall() as $livro) {
                            echo '<tr>';
                            echo '<td>' . $livro['ID_Livro'] . '</td>';
                            echo '<td>' . $livro['Nome'] . '</td>';
                            echo '<td>' . $livro['Sinopse'] . '</td>';
                            echo '<td>' . $livro['Genero'] . '</td>';
                            echo '<td>' . $livro['Paginas'] . '</td>';
                            echo '<td>' . $livro['Emprestado'] . '</td>';
                            echo '  <td>' .
                                "<a href=\"\" class=\"text-decoration-none\">
                                                <img src=\"assets/img/editar.svg\" class=\"btn btn-primary d-inline-block p-1\">
                                            </a> 
                                            <a href=\"\" class=\"text-decoration-none\">
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