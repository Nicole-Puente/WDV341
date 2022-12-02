<!DOCTYPE html>
<html>
<body>
 
<?php
 
    echo "You have been Logged out successfully";
 
    session_start();
    session_destroy();
 
?>

<ul>
    <li><a href="login.php">Return to Login page</a></li>
</ul>
 
</body>
</html>