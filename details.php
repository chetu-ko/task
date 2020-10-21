<?php include('server.php') ?>

<!doctype html>
<head>
<style>
/* Style the header */
.header {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}
* {
 box-sizing: border-box;
}
body {
  margin: 0;
}

h1{
background:tomato;
font-family:bedrock;
}

.n{
padding: 70px 50px;
background-color:rgba(0.9,0.1,0.1,0.3) ;
 width:300px;
hieght:100px;
margin:20px auto 10px;	
border:1px solid black;
}
header {
background-color:grey;
text-align:center;
text-size:60px;
padding:3px;
}

</style>
<meta charset="UTF-8">
</head>
<html>
  <body>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#txtName").keypress(function (e) {
            var keyCode = e.keyCode || e.which;
 
            $("#lblError").html("");
 
            //Regex for Valid Characters i.e. Alphabets and Numbers.
            var regex = /[A-Za-z 0-9]/;
 
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#lblError").html("Only Alphabets and Numbers allowed and it's not allowed even enter button.");
            }
 
            return isValid;
        });
    });
     $(function () {
        $("#txt").keypress(function (e) {
            var keyCode = e.keyCode || e.which;
 
            $("#lblError").html("");
 
            //Regex for Valid Characters i.e. Alphabets and Numbers.
            var regex = /[A-Za-z 0-9]/;
 
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#lblError").html("Only Alphabets and Numbers allowed and it's not allowed even enter button.");
            }
 
            return isValid;
        });
    });
     $(document).ready(function(e){
        $('#btnSubmit').click(function(){ 
        var email = $('#Email').val();
        var reg = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!redif.com)(?!aol.com)([\w-]+\.)+[\w-]{2,4})?$/;
        if (reg.test(email)){
            return 0;
        }else{
        alert('gmail, yahoo, hotmail, redif, are not allowed to enter.');
        return false;
        }
    });

});
</script>

    <h1 style="text-align:center"> ENTER DATA FOR REGISTRATION </h1> 
    <form method="post" action="details.php" enctype="multipart/form-data">
    <br><br><br>
        <div class="n">
            <span id="lblError"></span>
            
            <label for="Cname"> Company Name: </label>
                <input type="text" name="Cname"  id="txt" title="Special char not allowed" required> </br> </br>
            <label for="Email"> Email: </label>
                &nbsp;&nbsp;&nbsp;<input type="text" id="Email"  name="Email" required> </br> </br>
            <label for="Mobile"> Mobile: </label>
                &nbsp;&nbsp;&nbsp;<input type="tel" name="Mobile" pattern="[7-9]{1}[0-9]{9}" 
            title="Phone number with 7-9 and remaing 9 digit with 0-9" required> </br> </br>
            
            <label for="Hrname"> HR name: </label>
            <span id="lblError"></span>
                <input type="text"  name="Hrname"  id="txtName" title="Special char not allowed" required> </br> </br>
            <label for="Address"> Address: </label>
                    &nbsp;&nbsp;&nbsp;<input type="text"  name="address" required> </br> </br>
            <label for="File"> File: </label>
                <input type="file" name="files[]" multiple required> </br> </br>
            <label for="password"> Password: </label>
                <input type="password"  name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"required> </br> </br>
                <button type="submit" value="submit" id="btnSubmit" name="enter"> submit </button>
 
            </div>
        </form>
    </body>
</html>