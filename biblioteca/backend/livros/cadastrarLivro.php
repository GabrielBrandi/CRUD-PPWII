<?php
require '../conexao.php';

try {
    if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
        $nome = addslashes($_POST['nome']);
        $paginas = addslashes($_POST['paginas']);
        $genero = addslashes($_POST['genero']);
        $sinopse = addslashes($_POST['sinopse']);

        $sql = "INSERT INTO livro SET nome = '$nome', paginas = '$paginas', genero = '$genero', sinopse = '$sinopse' ";
        $sql = $pdo->query($sql);
        
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0; URL=../../frontend/emprestimos.php'>
            <script type=\"text/javascript\">
                alert(\"Livro cadastrado com sucesso! \");
            </script>
        ";
    }
} catch (PDOException $e) {
    echo "Erro ao cadastrar livro: " . $e->getMessage();
}
?>
