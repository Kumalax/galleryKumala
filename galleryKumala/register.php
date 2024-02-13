<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>
<style>
    body {
        background-image: linear-gradient(#D3D3D3, #778899, #F5FFFA);
        background-repeat: no-repeat;

        height: 100vh;
    }

    .con {
        /* background-color: red; */
        display: flex;
        justify-content: center;

    }

    table {
        width: 230%;
        margin: 0px 0px 0px -70px;
    }

    .atas {
        padding: 5px 50px 50px 0px;
        /* margin: 100px 0px 0px 10px; */
        font-size: 30px;

    }



    .box .input1 {
        width: 80%;
        padding: 0px 0px 0px 10px;
        /* margin: 0px 0px 0px -50px; */
        font-size: 16px;
        height: 38px;
    }

    .box {
        background-color: white;
        margin: 60px 0px 0px 0px;
        padding: 0px 100px 10px 100px;
        border-radius: 8px;

    }



    .bawah a:hover {
        /* text-decoration: none; */
        color: blue;
    }

    .bawah input:hover {
        background-color: #32CD32;
        color: white;
    }

    .bawah input {
        border: 1px solid black;
        background-color: white;
        padding: 10px 20px 10px 20px;
        cursor: pointer;
        margin: 0px 0px 0px 0px;
        background-color: #198754;
        color: white;
        border-radius: 2px;
    }

    .bawah {
        display: flex;
        justify-content: space-around;
        padding: 50px 50px 0px 0px;
        /* text-decoration: none; */
    }

    td{
        padding: 20px 0px 0px 0px;
    }

    .kembali{
        width: 48px;

    }
</style>

<body>
    <a href="index.php?"><img class="kembali" src="gambar/kanan.png" alt=""></a>
    <div class="con">
        <!-- <h1>Halaman Registrasi</h1> -->
        <form action="proses_register.php" method="post">
            <div class="box">
                <table>
                    <tr>
                        <td class="atas" align="center">Registrasi</td>
                    </tr>
                    <tr>
                        <!-- <td>Username</td>  -->
                        <td><input type="text" class="input1" placeholder="Username" name="username"></td>
                    </tr>
                    <tr>
                        <!-- <td>Password</td> -->
                        <td><input type="password" placeholder="Password" class="input1" name="password"></td>
                    </tr>
                    <tr>
                        <!-- <td>Email</td> -->
                        <td><input type="email" class="input1" placeholder="Email" name="email"></td>
                    </tr>
                    <tr>
                        <!-- <td>Nama Lengkap</td> -->
                        <td><input type="text" placeholder="Nama Lengkap" class="input1" name="namalengkap"></td>
                    </tr>
                    <tr>
                        <!-- <td>Alamat</td> -->
                        <td><input type="text" class="input1" placeholder="Alamat" name="alamat"></td>
                    </tr>
                    <tr>
                        <td class="bawah"><a href="login.php?">Login</a><input type="submit" value="Register"></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</body>

</html>