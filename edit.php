<html>

<?php
include 'connection.php'
$info="SELECT * FROM Employee WHERE id=$id ";
$result=mysqli_query($connection,$info);
$info1=mysqli_fetch_array($info);
?>
<body>
<form name="Form1"  action="update.php" method="post" >
<h1 style="text-align:center">Personal Information</h1>
<p>* required field</p>
<input type="hidden" name="id" value="<?echo {$info1[id]}?>"></input>
<b><font size="5" color="black">Firstname:<span class="imprt">*</span></b><br><input type="text" name="fname" id="fname"  value="<? echo {$info1[fname]}?>">></input><br><br>
<b>Lastname:<span class="imprt">*</span></b><br><input type="text" name="lname" maxlength="2" id="lname"  value="<? echo {$info1[lname]}?>">></input><br><br>
<b>Email:<span class="imprt">*</span></b><br> <input type="email" name="mail" placeholder=" Enter mail" id="mail"  value="<? echo {$info1[mail]}?>">></input><br><br>
<b>Confirmation mail:<span class="imprt">*</span></b><br><input type="text" name="cmail" id="cmail"  value="<? echo {$info1[cmail]}?>">></input><br><br>
<b>Gender:</b><br><input type="radio" name="gender" value="male"  value="<? echo {$info1[gender]}?>">>Male
<input type="radio" name="gender" value="female"  value="<? echo {$info1[gender]}?>">>Female<br><br>
<b>Age:</b><br> <input type="number" name="age" min="1" max="30" placeholder=" In years" id="num"  value="<? echo {$info1[age]}?>">></input><br><br>
<b>Address:</b><br>
<textarea name="address" id="addr" placeholder="Enter permanent address"  value="<? echo {$info1[address]}?>">></textarea><br><br>
<b>Country:</b> <br><input list="states" name="states" id="state"  value="<? echo {$info1[states]}?>">>
<datalist id="states">
<option value="canada">
<option value="india">
<option value="france">
<option value="united states">
<option value="united kingdom">
</datalist><br><br>
<b>Phone number:<span class="imprt">*</span></b> <br> <input type="text" name="number" placeholder="+91" id="no"  value="<? echo {$info1[number]}?>">></input><br><br>
<b>Select image to upload:</b><br>
    <input accept="image/gif,image/jpeg" type="file" name="upload" id="upload"></input>
<br><br>
<input type="submit" value="Update"></input></font><br><br>
</body>
</html>
<?php
mysqli_close($connection);
?>
