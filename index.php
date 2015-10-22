<html>
<head>
<style>
.imprt{color:red;}
label {
  float:left;
  width:25%;
  margin-right:1.5em;
  padding-top:0.2em;
  text-align:right;
  font-weight:bold;
  font-size:20;
  color:black;
  }

#inputid{
width:330px;
height:40px;
}

p{
color:red;
}
body
{
background-image:url("images1.jpeg");
background-repeat: no-repeat;
background-size: 2000px 2000px;
}
</style>

</head>
<body>
<form  action="insert.php" method="post" id="myForm" >
<div id="validation"></div>
<fieldset>
<legend style="text-align:center">Personal Information</legend>
<p>* required field</p>
<label><b>Firstname<span class="imprt">*</span>:</b></label><input type="text" name="fname" id="inputid"></input><br><br>
<label><b>Lastname<span class="imprt">*</span>:</b></label><input type="text" name="lname" maxlength="2" id="inputid"></input><br><br>
<label><b>Email<span class="imprt">*</span>:</b></label> <input type="email" name="mail" placeholder=" Enter mail" id="inputid"></input><br><br>
<label><b>Confirmation mail<span class="imprt">*</span>:</b></label><input type="text" name="cmail" id="inputid"></input><br><br>
<label><b>Gender:</b></label><input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female<br><br>
<label><b>Age:</b></label> <input type="number" name="age" min="1" max="30" placeholder=" In years" id="inputid"></input><br><br>
<label><b>Address:</b></label>
<textarea name="address" id="inputid" placeholder="Enter permanent address"></textarea><br><br>
<label><b>Country:</b></label><input list="states" name="states" id="inputid">
<datalist id="states">
<option value="canada">
<option value="india">
<option value="france">
<option value="united states">
<option value="united kingdom">
</datalist><br><br>
<label><b>Phone number<span class="imprt">*</span>:</b></label><input type="text" name="number" placeholder="+91" id="inputid"></input><br><br>
<label><b>Select image to upload:</b></label>
    <input accept="image/gif,image/jpeg" type="file" name="upload" id="inputid"></input>
<br><br>
<label></label><input type="submit" value="Submit"></input></font><br><br>
</form>
<script>
function Validate(form) {
    var errors = "";
    if (form.Name.value.length === 0) {
        form.Name.style.border = "1px solid red";
        form.Name.style.backgroundColor = "#FFCCCC";
        errors += "<li>Please enter a Name</li>";
    }
    if (errors.length > 0) {
        document.getElementById("validation").innerHTML = "<ul>" + errors + "</ul>";
        return false;
    }
}
document.getElementById("myForm").onsubmit = function () {
    return Validate(this);
};
</script>
</body>
</fieldset>
</form>
</html>


	
