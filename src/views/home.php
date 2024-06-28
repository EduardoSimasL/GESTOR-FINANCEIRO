<?php include 'header.php'; ?>
<!-- body aqui -->
<h2>Home</h2>

<div class="content">
    <h2>Resumo</h2>
    <p>Total de Receitas: R$ <?= number_format($totalReceitas, 2, ',', '.') ?></p>
    <p>Total de Despesas: R$ <?= number_format($totalDespesas, 2, ',', '.') ?></p>

    <h2>Receitas e Despesas por Mês</h2>
    <div class="chart-container">
        <canvas id="financasChart"></canvas>
    </div>
</div>

<script>
    const ctx = document.getElementById('financasChart').getContext('2d');
    const financasChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [<?php foreach ($receitasPorMes as $item) { echo "'" . $item['mes'] . "', "; } ?>],
            datasets: [{
                label: 'Receitas',
                data: [<?php foreach ($receitasPorMes as $item) { echo $item['total'] . ', '; } ?>],
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }, {
                label: 'Despesas',
                data: [<?php foreach ($despesasPorMes as $item) { echo $item['total'] . ', '; } ?>],
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>
</html>


<?php include 'footer.php'; ?>



