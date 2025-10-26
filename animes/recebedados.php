<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Anime World</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include("cabecalho.php"); ?>

    <main class="container mt-5 mb-5" style="padding-bottom: 100px;">
        <section>
           <h2>Dados Informados no Formulário</h2>
           <?php
           // Corrigindo os nomes dos campos
           $nome = $_POST['nome'];
           $email = $_POST['email'];
           $mensagem = $_POST['mensagem'];

           echo "Nome: " . $nome . "<br>";
           echo "Email: " . $email . "<br>";
           echo "Mensagem: " . $mensagem . "<br>";

           // Criando array
           $contato = array("Nome" => $nome, "Email" => $email, "Mensagem" => $mensagem);

           // Carrega conteúdo do JSON se existir
           $json = array("contatos" => array());
           if (file_exists("dados.json")) {
               $string = file_get_contents("dados.json");
               $json = json_decode($string, true);
           }

           // Adiciona novo contato
           $json["contatos"][] = $contato;

           // Salva no arquivo
           $fp = fopen('dados.json', 'w');
           if ($fp == false) {
               print(error_get_last());
           }
           fwrite($fp, json_encode($json, JSON_PRETTY_PRINT));
           fclose($fp);
           ?>

           <div class="alert alert-success text-center mt-4" role="alert">
  Contato cadastrado com sucesso!
</div>

        </section>
    
<div class="text-center mt-3">
  <a href="index.php" class="btn btn-secondary">Voltar à Página Inicial</a>
</div>
</main>

    <?php include("rodapé.php"); ?>
</body>
</html>
