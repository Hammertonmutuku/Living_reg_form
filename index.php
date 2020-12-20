<?php
    $title = 'Living Out.ke';

    include_once 'includes/header.php';
    require_once 'db/conn.php';
   
?>
    <!--
        first name
        second name
        email
        contact
        id
        area of specialty
        date of birth.
    -->
  
    <h1 class="text-center text-primary">LIVING OUT.KE REGISTRATION </h1>
        <p class ="text-center">(All of the shared information will not be shared)</p>
    <form method="post" action="registered.php">
    <div class="row">
        <div class="col">
        <label for="FirstName">First Name</label>
        <input type="text" class="form-control" placeholder="Enter First name" name="firstName">
        </div>
        <div class="col">
        <label for="LastName">Last Name</label>
        <input type="text" class="form-control" placeholder="Last name" name="lastName">
        </div>
    </div>
    <div class="form-group">
        <label for="InputEmail1">Email address</label>
        <input type="email" class="form-control" id="InputEmail1" placeholder="official email address" name="email">
    </div>
    <div class="form-group">
    <div class="row">
        <div class="col">
        <label for="Contact">Contact </label>
        <input type="number" class="form-control" id="Contact" name="contact">
        </div>
        <div class="col">
        <label for="emergency">Emergency Contact </label>
        <input type="number" class="form-control" id="emergency" name="emergency">
        </div>
    </div>   
    </div>
    <div class="form-group">
        <label for="DateOfBirth">Date of Birth</label>
        <input type="text" class="form-control" id="dateOfBirth" name="date" >
       
    </div>
    <div class="form-group">
        <label for="inputState">Area of specialty</label>
        <input type="text" class="form-control" placeholder="Area of specialty" name="speciality">
    </div>
    <div class="form-group">
        <label for="inputState">Other areas of specialty</label>
        <input type="text" class="form-control" placeholder="other areas of specialty" name="others">
        <small id="Other Area" class="form-text text-muted">If many separate each with a comma. e.g soccar, music, art.</small>
    </div>
   
    <button type="submit" class="btn btn-primary btn-block" name="button">Submit</button>
    </form>


<?php
include_once 'includes/footer.php'
?>




    
