<HTML>
<HEAD>
    
</HEAD>
<BODY>
    <?php
      include '12manipulateDatabase_CRUD.php';

    ?>
<HR>
        <H2>Enter the Id you want to update</H2>
        <FORM action="#" METHOD="POST">
        ID: <input type="num" name="id"><BR><BR>
        <input type="submit" name="submit">
    </FORM>


<?php

require_once '12db_connection.php';
if(isset($_POST['submit']))
{
    $enteredcustId=$_POST['id'];
    $sqlstmt="select * from customer where customer_id='$enteredcustId'";
    $resquery=mysqli_query($con,$sqlstmt);
    $row=mysqli_fetch_array($resquery);
    $numberofcustomers=mysqli_num_rows($resquery);
    if($resquery==TRUE && $numberofcustomers==1)
    {
        $fname=$row['firstname'];
        $lname=$row['lastname'];

        echo "<form action='#' method='POST'>";
        echo "Customer Id:";
        echo "<input type='text' value='$enteredcustId' readonly name='id'><br>";
        echo "First Name:";
        echo "<input type='text' name='fn' value=$fname><br>";
        echo "Last Name:";
        echo "<input type='text' value=$lname name='ln'><br><br>";
        echo "<input type='submit' value='update' name='update'>";
        echo "</form>";
    }
    else
    {
        echo "User with ".$enteredcustId." does not exist";
    }
    
}
if(isset($_POST['update']))
    {
        
        $custId=$_POST['id'];
        $updatedfname=$_POST['fn'];
        $updatedlastname=$_POST['ln'];

        $queryUpdate="Update customer set firstname='$updatedfname',lastname='$updatedlastname' where customer_id='$custId' ";
        $resUpdate=mysqli_query($con,$queryUpdate);
        if($resUpdate==TRUE)
        {
            echo "Customer record updated";
        }
        else
        {
            echo "Try again later";
        }

    }
    else
    {
        echo 'Update button is not working';
    }
    


?>
</BODY>
</HTML>