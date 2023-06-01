<?php

$n1=$_POST['num1'];
$n2=$_POST['num2'];
$largest=0;
echo "Entered numbers are ".$n1."  ".$n2."<BR>";
if($n1>=$n2)
{
  $largest=$n1;
}
else
{
    $largest=$n2;
}
//echo "Largest number is ".$largest;
header("Location:7v2Conditional Statements.php?large=$largest&num1=$n1&num2=$n2");
//header("Location:7.2Conditional Statements.php?large=$largest&num1=$n1");

//header("Location:7. Conditional Statements.php?large=$largest");
?>
