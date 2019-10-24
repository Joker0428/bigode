<?php

class DAOCliente{
    public function cadastrar(Cliente $cliente){
        $sql = "INSERT INTO cliente
        VALUES (default, :nome, :endereco, :cep, :email, :cpf)";
        
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $cliente->getNome());
        $con->bindValue(":endereco", $cliente->getEndereco());
        $con->bindValue(":cep", $cliente->getCep());
        $con->bindValue(":email", $cliente->getEmail());
        $con->bindValue(":cpf", $cliente->getCpf());
        $con->execute();
        echo "Cadastro com sucesso";

    }
}


?>
