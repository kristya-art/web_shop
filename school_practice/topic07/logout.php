<?php
session_start();
session_regenerate_id();
session_destroy();
$_SESSION = array();
?>
<html>
<head></head>
<body>
<div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

    <p>Just logout</p>
        <button type="submit">Logout</button>
        <a href="login.php">Login</a>
    </div>
</body>
</html>