<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academy of Superheroes Enrollment</title>
    <style>
        body {
            background-color:#0E101A;
            background-image:url('image/background1.jpg');
            background-repeat: no-repeat;
             background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.9); /* Transparent white background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
          @media (max-width: 1000px){
            .container {
                margin:0px;
                width: auto;
            }
          }
    </style>
   
</head>
<body>

<div class="container">
    <h2>Welcome to Heroz!</h2>
    <form method="POST" action="submission.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="superhero_name">Superhero Name:</label>
        <input type="text" id="superhero_name" name="superhero_name" required>

        <label for="hero_type">Type of Hero:</label>
        <select id="hero_type" name="hero_type" required>
            <option value="" disabled selected>Select your hero type</option>
            <option value="God/Goddess">God/Goddess</option>
            <option value="Gadget User">Gadget User</option>
            <option value="Power House">Power House</option>
            <option value="Shapeshifter">Shapeshifter</option>
            <option value="Supernatural">Supernatural</option>
        </select>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact" required>

        <label for="superpower">Describe your superpower:</label>
        <textarea id="superpower" name="superpower" required></textarea>

        <input type="submit" value="Enroll">
    </form>
</div>

</body>
</html>
