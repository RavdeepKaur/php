<html>
<!--Embedding PHP Code in HTML-->
<body>
<h1>Welcome</h1>
<?php
    $marks1=70;
    $marks2=87;
    $total=$marks1+$marks2;
    echo("Total marks: ".$total."<br>");
        #single line comment
        /*
        Multi
        Line 
        comment
*/
    $average=$total/2;
    echo("Average: ".$average."<br>");

    #date function
    $today=date("Y-m-d");
    echo("Today is ".$today);

    /*Declaring constant*/
    define("PI",3.14);
    echo "<BR>Value in PI is ".PI;
?>
</body>
</html>