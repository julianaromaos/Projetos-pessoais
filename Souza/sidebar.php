<div class="card mb-4">
    <div class="card-header bg-primary text-white">
        <i class="fas fa-tachometer-alt me-2"></i>Painel Rápido
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

<div class="card mb-4">
    <div class="card-header bg-primary text-white">
        <i class="fas fa-calendar-check me-2"></i>Próximos 7 Dias
    </div>
    <div class="card-body p-0">
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>NR-35 Reciclagem</span>
                <span class="badge bg-primary"><?= date('d/m', strtotime('+1 day')) ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>Inspeção de EPIs</span>
                <span class="badge bg-primary"><?= date('d/m', strtotime('+3 days')) ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>NR-10 Básico</span>
                <span class="badge bg-primary"><?= date('d/m', strtotime('+5 days')) ?></span>
            </li>
        </ul>
    </div>
</div>