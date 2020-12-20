<?php
    $title = 'Individual memebers';

    include_once 'includes/header.php';
    require_once 'db/conn.php';
   
   // Get members by id
   if(!isset($_GET['id'])){
    echo '<h1 class="text-danger">Try again</h1>';
  
   }else{
    $id = $_GET['id']; 
    $results = $crud->viewMembersDetails($id);
  
?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
        <?php echo $results['firstname'] . ' ' .$results['lastname']; ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
        <?php  echo $results['email']; ?>
        </h6>
        <p class="card-text">Date of Birth:<?php  echo $results['dateOfBirth']; ?></p>
        <p class="card-text">Area of specialty:<?php   echo$results['specialty']; ?></p>
        <p class="card-text">Other Area of specialty:<?php    echo $results['other']; ?></p>
        <a href="#" class="card-link"><?php echo $results['contact']; ?></a>
        <a href="#" class="card-link"><?php  echo $results['contact2']; ?></a>
    </div>
    </div>
<?php  }?>
<?php
include_once 'includes/footer.php'
?>