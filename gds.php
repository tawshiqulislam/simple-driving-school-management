<?php
require 'conndb.php'
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>

*{
	margin:0;
	padding:0;
}
h1{
	font-size:zem;
	font-family:"Core Sans N W01 35 Light";
	font-weight:normal;
	margin:.67em 0;
	display:block;
}
#registered{
	margin-top:50px;
}
#registered img{
	margin-bottom:0px;
	width:100px;
	height:100px;
}
#registered span{
	clear:both;
	display:block;
}
img{
	margin-bottom:20px;
}
.module{
	position:relative;
	top:10%;
	height:65%;
	width:450px;
	margin-left:auto;
	margin-right:auto;
}
.user{
	color:#66d8fc;
	font-weight:bold;
}
.userlist{
	float:left;
	padding:30px;
}
.welcome{
	position:relative;
	top:30%;
	height:65%;
	width:900px;
	margin-left:auto;
	margin-right:auto;
	margin-top:50px;
}
body{
  color: #fff;
  background-color:#f0f0f0;
  font-family:helvetica;
  background:url('http://clevertechie.com/img/bnet-bg.jpg') #0f2439 no-repeat center top;
}

.body-content{
  position:relative;
  top:20px;
  height:700px;
  width:800px;
  margin-left:auto;
  margin-right:auto; 
  background: transparent;
}

select,
textarea,
input[type="int"],
input[type="text"],
input[type="password"],
input[type="email"]

{
  height:30px;
  width:100%;;
  display: inline-block;
  vertical-align: middle;
  height: 34px;
  padding: 0 10px;
  margin-top: 3px;
  margin-bottom: 10px;
  font-size: 15px;
  line-height: 20px;
  border: 1px solid rgba(255, 255, 255, 0.3);
  background-color: rgba(0, 0, 0, 0.5);
  color: rgba(255, 255, 255, 0.7);
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 2px;
}

select,
textarea,
input[type="int"],
input[type="text"],
input[type="password"],
input[type="email"] {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  -webkit-transition: background-position 0.2s, background-color 0.2s, border-color 0.2s, box-shadow 0.2s;
  transition: background-position 0.2s, background-color 0.2s, border-color 0.2s, box-shadow 0.2s;
}
select:hover,
textarea:hover,
input[type="int"]:hover,
input[type="text"]:hover,
input[type="password"]:hover,
input[type="email"]:hover {
  border-color: rgba(255, 255, 255, 0.5);
  background-color: rgba(0, 0, 0, 0.5);
  color: rgba(255, 255, 255, 0.7);
}
select:focus,
textarea:focus,
input[type="IdNo"]:focus,
input[type="text"]:focus,
input[type="password"]:focus,

input[type="email"]:focus {
  border: 2px solid;
  border-color: #1e5f99;
  background-color: rgba(0, 0, 0, 0.5);
  color: #ffffff;
}
.btn {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  margin: 3px 0;
  padding: 6px 20px;
  font-size: 15px;
  line-height: 20px;
  height: 34px;
  background-color: rgba(0, 0, 0, 0.15);
  color: #00aeff;
  border: 1px solid rgba(255, 255, 255, 0.15);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-radius: 2px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
}
.btn.active,
.btn:active {
  padding: 7px 19px 5px 21px;
}
.btn.disabled:active,
.btn[disabled]:active,
.btn.disabled.active,
.btn[disabled].active {
  padding: 6px 20px !important;
}
.btn:hover,
.btn:focus {
  background-color: rgba(0, 0, 0, 0.25);
  color: #ffffff;
  border-color: rgba(255, 255, 255, 0.3);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}
