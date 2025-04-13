<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <?php include 'templates/header.php'; ?>
  <link href="assets/css/login.css" rel="stylesheet">
</head>

<body class="bg-branco">
  <main class="overflow-y-hidden">
    <h2 class="text-center text-branco-20 chamada-login">Bem-vindo ao <span class="text-azul-10 d-block">BookStats</span></h2>
      <video autoplay muted loop src="assets/vid/login.mp4" class="video-login"></video>
      <div class="bg-light p-5 position-absolute top-50 start-50 translate-middle bg-light rounded w-25">
        <h3 class="text-center">Login</h3>
        <form action="login.php" method="post">
          
          <div class="mb-4">            
            <label for="email" class="d-block">E-mail</label>
            <input type="email" name="email" id="email" class="d-block input-texto w-100" required>
          </div>

          <div class="mb-4">
            <label for="senha" class="d-block">Senha</label>
            <input type="password" name="senha" id="senha" class="d-block input-texto w-100" required>
          </div>

          <p><a href="clientes/cadastroCliente.html">Cadastrar novo cliente</a></p>
          <input type="submit" class="btn-padrao w-100" value="Entrar">
        </form>
      </div>
  </main>
  <footer>
    <?php include 'templates/footer.php'; ?>
  </footer>
</body>

</html>