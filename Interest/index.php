<html>
<form action="index.php" method = "POST">
    Principle Amount : <input type ="text" name ="principal">
    <br/>
    Annual Interest Rate : <input type ="text" name ="interest">%
    <br/>
    Time Period : <input type ="text" name ="time">year
    <br/>
    <input type="submit" value ="Calculate" name ="calculate">
    <br/>
</form>
</html>
<?php
require "deposite.php";
if (isset($_POST["principal"]) && isset($_POST["interest"]) && isset($_POST["time"]))

{
    $deposite=new Deposite();
    $deposite->principal=$_POST["principal"];
    $deposite->interest=$_POST["interest"];
    $deposite->time=$_POST["time"];

    echo "Result:",  $deposite->getTotalAmount();

   }
?>
