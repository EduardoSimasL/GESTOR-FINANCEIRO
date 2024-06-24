<?php 
class Despesa {
    public $id;
    public $valor;
    public $descricao;
    public $data;
    public $categoria;

    public function __construct($valor, $descricao, $data, $categoria) {
        $this->valor = $valor;
        $this->descricao = $descricao;
        $this->data = $data;
        $this->categoria = $categoria;
    }
}
