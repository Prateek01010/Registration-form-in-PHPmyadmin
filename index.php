<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "user_details";


    $conn = mysqli_connect($servername, $username, $password, $database);


   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
     }


   if (isset($_POST['register'])) {
       $username = $_POST['username'];
       $password = $_POST['password'];
       $email = $_POST['email'];


       $query = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')";


       if (mysqli_query($conn, $query)) {
           echo "<script>alert('Successfully registered')</script>";
       } else {
           echo "<script>alert('Registration failed: " . mysqli_error($conn) . "')</script>";
       }
   }
?>


<!DOCTYPE html>
<html>
<head>
   <title>Registration Form</title>
</head>
<body>
 <h2>Registration Form</h2>
   <form method="post">
       <label for="username">Username:</label>
       <input type="text" id="username" name="username" required><br><br>
      
       <label for="password">Password:</label>
       <input type="password" id="password" name="password" required><br><br>
      
       <label for="email">Email:</label>
       <input type="email" id="email" name="email" required><br><br>
      
       <input type="submit" name="register" value="Register">
   </form>
</body>
</html>
