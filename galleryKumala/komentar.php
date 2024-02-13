<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Komentar</title>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            background-color: aliceblue;
        }

        @media screen and (min-width: 450px) {}

        .container {
            /* width: 80%; */
            width: 100%;
            /* margin: 50px auto; */
            display: grid;
            grid-template-columns: repeat(auto-fit, 1fr);
            grid-template-areas:
                'nav nav nav'
                'header header header'
                'about about about'
                'gallery gallery gallery'
                'contact contact contact'
                'footer footer footer';
        }


        @media screen and (min-width: 667px) {
            .container {
                grid-template-areas:
                    'nav nav nav'
                    'header header header'
                    'about about about'
                    'gallery gallery gallery'
                    'contact contact contact'
                    'footer footer footer';
            }

            .about h1 {
                /* font-size: 20px; */
            }


        }

        .item {
            width: 100%;
            background-color: rgb(138, 209, 254);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 100px;
            box-sizing: border-box;
        }

        /* Nav Buka*/
        .nav {
            grid-area: nav;
            /* background-color: red; */
            /* border: 5px solid black; */
            background-color: aliceblue;
            /* text-align: center; */
            /* align-items: center;
            justify-content: center; */
            /* display: block; */
        }

        .gambar {
            display: flex;
            justify-content: center;


        }

        label {
            font-size: 22px;
        }

        .isiinput {
            display: flex;
            justify-content: space-around;
        }

        .isiinput .input3 {
            /* width: auto; */
            font-size: 20px;
        }

        .isiinput .input2 {
            width: 84%;
            font-size: 20px;
        }

        .input1 {
            /* width: auto; */
            font-size: 20px;
        }

        .item1 {
            padding: 20px 10px 20px 10px;
            box-sizing: border-box;
        }

        img {
            width: 100%;
            height: 800px;
            display: block;
            /* aspect-ratio: 9/16; */
            /* object-fit: cover; */
            padding: 10px 0px 10px 0px;

        }

        .isi {
            display: flex;
            justify-content: center;
        }

        .isinav {
            display: flex;
            flex-direction: column;
            /* justify-content: center; */

        }

        .luarnav {
            display: flex;
            justify-content: center;
            /* align-items: center; */
            /* text-align: center; */
            /* align-content: center; */
        }



        .containerlove a input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .containerlove a {
            text-decoration: none;
            color: black;
        }

        .containerlove {
            display: block;
            position: relative;
            cursor: pointer;
            user-select: none;
            text-decoration: none;
            padding: 0px 0px 18px 0px;
        }

        .containerlove a svg {
            position: relative;
            top: 0;
            left: 0;
            height: 50px;
            width: 50px;
            transition: all 0.3s;
            fill: red;
            margin: 0px 0px -18px 0px;
        }

        .containerlove a svg:hover {
            transform: scale(1.1);
            /* background-color: #E3474F; */
            /* color: #E3474F; */
            fill: #E3474F;
        }



        /* Header Penutup */


        /* About Buka*/
        .item2 {
            width: 100%;
            background-color: rgb(138, 209, 254);
            display: flex;
            justify-content: center;
            align-items: center;
            /* padding: 100px; */
            box-sizing: border-box;
            flex-direction: column;
        }



        .about {
            grid-area: about;
            background-color: aliceblue;
            /* border: 1px solid black; */
            /* height: 95vh; */
        }

        .isiabout{
            border: 1px solid black;
            width: 80%;
            margin: 0px 0px 30px 0px;
            padding: 0px 0px 0px 10px ;
            background-color: #D9D9D9;
        }

        .isiabout b{
            font-size: 18px;
            color: #2F9FDF;
        }
        .isiabout p{
            font-size: 10px;
        }

        .item2 .isiabout .komen{
            font-size: 1.2rem;
        }

        /* About Penutup*/


        /* .item:nth-child(even) {
        background-color: rgb(255, 142, 142);
      } */





        /* GALLERY */
        .item2 {}

        .none {
            display: none;
            text-decoration: none;
        }

        .gallery {
            grid-area: gallery;
            background: linear-gradient(#FAEF5D, #FF004D, #7E2553);
            /* background-color: blue; */
            /* border: 5px solid black; */
            /* margin: 0; */
            /* padding: 0px 0px 0px 100px; */

        }




        /* GALLERY */

        .contact {
            grid-area: contact;
            background-color: aqua;
            border: 5px solid black;
        }

        .footer {
            grid-area: footer;
            background-color: orange;
            border: 5px solid black;
        }


        .kiri {
            width: 48px;
            height: auto;

        }
    </style>
</head>

<body>
    <a href="index.php?"><img class="kiri" src="gambar/kanan.png" alt=""></a>
    <div class="container">


        <div class="item1 nav">
            <form action="tambah_komentar.php" method="post">
                <?php
                include "koneksi.php";
                $fotoid = $_GET['fotoid'];
                $sql = mysqli_query($conn, "select * from foto where fotoid='$fotoid'");
                while ($data = mysqli_fetch_array($sql)) {
                    ?>
                    <div class="luarnav">
                        <div class="isinav">

                            <input type="text" name="fotoid" value="<?= $data['fotoid'] ?>" hidden>


                            <label>Judul</label>
                            <input class="input1" type="text" disabled name="judulfoto" value="<?= $data['judulfoto'] ?>">



                            <label>Deskripsi</label>
                            <input class="input1" type="text" disabled name="deskripsifoto"
                                value="<?= $data['deskripsifoto'] ?>">

                            <div class="gambar">
                                <img src="gambar/<?= $data['lokasifile'] ?>" width="200px">

                            </div>

                            <label class="containerlove">
                                <a href="like.php?fotoid=<?= $data['fotoid'] ?> "><input type="checkbox">
                                    <svg id=" Layer_1" version="1.0" viewBox="0 0 24 24" xml:space="preserve"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path
                                            d="M16.4,4C14.6,4,13,4.9,12,6.3C11,4.9,9.4,4,7.6,4C4.5,4,2,6.5,2,9.6C2,14,12,22,12,22s10-8,10-12.4C22,6.5,19.5,4,16.4,4z">
                                        </path>
                                    </svg>
                                    <?php
                                    $fotoid = $data['fotoid'];
                                    $sql2 = mysqli_query($conn, "select * from likefoto where fotoid='$fotoid'");
                                    echo mysqli_num_rows($sql2);
                                    ?>
                                </a>
                            </label>

                            <label>
                                <!-- <?php
                                $fotoid = $data['fotoid'];
                                $sql2 = mysqli_query($conn, "select * from likefoto where fotoid='$fotoid'");
                                echo mysqli_num_rows($sql2);
                                ?> -->
                            </label>


                            <div class="isiinput">
                                <input class="input2" type="text" placeholder="Komentar.." name="isikomentar">
                                <input class="input3" type="submit" value="Send">
                            </div>





                            <label></label>



                        </div>
                    </div>
                    <?php
                }
                ?>
            </form>
        </div>
        <!-- <table width="100%" border="1" cellpadding=5 cellspacing=0> -->

        <div class="item2 about">

            <?php
               $fotoid = $_GET['fotoid']; // Ambil fotoid dari parameter URL
               $userid = $_SESSION['userid'];
               $sql = mysqli_query($conn, "SELECT * FROM komentarfoto INNER JOIN user ON komentarfoto.userid = user.userid WHERE komentarfoto.fotoid = '$fotoid'");
               while ($data = mysqli_fetch_array($sql)) {
       
                ?>
                <div class="isiabout">
                    <!-- <p><b>Id</b> &nbsp; <?= $data['komentarid'] ?></p> -->

                     <p><b><?= $data['namalengkap'] ?></b> &nbsp; <?= $data['tanggalkomentar'] ?></p>

                    <p class="komen"> <?= $data['isikomentar'] ?></p>

             

                </div>

                <?php
            }
            ?>

        </div>
    </div>
</body>

</html>