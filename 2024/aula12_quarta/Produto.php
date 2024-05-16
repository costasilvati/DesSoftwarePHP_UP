<?php
class Produto{
    public $descricao;
    public $estoque;
    public $preco;

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