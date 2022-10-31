<?php
    require 'koneksi.php';
    function send ($data){
        global $conn;
        $email = $data["email"];
        $comment = $data["pesan"];

        $query = "INSERT INTO contac_data VALUES ('','$email','$comment')";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
?>