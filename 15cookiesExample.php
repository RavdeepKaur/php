<html>
    <head>
        <style>
            form
            {
                border:5px solid white;
                text-align:center;
                width: 400px;
            }
            body
            {
                background-color:#f1efdb;
            }
        </style>
    </head>
<body>
   <form  method="POST" action="15cookiesExampleAction.php">
     <p>Username: <input type="text" name="username" value="<?php if(isset($_COOKIE["username"])){ echo $_COOKIE["username"]; }  ?>"></p>
     <p>Password: <input type="password" name="password" value="<?php if(isset($_COOKIE["password"])){ echo $_COOKIE["password"]; }  ?>"></p>
     <p><input type="checkbox" name="remember"/>Remember Me</p>
     <p><input type="submit" value="Login"></p>
    </form>
</body>
</html>