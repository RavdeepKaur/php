<?php

echo "Connection file called";
$hostname='localhost';
$username='root';
$password='';
$dbname='db_connect';

$con=mysqli_connect($hostname,$username,$password,$dbname);
$enteredname=$_POST['txtName'];
$enteredemial=$_POST['txtEmail'];
$enteredphone=$_POST['txtPhone'];
$enteredmessage=$_POST['txtMessage'];

/*echo $enteredname." ".$enteredemial." ".$enteredphone." ".$enteredmessage;*/
$sql="insert into table_contact(username,email,phone,message) values('$enteredname','$enteredemial','$enteredphone','$enteredmessage')";

$res=mysqli_query($con,$sql);
if($res)
{
    echo "Record saved";
}
else
{
    echo "Not authorised";
}
?>