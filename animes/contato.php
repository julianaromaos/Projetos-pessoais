<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato - Anime World</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css"> <!-- Seu CSS adicional, se houver -->
</head>
<body>

  <?php include("cabecalho.php"); ?>

  <main class="container mt-5 mb-5" style="padding-bottom: 100px;">
    <div class="card shadow">
      <div class="card-body">
        <h2 class="card-title mb-4">Fale Conosco</h2>
        
        <form action="recebedados.php" method="post">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="5" class="form-control" required></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </main>

   <?php include("rodapé.php"); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
