 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<header class="bg-secondary text-white">
    <div class="jumbotron mb-0 p-1 "> <!-- Adicionei bg-light para melhor visualização -->
        <h1 class="text-center">Bem-vindo ao Anime World</h1>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-0 mb-0">
        <div class="container">
            
            
            <!-- Botão corrigido para Bootstrap 5 -->
            <button class="navbar-toggler " type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            
            <div class="collapse navbar-collapse  " id="navbarNav">
                <ul class="navbar-nav mx-auto" style="font-size:1.3em;">
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="anime-lista.php">Lista de Animes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Fale conosco</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>