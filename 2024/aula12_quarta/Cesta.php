<?php
class Cesta{
    private $itens;

    public function adicionaItem(Produto2 $item){
        $this->itens[] = $item;
    }

    public function exibeLista(){
        foreach($this->itens as $item){
            print $item->__toString();
        }
    }

    public function calculaTotal(){
        $total = 0.0;
        foreach($this->itens as $item){
            $total += $item->getPreco();
        }
        return $total;
    }
}
?>