<html>
    <body>
        <H1>Largest number calculator</H1>
        <form method="POST" action="7v2conditionalstatementaction.php">
            Number-1 <input type="number" name="num1" value="<?php if(isset($_GET["num1"])) echo $_GET["num1"] ?>">
            Number-2 <input type="number" name="num2" value="">
            <input type="Submit">
        </form>
        <?php
         if(isset($_GET["large"]))
         {
            echo "Largest number is ".$_GET["large"];
         }
         ?>
    </body>
</html>