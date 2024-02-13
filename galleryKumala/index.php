<?php
session_start();
if (!isset($_SESSION['userid'])) {
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap");

      @media screen and (min-width: 200px) {
        /* .container .title .home{
                font-size: 12px;

            } */
      }
      .tester {
        /* width: 80%; */
        width: 100%;
        /* margin: 50px auto; */
        display: grid;
        grid-template-columns: repeat(auto-fit, 1fr);
        grid-template-areas:
          "nav nav nav"
          "header header header"
          "about about about"
          "gallery gallery gallery"
          "contact contact contact"
          "footer footer footer";
      }

      @media screen and (min-width: 667px) {
        .tester {
          grid-template-areas:
            "nav nav nav"
            "header header header"
            "about about about"
            "gallery gallery gallery"
            "contact contact contact"
            "footer footer footer";
        }
      }

      html,
      body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        /* background: linear-gradient(#FAEF5D, #FF004D, #7E2553); */

        font-family: "Poppins", sans-serif;
      }

      .container {
        /* max-width: 85%; */
        /* margin: -20px 0px 0px 0px; */
      }

      /* Gallery Pembuka */
      .container .image-container {
        columns: 3 250px;
        gap: 15px;
        padding: 0px 100px 0px 100px;
      }

      .container .image-container img {
        margin-bottom: 10px;
        border-radius: 5px;
        width: 100%;
      }

      .gerak:hover{
        /* transform: rotate(360deg); */
        
      }
      .gerak{
        transition: transform 0.5s ease-in-out;
      }



      /* Gallery Penuntup */

      /* Nav Buka*/
      .title .home {
        display: flex;
        /* margin: -82px 0px 0px 0px; */
        justify-content: right;
      }

      .container .title li {
        list-style: none;
        padding: 30px 0px 10px 8px;
        /* margin: 40px 40px 0px 0px; */
      }

      .container .title a {
        text-decoration: none;
        /* margin: 40px 0px 0px 0px; */
      }

      .container .title {
        font-size: 28px;
        background-color: black;
        /* display: flex; */
        border-bottom: 1px solid white;
        /* justify-content: flex-end; */
        /* flex-wrap: nowrap; */
        color: black;
        /* border-radius: 5px; */
        /* margin-bottom: 10px; */
        /* text-align: center; */
        padding: 0px 10px 0px 10px;
        margin: 0px 0px 15px 0px;
      }

      .nav {
        grid-area: nav;
      }

      .item {
        /* width: 100%; */
      }

      .tester .title h1 {
        font-size: 38px;
        /* margin: 0px 0px -60px 0px; */
      }

      .tester .title .home2 {
        display: flex;
        justify-content: right;
        padding: 0px 15px 0px 0px;
        /* margin: -80px 0px 0px 0px; */
      }

      .tester .title {
        display: flex;
        padding: 0px 10px 0px 10px;
        justify-content: space-between;
      }

      .buttun {
        color: white;
        font-weight: 900;
      }
      .buttun-h1 {
        color: #ffb534;
        font-weight: 900;
        text-shadow: 1px 1px 5px #ffa732;
      }
      .buttun:hover {
        color: #ffb534;
        text-shadow: 1px 1px 5px #ffa732;
        transform: translateY(4px);
      }

      .colorful-text:hover {
        font-weight: bold;
        color: #ffb534;
        animation: effect 1.2s linear infinite;
      }

      @keyframes effect {
        /* 0% {
      background: linear-gradient(to right, rgb(126, 115, 115), rgb(126, 121, 113), rgb(163, 163, 145), rgb(171, 182, 171), rgb(62rgb(165, 159, 168)97), rgb(187,rgb(83, 21, 83)206), violet);
      
    } */
        50% {
          background: linear-gradient(
            to right,
            #ffb532,
            #c78e2d,
            #c7933a,
            #74531b
          );
          -webkit-background-clip: text;
          color: rgb(136, 105, 60);
          text-shadow: 1px 1px 5px #ffb532;
        }
        /* 100% {
      background: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet);
      -webkit-background-clip: text;
    } */
      }
      /* Nav Penuntup */
    </style>
  </head>

  <body>
    <div class="tester">
      <div class="container">
        <div class="item nav">
          <div class="title">
            <?php
                    if (!isset($_SESSION['userid'])) {
                        ?>
            <div class="home">
              <li><a class="buttun" href="register.php">Register</a></li>
              <li><a class="buttun" href="login.php">Login</a></li>
            </div>
            <?php
                    } else {
                        ?>
            <h1 class="buttun-h1 colorful-text">
              <?= $_SESSION['namalengkap'] ?>
            </h1>

            <div class="home2">
              <!-- <li><a href="register.php">Register</a></li>
                            <li><a href="login.php">Login</a></li> -->
              <!-- <li><img class="icon" alt=""></li> -->
              <!-- <li><a href="index.php">Home</a></li> -->
              <li><a class="buttun" href="album.php">Album</a></li>
              <li><a class="buttun" href="foto.php">Foto</a></li>
              <li><a class="buttun" href="logout.php">Logout</a></li>
            </div>
            <?php

                    }
                    ?>
          </div>
        </div>

        <div class="image-container">
          <?php
                include "koneksi.php";
                $sql = mysqli_query($conn, "select * from foto,user where foto.userid=user.userid");
                while ($data = mysqli_fetch_array($sql)) {
                    ?>
          <a href="komentar.php?fotoid=<?= $data['fotoid'] ?>"
            ><img class="gerak" src="gambar/<?= $data['lokasifile'] ?>"
          /></a>

          <?php
                }
                ?>
        </div>
      </div>
    </div>
  </body>
</html>
