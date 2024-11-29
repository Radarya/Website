<?php
$host     = 'localhost';
$user     = 'root'; 
                    
$password = ''; 
$db       = 'register_login';
 
$con = mysqli_connect($host, $user, $password, $db);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>