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
    <title>Halaman Album</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap");

        html,
        body {
            margin: 0;
            padding: 0;
            background-color: white;
            font-family: "Poppins", sans-serif;
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
            /* background-color: rgb(138, 209, 254); */
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
            background-color: black;
            text-align: center;
            align-items: center;
            justify-content: center;
            display: flex;
        }

        .item1 {}


        .item1 li a {
            text-decoration: none;
            color: white;
            font-size: 180%;
        }

        .item1 li {
            display: flex;
            justify-content: space-around;
            padding: 0px 10px 0px 10px;
            margin: 0px 0px 0px 0px;
        }

        .item1 ul {
            display: flex;
            /* justify-content: space-evenly; */
            padding: 0px 10px 0px 0px;
        }

        .buttun:hover {
        color: #ffb534;
        text-shadow: 1px 1px 5px #ffa732;
        transform: translateY(1px);
      }

        /* Nav Penutup */


        /* About Buka*/
        .item2 {
            width: 100%;
            /* background-color: rgb(138, 209, 254); */
            display: flex;
            /* justify-content: center; */
            flex-direction: column;
            align-items: center;
            padding: 100px;
            box-sizing: border-box;
        }

        .about .atas table td .input1 {
            /* width: 120%; */
            height: 22px;
            font-size: 16px;
        }

        .about .atas table td {
            font-size: 22px;
        }

        .about .atas {
            padding: 0px 0px 80px 0px;

        }

    
        .about {
            grid-area: about;
            /* background-color: aliceblue; */
            /* border: 1px solid black; */
            height: 100vh;
        }

       

       

        /* About Penutup*/


 





        /* GALLERY */

        .gallery {
            grid-area: gallery;
            /* background: linear-gradient(#FAEF5D, #FF004D, #7E2553); */
            /* background-color: blue; */
            /* border: 5px solid black; */
            /* margin: 0; */
            /* padding: 0px 0px 0px 100px; */

        }




        /* GALLERY */

        .contact {
            grid-area: contact;
            /* background-color: aliceblue; */
            /* border: 5px solid black; */
        }

        .footer {
            grid-area: footer;
            background-color: orange;
            border: 5px solid black;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="item1 nav">


            <ul>
                <li><a class="buttun" href="index.php">Home</a></li>
                <li><a class="buttun" href="album.php">Album</a></li>
                <li><a class="buttun" href="foto.php">Foto</a></li>
                <li><a class="buttun" href="logout.php">Logout</a></li>
            </ul>
        </div>

        <div class="item2 about">
            <div class="atas">
                <form action="tambah_album.php" method="post">
                    <table border="0">
                        <tr>
                            <td>Nama Album</td>
                            <td><input type="text" class="input1" name="namaalbum"></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><input type="text" class="input1" name="deskripsi"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Tambah"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="bawah">
                <div style="overflow-x:auto;">
                    <table class="jos" border="1" cellpadding=15 cellspacing=0>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Tanggal dibuat</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        include "koneksi.php";
                        $userid = $_SESSION['userid'];
                        $sql = mysqli_query($conn, "select * from album where userid='$userid'");
                        while ($data = mysqli_fetch_array($sql)) {
                            ?>
                            <tr>
                                <td>
                                    <?= $data['albumid'] ?>
                                </td>
                                <td>
                                    <?= $data['namaalbum'] ?>
                                </td>
                                <td>
                                    <?= $data['deskripsi'] ?>
                                </td>
                                <td>
                                    <?= $data['tanggaldibuat'] ?>
                                </td>
                                <td>
                                    <a class="hapus" href="hapus_album.php?albumid=<?= $data['albumid'] ?>" onclick="return confirm('Apakah anda ingin menghapus data ini')">Hapus</a>
                                    <a class="edit" href="edit_album.php?albumid=<?= $data['albumid'] ?>">Edit</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="item contact">

        </div>
    </div>
</body>

</html>