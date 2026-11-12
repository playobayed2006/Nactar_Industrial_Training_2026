<?php 
    $host="localhost";
    $username="root";
    $password="";
    $database="class18";

    //create database connection
    $conn=mysqli_connect($host,$username,$password,$database);//this is a php function

    if (!$conn){
        die("database connection failed".mysqli_connect_error());
    } else {
        echo "connected successfully";
    }

?>