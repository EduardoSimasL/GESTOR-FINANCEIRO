<?php 
namespace App\Controllers;

use App\Models\Database;
use PDO;
class ReceitaController {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function adicionarReceita($valor, $descricao, $data, $categoria) {
        $stmt = $this->db->prepare("INSERT INTO receitas (valor, descricao, data, categoria) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$valor, $descricao, $data, $categoria]);
    }

    public function listarReceitas() {
        $stmt = $this->db->query("SELECT * FROM receitas");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function editarReceita($id, $valor, $descricao, $data, $categoria) {
        $stmt = $this->db->prepare("UPDATE receitas SET valor = ?, descricao = ?, data = ?, categoria = ? WHERE id = ?");
        return $stmt->execute([$valor, $descricao, $data, $categoria, $id]);
    }

    public function excluirReceita($id) {
        $stmt = $this->db->prepare("DELETE FROM receitas WHERE id = ?");
        return $stmt->execute([$id]);
    }
    public function getReceitaById($id) {
        $stmt = $this->db->prepare("SELECT * FROM receitas WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getTotalReceitas() {
        $stmt = $this->db->query("SELECT SUM(valor) as total FROM receitas");
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }
}
