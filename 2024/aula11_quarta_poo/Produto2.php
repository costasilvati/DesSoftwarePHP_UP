<?php
class Produto2{
    private $descricao;
    private $estoque;
    private $preco;

    public function __construct($descricao, $estoque, $preco){
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getEstoque(){
        return $this->estoque;
    }

    public function setEstoque($estoque){
        $this->estoque = $estoque;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }

    public function aumentarEstoque($unidades){
        if(is_numeric($unidades) AND $unidades > 0){
            $this->estoque += $unidades;
        }
    }

    public function toString(){
        return "Produto: {$this->descricao} - 
        Estoque: {$this->estoque} - 
        Preço: {$this->preco}";
    }
}
?>