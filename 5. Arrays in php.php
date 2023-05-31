<?php
#demonstration of arrays
#Type 1: Indexed array

$billingamount=array(40,12,5,70);
echo "Element at index 0 is ".$billingamount[0];
#accessing array with for loop
echo "<br>Array elements are<br>";
for($i=0;$i<count($billingamount);$i++)
{
    echo $billingamount[$i]."<BR>";
}

#array elements can also be of different datatypes
echo "<BR>Example of mixed datatypes<BR>";
$listofItems=array("Cap","food",45,12.67,'Shoes');
for($i=0;$i<count($listofItems);$i++)
{
    echo $listofItems[$i]."<BR>";
}

#sorting array elements in ascending order
sort($billingamount);
echo "<br>Array elements after sorting in ascending order are<br>";
for($i=0;$i<count($billingamount);$i++)
{
    echo $billingamount[$i]."<BR>";
}

#sorting array elements in descending order
rsort($billingamount);
echo "<br>Array elements after sorting in descending order are<br>";
for($i=0;$i<count($billingamount);$i++)
{
    echo $billingamount[$i]."<BR>";
}

#Type-2: Associative array

$expenses=array("T-shirt"=>40,"Jeans"=>50,"Cap"=>25,"Restaurant"=>30);
echo "<BR>Value saved at index Jeans is ".$expenses["Jeans"];
echo "<br>Elements of associative array are<br>";
foreach($expenses as $key=>$value )
{
    echo "Index:".$key."   Value:".$value."<BR>";
}
?>