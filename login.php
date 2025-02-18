<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['user'] = $_POST['username'];
    echo "<p>Welcome, " . htmlspecialchars($_SESSION['user']) . "!</p>";
}
?>
<form method="POST">
    Username: <input type="text" name="username">
    Password: <input type="text" name="Password"> 
    <input type="submit" value="Login">
    <h2>session fixation</h2>
    <h>created by: Harshvardhan Rathee</h>
</form>
