<?php
    $title = 'Edit record';

    include_once 'includes/header.php';
    require_once 'db/conn.php';
   
    if(!isset($_GET['id'])){
        include_once 'includes/erro.php';
    }else{
        $id = $_GET['id'];
        $member = $crud->viewMembersDetails($id);
?>
  
 
  
    <h1 class="text-center text-primary">Edit Record </h1>
        <p class ="text-center">(All of the shared information will not be shared)</p>
    <form method="post" action="editpost.php">
    <input type="hidden" value="<?php echo $member['ID']?>" name="id" >
    <div class="row">
        <div class="col">
        <label for="FirstName">First Name</label>
        <input type="text" class="form-control" placeholder="Enter First name"  value="<?php echo $member['firstname'] ?>" name="firstName">
        </div>
        <div class="col">
        <label for="LastName">Last Name</label>
        <input type="text" class="form-control" placeholder="Last name"  value="<?php echo $member['lastname'] ?>" name="lastName">
        </div>
    </div>
    <div class="form-group">
        <label for="InputEmail1">Email address</label>
        <input type="email" class="form-control" id="InputEmail1" placeholder="official email address"  value="<?php echo $member['email'] ?>" name="email">
    </div>
    <div class="form-group">
    <div class="row">
        <div class="col">
        <label for="Contact">Contact </label>
        <input type="number" class="form-control" id="Contact"  value="<?php echo $member['contact'] ?>" name="contact">
        </div>
        <div class="col">
        <label for="emergency">Emergency Contact </label>
        <input type="number" class="form-control" id="emergency"  value="<?php echo $member['contact2'] ?>" name="emergency">
        </div>
    </div>   
    </div>
    <div class="form-group">
        <label for="DateOfBirth">Date of Birth</label>
        <input type="text" class="form-control" id="dateOfBirth"  value="<?php echo $member['dateOfBirth'] ?>" name="date" >
       
    </div>
    <div class="form-group">
        <label for="inputState">Area of specialty</label>
        <input type="text" class="form-control" placeholder="Area of specialty"  value="<?php echo $member['specialty'] ?>" name="speciality">
    </div>
    <div class="form-group">
        <label for="inputState">Other areas of specialty</label>
        <input type="text" class="form-control" placeholder="other areas of specialty"  value="<?php echo $member['other'] ?>"  name="others">
        <small id="Other Area" class="form-text text-muted">If many separate each with a comma. e.g soccar, music, art.</small>
    </div>
   
    <button type="submit" class="btn btn-success btn-block" name="button">save changes</button>
    </form>

<?php  } ?>
<?php
include_once 'includes/footer.php'
?>




    
