<?php
    require_once 'db/conn.php';
    if(!$_GET['id']){
        include_once 'includes/erro.php';
        header("Location: view.php");

    }else{
        $id = $_GET['id'];

        $results = $crud->deleteMember($id);

        if($results){
            header("Location: view.php");
        }else{
            include_once 'includes/erro.php';
        }
    }
?>