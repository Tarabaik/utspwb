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
    <br><br><br><br><br><br><br><br><br><br>
    <table id="data_table" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>id</th>
            <th>Email Pengirim</th>
            <th>Pesan Pengirim</th>
        </tr>
    <?php
    require 'koneksi.php';
    $no=1;
    $result = mysqli_query($conn,"select * from contac_data");
    if (!$result){
        echo mysqli_error($conn);
    }
    while($tampil = mysqli_fetch_array($result)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id]</td>
            <td>$tampil[user_email]</td>
            <td>$tampil[user_message]</td>
       </tr>
        ";
        $no++;
    }
    ?>
    </table>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- footer -->
    <span id="for_footer">
        <footer>
            <h4>&copy; GEDE SURYANTARA 2006-2022</h4>
        </footer>
    </span>
</body>
</html>