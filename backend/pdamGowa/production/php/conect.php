<?php
    //login//
   $id = $_POST ['id'];
   $pass = $_POST ['pass'];

   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "pdamgowa";
   $db = mysqli_connect($hostname, $username, $password) or die ('Koneksi Gagal! ');
   mysql_select_db($dbname);
   
    session_start();
    if(!isset($_SESSION['id'])) {
    header('location:conect.php'); 
     } else { 
      $id = $_SESSION['id']; 
     }

     $query = "INSERT INTO login (id,pass) values ($id,$pass);
              
?>
 