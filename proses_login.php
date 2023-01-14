<?php
include('lib/dbconnection.php');
session_start();
$email = $_POST['email'];
$pass = md5($_POST['password']);
$time = date('Y-m-d H:i:s');

$sql = "SELECT * FROM users WHERE email='".$email."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if($email == $row['email'] && $pass == $row['password']){
        $_SESSION["user"] = $row;
        header("location: home.php");
        break;
      }
      else{
        echo "Login Gagal";
      }
    }
  } else {
    echo "0 results";
  }
$conn->close();
?>