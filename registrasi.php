<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <h1>Daftar Menggunakan Email<h1>
        <form class="box" action="proses_registrasi.php" method="post">
            <input type="name" name="name" id="" placeholder="nama"><br>
            <input type="email" name="email" id="" placeholder="email"><br>
            <input type="password" name="password" id="" placeholder="password"><br>
            <input type="submit" value="LOGIN">
        </form>
    </div>
</body>
</html>