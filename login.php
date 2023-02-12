<?php
include 'controller/db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CaTur</title>
</head>
<body>
    <form action='Controller/login_user.php' method="POST">
      <input type="text" name="email" placeholder="Input Email"/>
      <input type="text" name="password" placeholder="Input Password"/>
      <input type="submit" name="submit" value="LOG IN">
    </form>
</body>
</html>