<?php
    $title = 'View memebers';

    include_once 'includes/header.php';
    require_once 'db/conn.php';
   
    $results = $crud->viewMembers();
?>
    <table class="table">
    <tr>
    <th>#</th>
    <th>first name</th>
    <th>last name</th>
   <th>specialty</th>
     <th>Action</th>
    </tr>
    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
         <tr>
         <td><?php echo $r['MemberId'] ?></td>
         <td><?php echo $r['firstName'] ?></td>
         <td><?php echo $r['lastName'] ?></td>
         <td><?php echo $r['Specialty'] ?></td>
         <td>
         <a href ="view1.php?id=<?php echo $r['MemberId'] ?>" class = "btn btn-primary">View</a>
         <a href ="edit.php?id=<?php echo $r['MemberId'] ?>" class = "btn btn-warning">Edit</a>
         <a onClick="return confirm('Are you sure you want to delete this record?');" href ="delete.php?id=<?php echo $r['MemberId'] ?>" class = "btn btn-danger">Delete</a>
         <td>
         </tr>
    <?php } ?>
    </table>

<?php
include_once 'includes/footer.php'
?>
