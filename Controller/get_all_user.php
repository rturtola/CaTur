<?php
require("db_connection.php");
try{
    $queryGetAllAccounts = "SELECT * FROM students_tbl";
    $sqlExec = mysqli_query($connect, $queryGetAllAccounts);
}catch (\Throwable $th){
    echo $th;
}