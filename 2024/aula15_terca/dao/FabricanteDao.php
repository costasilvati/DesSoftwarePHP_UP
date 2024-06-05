<?php
class FabricanteDao{

    public function inserir(Fabricante $fab){
        try{
            $sql = "insert into fabricante (nome, endereco, documento) values 
                    (:nome, :endereco, :documento);";
            $con_sql = ConnectionFactory::getConnection()->prepare($sql);
            $con_sql->bindValue(":nome", $fab->getNome());
            $con_sql->bindValue(":endereco", $fab->getEndereco());
            $con_sql->bindValue(":documento", $fab->getDocumento());
            return $con_sql->execute();
        }catch(Exception $e){
            print "<p>Erro ao inserir Fabricante </p> <p> $e </p>";
        }
    }

    public function read(){
        try{
            $sql = "SELECT * FROM fabricante";
            $result = ConnectionFactory::getConnection()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach($lista as $l){
                $fab_lista[] = $this->listaFabricantes($l);
            }
            return $fab_lista;
        }catch(Exception $e){
            print "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
        
    }

    public function listaFabricantes($row){
        $fabricante = new Fabricante;
        $fabricante->setId($row['id']);
        $fabricante->setNome($row['nome']);
        $fabricante->setEndereco($row['endereco']);
        $fabricante->setDocumento($row['documento']);

        return $fabricante;
    }

    public function delete(Fabricante $fabricante) {
        try {
            $sql = "DELETE FROM fabricante WHERE id = :id";
            $p_sql = ConnectionFactory::getConnection()->prepare($sql);
            $p_sql->bindValue(":id", $fabricante->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Excluir Fabricnate<br> $e <br>";
        }
    }
}
?>