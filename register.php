<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logincss.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Righteous:regular" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    
    <form method="post" action="register.php" class="card" name="myForm">

        <?php include('errors.php'); ?>

        <div class="logo" >
            <img src="logo2.png" style="width:70px;"> <center style="font-family:'vermin_vibes_vregular';font-size:25px;color:white;">GALAXY GAMES</center>
        </div>

        <div class="title">
            <p>Register a Free Galaxy Games Account</p>
        </div>

        <div class="input-container">
            <div class="inputBox">
                <input type="text" placeholder="Username"  name="username" value="<?php echo $username; ?>">
            </div>
            <div class="inputBox">
                <input type="email" placeholder="Email-Id"  name="email" value="<?php echo $email; ?>">
            </div>
            <div class="inputBox">
                <input type="Password" placeholder="Enter Password"  name="password_1">
            </div>
            <div class="inputBox">
                <input type="Password" placeholder="Confirm Password"  name="password_2">
            </div>
        </div>
        
        <div class="remember">
            <div class="input">
                <input type="checkbox"> &nbsp; remember me
            </div>


        </div>

        <div class="loginBtn">
            <button type="Submit" name="reg_user">Register</button>
        </div>

        <div class="privacy">
            <p>Privacy</p>
        </div>

        <div class="new">
            <p class="acc">Already have an account ? <a style="text-decoration:none;color:white;" href="login.php">Sign in</a></p>
            <p class="p2">
                Back to <a href="#">all sign up options</a>
            </p>
        </div>
    </form>
    <script>
 function validateForm() {
 let x = document.forms["myForm"]["username"].value;
 if (x == "") {
 alert("Name must be filled out");
 return false;
 }
 else if (x.length < 7 || x.length>30) {
 alert("Name Length should be greater than 7 and lesser than 30");
 return false;
 }
var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
let z=document.forms["myForm"]["email"].value;
if {

  alert("Invalid email address!");
  return false;

}
else{
    return true;
}
 let a =document.forms["myForm"]["password_1"].value;

 if (a.match(/[a-z]/g) && a.match(
 /[A-Z]/g) && a.match(
 /[0-9]/g) && a.match(
 /[^a-zA-Z\d]/g) && a.length >= 8) {
 return true;
 }
 else if (a == "") {
 alert("password must be filled out");
 return false;
 }
 else{
 alert("Invalid Password");
 return false;
 }
 let b = document.forms["myForm"]["password_2"].value;
 if (a != b) {
 alert("both passwords are not same... verify it again");
 return false;
 }
 else if (b == "") {
 alert("confirm password must be filled out");
 }
 else {
 return true;
 }
}
</script>
</body>
</html>