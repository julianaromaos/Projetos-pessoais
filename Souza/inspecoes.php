<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Inspeções | JS Empreendimentos</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .card-header {
            border-radius: 0.375rem 0.375rem 0 0 !important;
        }
        .table-hover tbody tr:hover {
            background-color: rgba(13, 110, 253, 0.05);
        }
        .badge {
            font-weight: 500;
            padding: 0.35em 0.65em;
        }
        .action-buttons .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
        }
        .pagination .page-item.active .page-link {
            background-color: #0d6efd;
            border-color: #0d6efd;
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
                    <li class="nav-item">
                        <a class="nav-link" href="treinamentos.php"><i class="fas fa-user-graduate me-1"></i> Treinamentos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="inspecoesDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-clipboard-check me-1"></i> Inspeções
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item active" href="inspecoes.php">Lista de Inspeções</a></li>
                            <li><a class="dropdown-item" href="nova_inspecao.php">Cadastrar Nova</a></li>
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
                        <a href="inspecoes.php" class="list-group-item list-group-item-action active">
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
                        <i class="fas fa-exclamation-triangle me-2"></i> Inspeções Pendentes
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="small">Verificação de EPIs</span>
                                <span class="badge bg-warning text-dark rounded-pill small">2 dias</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="small">Inspeção de Extintores</span>
                                <span class="badge bg-danger rounded-pill small">Atrasada</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="small">Área de Produção</span>
                                <span class="badge bg-primary rounded-pill small">5 dias</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Área de Conteúdo -->
            <div class="col-lg-9">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0"><i class="fas fa-clipboard-check me-2"></i> Lista de Inspeções</h5>
                        <a href="nova_inspecao.php" class="btn btn-light btn-sm">
                            <i class="fas fa-plus me-1"></i> Nova Inspeção
                        </a>
                    </div>
                    
                    <div class="card-body">
                        <!-- Filtros -->
                        <div class="row mb-3 g-3">
                            <div class="col-md-4">
                                <label for="filtroStatus" class="form-label">Status</label>
                                <select id="filtroStatus" class="form-select">
                                    <option value="">Todos</option>
                                    <option value="pendente">Pendente</option>
                                    <option value="concluida">Concluída</option>
                                    <option value="cancelada">Cancelada</option>
                                    <option value="agendada">Agendada</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="filtroTipo" class="form-label">Tipo</label>
                                <select id="filtroTipo" class="form-select">
                                    <option value="">Todos</option>
                                    <option value="epi">EPIs</option>
                                    <option value="seguranca">Segurança</option>
                                    <option value="equipamento">Equipamentos</option>
                                    <option value="area">Área</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="filtroData" class="form-label">Período</label>
                                <input type="month" id="filtroData" class="form-control">
                            </div>
                        </div>
                        
                        <!-- Tabela de Inspeções -->
                        <div class="table-responsive">
                            <table class="table table-hover table-striped align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th width="20%">Área</th>
                                        <th width="15%">Tipo</th>
                                        <th width="15%">Data</th>
                                        <th width="20%">Responsável</th>
                                        <th width="15%">Status</th>
                                        <th width="15%" class="text-center">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Linha de Produção 1</td>
                                        <td>EPIs</td>
                                        <td>15/06/2023</td>
                                        <td>João Silva</td>
                                        <td><span class="badge bg-success">Concluída</span></td>
                                        <td class="text-center action-buttons">
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="detalhes_inspecao.php?id=1" class="btn btn-outline-primary" title="Visualizar">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="editar_inspecao.php?id=1" class="btn btn-outline-warning" title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-danger" title="Excluir">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Almoxarifado Central</td>
                                        <td>Equipamentos</td>
                                        <td>20/06/2023</td>
                                        <td>Maria Oliveira</td>
                                        <td><span class="badge bg-warning text-dark">Pendente</span></td>
                                        <td class="text-center action-buttons">
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="detalhes_inspecao.php?id=2" class="btn btn-outline-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="editar_inspecao.php?id=2" class="btn btn-outline-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Escritório Administrativo</td>
                                        <td>Segurança</td>
                                        <td>25/06/2023</td>
                                        <td>Carlos Souza</td>
                                        <td><span class="badge bg-secondary">Agendada</span></td>
                                        <td class="text-center action-buttons">
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="detalhes_inspecao.php?id=3" class="btn btn-outline-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="editar_inspecao.php?id=3" class="btn btn-outline-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Área Externa</td>
                                        <td>Segurança</td>
                                        <td>10/06/2023</td>
                                        <td>Ana Paula</td>
                                        <td><span class="badge bg-danger">Atrasada</span></td>
                                        <td class="text-center action-buttons">
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="detalhes_inspecao.php?id=4" class="btn btn-outline-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="editar_inspecao.php?id=4" class="btn btn-outline-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Paginação -->
                        <nav aria-label="Navegação de páginas">
                            <ul class="pagination justify-content-center mt-3">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Anterior</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Próxima</a>
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
                    <p class="mb-0">Sistema de Gestão de Inspeções e Segurança</p>
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
</body>
</html>
<?php include("footer.php"); ?>
