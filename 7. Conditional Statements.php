<html>
    <body>
        <H1>Largest number calculator</H1>
        <form method="POST" action="7.conditionalstatementaction.php">
            Number-1 <input type="number" name="num1">
            Number-2 <input type="number" name="num2">
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