<?php 
namespace App\Controllers;

use App\Models\Database;
use PDO;
class DespesaController {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function adicionarDespesa($valor, $descricao, $data, $categoria) {
        $stmt = $this->db->prepare("INSERT INTO despesas (valor, descricao, data, categoria) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$valor, $descricao, $data, $categoria]);
    }

    public function listarDespesas() {
        $stmt = $this->db->query("SELECT * FROM despesas");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function editarDespesa($id, $valor, $descricao, $data, $categoria) {
        $stmt = $this->db->prepare("UPDATE despesas SET valor = ?, descricao = ?, data = ?, categoria = ? WHERE id = ?");
        return $stmt->execute([$valor, $descricao, $data, $categoria, $id]);
    }

    public function excluirDespesa($id) {
        $stmt = $this->db->prepare("DELETE FROM despesas WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
