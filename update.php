<?php

        include 'conn.php';
        if(isset($_POST['done']))
    {
        $id=$_GET['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $q ="UPDATE `test_crud` SET id=$id Username=$username,Password=$password where id=$id ";
        $query= mysqli_query( $conn, $q);
        header('location:display.php');
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body data-gr-c-s-loaded=true>
    
   <div class="col-lg m-auto">

     <form method="post">

       <br><br><div class="card">

           <div class="card-header bg-dark">

             <h1 class="text-white text-center">
                update operation
             </h1>

            </div>
             <br>
             <label > username </label>
             <input type="text" name="username" class="form-control" required><br>
             <label > password </label>
             <input type="text" name="password" class="form-control" required><br>
             <br>
             <button class="btn btn-success" type="submit" name="done">Submit</button>
             <br>
        </div>
    
     </form> 
    
    </div>

</body>
</html>