<?php

    include 'model/conexao.php';
    include 'model/depar.class.php';
    include 'dao/depar.dao.php';

    if($_POST){

        try{
            $obj = new Depar();
            $obj->setNome($_POST['nome']);
           

            $DAO = new DAODepar();
            $DAO->cadastrar($obj);

        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

?>