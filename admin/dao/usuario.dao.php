<?php

class DAOUsuario{
    public function cadastrar(Usuario $usuario){
        $sql = "INSERT INTO usuario
        VALUES (default, :nome, :senha)";
        
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $usuario->getNome());
        $con->bindValue(":senha", $usuario->getSenha());
        $con->execute();
        return "Cadastro com sucesso";

    }

    public function buscarPorId($id){
        $sql = "SELECT * FROM usuario WHERE pk_usuario = :id";
        $con = conexao::getInstance()->prepare($sql);
        $con->bindValue(":id",$id);
    }

}


?>
