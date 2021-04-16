


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="validate.php" method="post">
    <label for="username">Email</label>
    <input type="text" name="email" id="email"><br/>
    <label for="password">Password</label>
    <input type="password" name="password" id="password"><br/>
    <input type="checkbox" name="remember" value="1" checked>Remember Me
    <input type="submit" value="login" name="login">
    </form>

</body>
</html>

<?php
if(isset($_COOKIE['email']) && isset($_COOKIE['password'])){
$email= $_COOKIE['email'];
$pass =$_COOKIE['password'];
echo "<script>

document.getElementById('email').value='$email';
document.getElementById('password').value='$pass';



</script>";

}


?>