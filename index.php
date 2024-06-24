<?php
require 'src/models/Database.php';
require 'src/models/Despesa.php';
require 'src/models/Receita.php';
require 'src/controllers/ReceitaController.php';
require 'src/controllers/DespesaController.php';

use App\controllers\ReceitaController;
use App\Controllers\DespesaController;

$receitaController = new ReceitaController();
$despesaController = new DespesaController();

$action = $_GET['action'] ?? null;

switch ($action) {
    case 'adicionar_receita':
        $receitaController->adicionarReceita($_POST['valor'], $_POST['descricao'], $_POST['data'], $_POST['categoria']);
        header('Location: index.php?action=listar_receitas');
        break;
    case 'listar_receitas':
        $receitas = $receitaController->listarReceitas();
        include 'src/views/listar_receitas.php';
        break;
    case 'editar_receita':
        // lógica para edição de receita
        break;
    case 'excluir_receita':
        $receitaController->excluirReceita($_GET['id']);
        header('Location: index.php?action=listar_receitas');
        break;
    case 'adicionar_despesa':
        $despesaController->adicionarDespesa($_POST['valor'], $_POST['descricao'], $_POST['data'], $_POST['categoria']);
        header('Location: index.php?action=listar_despesas');
        break;
    case 'listar_despesas':
        $despesas = $despesaController->listarDespesas();
        include 'src/views/listar_despesas.php';
        break;
    case 'editar_despesa':
        // lógica para edição de despesa
        break;
    case 'excluir_despesa':
        $despesaController->excluirDespesa($_GET['id']);
        header('Location: index.php?action=listar_despesas');
        break;
    default:
        include 'src/views/home.php';
        break;
}
