<HTML>
  <head>
  </head>
    <BODY>
        <FORM method="POST" action="">
            Enter a number:<input type="number" name="num">
            <input type="submit" name="submit" >
        </FORM>
        
    </BODY>

    <?php
    if(isset($_POST['submit']))
    {
        $val=$_POST['num'];
        echo "Entered number is ".$val."<BR>";
        for($i=0;$i<$val;$i++)
        {
            if($i%2==0)
            {
                echo $i." ";
            }
        }
    }
    
    
    ?>
</HTML>