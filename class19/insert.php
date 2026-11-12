<?php 
    //connected other file to here.
    include "db.php";

    //assign the mysql query to php variable
    $sql="insert into student(name,email,age) values
    ('abdur rahman','rahman@gmail.com',25)";

    $alter = "alter table student add column department varchar(50) default 'cst';";

    mysqli_query($conn,$alter);

?>