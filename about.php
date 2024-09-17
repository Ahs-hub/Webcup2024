<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/logo2.png" type="image/x-icon">
    <title>Heroz_About</title>
    <link rel="stylesheet" href="styles/home.css" />
    <style>
        .building{
            display:flex;
            align-items:center;
           margin:10%;
        }
        .placement{
            border-radius:50%;
            height:300px;
            width: 300px;px;
        }
            /*contact */
            
body{
	height: 100vh;
	width: 100%;
}

.container{
	position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 20px 100px;
}

.container:after{
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: url("img/bg.jpg") no-repeat center;
	background-size: cover;
	filter: blur(50px);
	z-index: -1;
}
.contact-box{
	max-width: 850px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
}

.left{
	background: url("img/bg.jpg") no-repeat center;
	background-size: cover;
	height: 100%;
}

.right{
	padding: 25px 40px;
}

h2{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
}

h2:after{
	content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #ac9222;
}

.field{
	width: 100%;
	border: 2px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: rgba(230, 230, 230, 0.6);
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}

.field:hover{
	background-color: rgba(0, 0, 0, 0.1);
}

textarea{
	min-height: 150px;
}

.btn{
	width: 100%;
	padding: 0.5rem 1rem;
	background-color: #ac9222;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
}

.btn:hover{
    background-color: #706015;
}

.field:focus{
    border: 2px solid rgba(30,85,250,0.47);
    background-color: #fff;
}

@media screen and (max-width: 880px){
    .building{
        flex-direction:column;
    }

	.contact-box{
		grid-template-columns: 1fr;
	}
	.left{
		height: 200px;
	}
    .container{
        padding:0px;
    }
    .program-container img{
        margin-top:10px;
    }
}
    </style>
</head>
<body>
    <div  class="building">
    
    <p style="width: 70%; margin-right: 20px;" >
    <span style="font-size:25px;">In the year 2019</span>, the Heroz Academy was established in Baie aux Huitres, Rodrigues,
     with a singular vision: to empower individuals to unlock their full potential and 
     become the heroes they were always meant to be. With a team of passionate founders 
     and experienced trainers, Heroz Academy was built to provide a unique and immersive
     training experience for aspiring superheroes. Our academy is equipped with state-of-the-art 
     facilities and offers specialized programs designed to enhance not only physical abilities 
     but also mental agility and superhero knowledge. Whether you're interested in mastering 
     combat techniques, developing superhuman strength, or delving into the mystical arts, Heroz
      Academy provides the perfect environment for you to hone your skills and discover your true potential.
     Join us at Heroz Academy and embark on an unforgettable journey towards greatness.
      </p>
      <span >
         <img  class="placement"  src="image/building.jpeg" >
    </span>
     </div>
  
<!--contact-->
<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contact Us</h2>
				<input type="text" class="field" placeholder="Your Name">
				<input type="text" class="field" placeholder="Your Email">
				<input type="text" class="field" placeholder="Phone">
				<textarea placeholder="Message" class="field"></textarea>
				<button class="btn">Send</button>
			</div>
		</div>
	</div>
</body>
</html>