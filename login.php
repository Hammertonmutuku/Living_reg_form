<?php
    $title = 'Login';

    include_once 'includes/header.php';
    require_once 'db/conn.php';
   
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = strtolower(trim($_POST['username']));
        $password = $_POST['password'];
        $new_password = md5($password.$username);
        
        $result = $user->getUser($username,$new_password);
        if(!$result){
            echo '<div class="alert alert-danger">Username or Password is incorrect! PLease try again.</div>';
        }else{
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $result['id'];
            header("Location: index.php");
        }
    }
?>

<h1 class="text-center"><?php echo $title ?></h1>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username'];?>"name="username">
 
  </div>
  <div class="form-group">
    <label for="InputPassword1">Password</label>
    <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="#"> Forgot Password</a>
</form>