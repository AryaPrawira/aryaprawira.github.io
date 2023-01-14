<?php
session_start();
include('lib/dbconnection.php');
$postingan = $_POST['message'];
$time = date('Y-m-d H:i:s');

$sql = "INSERT INTO posts (user_id, message, created_at)
VALUES ('".$_SESSION['user']['id']."','".$postingan."','".$time."')";

if ($conn->query($sql) === TRUE) {
    header('location: home.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
?>