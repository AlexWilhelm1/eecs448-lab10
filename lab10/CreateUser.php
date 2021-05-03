<?php

$user = $_POST["user"];

$connection = new mysqli("mysql.eecs.ku.edu”, "alexanderwilhelm", "Ti7NaiMa", "alexanderwilhelm");

if ($connection->connect_errno)
{
    printf("Connection Failed!!\n", $connection->connect_error);

    exit();
}

if ($user == '')
{
 echo("Usernames can NOT be empty");

 exit();
}



$test = $connection->query("INSERT INTO Users (user_id) VALUES ('"  . $username . "');");

if ($test)
{
 echo "The user " .$user. " has been successfully added.<br>";
}
else
{
 echo "The user " .$user. " could not be added as this username is not unique.<br>";
} 

 $connection -> close();
 $test -> free();
?>

