
<?php
// untuk mengoneksi data base
require 'koneksi.php';
require 'function.php';
// untuk mengatur fungsi
if( isset($_POST["submit"])) {
   //validator
   if ( send($_POST) > 0){
       echo "
       <script>
       alert('Pesan Berhasil Terkirim !');
       document.location.href = 'index.html';
       </script>
       ";
   }
   else {
       echo "<script>alert('Pesan Gagal Terkirim !');</script>";
       echo "<br>";
       echo mysqli_error($conn);
   }
}
?>




<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/master.css">
    <title>SURYA</title>
</head>
<body>
    <header>
        <hr>
        <!-- Navbar -->
        <nav>
            <span id="for_respo">
                <img src="../../sources/img/logoskensa.png" alt="logoskensa">
            </span>
            <a class="navlink" href="index.html">Home </a> 
            <a class="navlink" href="../../sources/pdf/GEDE_SURYANTARA_05_XI_RPL3.pdf">Dwonload CV </a> 
            <a class="navlink" href="contact.php">Contact </a> 
            <a class="navlink" href="about.html">About Me </a> 
        </nav>
        <hr>
    </header>
    <main id="main_con">
        <article>
        <form action="" method="post">
            <ol>
                <li>
                    <label for="email"> <h2>Email</h2> </label>
                    <input type="email" placeholder="Email" name="email" id="email">
                </li>

                <li>
                <label for="pesan"><h2>Pesan</h2></label>
                <textarea  type="p" cols="55" rows="5" name="pesan" id="pesan">
                </textarea>
                </li>
                <li>
                <label for="submit"></label>
                <button id="button-sb " name="submit">Submit !</button>
                </li>
                <br>
                <li>
                <label for="show"></label>
                <a id="pesan" href="./datapesan.php">Lihat Pesan</a>
                </li>
            </ol>
        </article>
    </main>
    <!-- footer -->
    <span id="for_footer">
        <footer>
            <h4>&copy; GEDE SURYANTARA 2006-2022</h4>
        </footer>
    </span>
</body>
</html>