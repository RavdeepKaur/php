<?php
session_start();
echo "Session id is ".session_id();

$_SESSION['page_count']=$_SESSION['page_count']??0;
$_SESSION['page_count']++;


if($_SESSION['page_count']>20)
{
    echo "<BR>Thank you for visiting our web for 20 times";
    session_destroy();
}
?>

<html>
<body>
    <h1>Abc webpage</h1>
    <h2>Visitor Number: <?php echo $_SESSION['page_count'];  ?></h2>
</body>
</html>