<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | JS Empreendimentos</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Estilos Customizados -->
    <link rel="stylesheet" href="css/style.css">
    
    <style>
        .card-header {
            border-radius: 0.375rem 0.375rem 0 0 !important;
        }
        .stat-card {
            transition: transform 0.2s;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
        .progress {
            height: 10px;
        }
        .chart-container {
            height: 250px;
            position: relative;
        }
        .recent-activity-item {
            border-left: 3px solid #0d6efd;
            padding-left: 15px;
            margin-bottom: 15px;
        }
        .badge-status {
            font-size: 0.85em;
            padding: 0.35em 0.65em;
        }
    </style>
</head>
<body class="bg-light">
    <!-- Cabeçalho -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">
                <i class="fas fa-shield-alt me-2"></i>JS Empreendimentos
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle me-1"></i> Admin
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user-cog me-2"></i>Perfil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Configurações</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-sign-out-alt me-2"></i>Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Barra de Navegação Secundária -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php"><i class="fas fa-home me-1"></i> Dashboard</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="inspecoes.php"><i class="fas fa-clipboard-check me-1"></i> Inspeções</a>
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

    <!-- Conteúdo Principal -->
    <main class="container my-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <i class="fas fa-tachometer-alt me-2"></i> Painel Rápido
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="dashboard.php" class="list-group-item list-group-item-action active">
                            <i class="fas fa-home me-2"></i> Dashboard
                        </a>
                        <a href="treinamentos.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-user-graduate me-2"></i> Treinamentos
                        </a>
                        <a href="inspecoes.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-clipboard-check me-2"></i> Inspeções
                        </a>
                        <a href="funcionarios.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-users me-2"></i> Funcionários
                        </a>
                        <a href="relatorios.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-chart-bar me-2"></i> Relatórios
                        </a>
                    </div>
                </div>

                <div class="card shadow-sm mt-4">
                    <div class="card-header bg-primary text-white">
                        <i class="fas fa-calendar-check me-2"></i> Próximos 7 Dias
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="small">NR-35 Reciclagem</span>
                                <span class="badge bg-primary rounded-pill small"><?= date('d/m', strtotime('+1 day')) ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="small">Inspeção de EPIs</span>
                                <span class="badge bg-primary rounded-pill small"><?= date('d/m', strtotime('+3 days')) ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="small">NR-10 Básico</span>
                                <span class="badge bg-primary rounded-pill small"><?= date('d/m', strtotime('+5 days')) ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Área de Conteúdo -->
            <div class="col-lg-9">
                <!-- Seção de Boas-vindas -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-1">Bem-vindo, Admin!</h5>
                                <p class="text-muted mb-0">Aqui está um resumo das atividades recentes</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="periodoDropdown" data-bs-toggle="dropdown">
                                    <i class="fas fa-calendar-alt me-1"></i> Últimos 30 dias
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                                    <li><a class="dropdown-item" href="#">Últimos 7 dias</a></li>
                                    <li><a class="dropdown-item active" href="#">Últimos 30 dias</a></li>
                                    <li><a class="dropdown-item" href="#">Este mês</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Cards de Estatísticas -->
                <div class="row mb-4">
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card stat-card border-start border-primary border-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted mb-2">Funcionários</h6>
                                        <h4 class="mb-0">142</h4>
                                    </div>
                                    <div class="bg-primary bg-opacity-10 p-3 rounded">
                                        <i class="fas fa-users text-primary"></i>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <span class="text-success"><i class="fas fa-caret-up me-1"></i> 5.2%</span>
                                    <span class="text-muted ms-2">desde o último mês</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card stat-card border-start border-success border-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted mb-2">Treinamentos</h6>
                                        <h4 class="mb-0">28</h4>
                                    </div>
                                    <div class="bg-success bg-opacity-10 p-3 rounded">
                                        <i class="fas fa-user-graduate text-success"></i>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <span class="text-success"><i class="fas fa-caret-up me-1"></i> 12.3%</span>
                                    <span class="text-muted ms-2">desde o último mês</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card stat-card border-start border-warning border-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted mb-2">Inspeções</h6>
                                        <h4 class="mb-0">56</h4>
                                    </div>
                                    <div class="bg-warning bg-opacity-10 p-3 rounded">
                                        <i class="fas fa-clipboard-check text-warning"></i>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <span class="text-danger"><i class="fas fa-caret-down me-1"></i> 3.4%</span>
                                    <span class="text-muted ms-2">desde o último mês</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card stat-card border-start border-danger border-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted mb-2">Pendências</h6>
                                        <h4 class="mb-0">12</h4>
                                    </div>
                                    <div class="bg-danger bg-opacity-10 p-3 rounded">
                                        <i class="fas fa-exclamation-triangle text-danger"></i>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <span class="text-success"><i class="fas fa-caret-down me-1"></i> 8.7%</span>
                                    <span class="text-muted ms-2">desde o último mês</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Gráficos e Tabelas -->
                <div class="row">
                    <div class="col-lg-8 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                <h6 class="mb-0"><i class="fas fa-chart-line me-2"></i> Atividades Recentes</h6>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="chartDropdown" data-bs-toggle="dropdown">
                                        Treinamentos
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item active" href="#">Treinamentos</a></li>
                                        <li><a class="dropdown-item" href="#">Inspeções</a></li>
                                        <li><a class="dropdown-item" href="#">Certificados</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-container">
                                    <!-- Espaço para o gráfico (seria substituído por um gráfico real com Chart.js ou similar) -->
                                    <div class="d-flex align-items-center justify-content-center h-100">
                                        <img src="DASH.png" alt="Gráfico de atividades" class="img-fluid w-100" style="max-height: 280px; object-fit: contain;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0"><i class="fas fa-tasks me-2"></i> Status de Treinamentos</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>NR-35 Trabalho em Altura</span>
                                        <span>85%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%"></div>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>NR-10 Segurança Elétrica</span>
                                        <span>72%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 72%"></div>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>NR-33 Espaços Confinados</span>
                                        <span>64%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 64%"></div>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>NR-06 EPIs</span>
                                        <span>91%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 91%"></div>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>NR-12 Máquinas e Equip.</span>
                                        <span>53%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 53%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Últimas Atividades -->
                <div class="row mt-4">
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0"><i class="fas fa-clipboard-list me-2"></i> Últimas Inspeções</h6>
                            </div>
                            <div class="card-body">
                                <div class="recent-activity-item">
                                    <div class="d-flex justify-content-between">
                                        <strong>Inspeção de EPIs</strong>
                                        <small class="text-muted"><?= date('d/m/Y') ?></small>
                                    </div>
                                    <p class="mb-0 small">Área de Produção - 98% de conformidade</p>
                                </div>
                                
                                <div class="recent-activity-item">
                                    <div class="d-flex justify-content-between">
                                        <strong>Inspeção de Extintores</strong>
                                        <small class="text-muted"><?= date('d/m/Y', strtotime('-1 day')) ?></small>
                                    </div>
                                    <p class="mb-0 small">Prédio Administrativo - 2 itens não conformes</p>
                                </div>
                                
                                <div class="recent-activity-item">
                                    <div class="d-flex justify-content-between">
                                        <strong>Inspeção de Andaimes</strong>
                                        <small class="text-muted"><?= date('d/m/Y', strtotime('-2 days')) ?></small>
                                    </div>
                                    <p class="mb-0 small">Obra Nova - 100% conforme</p>
                                </div>
                                
                                <div class="text-center mt-2">
                                    <a href="inspecoes.php" class="btn btn-sm btn-outline-primary">Ver todas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0"><i class="fas fa-user-graduate me-2"></i> Treinamentos Recentes</h6>
                            </div>
                            <div class="card-body">
                                <div class="recent-activity-item">
                                    <div class="d-flex justify-content-between">
                                        <strong>NR-35 Reciclagem</strong>
                                        <small class="text-muted"><?= date('d/m/Y', strtotime('-1 day')) ?></small>
                                    </div>
                                    <p class="mb-0 small">15 funcionários treinados</p>
                                </div>
                                
                                <div class="recent-activity-item">
                                    <div class="d-flex justify-content-between">
                                        <strong>NR-10 Básico</strong>
                                        <small class="text-muted"><?= date('d/m/Y', strtotime('-3 days')) ?></small>
                                    </div>
                                    <p class="mb-0 small">8 novos eletricistas certificados</p>
                                </div>
                                
                                <div class="recent-activity-item">
                                    <div class="d-flex justify-content-between">
                                        <strong>Primeiros Socorros</strong>
                                        <small class="text-muted"><?= date('d/m/Y', strtotime('-5 days')) ?></small>
                                    </div>
                                    <p class="mb-0 small">20 colaboradores capacitados</p>
                                </div>
                                
                                <div class="text-center mt-2">
                                    <a href="treinamentos.php" class="btn btn-sm btn-outline-primary">Ver todos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Rodapé -->
    <footer class="footer mt-auto py-4 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="fas fa-shield-alt me-2"></i> JS Empreendimentos</h5>
                    <p class="mb-0">Sistema de Gestão de Treinamentos e Inspeções</p>
                    <p class="mb-0"><small>Versão 1.0.0</small></p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">
                        <i class="fas fa-phone-alt me-2"></i> (11) 1234-5678
                    </p>
                    <p class="mb-0">
                        <i class="fas fa-envelope me-2"></i> contato@jsempreendimentos.com.br
                    </p>
                    <p class="mb-0">
                        <i class="far fa-copyright me-2"></i> <?= date('Y') ?> Todos os direitos reservados
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Scripts Customizados -->
    <script>
        // Ativar tooltips
        document.addEventListener('DOMContentLoaded', function() {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[title]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
</body>
</html>