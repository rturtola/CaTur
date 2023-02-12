<?php
$dbUser = 'root'; 
$dbHost = 'localhost';
$dbPassword = '';
$dbName = 'webdev3b';

try{
    $connect = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
    echo "Connected To Database";
}catch (\Throwable $th) {
    echo $th;
}