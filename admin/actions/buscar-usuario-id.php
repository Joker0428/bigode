<?php
if($GET['id']){
    include 'model/conexao.php';
    include 'model/usuario.class.php';
    include 'dao/usuario.dao.php';

    if($_POST){

        try{
            $DAO = new DAOUsuario();
            $usuario = $DAO->buscarPorId($_GET['id']);

        }catch(Exception $e){
            $msg = $e->getMessage();
        }
    }

?>