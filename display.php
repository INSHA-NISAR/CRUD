
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>display page</title>
</head>
<body>
    <div class="container">
        <div class="col-lg-12"><br><br>
         <h1 class="text-center text-warning"> Display table data </h1><br>

            <table class=" table table-stripped table-hover table-bordered">

                  <tr class="text-white bg-dark text-center">
                    <th>id</th>
                    <th>username</th>
                    <th>password</th>
                    <th>Delete</th>
                    <th>Update</th>
                 </tr>
                     
                    <?php
                        include 'conn.php';

                        $q ="select *from test_crud ";
                        $query = mysqli_query($conn ,$q);

                        while ($res = mysqli_fetch_array($query))   {
                    ?>
                   <tr class="text-center">

                        <td><?php echo $res['id'] ;      ?></td>
                        <td><?php echo $res['Username'] ; ?></td>
                        <td><?php echo $res['Password'];  ?></td>
                        <td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id'];?>"class="text-white">Delete</a></button></td>
                        <td><button class="btn-danger btn"><a href="update.php?id=<?php echo $res['id'];?>"class="text-white">Update</a></button></td>
                     
                   </tr>
                     <?php
                }
                ?>
             </table>
        </div>
    </div>
</body>
</html>