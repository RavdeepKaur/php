<HTML>
<HEAD>
    <style>
        body
        {
            background-color:#f5f1cd;    
        }
        </style>
</HEAD>
<BODY>
<?php
      include '12manipulateDatabase_CRUD.php';

    ?>
<HR>
    <h2>Add Customer</h2><HR><HR><BR>
    <FORM action="#" METHOD="POST">
        First Name: <input type="text" name="firstname"><BR><BR>
        Last Name: <input type="text" name="lastname"><BR><BR>
        <input type="submit" name="submit">
    </FORM> 
</BODY>
</HTML>

<?php

require_once '12db_connection.php';
if(isset($_POST['submit']))
{
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];


    $sqlInsert="insert into customer(firstname,lastname) values ('$fname','$lname')";
    $res=mysqli_query($con,$sqlInsert);
    if($res)
    {
        echo "Customer record saved";
    }
    else
    {
        echo "Not authorised";
    }
}


?>