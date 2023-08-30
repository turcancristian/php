<?php
//server fara parola
$host = 'localhost';  // server 
$user = 'root';   
$pass = "";   
$database = 'login_crud';   //Database Name  

// restabilirea conexiunii
  $conn = mysqli_connect($host,$user,$pass,$database);   

 // afisarea unui mesaj daca nu se realizeaza conexiunea
  if (!$conn) {                                             
    die("Connection failed: " . mysqli_connect_error());     
  }
?>


