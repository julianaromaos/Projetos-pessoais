<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Inspeção | JS Empreendimentos</title>
    
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
        .form-section {
            border-bottom: 1px solid #eee;
            padding-bottom: 1.5rem;
            margin-bottom: 1.5rem;
        }
        .form-section:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0;
        }
        .form-section-title {
            font-weight: 600;
            color: #0d6efd;
            margin-bottom: 1rem;
        }
        .required-field::after {
            content: " *";
            color: #dc3545;
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
                        <a class="nav-link dropdown-toggle active" href="#" id="treinamentosDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-graduate me-1"></i> Treinamentos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="treinamentos.php">Lista de Treinamentos</a></li>
                            <li><a class="dropdown-item active" href="novo_treinamento.php">Cadastrar Novo</a></li>
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
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0"><i class="fas fa-plus-circle me-2"></i> Cadastrar Nova Inspeção</h5>
                    </div>
                    
                    <div class="card-body">
                        <form>
                            <!-- Seção 1: Informações Básicas -->
                            <div class="form-section">
                                <h6 class="form-section-title"><i class="fas fa-info-circle me-2"></i>Informações Básicas</h6>
                                
                                <div class="row mb-3">
                                    <div class="col-md-8">
                                        <label for="nomeTreinamento" class="form-label required-field">Nome da Inspeção</label>
                                        <input type="text" class="form-control" id="nomeTreinamento" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="tipoTreinamento" class="form-label required-field">Tipo</label>
                                        <select class="form-select" id="tipoTreinamento" required>
                                            <option value="">Selecione...</option>
                                            <option value="Inspeções gerais">Inspeções gerais</option>
                                            <option value="Inspeções de rotina">Inspeções de rotina</option>
                                            <option value="Inspeções periódicas">Inspeções periódicas</option>
                                            <option value="Inspeções especiais">Inspeções especiais</option>
                                            <option value="Inspeções eventuais">Inspeções eventuais</option>
                                            <option value="Inspeções oficiais">Inspeções oficiais</option>
                                            <option value="outros">Outros</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="descricaoTreinamento" class="form-label">Descrição</label>
                                        <textarea class="form-control" id="descricaoTreinamento" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Seção 2: Detalhes do Treinamento -->
                            <div class="form-section">
                                <h6 class="form-section-title"><i class="fas fa-calendar-alt me-2"></i>Datas e Horários</h6>
                                
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="dataInicio" class="form-label required-field">Data de Início</label>
                                        <input type="date" class="form-control" id="dataInicio" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="dataTermino" class="form-label">Data de Término</label>
                                        <input type="date" class="form-control" id="dataTermino">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validade" class="form-label required-field">Validade (meses)</label>
                                        <input type="number" class="form-control" id="validade" min="1" value="12" required>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="horaInicio" class="form-label">Hora de Início</label>
                                        <input type="time" class="form-control" id="horaInicio">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="horaTermino" class="form-label">Hora de Término</label>
                                        <input type="time" class="form-control" id="horaTermino">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="cargaHoraria" class="form-label required-field">Carga Horária (horas)</label>
                                        <input type="number" class="form-control" id="cargaHoraria" min="1" value="8" required>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Seção 3: Local e Instrutor -->
                            <div class="form-section">
                                <h6 class="form-section-title"><i class="fas fa-map-marker-alt me-2"></i>Local</h6>
                                
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="localTreinamento" class="form-label required-field">Local</label>
                                        <select class="form-select" id="localTreinamento" required>
                                            <option value="">Selecione...</option>
                                            <option value="Área 1">Área 1</option>
                                            <option value="Área 2">Área 2</option>
                                            <option value="Área 3">Área 3</option>
                                            <option value="Área 4">Área 4</option>
                                        </select>
                                    </div>
                                  
                                </div>
                                
                                
                            </div>
                            
                            <!-- Seção 4: Documentos -->
                            <div class="form-section">
                                <h6 class="form-section-title"><i class="fas fa-file-alt me-2"></i>Documentos</h6>
                                
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="materialApoio" class="form-label">Material de Apoio</label>
                                        <input type="file" class="form-control" id="materialApoio">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="modeloCertificado" class="form-label">Modelo de Certificado</label>
                                        <input type="file" class="form-control" id="modeloCertificado">
                                    </div>
                                </div>
                                
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="gerarCertificado">
                                    <label class="form-check-label" for="gerarCertificado">Gerar certificado automaticamente</label>
                                </div>
                            </div>
                            
                            <!-- Botões de Ação -->
                            <div class="d-flex justify-content-between mt-4">
                                <a href="treinamentos.php" class="btn btn-secondary">
                                    <i class="fas fa-times me-1"></i> Cancelar
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-1"></i> Salvar Treinamento
                                </button>
                            </div>
                        </form>
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
</body>
</html>

<?php include("footer.php"); ?>