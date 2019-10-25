<?php

class DAODepartamento{
    public function cadastrar(Departamento $departamento2){
        $sql = "INSERT INTO departamento2
        VALUES (default, :nome)";
        
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $departamento2->getNome());
        $con->execute();

        return "Cadastro o departamento com Sucesso";

    }
}


?>
