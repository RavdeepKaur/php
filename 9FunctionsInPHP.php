<?php

function displaydetails($n1,$n2)
{
    echo "I received ".$n1." and ".$n2;
    return $n1+20;
}

$res=displaydetails(45,"CSTS");
echo "<BR>Returned value is ".$res;
?>