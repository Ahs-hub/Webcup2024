<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="image/logo2.png" type="image/x-icon">
    <title>Heroz</title>
    <link rel="stylesheet" href="styles/home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
     integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
     crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Unicons CSS -->
  </head>
  <body>    
     <nav>
         <div class="logo">
              <img src="image/logo2.png" >
              <label class="text-logo">Heroz</label>
         </div>

         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
             <div class="mid-section">
                  <li ><a href="#" class="active" >Home</a></li>
                  <li ><a href="about.php" >About</a></li>
                  <li><a href="program.php">Program</a></li>
            </div>

              <div class="right-section">
                  <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) : ?>              
                        <form action="logout.php" method="post">
                            <div><button type="submit" class="btnLogin-pop" name="logout">logout</button></div>
                        </form>                  
                  <?php else : ?>
                          <a href="login.php">
                              <div ><button class="btnLogin-pop">login</button></div> 
                          </a>       
                  <?php endif; ?>
              </div>
         </ul>
      </nav>
  
      <section class="home-content secti">      
        <div class="hero">
           <div class="text-sectionone">
              <h1>Unlock Your Superpowers and Unleash Your Potential!</h1>
              <p>
              Discover and develop your unique superpowers at the Superhero Training Center. Our top-tier training programs,
               guided by expert trainers, will prepare you to face any challenge that comes your way.
               </p>
                  <a href="submitname.php">
                          <div ><button class="login-buttons">Join US</button></div> 
                  </a>       
           </div>  
           <img  class="hero-home" src="image/homehero1.png" >
         <img class="backgroundhome"  src="image/background1.jpg" >
        </div>
      </section>
      <section class="how-is-is">
         <div class="container-how">
              <img src="image/guid.jpg" >
              <div  class="info-container">
                      <div>
                      We guide you toward unlocking and enhancing your unique abilities with
                      our experienced trainers dedicated to your superhero journey.
                      </div>
                      <p style="height:14px;"><p>
                      <a href="about.php" >
                      <button class="blue-button">More</button></div> 
                      </a>      
              </div>
         </div>
         <div class="container-how">
              <img src="image/guid2.jpg" >
              <div class="info-container">
                 <div>
                  Our specialized programs are designed to not only discover but also enhance your innate abilities,
                   ensuring you reach your full superhero potential.
        

                  </div>
                  <a href="about.php" >
                  <button class="blue-button">More</button></div> 
                  </a>       
                 
              <di>
         </div>
          

      </section>
    

      <section class="why-us">
             <s>Why Heroz Academy?</s>
             <p>Join a community of like-minded individuals who share your passion for becoming the best superhero you can be.</p>
             <a href="submitname.php">
             <button class="blue-button">Join us</button>
             </a>       
      </section>
         

      <section class= "eco-secter">
             <a  class="eco-friendly-button" href="https://www.ecoindex.fr/resultat/?id=0aaee237-2b99-4c23-847e-ee6a8c9a715f#score-details" >Our site is eco-friendly</a>
      </section>
  
      <section class="sponsore secti">
        <div class="sponsore-text">
           <div class="text-sponsore">Nos partenaires?</div>
           <div class="petit-sponsore">Nous remercions nos chaleureux partenaires.</div>
        </div>    
        <div class="sponsore-icons">
           <div><img src="image/hodi-blance.png" ></div>
           <div><img src="image/Rita.png" ></div>
           <div><img src="image/webcup.png" ></div>
        </div>   
      </section>
      <section class="down-notice secti">
          <span>&#169;&nbsp;</span>
           <span>Pixofrog Webcup2024</span>
      </section>
    </main>
    <script src="scripts/main.js"></script>
  </body>
</html>