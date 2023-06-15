<?php
if(!empty($_POST["remember"]))
{
    //setting up cookie
    setcookie("username",$_POST["username"],time()+3600);
    setcookie("password",$_POST["password"],time()+3600);
    echo "Cookies Set Successfully!";
}
else
{
    setcookie("username","");
    setcookie("password","");
    echo "Cookies are not set!";
}


?>
<a href="15cookiesExample.php">Go to Login Page</a>