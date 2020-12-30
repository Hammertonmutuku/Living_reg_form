<?php
    $title = 'Living Out.ke';

    include_once 'includes/header.php';
    require_once 'db/conn.php';

    $results = $crud->memberType();
   
?>
   
    <h1 class="text-center text-primary">LIVING OUT.KE REGISTRATION </h1>
        <p class ="text-center"style="color:white"t>(All of the shared information will not be shared)</p>
        <div class="reg-form">
    <form method="post" action="registered.php">
    
    <div class="row">
        <div class="col">
        <label for="FirstName">First Name</label>
        <input required type="text" class="form-control" placeholder="Enter First name" name="firstName">
        </div>
        <div class="col">
        <label for="LastName">Last Name</label>
        <input required  type="text" class="form-control" placeholder="Last name" name="lastName">
        </div>
    </div>
    <div class="form-group">
        <label for="InputEmail1">Email address</label>
        <input required type="email" class="form-control" id="InputEmail1" placeholder="official email address" name="email">
    </div>
    <div class="form-group">
    <div class="row">
        <div class="col">
        <label for="Contact">Contact </label>
        <input required  type="tel" class="form-control" id="Contact"    placeholder="07********" name="contact">
        </div>
        <div class="col">
        <label for="emergency">Emergency Contact </label>
        <input required  type="tel" class="form-control" id="emergency"   placeholder="07********" name="emergency">
        </div>
    </div>   
    </div>
    <div class="form-group">
        <label for="DateOfBirth">Date of Birth</label>
        <input required type="text" class="form-control" id="dateOfBirth" name="date" >
       
    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Select Type of Member</label>
    <select required  class="form-control" id="exampleFormControlSelect1" name="type2">
      <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
        <option value="<?php echo $r['Type-id']?>"><?php echo $r['name'];?></option>
      <?php } ?>
    </select>
  </div>
    <div class="form-group">
    <div class="row">
        <div class="col">
        <label for="inputState">Area of specialty</label>
        <input required type="text" class="form-control" placeholder="e.g Information Technology,Medicine" name="speciality">
        </div>
        <div class="col">
        <label for="inputState">Other areas of specialty</label>
        <input required  type="text" class="form-control" placeholder="If many separate each with a comma. e.g soccar, music, art." name="others">
        <br/>
       
    </div>
      </div>
   
    <button type="submit" class="btn btn-primary btn-block" name="button">Submit</button>
   
    </form>
    </div>

<?php
include_once 'includes/footer.php'
?>




    
