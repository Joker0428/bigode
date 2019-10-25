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
        return "Cadastro com sucesso";

    }
    public function listaClientes(){
        $sql = "SELECT * FROM cliente";
        $con = conexao::getInstance()->prepare($sql);
        $con->execute();

        $lista = array();

        while($cliente = $con->fetch(PDO::FETCH_ASSOC)){
            $lista[] = $cliente;
        }

        return $lista;
    }
}


?>
