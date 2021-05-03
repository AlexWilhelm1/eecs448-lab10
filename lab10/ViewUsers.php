<?php

$connection = new mysqli("mysql.eecs.ku.edu”, "alexanderwilhelm", "Ti7NaiMa", "alexanderwilhelm");

if ($connection->connect_errno)
{
    printf("Connection Failed!!\n", $connection->connect_error);

    exit();
}

$test = $connection->query("SELECT user_id FROM Users");

if ($test == true)
{
 printf("<br>");
 while ($section = $test -> fetch_assoc())
 {
 printf($section["user_id"]);
 }
 printf("<br>");
}
else
{
 echo "Users could not be found. ERROR.";
} 
 $connection -> close();
?>