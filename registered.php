<?php
    $title = 'Registered';
    include_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['button'])){
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $contact2 = $_POST['emergency'];
        $dob = $_POST['date'];
        $specialty = $_POST['speciality'];
        $other = $_POST['others'];
        $type2 = $_POST['type2'];       

      $isSuccess = $crud->insert($fname, $lname, $email, $contact, $contact2,$dob, $specialty, $other,$type2);

      if($isSuccess){
        include_once 'includes/success.php';
      }else{
          include_once 'includes/error.php';
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
        <p class="card-text">Type of Member:<?php  echo $_POST['type2']; ?></p>
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