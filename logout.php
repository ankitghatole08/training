<?php
session_start();
session_destroy();
if(isset($_COOKIE['email']) && isset($_COOKIE['password'])){
    $email= $_COOKIE['email'];
    $pass =$_COOKIE['password'];
setcookie('email', $email, time()-1);
setcookie('password', $pass, time()-1);
}

echo "You have been logout click <a href='login.php'>here <a> to login";


?>