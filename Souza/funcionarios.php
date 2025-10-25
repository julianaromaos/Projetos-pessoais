<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários | JS Empreendimentos</title>
    
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
                        <a class="nav-link active" href="funcionarios.php"><i class="fas fa-users me-1"></i> Funcionários</a>
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
                        <a href="dashboard.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-home me-2"></i> Dashboard
                        </a>
                        <a href="treinamentos.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-user-graduate me-2"></i> Treinamentos
                        </a>
                        <a href="inspecoes.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-clipboard-check me-2"></i> Inspeções
                        </a>
                        <a href="funcionarios.php" class="list-group-item list-group-item-action active">
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
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0"><i class="fas fa-users me-2"></i> Lista de Funcionários</h5>
                        <a href="novo_funcionario.php" class="btn btn-light btn-sm">
                            <i class="fas fa-plus me-1"></i> Novo
                        </a>
                    </div>
                    
                    <div class="card-body">
                        <!-- Filtros -->
                        <div class="row mb-4">
                            <div class="col-md-5 mb-2">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" placeholder="Pesquisar funcionário...">
                                    <button class="btn btn-primary btn-sm" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <select class="form-select form-select-sm">
                                    <option>Todos os Status</option>
                                    <option>Ativos</option>
                                    <option>Inativos</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-2">
                                <select class="form-select form-select-sm">
                                    <option>Todos os Setores</option>
                                    <option>Segurança</option>
                                    <option>Operações</option>
                                    <option>Administrativo</option>
                                </select>
                            </div>
                            <div class="col-md-1 mb-2">
                                <button class="btn btn-primary btn-sm w-100">
                                    <i class="fas fa-filter"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Tabela de Funcionários -->
                        <div class="table-responsive">
                            <table class="table table-hover table-sm align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th width="30%">Nome</th>
                                        <th width="15%">Matrícula</th>
                                        <th width="20%">Cargo</th>
                                        <th width="15%">Setor</th>
                                        <th width="10%">Status</th>
                                        <th width="10%" class="text-center">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>João Silva</td>
                                        <td>12345</td>
                                        <td>Técnico de Segurança</td>
                                        <td>Segurança</td>
                                        <td><span class="badge bg-success badge-status">Ativo</span></td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-outline-primary action-btn" title="Visualizar">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-warning action-btn" title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Maria Oliveira</td>
                                        <td>12346</td>
                                        <td>Engenheira de Segurança</td>
                                        <td>Segurança</td>
                                        <td><span class="badge bg-success badge-status">Ativo</span></td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-outline-primary action-btn" title="Visualizar">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-warning action-btn" title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Carlos Souza</td>
                                        <td>12347</td>
                                        <td>Operador de Máquinas</td>
                                        <td>Operações</td>
                                        <td><span class="badge bg-success badge-status">Ativo</span></td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-outline-primary action-btn" title="Visualizar">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-warning action-btn" title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ana Santos</td>
                                        <td>12348</td>
                                        <td>Assistente Administrativo</td>
                                        <td>Administrativo</td>
                                        <td><span class="badge bg-success badge-status">Ativo</span></td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-outline-primary action-btn" title="Visualizar">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-warning action-btn" title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Pedro Costa</td>
                                        <td>12349</td>
                                        <td>Eletricista</td>
                                        <td>Operações</td>
                                        <td><span class="badge bg-secondary badge-status">Inativo</span></td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-outline-primary action-btn" title="Visualizar">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-warning action-btn" title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Paginação -->
                        <nav aria-label="Navegação de páginas" class="mt-4">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Anterior</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Próximo</a>
                                </li>
                            </ul>
                        </nav>
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