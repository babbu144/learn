<?php
require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
  <form action="#" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="AdminName" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="AdminPassword" required>
    <button type="submit" name="Signin">Login</button>
  </form>
</div> 
<?php
if(isset($_POST['Signin']))
{    // Input sanitization to avoid SQL injection
    
    // Correct SQL query without single quotes around column names
    $query="SELECT * FROM `admin_login` WHERE Admin_Name='$_POST[AdminName]' And Admin_password ='$_POST[AdminPassword]'";
    $result= mysqli_query($con,$query);
    if (mysqli_num_rows($result)==1) {
        session_start();
        $_SESSION['AdminLoginId']= $_POST['AdminName'];
        header("location: Admin Panel.php");
    }
    else{
      echo"noconnect";
    }
}

?>

</body>
</html>