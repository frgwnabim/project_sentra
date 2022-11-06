<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Event Pameran Lego</title>

    <style>
        *{
            text-decoration: none;
        }
         body{
            background-image: radial-gradient(circle, white,rgb(190, 245, 255),rgb(0, 200, 255));
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
        }
            .garis_tepi1 {
            border: 3px solid black;
            margin: auto;
            background-color: whitesmoke;
            box-shadow: 2px 2px 2px rgba(71, 69, 69, 0.8);
            padding: 10px;
            width:650px;
            height: 700px;
        }
        div .penutup1{
            opacity:50%;
            }
            .teks{
                font-size: 15px;
                margin-left: 90px;
                font-weight: bold;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                padding: 9px;
            }
            .gambar{
                padding-top: 20px;
                padding-bottom: 80px;
                position: relative;
                animation-name: example;
                animation-duration: 3s;
            }
            @keyframes example {
                0%   {background-color:transparent; left:0px; bottom:-800px;}
                25%  {background-color:transparent; left:0px; bottom:20px;}
                50%  {background-color:transparent; left:0px; bottom:-10px;}
                75%  {background-color:transparent; left:0px; bottom:20px;}
                100% {background-color:transparent; left:0px; bottom:0px;}
            }
            .back{
                display: block;
                margin: auto;
                background-color: rgb(190, 245, 255);
                border-radius: 10px;
                padding: 5px 8px;
            }

    </style>
</head>
<body>
    <div class="garis_tepi1">
        <h2 align="center" style="color:rgb(27, 202, 27) ;">Selamat! anda berhasil daftar.</h2>
        <hr align="center" size="3" width="70%" color="black" style="opacity:80% ;">

        <img class="gambar" src="images/centanghijau.png" width="280" height="280" style="display:block ; margin:auto ;">

        <?php 
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $jk = $_POST['jk'];
        ?>

        <div class="teks">Nama : <?php echo $nama?></div>
        <div class="teks">Email : <?php echo $email?></div>
        <div class="teks">Jenis Kelamin : <?php echo $jk?></div>
        
        <br>
        <hr class="hr_bawah" align="center" size="3" width="50%" color="black" style="opacity:80% ;">

        <h3 align="center">Terimakasih sudah mendaftar!</h3>

        <div><a href="http://localhost/sentra/project/home.html#"><Button class="back">Kembali Kehalaman Awal</Button></a></div>
    </div>
</body>
</html>