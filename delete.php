<?php
include 'connection.php';
if(isset($_GET['id']))
{
$id=$_GET['id'];
$res="DELETE FROM Employee
	WHERE id=$id";

if($connection->query($res) == true)
{
echo "success";
}
else
{
echo "Error";
}
} 
?>
