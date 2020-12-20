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

    $results = $crud->editMembers($id,$fname,$lname,$dob,$email,$contact,$contact2,$specialty,$other);

    if($results){
        header("Location: index.php");
    }else{
        echo 'error';
    }
  }else{
      echo 'error';
  }
?>