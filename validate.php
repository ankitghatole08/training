<?php

$myemail = "ankit@gmail.com";
$mypass ="1234";

if (isset($_POST['login']) )
{
    $email= $_POST['email'];
    $pass =$_POST['password'];
   
    if($email== $myemail && $pass==$mypass)
    {
        $rem = $_POST['remember'];
        if(isset( $_POST['remember']))
        {
            setcookie('email', $email, time()+60*60*7);
            setcookie('password', $pass, time()+60*60*7);
        }
        session_start();
        $_SESSION['email']=$email;
        header("location:welcome.php");
        
    }
    else
    {
        echo "Email or paaasword is invalid<br> Click <a href='login.php'>here</a> to try again";
    }

}
else{
    header("location:login.php");
}


?>