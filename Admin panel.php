<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
</head>
<body>
    <h1>welcome baljeet---<?php echo  $_SESSION['AdminLoginId'];   ?>

    </h1>
</body>
</html>