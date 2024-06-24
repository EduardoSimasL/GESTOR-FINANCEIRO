<?php include 'header.php'; ?>
<!-- body aqui -->
<h2>Adicionar Receita</h2>
<form action="index.php?action=adicionar_receita" method="POST">
    <div class="form-group">
        <label for="valor">Valor</label>
        <input type="number" step="0.01" class="form-control" id="valor" name="valor" required>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" id="descricao" name="descricao">
    </div>
    <div class="form-group">
        <label for="data">Data</label>
        <input type="date" class="form-control" id="data" name="data" required>
    </div>
    <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" class="form-control" id="categoria" name="categoria">
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
<?php include 'footer.php'; ?>



