<html>
<head>
<style>
.imprt{color:red;}
#fname{
width:330px;
height:40px;
}
#lname{
width:330px;
height:40px;
}
#mail{
width:330px;
height:40px;
}
#cmail{
width:330px;
height:40px;
}
#num{
width:330px;
height:40px;
}
#addr{
width:330px;
height:100px;
 
}
#state{
width:330px;
height:40px;
}
#no{
width:330px;
height:40px;
}
#upload{
width:500px;
height:40px;
}
p{
color:red;
}
body
{
background-image:url("background-315469_640.jpg");
background-repeat: no-repeat;
background-size: 2000px 2000px;
}
</style>
</head>
<body>
<form   action="" method="post" id="myForm">
<div id="validation"></div>
<h1 style="text-align:center">Personal Information</h1>
<p>* required field</p>
<b><font size="5" color="black">Firstname:<span class="imprt">*</span></b><br><input type="text" name="fname" id="fname"></input><br><br>
<b>Lastname:<span class="imprt">*</span></b><br><input type="text" name="lname" maxlength="2" id="lname"></input><br><br>
<b>Email:<span class="imprt">*</span></b><br> <input type="email" name="mail" placeholder=" Enter mail" id="mail"></input><br><br>
<b>Confirmation mail:<span class="imprt">*</span></b><br><input type="text" name="cmail" id="cmail"></input><br><br>
<b>Gender:</b><br><input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female<br><br>
<b>Age:</b><br> <input type="number" name="age" min="1" max="30" placeholder=" In years" id="num"></input><br><br>
<b>Address:</b><br>
<textarea name="address" id="addr" placeholder="Enter permanent address"></textarea><br><br>
<b>Country:</b> <br><input list="states" name="states" id="state">
<datalist id="states">
<option value="canada">
<option value="india">
<option value="france">
<option value="united states">
<option value="united kingdom">
</datalist><br><br>
<b>Phone number:<span class="imprt">*</span></b> <br> <input type="text" name="number" placeholder="+91" id="no"></input><br><br>
<b>Select image to upload:</b><br>
    <input accept="image/gif,image/jpeg" type="file" name="upload" id="upload"></input>
<br><br>
<input type="submit" value="Submit"></input></font><br><br>
</form>
<script>
function Validate(form) {
    var errors = "";
    if (form.fname.value.length == 0) {
        form.fname.style.border = "1px solid red";
        form.fname.style.backgroundColor = "#FFCCCC";
        errors += "<li>Please enter a Name</li>";
    }
    if (errors.length > 0) {
        document.getElementById("validation").innerHTML = "<ul>" + errors + "</ul>";
        return false;
    }
	if(form.fname.value !=isNaN){
         form.fname.style.border = "1px solid red";
         errors += "<li>Please enter a valid Name</li>";
    }
if (errors > 0) {
        document.getElementById("validation").innerHTML = "<ul>" + errors + "</ul>";
        return false;
    }
if (form.lname.value.length == 0) {
        form.lname.style.border = "1px solid red";
        form.lname.style.backgroundColor = "#FFCCCC";
        errors += "<li>Please enter a Name</li>";
    }
    if (errors.length > 0) {
        document.getElementById("validation").innerHTML = "<ul>" + errors + "</ul>";
        return false;
    }
   if(form.mail.value.length ==0){
       form.mail.style.border = "1px solid red";
       form.mail.style.backgroundColor = "#FFCCCC";
        errors += "<li>Please enter a Email</li>";
    }
 if (errors.length > 0) {
        document.getElementById("validation").innerHTML = "<ul>" + errors + "</ul>";
        return false;
    }
if(form.cmail.value != form.mail.value){
form.cmail.style.border = "1px solid red";
       form.cmail.style.backgroundColor = "#FFCCCC";
        errors += "<li>Confimation email should be the same tat of email</li>";
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
</html>
