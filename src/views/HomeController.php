<?php
namespace App\Controllers;

use App\Models\Database;
use App\Controllers\ReceitaController;
use App\Controllers\DespesaController;

class HomeController {
    private $receitaController;
    private $despesaController;

    public function __construct() {
        $this->receitaController = new ReceitaController();
        $this->despesaController = new DespesaController();
    }

    public function index() {
        $totalReceitas = $this->receitaController->getTotalReceitas();
        $totalDespesas = $this->despesaController->getTotalDespesas();

        include __DIR__ . '/../views/home.php';
    }
}
