<?php
if($GET['id']){
    include 'model/conexao.php';
    include 'model/usuario.class.php';
    include 'dao/usuario.dao.php';
    
        try{
            $DAO = new DAOUsuario();
            $usuario = $DAO->buscarPorId($_GET['id']);

        }catch(Exception $e){
            $msg = $e->getMessage();
        }
    }

?>