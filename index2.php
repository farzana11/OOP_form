<html>
<form action="index2.php" method = "POST">
    Id : <input type ="text" name ="id">
    <br/>
    Name : <input type ="text" name ="name">
    <br/>
    Salary : <input type ="text" name ="salary">
    <br/>
    <input type="submit" value ="Show Below" name ="showButton">
    <br/>
</form>
</html>
<?php
require "employee.php";
if (isset($_POST["id"]) && isset($_POST["name"]) &&isset($_POST["salary"]))
{
    $anEmployee=new Employee();
    $anEmployee->id=$_POST["id"];
    $anEmployee->name=$_POST["name"];
    $anEmployee->salary=$_POST["salary"];

    echo "Id: ",  $anEmployee->id, ", Name: ",  $anEmployee->name, " , Salary: ",  $anEmployee->salary;
}
?>
