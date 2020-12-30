<?php
    $title = 'Individual memebers';

    include_once 'includes/header.php';
    require_once 'db/conn.php';
   
   // Get members by id
   if(!isset($_GET['id'])){
    include_once 'includes/eror.php';
  
   }else{
    $id = $_GET['id']; 
    $results = $crud->viewMembersDetails($id);
  
?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
        <?php echo $results['firstName'] . ' ' .$results['lastName']; ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
        <?php  echo $results['Email']; ?>
        </h6>
        <p class="card-text">Date of Birth:<?php  echo $results['DateOfBirth']; ?></p>
        <p class="card-text">Area of specialty:<?php   echo$results['Specialty']; ?></p>
        <p class="card-text">Other Area of specialty:<?php    echo $results['Other']; ?></p>
        <a href="#" class="card-link"><?php echo $results['Contact']; ?></a>
        <a href="#" class="card-link"><?php  echo $results['Contact2']; ?></a>
    </div>
    </div>
   <br/>
    <a href ="view.php" class = "btn btn-primary">Back to list</a>
         <a href ="edit.php?id=<?php echo $results['MemberId'] ?>" class = "btn btn-warning">Edit</a>
         <a onClick="return confirm('Are you sure you want to delete this record?');" href ="delete.php?id=<?php echo $results['MemberId'] ?>" class = "btn btn-danger">Delete</a>
<?php  }?>
<?php
include_once 'includes/footer.php'
?>