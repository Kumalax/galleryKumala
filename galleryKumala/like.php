<?php
    include "koneksi.php";
    session_start();

    if(!isset($_SESSION['userid'])){
        //Untuk bisa like harus login dulu
        header("location:index.php");
    } else {
        $fotoid = $_GET['fotoid'];
        $userid = $_SESSION['userid'];

        // Cek apakah user sudah pernah like foto ini apa belum
        $sql = mysqli_query($conn, "SELECT * FROM likefoto WHERE fotoid='$fotoid' AND userid='$userid'");

        if(mysqli_num_rows($sql) == 1){
            // User sudah pernah like foto ini, maka kita hapus like-nya
            mysqli_query($conn, "DELETE FROM likefoto WHERE fotoid='$fotoid' AND userid='$userid'");
            echo "<script>history.back()</script>";
        } else {
            // User belum pernah like foto ini, maka kita tambahkan like-nya
            $tanggallike = date("Y-m-d");
            mysqli_query($conn, "INSERT INTO likefoto VALUES('', '$fotoid', '$userid', '$tanggallike')");
            echo "<script>history.back()</script>";
        }

    }