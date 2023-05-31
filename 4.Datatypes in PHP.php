<?php
#Datatypes in PHP
$num1=504;   #integer
$num2=50.4;  #float
$num3=$num1+$num2;
echo "Sum of values with different datatypes is ".$num3."<BR>";

#to check datatype of variable
#var_dump($num1);
#var_dump($num2);
var_dump($num3);

$message="It is an interesting language";
echo "<BR>".$message."<BR>";
var_dump($message);

#boolean datatype
$status=TRUE;
if($status)
    echo("<BR>Condition is true");
else
    echo("<BR>Condition is false");

?>