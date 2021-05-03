<?php

$connection = new mysqli("mysql.eecs.ku.edu”, "alexanderwilhelm", "Ti7NaiMa", "alexanderwilhelm");

if ($connection->connect_errno)
{
    printf("Connection Failed!!\n", $connection->connect_error);

    exit();
}

printf("<br>");

foreach($_POST['delete'] as $post)
{
  $test = $connection->query("DELETE FROM Posts WHERE post_id = ". $post . ";");
  if ($test == true)
  {
   printf("<li>Post deleted correctly: %s</li>", $post);
  } 
  else
  {
   printf("<li>Could not delete: %s</li>", $post);
  }
}
 printf("<br>");
 $connection -> close();
?>
