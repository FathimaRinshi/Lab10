<?php
session_start();
require "db.php";
$res = mysqli_query($conn, "select * from users where username='".$_POST['user']."'");
$row = mysqli_fetch_array($res);
if($row && password_verify($_POST['pass'], $row['password']))
{
    $_SESSION['user'] = $row['username'];
    echo "Welcome ", $_SESSION['user'];
}
else
{
    echo "Invalid Password or Username";
}
?>
