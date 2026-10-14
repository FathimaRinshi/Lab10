<h2>Welcome to Register!!</h2>
<form method="POST" action="register.php">
<label for="user">Username:</label>
<input type="text" name="user" id="user"><br><br>
<label for="pass">Password:</label>
<input type="password" name="pass" id="pass">
<button>Register</button>
</form>

<?php
require "db.php";
$username = $_POST['user'];
$password = $_POST['pass'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$res = mysqli_query($conn, "insert into users(username,password)values('$username','$hashed_password')");
?>
<br><a href="login.html">Login</a>
