<html>
<form method="post" action="" id="myForm">
    <div id="validation"></div>
    <p><label>Name<br><input type="text" name="Name"></label></p>
    <p><label>Email<br><input type="text" name="mail"></label></p>
<label><b>Phone number<span class="imprt">*</span>:</b></label><input type="text" name="number" placeholder="+91" id="inputid"></input><br><br>
    <p><input type="submit" value="Submit"></p>
</form>
<script>
function Validate(form) {
    var errors = "";
    if (form.Name.value.length == 0) {
        form.Name.style.border = "1px solid red";
        //form.Name.style.backgroundColor = "#FFCCCC";
        errors += "<li>Please enter a Name</li>";
    }
    if (errors.length > 0) {
        document.getElementById("validation").innerHTML = "<ul>" + errors + "</ul>";
        return false;
    }

 if(form.mail.value.length == 0){
 form.mail.style.border = "1px solid red";
        //form.mail.style.backgroundColor = "#FFCCCC";
        errors += "<li>Please enter a Email</li>";
    }
 if (errors.length > 0) {
        document.getElementById("validation").innerHTML = "<ul>" + errors + "</ul>";
        return false;
    }
 if(form.number.value.length ==0){
 form.number.style.border="1px solid red";
     errors +="please enter a phone number";
}
if (errors.length > 0) {
        document.getElementById("validation").innerHTML = "<ul>" + errors + "</ul>";
        return false;
}
if(form.number.value.length != 10){
         form.number.style.border = "1px solid red";
         errors += "<li>Phone number should contains 10 digits.</li>";
    }
if (errors > 0) {
        document.getElementById("validation").innerHTML = "<ul>" + errors + "</ul>";
        return false;
}
}
document.getElementById("myForm").onsubmit = function () {
    return Validate(this);
};
</script>
</html>
