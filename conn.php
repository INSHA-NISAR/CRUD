<?php

session_start();
$server="***************";
$username="*********";
$password="********";
$database="*********";

$conn = mysqli_connect($server,$username,$password,$database);

    // if($conn){
    //    echo"Connection sucessful"; 
    // }  else{
    //     echo"No connection";
    // }

?>
