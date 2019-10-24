<?php

class DAODepar{
    public function cadastrar(departamento $departamento){
        $sql = "INSERT INTO departamento
        VALUES (defaul, :nome)";
        
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $departamento->getNome());
        $con->execute();
        echo "Cadastro o departamento com Sucesso";

    }
}


?>
