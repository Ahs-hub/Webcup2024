<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/logo2.png" type="image/x-icon">
    <title>Heroz</title>
    <link rel="stylesheet" href="styles/general.css" />
    <link rel="stylesheet" href="styles/logins.css"/>  
</head>
<body>
    <div class="containerlog">
    <div class="wrapper login active">
        <a href="index.php">
             <span class="icon-close"><img src="image/x-regular-24.png" ></span>
        </a>
       
        <form method="POST" action="connect.php">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required> 
                <img src="image/user-solid-24.png" >
                <div></div>
            </div>
            <div class="input-box lastbox">
                <input type="password"  class="passwordl" name="password" placeholder="Password" required>
                <img src="image/lock-alt-solid-24.png" >
                <div></div>
            </div>
           
            <div class="remember-forgot">
                <label><input type="checkbox" >Remember</label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="btn" name="login">Login</button>
    
            <div class="or-solution">
                <hr>
                <strong>OR</strong>
                <hr>
            </div>
            <button onclick="" class="btngoogle">
                <img class ="google-logo" src="image/google-logo.png" >
            </button>
        </form>
    </div>
 
    </div>
   </div>
   <!--Javascript code-->
 <script src="scripts/login.js"></script>  
 <script src="scripts/register.js"></script>  
 <script src="scripts/main.js"></script>
</body>
</html>