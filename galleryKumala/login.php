<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<style>
    @media screen and (min-width: 200px) {
        .box{
            /* width: 50%; */
        }
    }

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
        width: 200%;
        margin: 0px 0px 0px -70px;
    }

    .box {
        background-color: white;
        margin: 120px 0px 0px 0px;
        padding: 0px 100px 20px 100px;
        border-radius: 8px;
        /* width: 70px; */
    }

    .atas {
        padding: 20px 0px 50px 0px;
        /* margin: 100px 0px 0px 0px; */
        font-size: 40px;

    }

    .input1 {
        height: 38px;
        font-size: 16px;
        width: 100%;
        margin: 0px 0px 22px 0px;
    }



    .bawah input:hover {
        background-color: #32CD32;
        color: white;
    }

    .bawah a:hover {
        color: blue;

    }

    .bawah a {
        /* text-decoration: none; */
        padding: 10px 20px 10px 20px;

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
        justify-content: space-between;
        padding: 60px 0px 0px 0px;
    }


    .kembali {
        width: 48px;

    }
</style>

<body>
    <a href="index.php"><img class="kembali" src="gambar/kanan.png" alt=""></a>
    <div class="con">
        <form action="proses_login.php" method="post">
            <div class="box">
                <table>
                    <tr>
                        <td class="atas" align="center">LOGIN</td>
                    </tr>
                    <tr>
                        <!-- <td>Username</td> -->
                        <td><input type="text" class="input1" placeholder="Username" name="username"></td>
                    </tr>
                    <tr>
                        <!-- <td>Password</td> -->
                        <td><input type="password" class="input1" placeholder="Password" name="password"></td>
                    </tr>

                    <tr>
                        <td class="bawah"><a href="register.php">Daftar</a><input type="submit" value="Login"></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</body>

</html>