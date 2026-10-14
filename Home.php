<?php
require "db.php";
$id = $_GET['id'];
$res = mysqli_query($conn, "select * from users where user_id=$id");
$row = mysqli_fetch_assoc($res);
?>
<h2>Welcome <?php echo $row['username']; ?></h2>
