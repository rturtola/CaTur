<?php session_start();
require("db_connection.php");

if (isset($_POST['email']) &&$_POST['password']){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['error'] = array();
    try{
        $res = mysqli_query($connect, "SELECT * FROM user WHERE email= '$email' AND password= '$password'");
        $row = mysqli_fetch_assoc($res);
        if (!empty($row)){
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['fullname'];
            header('Location:  ../index.php');
        } else{
            $_SESSION['error'][] = "Wrong Username or Password";
            echo '<script language="javascript">';
            echo 'alert("Wrong Username or Password")';
            echo '</script>';
        
        }
    }catch (\Throwable $th){
        echo $th;
    }
};