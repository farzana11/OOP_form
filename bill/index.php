<html>
<head></head>
<body>
    <form action="index.php" method="POST">
        Rice : <input type ="text" name ="rice">Unit
        <br/>
        Vegetables : <input type="text" name="vegetables">Unit
        <br/>
        Fish :<input type="text" name="fish">Unit
        <br/>
        Meat : <input type="text" name="meat">Unit
        <br/>
        VAT : <input type="text" name="vat">% of Gross Total
        <br/>
        <input type="submit" value ="Show Bill" name ="show Bill">
        <br/>
</form>


  </body>
</html>
<?php

require "launchbill.php";

if (isset($_POST["rice"]) && isset($_POST["vegetables"]) &&isset($_POST["fish"]) && isset($_POST["meat"])&& isset($_POST["vat"]))
{
    $bill=new Launchbill();
    $bill->rice=$_POST["rice"];
    $bill->vegetables=$_POST["vegetables"];
    $bill->fish=$_POST["fish"];
    $bill->meat=$_POST["meat"];
    $bill->vat=$_POST["vat"];
?>
    Gross Total : <input type="text" value="<?php echo $bill->getGrossBill(); ?>"></br>
    Payable Amount : <input type="text" value="<?php echo $bill->getPayableBill(); ?>">
<?php
}
?>
