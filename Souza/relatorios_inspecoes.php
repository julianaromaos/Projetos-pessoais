<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios de Inspeções | JS Empreendimentos</title>
    
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
        .table-hover tbody tr:hover {
            background-color: rgba(13, 110, 253, 0.05);
        }
        .badge-status {
            font-size: 0.85em;
            padding: 0.35em 0.65em;
        }
        .action-btn {
            width: 30px;
            height: 30px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .chart-container {
            height: 300px;
            position: relative;
        }
        .filter-card {
            transition: all 0.3s;
        }
        .filter-card:hover {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
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
                    <li class="nav-item">
                        <a class="nav-link" href="inspecoes.php"><i class="fas fa-clipboard-check me-1"></i> Inspeções</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="funcionarios.php"><i class="fas fa-users me-1"></i> Funcionários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="relatorios_inspecoes.php"><i class="fas fa-chart-bar me-1"></i> Relatórios</a>
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
                        <a href="dashboard.php" class="list-group-item list-group-item-action">
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
                        <a href="relatorios_inspecoes.php" class="list-group-item list-group-item-action active">
                            <i class="fas fa-chart-bar me-2"></i> Relatórios
                        </a>
                    </div>
                </div>

                <div class="card shadow-sm mt-4">
                    <div class="card-header bg-primary text-white">
                        <i class="fas fa-filter me-2"></i> Filtros Salvos
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="small">Inspeções do Mês</span>
                                <button class="btn btn-sm btn-outline-primary py-0 px-2">Aplicar</button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="small">Não Conformidades</span>
                                <button class="btn btn-sm btn-outline-primary py-0 px-2">Aplicar</button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="small">Área de Produção</span>
                                <button class="btn btn-sm btn-outline-primary py-0 px-2">Aplicar</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Área de Conteúdo -->
            <div class="col-lg-9">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0"><i class="fas fa-chart-pie me-2"></i> Relatórios de Inspeções</h5>
                        <div>
                            <button class="btn btn-light btn-sm me-2">
                                <i class="fas fa-file-export me-1"></i> Exportar
                            </button>
                            <button class="btn btn-light btn-sm">
                                <i class="fas fa-print me-1"></i> Imprimir
                            </button>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <!-- Filtros Avançados -->
                        <div class="row mb-4">
                            <div class="col-md-3 mb-2">
                                <label class="form-label small">Data Inicial</label>
                                <input type="date" class="form-control form-control-sm" value="<?= date('Y-m-01') ?>">
                            </div>
                            <div class="col-md-3 mb-2">
                                <label class="form-label small">Data Final</label>
                                <input type="date" class="form-control form-control-sm" value="<?= date('Y-m-d') ?>">
                            </div>
                            <div class="col-md-3 mb-2">
                                <label class="form-label small">Tipo de Inspeção</label>
                                <select class="form-select form-select-sm">
                                    <option>Todos</option>
                                    <option>EPIs</option>
                                    <option>Extintores</option>
                                    <option>Andaimes</option>
                                    <option>Máquinas</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-2">
                                <label class="form-label small">Status</label>
                                <select class="form-select form-select-sm">
                                    <option>Todos</option>
                                    <option>Conforme</option>
                                    <option>Não Conforme</option>
                                    <option>Pendente</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label class="form-label small">Área/Setor</label>
                                <select class="form-select form-select-sm">
                                    <option>Todos</option>
                                    <option>Produção</option>
                                    <option>Administrativo</option>
                                    <option>Armazém</option>
                                    <option>Obra Nova</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label class="form-label small">Inspetor</label>
                                <select class="form-select form-select-sm">
                                    <option>Todos</option>
                                    <option>João Silva</option>
                                    <option>Maria Oliveira</option>
                                    <option>Carlos Souza</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-2 d-flex align-items-end">
                                <button class="btn btn-primary btn-sm w-100">
                                    <i class="fas fa-filter me-1"></i> Filtrar
                                </button>
                            </div>
                        </div>
                        
                        <!-- Gráficos de Resumo -->
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <div class="card filter-card h-100">
                                    <div class="card-header bg-light">
                                        <h6 class="mb-0"><i class="fas fa-chart-bar me-2"></i> Inspeções por Tipo</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-container">
                                            <!-- Espaço para o gráfico -->
                                            <div class="d-flex align-items-center justify-content-center h-100">
                                                <img src="grafico_inspecao.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card filter-card h-100">
                                    <div class="card-header bg-light">
                                        <h6 class="mb-0"><i class="fas fa-chart-pie me-2"></i> Status das Inspeções</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-container">
                                            <!-- Espaço para o gráfico -->
                                            <div class="d-flex align-items-center justify-content-center h-100">
                                                <img src="status.png" alt="Gráfico de pizza" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Tabela de Resultados -->
                        <div class="card filter-card mb-4">
                            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                <h6 class="mb-0"><i class="fas fa-table me-2"></i> Resultados das Inspeções</h6>
                                <span class="badge bg-primary">Total: 48 inspeções</span>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover table-sm align-middle mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th width="15%">Data</th>
                                                <th width="20%">Tipo</th>
                                                <th width="20%">Área/Setor</th>
                                                <th width="15%">Inspetor</th>
                                                <th width="15%">Status</th>
                                                <th width="15%" class="text-center">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?= date('d/m/Y') ?></td>
                                                <td>EPIs</td>
                                                <td>Área de Produção</td>
                                                <td>João Silva</td>
                                                <td><span class="badge bg-success badge-status">Conforme</span></td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-outline-primary action-btn" title="Visualizar">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-sm btn-outline-secondary action-btn" title="Relatório">
                                                        <i class="fas fa-file-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?= date('d/m/Y', strtotime('-1 day')) ?></td>
                                                <td>Extintores</td>
                                                <td>Prédio Administrativo</td>
                                                <td>Maria Oliveira</td>
                                                <td><span class="badge bg-warning badge-status">Não Conforme</span></td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-outline-primary action-btn" title="Visualizar">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-sm btn-outline-secondary action-btn" title="Relatório">
                                                        <i class="fas fa-file-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?= date('d/m/Y', strtotime('-2 days')) ?></td>
                                                <td>Andaimes</td>
                                                <td>Obra Nova</td>
                                                <td>Carlos Souza</td>
                                                <td><span class="badge bg-success badge-status">Conforme</span></td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-outline-primary action-btn" title="Visualizar">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-sm btn-outline-secondary action-btn" title="Relatório">
                                                        <i class="fas fa-file-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?= date('d/m/Y', strtotime('-3 days')) ?></td>
                                                <td>Máquinas</td>
                                                <td>Área de Produção</td>
                                                <td>João Silva</td>
                                                <td><span class="badge bg-danger badge-status">Pendente</span></td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-outline-primary action-btn" title="Visualizar">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-sm btn-outline-secondary action-btn" title="Relatório">
                                                        <i class="fas fa-file-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?= date('d/m/Y', strtotime('-5 days')) ?></td>
                                                <td>EPIs</td>
                                                <td>Armazém</td>
                                                <td>Maria Oliveira</td>
                                                <td><span class="badge bg-success badge-status">Conforme</span></td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-outline-primary action-btn" title="Visualizar">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-sm btn-outline-secondary action-btn" title="Relatório">
                                                        <i class="fas fa-file-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Resumo de Não Conformidades -->
                        <div class="card filter-card">
                            <div class="card-header bg-light">
                                <h6 class="mb-0"><i class="fas fa-exclamation-triangle me-2"></i> Não Conformidades Identificadas</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>Tipo</th>
                                                <th>Descrição</th>
                                                <th>Área</th>
                                                <th>Data</th>
                                                <th>Status</th>
                                                <th>Responsável</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>EPI</td>
                                                <td>Luvas de proteção danificadas</td>
                                                <td>Produção</td>
                                                <td><?= date('d/m/Y', strtotime('-1 day')) ?></td>
                                                <td><span class="badge bg-warning">Em correção</span></td>
                                                <td>João Silva</td>
                                            </tr>
                                            <tr>
                                                <td>Extintor</td>
                                                <td>Pressão abaixo do recomendado</td>
                                                <td>Administrativo</td>
                                                <td><?= date('d/m/Y', strtotime('-2 days')) ?></td>
                                                <td><span class="badge bg-success">Corrigido</span></td>
                                                <td>Maria Oliveira</td>
                                            </tr>
                                            <tr>
                                                <td>Sinalização</td>
                                                <td>Falta de placa de emergência</td>
                                                <td>Armazém</td>
                                                <td><?= date('d/m/Y', strtotime('-3 days')) ?></td>
                                                <td><span class="badge bg-danger">Pendente</span></td>
                                                <td>Carlos Souza</td>
                                            </tr>
                                        </tbody>
                                    </table>
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