<?php
session_start();
$error = "";
$is_login = false;


// Check if the form is submitted for login or registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, 'username');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    $host = "localhost";
    $dbusername = "pixofrog";//username of Cpanel
    $dbpassword = "CpTkita10p234";//Pasword of Cpanel
    $dbuname = "pixofrog_oneirosql";// table name

    // create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbuname);
    if (mysqli_connect_error()) {
        die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } else {
        // Check if the form is submitted for registration
        if (isset($_POST["register"])) {
            $sql = "INSERT INTO userdata (username, email, password) VALUES ('$username', '$email', '$password')";
            if ($conn->query($sql)) {
                $error = "Congratulations! You are now registered.";
            } else {
                $error = "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        // Check if the form is submitted for login
        elseif (isset($_POST["login"])) {
            $sql = "SELECT * FROM userdata WHERE username='$username' AND password='$password'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $error = "Login successful";
                $_SESSION['logged_in'] = true; 
                header("Location: index.php");
                exit;
            } else {
                $_SESSION['logged_in'] = false;
                $error = "Invalid username or password";
            }
        }
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/login.css"/>  
    <link rel="stylesheet" href="./styles/general.css"/>  
</head>
<body>
    <?php if (isset($_POST["register"])): ?>
        <div class="is-registered">
            <h1><?php echo $error; ?></h1>
            <a href="login.php">
                <button class="btnregis">Go Back</button>
            </a>    
        </div>  
    <?php elseif (isset($_POST["login"])): ?>
        <div class="is-login">
            <h1><?php echo $error; ?></h1>
            <?php if($error == "Invalid username or password"):?>
                <div>
                    <form action="login.php" method="post">
                        <input type="submit" value="Go Back" class="btnregis">
                    </form>
                </div>
            <?php endif; ?>
        </div>  
    <?php endif; ?>
</body>
</html>