.btn:active,
.btn.active {
  background-color: rgba(0, 0, 0, 0.15);
  color: rgba(255, 255, 255, 0.8);
  border-color: rgba(255, 255, 255, 0.07);
  box-shadow: inset 1.5px 1.5px 3px rgba(0, 0, 0, 0.5);
}
.btn-primary {
  background-color: #098cc8;
  color: #ffffff;
  border: 1px solid transparent;
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-radius: 2px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  background-image: -webkit-linear-gradient(top, #0f9ada, #0076ad);
  background-image: linear-gradient(to bottom, #0f9ada, #0076ad);
  border: 0;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(255, 255, 255, 0.15) inset;
}
.btn-primary:hover,
.btn-primary:focus {
  background-color: #21b0f1;
  color: #ffffff;
  border-color: transparent;
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}
.btn-primary:active,
.btn-primary.active {
  background-color: #006899;
  color: rgba(255, 255, 255, 0.7);
  border-color: transparent;
  box-shadow: inset 1.5px 1.5px 3px rgba(0, 0, 0, 0.5);
}
.btn-primary:hover,
.btn-primary:focus {
  background-image: -webkit-linear-gradient(top, #37c0ff, #0097dd);
  background-image: linear-gradient(to bottom, #37c0ff, #0097dd);
}
.btn-primary:active,
.btn-primary.active {
  background-image: -webkit-linear-gradient(top, #006ea1, #00608d);
  background-image: linear-gradient(to bottom, #006ea1, #00608d);
  box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6) inset, 0 0 0 1px rgba(255, 255, 255, 0.07) inset;
}
.btn-block {
  display: block;
  width: 100%;
  padding-left: 0;
  padding-right: 0;
}

.alert {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 4px 20px 4px 20px;
  font-size: 13px;
  line-height: 20px;
  margin-bottom: 20px;
  text-shadow: none;
  position: relative;
  background-color: #272e3b;
  color: rgba(255, 255, 255, 0.7);
  border: 1px solid #000;
  box-shadow: 0 0 0 1px #363d49 inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}
.alert-error {
  color: #f00;
  background-color: #360e10;
  box-shadow: 0 0 0 1px #551e21 inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}
.alert:empty{
    display: none;
}
.alert-success {
  color: #21ec0c;
  background-color: #15360e;
  box-shadow: 0 0 0 1px #2a551e inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}





</style>
<script>
    $(document).ready(function(){
        var $submitBtn = $("#form input[type='submit']");
        var $passwordBox = $("#password");
        var $confirmBox = $("#confirmpassword");
        var $errorMsg =  $('<span id="error_msg">Passwords do not match.</span>');

        // This is incase the user hits refresh - some browsers will maintain the disabled state of the button.
        $submitBtn.removeAttr("disabled");

        function checkMatchingPasswords(){
            if($confirmBox.val() != "" && $passwordBox.val != ""){
                if( $confirmBox.val() != $passwordBox.val() ){
                    $submitBtn.attr("disabled", "disabled");
                    $errorMsg.insertAfter($confirmBox);
                }
            }
        }

        function resetPasswordError(){
            $submitBtn.removeAttr("disabled");
            var $errorCont = $("#error_msg");
            if($errorCont.length > 0){
                $errorCont.remove();
            }  
        }


        $("#confirm_password, #password")
             .on("keydown", function(e){
                /* only check when the tab or enter keys are pressed
                 * to prevent the method from being called needlessly  */
                if(e.keyCode == 13 || e.keyCode == 9) {
                    checkMatchingPasswords();
                }
             })
             .on("blur", function(){                    
                // also check when the element looses focus (clicks somewhere else)
                checkMatchingPasswords();
            })
            .on("focus", function(){
                // reset the error message when they go to make a change
                resetPasswordError();
            })

    });
  </script>
<html>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b? family=Core+Sans+N+W01+35+light"rel="stylesheet"type="text/css"/>



	<head>
	<title>Driving School</title>
	</head>
	<body>
	<div class="body-content">
	<div class="module">
	<h1>Registration Form</h1>
	<h2> Welcome to driving school</h2>
  <?php 
 if(isset($_POST['register'])){
$adm = strtoupper($_POST['adm']);
$natid = $_POST['natid'];
$fname = ucfirst($_POST['fname']);
$mname = ucfirst($_POST['mname']);
$lname = ucfirst($_POST['lname']);
$gender = strtoupper($_POST['gender']);
$dob = date_create($_POST['dob']);
$fdob = date_format($dob, "Y/m/d");
$email = $_POST['email'];
$phone = $_POST['phone'];
$town = ucfirst($_POST['town']); 
$selecta = mysqli_query($conn,"SELECT * FROM student WHERE adm = '$adm'") or die("echo 'could not connect to table';");
$dachk = mysqli_num_rows($selecta);
$selecte = mysqli_query($conn, "SELECT email FROM student WHERE email = '$email'");
$dechk = mysqli_num_rows($selecte);
if($dachk != 0){
	echo 'admission in use, try again.';
}
else if(!preg_match("/^[a-zA-Z0-9 ]*$/", $adm)){
	echo "admission not correct format";
}
else if(!preg_match("/^[0-9]*$/", $natid)){
	echo "national id not correct format";
}
else if(!preg_match("/^[a-zA-Z ]*$/", $fname)){
	echo "first name not correct format";
}
else if(!preg_match("/^[a-zA-Z ]*$/", $mname)){
	echo "middle name not correct format";
}
else if(!preg_match("/^[a-zA-Z ]*$/", $lname)){
	echo "last name not correct format";
}
else if(!preg_match("/^[a-zA-Z]*$/", $gender)){
	echo "gender not correct format";
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo "email not correct format";
}
else if($dechk != 0){
	echo "email in use, try again";
}
else if(!preg_match("/^[0-9]*$/", $phone)){
	echo "phone not correct format";
}
else if(!preg_match("/^[a-zA-Z ]*$/", $town)){
	echo "town not correct format";
}
else{
$iquery = "INSERT INTO student (adm,natid,fname,mname,lname,gender,dob,email,phone,town) VALUES ('$adm','$natid','$fname', '$mname','$lname','$gender','$fdob','$email','$phone','$town')";
$insert = mysqli_query($conn, $iquery) or die(mysqli_error($conn));
if ($insert){
	echo "successfully registered new student, We will email you soon";
	echo "<a href = 'index.php'>continue</a>";
}
}
}
else{
?>
	<form class="form" action="gds.php" method="post"  enctype="multipart/form-data" autocomplete="off">
		<div class="alert alert-error"></div>
    admission<br>
<input type="text" name="adm" required><br>
national id<br>
<input type="text" name="natid" required maxlength="8"><br>
first name<br>
<input type="text" name="fname" required><br>
middle name<br>
<input type="text" name="mname"><br>
last name<br>
<input type="text" name="lname" required><br>
gender<br>
<input type = "radio" name = "gender" value = "m" checked>male
<input type = "radio" name = "gender" value = "f">female
<input type = "radio" name = "gender" value = "o">other<br>
date of birth<br>
<input type="date" name="dob" required><br>
email<br>
<input type="text" name="email" required><br>
phone<br>
<input type="text" name="phone" required maxlength="12" value="2547"><br>
address<br>
<input type="text" name="town" required><br>
<input type="Submit" value="Register" name="register"/>
</form>
<a href="index.php">back</a>
<?php	
}
include 'footer.php';
?>
	</div>
	</div>
</body>	
</html>
