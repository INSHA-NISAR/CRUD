<?php

session_start();
$server="cloud.sistec.ac.in";
$username="0187cs181063";
$password="sistec";
$database="0187cs181063";

$conn = mysqli_connect($server,$username,$password,$database);

    // if($conn){
    //    echo"Connection sucessful"; 
    // }  else{
    //     echo"No connection";
    // }

?>