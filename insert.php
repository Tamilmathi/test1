<?php 
  
include 'connection.php';

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mail=$_POST['mail'];
$cmail=$_POST['cmail'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$address=$_POST['address'];
$states=$_POST['states'];
$number=$_POST['number'];
$upload=$_POST['upload']['name'];
if (!empty($_FILES["upload"]["name"])) {
$file_name=$_FILES["upload"]["name"];
$temp_name=$_FILES["upload"]["tmp_name"];
$imgtype=$_FILES["uploadedimage"]["type"];
$target_path = "images/".$file_name;
if(move_uploaded_file($temp_name, $target_path)){
echo "";
}else {
echo "Error in moving the file";
}*/
//echo "$fname,$lname,$mail,$cmail,$gender,$age,$address,$states,$number";
//$sql= "INSERT INTO Employee (fname,lname,mail,gender,age,address,states,number) VALUES ($_POST[fname],$_POST[lname],$_POST[mail],$_POST[gender],$_POST[age],$_POST[address],$_POST[states],$_POST[number]),$_POST[upload]";
$sql= "INSERT INTO Employee (fname,lname,mail,cmail,gender,age,address,states,number,images_path) VALUES ('$fname','$lname','$mail','$cmail','$gender','$age','$address','$states','$number','$target_path')";
if (mysqli_query($connection, $sql)) {
    echo "";
} else {
    echo "Error:";
}
$sql="SELECT * FROM Employee";
$result=mysqli_query($connection,$sql);
?>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</head>
</html>
<table style="width:100%">
<caption><b>Personal Information</b></caption>
<tr>
<th>fname</th>
<th>lname</th>
<th>mail</th>
<th>cmail</th>
<th>gender</th>
<th>age</th>
<th>address</th>
<th>states</th>
<th>number</th>
<th>images_path</th>
</tr>
<?php

while($data = mysqli_fetch_assoc($result)){
echo "<tr><td>$data[id]</td><td>$data[fname]</td><td>{$data['lname']}</td><td>{$data['mail']}</td><td>{$data['cmail']}</td><td>{$data['gender']}</td><td>{$data['age']}</td><td>{$data['address']}</td><td>{$data['states']}</td><td>{$data['number']}</td><td><img src={$data['images_path']}alt=""></td><td><a href='edit.php?id={$data['id']}'>Edit</a></td><td><a href='delete.php?id={$data['id']}'>Delete</a></td></tr> "
}
?>
</table>
</body>
<?php
mysqli_close($connection);
?>


