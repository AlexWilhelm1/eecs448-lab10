<?php
$content = $_POST["content"];
$user = $_POST["user"];

if ($content == "")
{
 echo("Content of posts can NOT be empty");

 exit();
}

if ($user == "")
{
 echo("Usernames can NOT be empty");

 exit();
}

$connection = new mysqli("mysql.eecs.ku.edu”, "alexanderwilhelm", "Ti7NaiMa", "alexanderwilhelm");

if ($connection->connect_errno)
{
    printf("Connection Failed!!\n", $connection->connect_error);

    exit();
}

// edit this, it is too raw $test = $connection->query("INSERT INTO POSTS (author_id, content) VALUES ('"  . $username . "', '"  . $text . "');");

if ($test == true)
{
 echo "The post has been successfully added!<br>";
}
else
{
 echo "Post could not be added. Check username and make sure it is accessible.<br>";
} 

 $connection -> close();

?>