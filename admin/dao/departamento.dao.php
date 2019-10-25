<?php

class DAODepartamento{
    public function cadastrar(Departamento $departamento){
        $sql = "INSERT INTO departamento
        VALUES (default, :nome)";
        
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $departamento->getNome());
        $con->execute();

        return "Cadastro o departamento com Sucesso";

    }
}


?>
