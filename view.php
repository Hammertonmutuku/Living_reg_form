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
         <td><?php echo $r['ID'] ?></td>
         <td><?php echo $r['firstname'] ?></td>
         <td><?php echo $r['lastname'] ?></td>
         <td><?php echo $r['specialty'] ?></td>
         <td>
         <a href ="view1.php?id=<?php echo $r['ID'] ?>" class = "btn btn-primary">View</a>
         <a href ="edit.php?id=<?php echo $r['ID'] ?>" class = "btn btn-warning">Edit</a>
         <a href ="edit.php?id=<?php echo $r['ID'] ?>" class = "btn btn-warning">Delete</a>
         <td>
         </tr>
    <?php } ?>
    </table>

<?php
include_once 'includes/footer.php'
?>
