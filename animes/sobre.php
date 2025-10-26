<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sobre Nós - Anime World</title>
  <link rel="stylesheet" href="style.css" />
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
  <?php include("cabecalho.php"); ?>

  <main class="container my-4">
    <section>
      <h2>Nossa Paixão por Animes</h2>
      <p>Anime World foi criado para compartilhar nossa paixão por animes com o mundo.</p>
      <p>Desde os clássicos até as últimas novidades, aqui você encontra de tudo sobre o universo dos animes.</p>
    </section>

  
    <!-- Carrossel Bootstrap -->
  <section class="my-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">
        <div id="animeCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://s2-techtudo.glbimg.com/y2YlukhfIGA6h29jvW2mvRv6raQ=/0x0:1200x800/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2025/i/y/sSdMCOToGj02vHvsu4eg/naruto-shippuden-temporada-11-estreia-dia-11-chega-a-netflix.jpg" class="d-block w-100" alt="Naruto Shippuden" />
            </div>
            <div class="carousel-item">
              <img src="https://wallpapers.com/images/hd/fullmetal-alchemist-brotherhood-background-578usgme6zid54sd.jpg" class="d-block w-100" alt="Fullmetal Alchemist" />
            </div>
            <div class="carousel-item">
              <img src="https://p2.trrsf.com/image/fget/cf/1200/630/middle/images.terra.com/2022/01/14/attack-on-titan-capa.jpg" class="d-block w-100" alt="Attack on Titan" />
            </div>
            <div class="carousel-item">
              <img src="https://animeflix.com.br/wp-content/uploads/2025/05/My-Hero-Academia-1.jpg" class="d-block w-100" alt="My Hero Academia" />
            </div>
            <div class="carousel-item">
              <img src="https://www.procurei-em-sonhos.com/wp-content/uploads/2020/06/EFkcMbxWwAE5GbQ.jpg" class="d-block w-100" alt="Demon Slayer" />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#animeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#animeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
          </button>
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#animeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#animeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#animeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#animeCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#animeCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  </main>

  <?php include("rodapé.php"); ?>

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
