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
if (isset($_POST["id"]) && isset($_POST["name"]) &&isset($_POST["salary"]))
{
    $id = $_POST["id"];
    $name = $_POST["name"];
    $salary = $_POST["salary"];
    echo "Id: ", $id, ", Name: ", $name, " , Salary: ", $salary;
}
?>
