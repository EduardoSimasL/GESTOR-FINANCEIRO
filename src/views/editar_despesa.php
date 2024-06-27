<?php include 'header.php'; ?>
<h2>Editar Despesa</h2>
<form action="index.php?action=editar_despesa" method="POST">
    <input type="hidden" name="id" value="<?php echo $despesa['id']; ?>">
    <div class="form-group">
        <label for="valor">Valor</label>
        <input type="number" step="0.01" class="form-control" id="valor" name="valor" value="<?php echo $despesa['valor']; ?>" required>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $despesa['descricao']; ?>">
    </div>
    <div class="form-group">
        <label for="data">Data</label>
        <input type="date" class="form-control" id="data" name="data" value="<?php echo $despesa['data']; ?>" required>
    </div>
    <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" class="form-control" id="categoria" name="categoria" value="<?php echo $despesa['categoria']; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
<?php include 'footer.php'; ?>