<?php

class Transacao
{
    

    public static function selecionaTodos() {
        
        $con = Connection::getConn();
        
        $sql = "SELECT * FROM transacoes ORDER BY id DESC";
        
        $sql = $con -> prepare($sql);
        $sql->execute();
        
        $resultado = array();
        
        while($row = $sql->fetchObject('Transacao'))
        {
            $resultado[] = $row;
        }
        
        
        if (!$resultado){
            throw new Exception("Nenhum registro encontrado");
        }
        return $resultado;
        
        //var_dump($sql->fetchAll());
        
        
        
        
        //$con2 = Connection::getConn();
        //var_dump($con, $con2);
        
        
    }
    
   
   function insert_transacoes($valor,$descricao,$data) {
        
       $con = Connection::getConn();
       
        $count = 0;
        $query = "INSERT INTO transacoes 
                        (valor,descricao,data) 
                    VALUES 
                        (:newvalor, :descricao, :data)";
        $statement = $con->prepare($query);
        $statement->bindValue(':newvalor', $valor);
        $statement->bindValue(':descricao', $descricao);
        $statement->bindValue(':data', $data);

        if ($statement->execute()) {
            $count = $statement->rowCount();
        };
        $statement->closeCursor();
        return $count;
    }
    
    
    
    function delete_transacoes($id) {
        
        $con = Connection::getConn();
        
        
        $count = 0;
        $query = 'DELETE FROM transacoes 
                WHERE ID = :id';
        $statement = $con->prepare($query);
        $statement->bindValue(':id', $id);
        if ($statement->execute()) {
            $count = $statement->rowCount();
        };
        $statement->closeCursor();
        return $count;
    }
    
    
    
    
    
}

?>