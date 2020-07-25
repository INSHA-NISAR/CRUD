<?php

        include 'conn.php';
        $id =$_GET['id'];
        $q ="DELETE FROM `test_crud` WHERE id=$id ";
        mysqli_query( $conn, $q);
        header('location:display.php');
?>