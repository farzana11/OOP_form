<html>
<form action="index.php" method = "POST">
    First Name : <input type ="text" name ="firstName">
    <br/>
    Last Name : <input type ="text" name ="lastName">
    <br/>
    Reg no : <input type ="text" name ="regNo">
    <br/>
    <input type="submit" value ="Show Below" name ="showButton">
    <br/>
</form>
</html>
<?php
require "student.php";
if (isset($_POST["firstName"]) && isset($_POST["lastName"]) &&isset($_POST["regNo"]))
{
    $student=new Student();
    $student->firstName=$_POST["firstName"];
    $student->lastName=$_POST["lastName"];
    $student->regNo=$_POST["regNo"];

    echo "FullName: ",  $student->getFullName()," Reg No: ",  $student->regNo;
}
?>
