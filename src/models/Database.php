<?php 
namespace App\Models;

use PDO;
class Database {
    private static $instance = null;
    private $pdo;

    private function __construct() {
        $this->pdo = new PDO('sqlite:database/financas.db');
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->pdo;
    }

    public static function getConnection1() {
        if (self::$pdo === null) {
            self::$pdo = new PDO('sqlite:' . __DIR__ . '/../../database/financas.db');
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$pdo;
    }
}
