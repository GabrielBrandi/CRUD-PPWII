<?php
require '../conexao.php';

$id_livro = addslashes($_GET['id_livro']);

try {
    if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
        $nome = addslashes($_POST['nome']);
        $paginas = addslashes($_POST['paginas']);
        $genero = addslashes($_POST['genero']);
        $sinopse = addslashes($_POST['sinopse']);

        $sql = "UPDATE livro SET nome = '$nome', paginas = '$paginas', genero = '$genero', sinopse = '$sinopse' WHERE id_livro = '$id_livro'";
        $sql = $pdo->query($sql);
        
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0; URL=../../frontend/livros.php'>
            <script type=\"text/javascript\">
                alert(\"Livro editado com sucesso! \");
            </script>
        ";
    }
} catch (PDOException $e) {
    echo "Erro ao editar livro: " . $e->getMessage();
}
?>
