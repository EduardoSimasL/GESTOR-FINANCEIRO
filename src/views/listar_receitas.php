<?php
namespace App\Views;
include 'header.php'; ?>
<h2>Listagem de Receitas</h2>
<table class="table">
    <thead>
        <tr>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Data</th>
            <th>Categoria</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($receitas as $receita): ?>
            <tr>
                <td><?= $receita['valor'] ?></td>
                <td><?= $receita['descricao'] ?></td>
                <td><?= $receita['data'] ?></td>
                <td><?= $receita['categoria'] ?></td>
                <td>
                    <a href="index.php?action=editar_receita&id=<?= $receita['id'] ?>" class="btn btn-warning">Editar</a>
                    <button onclick="confirmarExclusao('<?= $receita['id'] ?>', 'receita')" class="btn btn-danger">Excluir</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php include 'footer.php'; ?>
