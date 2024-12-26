<?php
session_start();



// Clear session
$_SESSION = array();
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-3600, '/');
}
session_destroy();

// Redirect to login
header("Location: login.php");
exit;
?> 