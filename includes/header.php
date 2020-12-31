<?php
include_once 'includes/session.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <link rel = "stylesheet" type= "text/css" href="./CSS/styles.css"> 
    <link rel = "stylesheet" href="CSS/bootstrap-4.3.1-dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

</head>
<body>
<div class="container">
  <br/>
<nav class="navbar navbar-expand-sm navbar-dark bg-transparent">
  <a class="navbar-brand" href="index.php">Living_out.ke</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view.php">View members</a>
      </li>
    <?php
       if(!isset($_SESSION['username'])){
    ?>
      <li class="nav-item">
      <a class="nav-link" href="login.php">Login</a>
      </li>
       <?php }else { ?> 
        <li class="nav-item">
        <a class="nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?></span></a>
        </li>
          <li class="nav-item">
        <a class="nav-link" href="logout.php">&nbsp Logout</a>
        </li>
       <?php } ?>
      
    </ul>
  </div>
</nav>
<br/>


