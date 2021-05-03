<?php

author_id = $_POST['user_id'];


$connection = new mysqli("mysql.eecs.ku.edu”, "alexanderwilhelm", "Ti7NaiMa", "alexanderwilhelm");

if ($connection->connect_errno)
{
    printf("Connection Failed!!\n", $connection->connect_error);

    exit();
}

$test = $connection->query("SELECT * FROM Posts WHERE author_id = '" . $author_id . "'");

printf("Posts from Users<br>");

if ($test == true)
{
 printf("<br>");

 while ($section = $test -> fetch_assoc())
 {
  printf($section["content"]);
 }

 printf("<br>");
}
else
{
 echo "Users could not be found. ERROR.";
} 
 $connection -> close();
?>
