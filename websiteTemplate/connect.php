<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$c-pass = $_POST['c-pass'];

// Database connection
$conn = new mysqli('localhost','root','','LMS');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into form(username, email, password, confirm-password) values(?, ?, ?, ?)");
  $stmt->bind_param("ssss" ,$username, $email, $password, $c-pass);
  $stmt->execute();
  echo "Registered succesfully.........!";
  $stmt->close();
  $conn->close();
}
?>