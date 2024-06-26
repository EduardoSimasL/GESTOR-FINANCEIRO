<?php

namespace App\Views;

use App\Controllers\DespesaController;

include 'header.php';

$despesaController = new DespesaController();
$despesas = $despesaController->listarDespesas();

?>

<div class="container">
    <h2>Listagem de Despesas</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Data</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($despesas as $despesa) : ?>
                <tr>
                    <td><?php echo $despesa['id']; ?></td>
                    <td><?php echo $despesa['valor']; ?></td>
                    <td><?php echo $despesa['descricao']; ?></td>
                    <td><?php echo $despesa['data']; ?></td>
                    <td><?php echo $despesa['categoria']; ?></td>
                    <td>
                        <a href="index.php?action=editar_despesa&id=<?= $despesa['id'] ?>" class="btn btn-warning">Editar</a>
                        <button onclick="confirmarExclusao('<?= $despesa['id'] ?>', 'despesa')" class="btn btn-danger">Excluir</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php';?>
