<?php

include '12manipulateDatabase_CRUD.php';
?>
<HTML>
<BODY>
<HR>
        <H2>Enter the Id you want to delete</H2>
        <FORM action="#" METHOD="POST">
        ID: <input type="num" name="cid"><BR><BR>
        <input type="submit" name="submit">
    </FORM>
</BODY>

<?php
require_once '12db_connection.php';
if(isset($_POST['cid']))
{
    $cusId=$_POST['cid'];
    $deletequery="delete from customer where customer_id=$cusId";
    $queryId=mysqli_query($con,$deletequery);
    if($queryId==TRUE)
    {
        echo "<h2>Customer record deleted successfully </h2>";
    }
    else
    {
        echo "<h2>".mysqli_error($con)."</h2>";
    }
}

?>
</HTML>