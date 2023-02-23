<?php

$server_name = "localhost";
$user_name = "root";
$user_password = '';
$database_name = "login_music_user";
$con= mysqli_connect($server_name,$user_name,$user_password,$database_name);
if(!$con){
    die('connection failed :' 
      .mysql_error());
}

?>