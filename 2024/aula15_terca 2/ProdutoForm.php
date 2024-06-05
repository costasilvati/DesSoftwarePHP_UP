<?php
    include 'html/produto.html';
    
    // Receba os dados e instancie um objeto Produto
    if(isset($_POST['descricao']) and isset($_POST['preco']) and isset($_POST['estoque'])){
        require_once 'model/Produto.php'; // Estrutura da classe Produto
        $p1 = new Produto($_POST['descricao'],$_POST['estoque'], $_POST['preco']);

        $fab1 = new Fabricante;
        $fab1->setNome($_POST['fabricante']);
        $p1->setFabricante($fab1);
        echo $p1->__toString();
        /* // Igual a associção abaixo
        $desc = $_POST['descricao'];
        $estoque = $_POST['estoque']
        $preco = $_POST['preco'];
        $p1 = new Produto($descricao,$estoque, $preco);
        */ 
        require_once 'banco/ConnectionFactory.php';
        $bd = new ConnectionFactory;

    }else{
        echo "Não é post";
    }

    //Imprima o objeto com o método toString
?>