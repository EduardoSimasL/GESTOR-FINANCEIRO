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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $receitaController->adicionarReceita($_POST['valor'], $_POST['descricao'], $_POST['data'], $_POST['categoria']);
        header('Location: index.php?action=listar_receitas');
            exit();
        }
        include 'src/views/form_receita.php';
        break;
    case 'listar_receitas':
        $receitas = $receitaController->listarReceitas();
        include 'src/views/listar_receitas.php';
        break;
    case 'editar_receita':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $receitaController->editarReceita($_POST['id'], $_POST['valor'], $_POST['descricao'], $_POST['data'], $_POST['categoria']);
        header('Location: index.php?action=listar_receitas');
        exit();
    } else {
        $id = $_GET['id'] ?? null;
        $receita = $receitaController->getReceitaById($id);
        include 'src/views/editar_receita.php';
    }
        break;
    case 'excluir_receita':
        $receitaController->excluirReceita($_GET['id']);
        header('Location: index.php?action=listar_receitas');
        break;
    case 'adicionar_despesa':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $despesaController->adicionarDespesa($_POST['valor'], $_POST['descricao'], $_POST['data'], $_POST['categoria']);
            header('Location: index.php?action=listar_despesas');
            exit();
        }
        include 'src/views/form_despesa.php';
        break;
    case 'listar_despesas':
        $despesas = $despesaController->listarDespesas();
        include 'src/views/listar_despesas.php';
        break;
    case 'editar_despesa':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $despesaController->editarDespesa($_POST['id'], $_POST['valor'], $_POST['descricao'], $_POST['data'], $_POST['categoria']);
            header('Location: index.php?action=listar_despesas');
            exit();
        } else {
            $id = $_GET['id'] ?? null;
            $despesa = $despesaController->getDespesaById($id);
            include 'src/views/editar_despesa.php';
        }
        break;
    case 'excluir_despesa':
        $despesaController->excluirDespesa($_GET['id']);
        header('Location: index.php?action=listar_despesas');
        break;
    default:
        include 'src/views/home.php';
        break;
}
