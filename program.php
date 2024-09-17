<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heroz.Program</title>
    <link rel="stylesheet" href="styles/home.css" />
    <style>
        .video-bg{
            z-index: -1;
            position:absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            min-width:100%;
            min-height:100%;;
            opacity: 0.6;
            } 
            .titlevideo{
                margin-top: 200px;
                width: 100%;
                height:100vh;
                font-size: 120px;
                text-align:center;
            }
            .section-program{
                padding-top:100px;
                padding-bottom:100px;
                display:flex;
                position:relative;
                width:100%;
                height: auto;
                align-items:center;
                justify-content:center;
                margin-bottom: 100px;
                background-color:#7B8494;
            }
            .grid-program{
                display:grid;
                grid-template-columns: 1fr 1fr;
                column-gap: 20px;
                row-gap: 40px;

            }
            .program-container{
                width: 500px;
                display:flex;
               
                height: 100px;
                background-color: #ac9222;
                border-radius:50px;
                padding-right:10px;
            }
            .program-container:hover{          
                background-color: #706015;
            }
            .program-container img{
                margin:10px;
                width: 70px;
                height:70px;
                display:flex;
                align-items:center;
            }
            .info-program{
                height:100%;
                text-align:center;
                 align-items: center;
                 justify-content: center;
                display:flex;
            }
            @media (max-width: 1000px){
                .grid-program{
                display:flex;
                 flex-direction:column;
                }
                
            }
            @media (max-width: 720px){
                .program-container{
                width: 400px;
                height: 200px;
                }
            }
    </style>
</head>
<body>
        <video class="video-bg" autoplay muted loop> 
         <source  src="image/workout.mp4" type="video/mp4">
          </video> 
       <p class="titlevideo">Our Program</p>
    <section class="section-program">
        <div class="grid-program">
            <div class="program-container">
                    <img   src="image/iq.png" >
                    
                    <div class="info-program">
                        <p> Expand your superhero knowledge and understanding with our specialized programs.</p>
                    </div>
                    </div>
                    <div class="program-container">
                    <img   src="image/power.png" >
                    
                    <div class="info-program">
                        <p> Unlock your inner strength and power with our strength training programs.</p>
                    </div>
                    </div>

                    <div class="program-container">
                    <img   src="image/speed.png" >
                    
                    <div class="info-program">
                        <p> You supercharge your speed and agility with our intensive training sessions.</p>
                    </div>
          </div>
        </div>
          
         
    </section>
    <!-- <p>About Us </p> -->

    <!-- <p>Welcome to the Superhero Training Center, where ordinary individuals become extraordinary superheroes! Here's what sets us apart:<p>
Our Mission:
At the Superhero Training Center, our mission is to empower individuals to unlock their full potential and become the heroes they were always meant to be.

Expert Trainers:
Our team of experienced trainers is dedicated to guiding you through every step of your superhero journey. With their expertise and support, you'll discover and develop your unique superpowers.

Specialized Programs:
From strength and agility training to mastering your mind, we offer a wide range of specialized programs tailored to your superhero journey.

State-of-the-Art Facilities:
Train in a cutting-edge facility equipped with the latest technology and equipment to enhance your training experience.

Community:
Join a community of like-minded individuals who share your passion for becoming the best superhero you can be. -->
</body>
</html>