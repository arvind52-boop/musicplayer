<?php
session_start();
include('database_connect.php');
$msg=false;
if(isset($_POST['user_name'])){
  $user_name =$_POST['user_name'];
  $user_password =$_POST['user_password'];
  $query= "select *from users where name= '".$user_name."'AND password ='".$user_password."' limit 1";
  $result=mysqli_query($con,$query);
  if(mysqli_num_rows($result)==1){
header("Location: welcome.php");

  }else{
    $msg ="Incorrect Password";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="left_bx1">
          <div class="container-signup">
            <form action="#" method="POST">
              <h3>Login</h3>
              <div class="container-content">
                <label for="name">Name</label>
                <input
                  type="text"
                  name="user_name"
                  placeholder="Enter your Name.."
                  required
                />
              </div>
              
              <div class="container-content">
                <label for="password">Password</label>
                <input
                  type="password"
                  name="user_password"
                  placeholder="Enter your Password.."
                  required
                />
              </div>
             
                
                <input type="submit" value="Sign In" class="submit">
                <div class="check">
                  <input type="checkbox"><span>Remember Me.</span>
                </div>
                <p>Your account does not exsist  :- <a href="signup.php">Sign Up</a></p>
            </form>
          </div>
        </div>
        <div class="right_bx1">
          <img src="loginpage.jpg" alt="" />
          <?php
        if($msg){
        echo('<h3>'.$msg.'</h3>');
      }
        ?>
        </div>
      </header>
    
</body>
</html>