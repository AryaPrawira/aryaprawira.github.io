<?php
session_start();

//var_dump($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Smart Calculator </title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">

</head>
<body>
  <div class="container-fluid text-light" style="height: 100vh">

    <!-- nav section start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"> SMART CALCULATOR </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/"> Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="owners/owners.html"> Owners </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Others
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/contact"> Contact </a></li>
                <li><a class="dropdown-item" href="/kupon"> Kupon </a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit"> Search </button>
          </form>
        </div>
      </div>
    </nav>
    <!-- nav section end -->

  <div class="judul">
    <h6> Materi </h6>
  </div>
<div class="container" id="materi">
<div class="container-materi">
  <a href="#persegi">
    <div class="kotak">
      <img src="img/persegihs.png" alt="">
      <div class="teks-kotak"> Bangun Datar </div>
    </div>
  </a>
  <a href="#kubus">
    <div class="kotak">
      <img src="img/kubushs.png" alt="">
      <div class="teks-kotak"> Bangun Ruang </div>
    </div>
  </a>
  <a href="#pythagoras">
    <div class="kotak">
      <img src="img/pythagorashs.jpg" alt="">
      <div class="teks-kotak"> Pythagoras </div>
    </div>
  </a>
</div>
</div>
<div class="judul">
  <h6> Bangun Datar </h6>
</div>
<div class="container">
  <a href="bangundatar/persegi.html">
    <div class="kotak">
      <img src="img/persegihs.png" alt="">
      <div class="teks-kotak"> Persegi </div>
    </div>
  </a>
  <a href="bangundatar/pp.html" id="persegi">
    <div class="kotak">
      <img src="img/pphs.png" alt="">
      <div class="teks-kotak"> Persegi Panjang </div>
    </div>
  </a>
  <a href="bangundatar/segitiga.html">
    <div class="kotak">
      <img src="img/segitigahs.png" alt="">
      <div class="teks-kotak"> Segitiga </div>
    </div>
  </a>
  <a href="bangundatar/lingkaran.html">
    <div class="kotak">
      <img src="img/lingkaranhs.jpg" alt="">
      <div class="teks-kotak"> Lingkaran </div>
    </div>
  </a>
  <a href="bangundatar/jj.html">
    <div class="kotak">
      <img src="img/jjhs.jpg" alt="">
      <div class="teks-kotak"> Jajargenjang </div>
    </div>
  </a>
  <a href="bangundatar/trapesium.html">
    <div class="kotak">
      <img src="img/trapesiumhs.jpg" alt="">
      <div class="teks-kotak"> Trapesium </div>
    </div>
  </a>
  <a href="bangundatar/belahketupat.html">
    <div class="kotak">
      <img src="img/belahketupaths.jpg" alt="">
      <div class="teks-kotak"> Belah Ketupat </div>
    </div>
  </a>
  <a href="bangundatar/layanglayang.html">
    <div class="kotak">
      <img src="img/layanglayanghs.jpg" alt="">
      <div class="teks-kotak"> Layang Layang </div>
    </div>
  </a>
  </div>
<div class="judul">
  <h6> Bangun Ruang </h6>
</div>
  <div class="container">
    <a href="bangunruang/kubus.html" id="kubus">
      <div class="kotak">
        <img src="img/kubushs.png" alt="">
        <div class="teks-kotak"> Kubus </div>
      </div>
    </a>
    <a href="bangunruang/balok.html">
      <div class="kotak">
        <img src="img/balokhs.png" alt="">
        <div class="teks-kotak"> Balok </div>
      </div>
    </a>
    <a href="bangunruang/kerucut.html">
      <div class="kotak">
        <img src="img/kerucuths.jpg" alt="">
        <div class="teks-kotak"> Kerucut </div>
      </div>
    </a>
    <a href="bangunruang/tabung.html">
      <div class="kotak">
        <img src="img/tabunghs.jpg" alt="">
        <div class="teks-kotak"> Tabung </div>
      </div>
    </a>
    <a href="bangunruang/bola.html">
      <div class="kotak">
        <img src="img/bolahs.jpg" alt="">
        <div class="teks-kotak"> Bola </div>
      </div>
    </a>
    <a href="bangunruang/prisma.html">
      <div class="kotak">
        <img src="img/prismahs.jpg" alt="">
        <div class="teks-kotak"> Prisma </div>
      </div>
    </a>
    <a href="bangunruang/limas.html">
      <div class="kotak">
        <img src="img/limashs.jpg" alt="">
        <div class="teks-kotak"> Limas </div>
      </div>
    </a>
  </div>
  <div class="judul">
    <h6> Pythagoras </h6>
  </div>
    <div class="container">
      <a href="pythagoras/sisia.html" id="pythagoras">
        <div class="kotak">
          <img src="img/sisia.jpg" alt="">
          <div class="teks-kotak"> Sisi a </div>
        </div>
      </a>
      <a href="pythagoras/sisib.html">
        <div class="kotak">
          <img src="img/sisib.jpg" alt="">
          <div class="teks-kotak"> Sisi b </div>
        </div>
      </a>
      <a href="pythagoras/sisic.html">
        <div class="kotak">
          <img src="img/sisic.jpg" alt="">
          <div class="teks-kotak"> Sisi c </div>
        </div>
      </a>
    </div>
    <br><br>
    
    <footer class="bg-light text-center text-lg-start">
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        2023 © Telkom University
        <br>
        <a class="text-dark" href="https://aryapraw.my.id/"> SMART CALCULATOR </a>
      </div>
      <!-- Copyright -->
    </footer>

  </body>
  </html>
