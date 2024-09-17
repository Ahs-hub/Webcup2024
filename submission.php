<?php
// Check if the form is submitted for registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST,'name');
    $superhero_name = filter_input(INPUT_POST,'superhero_name');
    $hero_type = filter_input(INPUT_POST,'hero_type');
    $age = filter_input(INPUT_POST,'age');
    $address = filter_input(INPUT_POST,'address');
    $email = filter_input(INPUT_POST,'email');
    $contact = filter_input(INPUT_POST,'contact');
    $superpower = filter_input(INPUT_POST,'superpower');

     $host = "localhost";
     $dbusername = "pixofrog";
     $dbpassword = "CpTkita10p234";
     $dbuname = "pixofrog_oneirosql";


    // Create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbuname);
    if (mysqli_connect_error()) {
        die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } else {
        $sql = "INSERT INTO superuser (username, superhero_name, hero_type, age, address, email, contact, superpower) 
                VALUES ('$username', '$superhero_name', '$hero_type', '$age', '$address', '$email', '$contact', '$superpower')";
        if ($conn->query($sql)) {
            $error = "Congratulations! You are now registered.";
        } else {
            $error = "Error: " . $sql . "<br>" . $conn->error;
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
    <title>Academy of Superheroes Enrollment</title>
    <style>
        body {
            background:linear-gradient(
                    to right,
                    #0E101A,
                    #7B8494
                    );
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .content {
            text-align: center;
            color: white;
        }

        .btnregis {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
        }

        .btnregis:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    
<div class="container">
        <div class="content">
            <p>Your submission to the Academy of Superheroes Enrollment is under review.</p>
            <p>This process may take up to one day. Thank you for your patience.</p>
            <a href="index.php">
                <button class="btnregis">Go Back</button>
            </a>
        </div>
    </div>
</body>
</html>
