<?php
session_start();
include('database_connect.php');
$msg = false;
if($_SERVER['REQUEST_METHOD']=='POST') {
$user_name = $_POST['user_name'];
//user_name=name given in html body
  $user_email=$_POST['user_email'];
  $user_password=$_POST['user_password'];
  $user_re_password=$_POST['user_re_password'];
  if(!empty($user_name) && !empty($user_email) && !empty($user_password) && !is_numeric($user_re_password) ){
    if($user_password == $user_re_password){
// $query = "insert into users (id, name, email, password) VALUES ('$user_name', '$user_email', '$user_password')";
$query ="INSERT INTO users ( name, email, password) VALUES ('$user_name', '$user_email', '$user_password')";
mysqli_query($con,$query);
header("Location: login.php");
    }
    else{
      $msg="Password Not Match";

    }

  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width,
            initial-scale=1.0"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Signup</title>
  </head>
  <body>
    <header>
      <div class="left_bx1">
        <div class="container-signup">
          <form action="#" method="POST">
            <h3>Sign Up</h3>
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
              <label for="email">Email</label>
              <input
                type="email"
                name="user_email"
                placeholder="Enter your Email.."
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
            <div class="container-content">
                <label for="confirm-password"> Confirm Password</label>
                <input
                  type="re_password"
                  name="user_re_password"
                  placeholder="Confirm your Password.."
                  required
                />
              </div>
              <input type="submit" value="Sign-Up" class="submit">
              <div class="check">
                <input type="checkbox"><span>Remember Me.</span>
              </div>
              <p>Your account already exsist  :- <a href="login.php">Login</a></p>
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
