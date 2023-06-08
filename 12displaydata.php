

<?php
require_once '12db_connection.php';
include '12manipulateDatabase_CRUD.php';
$sqlSelect="Select * from customer";
$resSelect=mysqli_query($con,$sqlSelect);

echo "<table border='1'>";
echo "<tr><th>Customer Id</th><th>First Name</th><th>Last Name</th></tr>";
$customerDetails=mysqli_num_rows($resSelect);
while($row=mysqli_fetch_array($resSelect))
{
    $custId=$row["customer_id"];
    $cusfname=$row["firstname"];
    $cuslname=$row["lastname"];
    echo "<tr><td>$custId</td><td>$cusfname</td><td>$cuslname</td></tr>";
}


echo "</table>";
echo "<BR>";
echo "Total number of customers are ".$customerDetails;

?>