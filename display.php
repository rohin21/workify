<?php


//DELETE SECTION 
include "conn.php";
if(!empty($_GET['un']))
{
    $userid = $_GET['un'];
    $q = ("DELETE FROM testuser WHERE username = '$userid'");
    mysqli_query($conn, $q);
    header("location:display.php");
}
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center">Display Table Data</h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Username </th>
 <th> Email </th>
 <th> Password </th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php

 include 'conn.php'; 
 $query_user_data = "select * from testuser";
 $query = mysqli_query($conn,$query_user_data);
 while($res = mysqli_fetch_assoc($query)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $res['username'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
 <td> <?php echo $res['password'];  ?> </td>
 <td> <button class="btn-danger btn"> 
        <a href="?un=<?= $res['username'] ?>" class="text-white"> Delete </a>  
    </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?update=<?php echo $res['username']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
 ?>
 
 </table>  

 </div>
 </div>
 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>
