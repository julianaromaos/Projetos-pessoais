<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Ícones Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <title>Sistema de Gestão - JS Empreendimentos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">
    <?php include("cabecalho.php"); ?>
    
    <main class="container mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <i class="fas fa-tachometer-alt me-2"></i>Painel Rápido
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="novo_treinamento.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-plus-circle me-2 text-success"></i>Novo Treinamento
                        </a>
                        <a href="nova_inspecao.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-plus-circle me-2 text-info"></i>Nova Inspeção
                        </a>
                        <a href="funcionarios.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-user-plus me-2 text-warning"></i>Cadastrar Funcionário
                        </a>
                        <a href="relatorios.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-file-export me-2 text-primary"></i>Gerar Relatório
                        </a>
                    </div>
                </div>
                
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <i class="fas fa-calendar-check me-2"></i>Próximos 7 Dias
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Segurança NR-10</span>
                                <span class="badge bg-primary">15/06</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Inspeção EPIs</span>
                                <span class="badge bg-primary">16/06</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Primeiros Socorros</span>
                                <span class="badge bg-primary">18/06</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Conteúdo Principal -->
            <div class="col-md-9">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-chart-line me-2"></i>Visão Geral
                        </div>
                        <div>
                          <?php
date_default_timezone_set('America/Sao_Paulo');
?>

                            <span class="badge bg-light text-dark">Atualizado: <?php echo date('d/m/Y H:i'); ?></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="card text-white bg-success h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Treinamentos Concluídos</h5>
                                        <h2 class="card-text">128</h2>
                                        <p class="card-text"><small>Este mês</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card text-white bg-warning h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Treinamentos Pendentes</h5>
                                        <h2 class="card-text">24</h2>
                                        <p class="card-text"><small>Ações necessárias</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card text-white bg-danger h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Inspeções Atrasadas</h5>
                                        <h2 class="card-text">5</h2>
                                        <p class="card-text"><small>Urgente</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <h4 class="mt-4"><i class="fas fa-bell me-2"></i>Alertas Recentes</h4>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Treinamento de Segurança vence em 3 dias</h6>
                                    <small class="text-danger">Urgente</small>
                                </div>
                                <p class="mb-1">15 funcionários precisam renovar o certificado</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Inspeção de EPIs pendente</h6>
                                    <small class="text-warning">Pendente</small>
                                </div>
                                <p class="mb-1">Setor de Produção - Responsável: João Silva</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Certificado NR-33 expirado</h6>
                                    <small class="text-danger">Urgente</small>
                                </div>
                                <p class="mb-1">8 funcionários necessitam de reciclagem</p>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Próximos Eventos -->
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <i class="fas fa-calendar-alt me-2"></i>Próximos Eventos
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Data</th>
                                        <th>Tipo</th>
                                        <th>Descrição</th>
                                        <th>Responsável</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>15/06/2023</td>
                                        <td><span class="badge bg-success">Treinamento</span></td>
                                        <td>NR-35 - Trabalho em Altura</td>
                                        <td>Maria Oliveira</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18/06/2023</td>
                                        <td><span class="badge bg-info">Inspeção</span></td>
                                        <td>Equipamentos de Combate a Incêndio</td>
                                        <td>Carlos Souza</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20/06/2023</td>
                                        <td><span class="badge bg-success">Treinamento</span></td>
                                        <td>NR-10 - Segurança em Eletricidade</td>
                                        <td>Ana Paula</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary"><i class="fas fa-plus me-2"></i>Ver Calendário Completo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include("footer.php"); ?>

    <!-- Bootstrap JS e dependências -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>