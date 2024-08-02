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
    
    <form method="post" action="login.php" class="card">

        <?php include('errors.php'); ?>

        <div class="logo" >
            <img src="logo2.png" style="width:70px;"> <center style="font-family:'vermin_vibes_vregular';font-size:25px;color:white;">GALAXY GAMES</center>
        </div>

        <div class="title">
            <p>Sign Up With Your Galaxy Games Account</p>
        </div>

        <div class="input-container">
            <div class="inputBox">
                <input type="text" placeholder="Username"  name="username">
            </div>
            <div class="inputBox">
                <input type="Password" placeholder="Password"  name="password">
            </div>
        </div>
        
        <div class="remember">
            <div class="input">
                <input type="checkbox"> &nbsp; remember me
            </div>

            <div class="forgot">
                <p>Forgot Password ?</p>
            </div>
        </div>

        <div class="loginBtn">
            <button type="Submit" name="login_user">Log In Now</button>
        </div>

        <div class="privacy">
            <p>Privacy</p>
        </div>

        <div class="new">
            <p class="acc">Dont Have An Account ? <a style="text-decoration:none;color:white;" href="register.php">Sign Up</a></p>
            <p class="p2">
                Back to <a href="#">all sign up options</a>
            </p>
        </div>
    </form>

</body>
</html>