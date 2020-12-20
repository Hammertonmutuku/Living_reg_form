<?php
    $title = 'Registered';
    include_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['button'])){
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $dob = $_POST['date'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $contact2 = $_POST['emergency'];
        $specialty = $_POST['speciality'];
        $other = $_POST['others'];
       

      $isSuccess = $crud->insert($fname, $lname, $dob ,$email, $contact, $contact2, $specialty, $other);

      if($isSuccess){
          echo'<h1 class="text-center text-success">Welcome to living out</h1>';
      }else{
          echo'<h1 class="text-center text-danger">Not registered</h1>';
    }
}
?>


    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
        <?php echo $_POST['firstName'] . ' ' . $_POST['lastName']; ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
        <?php  echo $_POST['email']; ?>
        </h6>
        <p class="card-text">Date of Birth:<?php  echo $_POST['date']; ?></p>
        <p class="card-text">Area of specialty:<?php   echo $_POST['speciality']; ?></p>
        <p class="card-text">Other Area of specialty:<?php    echo $_POST['others']; ?></p>
        <a href="#" class="card-link"><?php echo $_POST['contact']; ?></a>
        <a href="#" class="card-link"><?php  echo $_POST['emergency']; ?></a>
    </div>
    </div>
 <?php
  require_once 'includes/footer.php';
?>