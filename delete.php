<?php
    require_once 'db/conn.php';
    if(!$_GET['id']){
        echo 'error';

    }else{
        $id = $_GET['id'];

        $results = $crud->deleteMember($id);

        if($results){
            header("Location: view.php");
        }else{
            echo '';
        }
    }
?>