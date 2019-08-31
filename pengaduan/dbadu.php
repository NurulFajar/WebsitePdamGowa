<?php
    $No_pel = $_POST['No_pel'];
    $Alamat = $_POST['Alamat'];
    $No_hp = $_POST['No_hp'];
    $keluhan = $_POST['keluhan'];

    $servername = "localhost";
    $username= "root";
    $password = "";
    $dbname = "pdamgowa";
    $con = mysqli_connect ($servername,$username, $password,$dbname);

        $sql= "INSERT INTO pengaduan (nopelanggan, alamat, no_hp, keluhan) values ($No_pel, $Alamat, $No_hp, $keluhan)"

        if (mysqli_query($con,$sql)){
            echo "pengaduan Anda Terkirim";
        }else {
            echo "Error"; mysqli_query ( $con);
        }
?>

<!DOCTYPE html>
    <from action = "frompengaduan.php">
        <input type ="submit" value= "kembali"
    </from>
    