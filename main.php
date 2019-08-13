<?php
session_start();
//connect to db
$servername = "localhost";
$username = "rohin";
$passsword = "pandey1215";
$dbname = "test_db";
$userid = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$operation = $_POST['operation'];
//establish connection
$conn = new mysqli($servername, $username, $passsword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql_delete ="DELETE FROM testuser WHERE username = '$userid'";
$sql_update = "UPDATE testuser SET email = '$email', password = '$password' WHERE username = '$userid' ";
if(!empty($userid) && !empty($email) && !empty($password)) {
    if($operation == 1) {
        if($conn->query($sql_update)===TRUE) {
            echo 'update successful';
        }
    }
    if($operation == 2) {
        if($conn->query($sql_delete)===TRUE) {
            echo 'deletion successful';
        }
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Desk</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class="post">
    <div class="col-lg-12">
            <div class="card  text-center card-form">
              <div class="card-body">
                <h3>Database Operation</h3>
                <form method="POST">
                  <div class="form-group">
                    <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
                  </div>
                    <label>Choose operation : </label>
                    <select name="operation">
                        <option value="1">Update</option>
                        <option value="2">Delete</option>
                    </select>
                  <button type="submit" value="Submit" class="btn btn-outline-dark btn-block">OK</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</body>
</html>
