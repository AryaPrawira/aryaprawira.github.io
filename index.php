<?php
include('lib/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="style.css" rel="stylesheet">
    <style>
    .box {
        margin: auto;
        border: 5px solid black;
        padding: 15px;
        border-radius: 20px;
        display: table;
        background: purple;
    }
    .box2 {
        margin: auto;
        border: 5px solid black;
        padding: 15px;
        border-radius: 20px;
        display: table;
        background: violet;
    }

    .text-center {
        text-align: center;
        border: 3px solid black;
        margin: auto;
    } 
    </style>
</head>
<body>
    <br><br><br><br><br>
        <div class="text-center box2">
            <h1>Login Menggunakan Email<h1>
        <br>
            <form class="box" action="proses_login.php" method="post">
                <input type="email" name="email" id="" placeholder="email"><br>
                <input type="password" name="password" id="" placeholder="password"><br>
                <input type="submit" value="LOGIN"><br><br>
            </form>
            <br>
            <a>Belum memiliki akun?</a>
            <a href="registrasi.php">Buat Akun</a>
        </div>
</body>
</html>