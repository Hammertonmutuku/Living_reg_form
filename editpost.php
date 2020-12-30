<?php

    require_once 'db/conn.php';


  if(isset($_POST['button'])){
    $id = $_POST['id'];
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $dob = $_POST['date'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $contact2 = $_POST['emergency'];
    $specialty = $_POST['speciality'];
    $other = $_POST['others'];
    $type2 = $_POST['type2'];

    $results = $crud->editMembers($id,$fname,$lname,$dob,$email,$contact,$contact2,$specialty,$other,$type2);

    if($results){
        header("Location: view.php");
    }else{
        include_once 'includes/eror.php';
    }
  }else{
    include_once 'includes/eror.php';
  }
?>