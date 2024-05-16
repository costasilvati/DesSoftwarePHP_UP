<?php
class Eletronico extends Produto2{
    private $voltagem;
     // Construtor
     public function __construct($descricao, $estoque, $preco, $volt){
        parent::__construct($descricao, $estoque, $preco);
        $this->voltagem = $volt;
     }

     // Get e Set
     public function getVoltagem(){
        return $this->voltagem;
     }

     public function setVoltagem($voltagem){
        $this->voltagem = $voltagem;
     }

     public function __toString(){
        return parent::__toString()." Eletronico -- Voltagem {$this->voltagem}";
     }

}
?>