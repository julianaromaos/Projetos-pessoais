<?php
// Inicie a sessão se ainda não estiver iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-shield-alt me-2"></i>
                <strong>JS Empreendimentos</strong> - Gestão de Treinamentos
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle me-1"></i>
                            <?php echo isset($_SESSION['usuario_nome']) ? $_SESSION['usuario_nome'] : 'Usuário'; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user-cog me-2"></i>Meu Perfil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Configurações</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="logout.php"><i class="fas fa-sign-out-alt me-2"></i>Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Barra de Navegação Secundária -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNavSecondary">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php"><i class="fas fa-home me-1"></i> Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="treinamentosDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-graduate me-1"></i> Treinamentos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="treinamentos.php">Lista de Treinamentos</a></li>
                            <li><a class="dropdown-item" href="novo_treinamento.php">Cadastrar Novo</a></li>
                            <li><a class="dropdown-item" href="certificados.php">Certificados</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="inspecoesDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-clipboard-check me-1"></i> Inspeções
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="inspecoes.php">Agendadas</a></li>
                            <li><a class="dropdown-item" href="nova_inspecao.php">Nova Inspeção</a></li>
                            <li><a class="dropdown-item" href="relatorios_inspecoes.php">Relatórios</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="funcionarios.php"><i class="fas fa-users me-1"></i> Funcionários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="relatorios.php"><i class="fas fa-chart-bar me-1"></i> Relatórios</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>