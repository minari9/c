<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Training</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/VolunteerTraining1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Libre+Baskerville:wght@400;700&family=Poppins:wght@600&family=Work+Sans:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    
</head>
<!-- <body>                                                                                                                             FEEDING PROGRAM                  -->
     <!-- HEADER -->
     <header>
        
        <nav class="navbar">
            <a href="./index.php"><img src="./media/logo.png"  id="vc"></a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a  class="nav-link" onclick="toggleMenu1()">Volunteer Programs</a>
                </li>
                <li class="nav-item">
                    <a href="./HowItWorks.php" class="nav-link">How It Works</a>
                </li>
                <li class="nav-item">
                    <a href="./FAQs.php" class="nav-link">FAQs</a>
                </li>
            </ul>
            <div class="rightSide">
                <div class="searchC">
                    <div class="icon"></div>
                    <div class="input">
                        <input type="text" placeholder="Search" id="mysearch">
                    </div>
                    <span class="clear" onclick="document.getElementById('mysearch').value=''"></span>
                </div>
                <hr>
                <button class="login" onclick="toggleMenu2()"><img src="./media/profilepic.png" style="width: auto; height: 80px;"></button>
            </div>
            
         <!-- for mobile view -->
            <div class="hamburger" onclick="toggleMenu()">
                <span class="bar"></span>
                <span class="bar" onclick="toggleMenu()"></span>
                <span class="bar"></span>
            </div>
        </nav>
 
       
    </header>

     <!-- nav for programs -->
     <div class="sub-menu-wrap" id="subMenu1">
        <div class="sub-menu">
                <hr>
                <a href="./progams.php" class="sub-menu-link">

                    <p>VOLUNTEER TRAINING
                        PROGRAMS</p>
                    <span>></span>
                </a>

                <a href="./programs2.php" class="sub-menu-link">

                    <p>SOCIAL AND CIVIC
                        WELFARE PROGRAMS</p>
                    <span>></span>
                </a>
            </div>
        </div>

    </div>

       <!-- nav for log in --> 
    <div class="sub-menu-registerLogin" id="register">
        <div class="sub-menu">
                <hr>
                <a  class="sub-menu-link">
                   
                    <p onclick="toggleMenu4()">Organization</p>
                    <span onclick="toggleMenu4()">></span>
                </a>
    
                <a class="sub-menu-link">
                    
                    <p onclick="toggleMenu3()">Volunteer</p>
                    <span onclick="toggleMenu3()">></span>
                </a>
            </div>
        </div>
    
    </div>
       <!-- Register Volunteer -->
<div class="sub-menu-volunteer" id="volunteer1">
    <div class="sub-menu-register">
            
        <div class="container">
            <div class="signin-signup">
                <form action="" class="sign-in-form">
                    <h1>Login to <img src="./media/logo2.png" class="logo2"><span class="cnct">Connect </span> </h1>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Email Address">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password">
                    </div>
                    <input type="submit" value="Login" class="btn">
                    <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
                </form>
                <form action="" class="sign-up-form">   
                    <h2 class="title">Volunteer</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder=" Confirm Password">
                    </div>
                    <input type="submit" value="Sign up" class="btn">
                    <p class="disclaimer-text">By clicking "Sign Up" you agree to our <a href="#" class="orange-link"
                        onclick="showDisclaimerPopup()">Terms of Use</a>, <a href="#" class="orange-link"
                        onclick="showDisclaimerPopup()">Privacy Policy</a>, and <a href="#" class="orange-link"
                        onclick="showDisclaimerPopup()">Disclaimer</a></p>
                    <p class="account-text"> Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p>
                </form>
            </div>
            <div class="panels-container">
                <div class="panel left-panel">  
                    <div class="content">
                        <h3>Already have an account? </h3>
                        <p>Let's get you back logged in!</p>
                        <button class="btn" id="sign-in-btn">Sign in</button>
                    </div>
                    <img src="signin.svg" alt="" class="image">
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>New Here?</h3>
                        <p>We'll get you signed up in no time!</p>
                        <button class="btn" id="sign-up-btn">Sign up</button>
                        
                    </div>
                    <img src="signup.svg" alt="" class="image">
                </div>
            </div>
        </div>
        </div>
    </div>




<!-- register organization -->
<div class="sub-menu-organization" id="organization1">
    <div class="sub-menu-register">

        <div class="container" id="container1">
            <div class="signin-signup">
                <form action="" class="sign-in-form">
                    <h1>Login to <img src="./media/logo2.png" class="logo2"><span class="cnct">Connect </span> </h1>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Add the name of your foundation here">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Organization Email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password">
                    </div>
                    <input type="submit" value="Login" class="btn">
                    <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn21">Sign up</a></p>
                </form>
                <form action="" class="sign-up-form">   
                    <h2 class="title">Organization</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Add the name of your organization here">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Organization Email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder=" Confirm Password">
                    </div>
                    <input type="submit" value="Sign up" class="btn">
                    <p class="disclaimer-text">By clicking "Sign Up" you agree to our <a href="#" class="orange-link"
                        onclick="showDisclaimerPopup()">Terms of Use</a>, <a href="#" class="orange-link"
                        onclick="showDisclaimerPopup()">Privacy Policy</a>, and <a href="#" class="orange-link"
                        onclick="showDisclaimerPopup()">Disclaimer</a></p>
                    <p class="account-text"> Already have an account? <a href="#" id="sign-in-btn21">Sign in</a></p>
                </form>
            </div>
            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Already have an account? </h3>
                        <p>Let's get you back logged in!</p>
                        <button class="btn" id="sign-in-btn1">Sign in</button>
                    </div>
                    <img src="signin2.svg" alt="" class="image">
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>New Here?</h3>
                        <p>We'll get you signed up in no time!</p>
                        <button class="btn" id="sign-up-btn1">Sign up</button>
                        
                    </div>
                    <img src="signup2.svg" alt="" class="image">
                </div>
            </div>
        </div>
        </div>
    </div>



        <!-- ALL CONTENTS -->

<div class="centerAll">
   <!-- Card Title program -->
   <div class="title-background">
    <div class="contents">
        <img src="./media/programs-title.png"style="width: auto; height: 100px;"> 
        <h1 id="title1">FEEDING: Nutrition in Emergency Program</h1>
    </div>
</div>
   

<!-- Card Picture and details -->
<section class="card">
    <div class="contents">
        <img src="./media/picture2.png"style="width: 350px; height: 250px;" id="picWater"> 
        </div>
            <div class="card-body">
                <div class="contents">
                <button>OPEN</button>

                <p>Barangay Don Bosco, Parañaque</p>
                <img src="./media/location.png" style="width: auto; height: 20px;">
                <p>July 1, 2023</p>
                <img src="./media/calendar.png" style="width: auto; height: 20px;">
                <p>9:00 AM -1:00 PM</p>
                <img src="./media/clock.png" style="width: auto; height: 20px;">
                <p>Brgy. Don Bosco Nutrition Committee!</p>
                <img src="./media/group.png" style="width: auto; height: 20px;" >
                <p>Pedro Policarpio</p>
                <img src="./media/Name.png" style="width: auto; height: 20px;" >
                <p>28213745!</p>
                <img src="./media/phone.png" style="width: auto; height: 20px;">
                <p>pquenutrinuioffice@gmail.com</p>
                <img src="./media/email.png" style="width: auto; height: 20px;" >
         
                <a href="./schedule.php" ><button id="schedule">VOLUNTEER NOW</button></a>
                <h4>3 more volunteers needed</h4>
                </div>
                <div class="container-bar">
                  <div class="progress-container">
                      <div class="progress-bar">
                          <span data-width="40%"></span>
                      </div>
                  </div>
              </div>
              
              </div>
            
        </div>
</section>


<!-- Card Rules and Procedures-->
<section class="rules">
    <div class="contents">
        <h1 id="age">VOLUNTEERS MUST BE 18 YRS OLD AND ABOVE</h1>
        <p>FEEDING is a dynamic and impactful Nutrition In Emergency Program that aims to provide vital nourishment and support to individuals and communities facing challenging circumstances. We are currently seeking dedicated and passionate volunteers to join us in making a difference in the lives of those affected by emergencies.
            <br>
            <br>
            In times of crisis, whether it be natural disasters, conflicts, or other emergencies, access to proper nutrition becomes a critical concern. FEEDING works tirelessly to address this urgent need by delivering essential food and nutritional support to vulnerable populations. By joining our volunteer team, you will have the opportunity to play a pivotal role in saving lives and restoring hope.</p>
        
          <p id="bring">  What to bring:
    <br><br>• Face mask
    <br>• Hand sanitizer
    <br>• Change of clothes (if you think you'll need it)
    <br>• water bottle
    <br>• Simple tokens you want to give to the homeless people you get to talk to (optional)
    <br>• Phone/camera (Document your visit, share the experience on social media & tag us!) </p>
    <p id="how">
    How to get there?
        <br>
        <br>By Public Transportation:
    
    <br><br>If you are coming from Manila or nearby areas, you can take a jeepney or bus bound for Baclaran.
    <br>Alight at Baclaran Terminal, near the Redemptorist Church.
    <br>From the terminal, you can take a jeepney or tricycle going to Barangay Don Bosco. Inform the driver or operator of your destination.

    <br><br>By Private Vehicle:

    <br> <br>If you are coming from Manila or Makati, you can take the South Luzon Expressway (SLEX) going south.
   <br>Exit SLEX at the Don Bosco Exit.
   <br>Follow the road until you reach Barangay Don Bosco. Use a navigation app or ask for directions along the way if needed.
        </p>
    
    
        </div>    
</section>

  <!-- border in mobile -->
  <img src="./media/border.png" alt="" id="border12">
  <img src="./media/border.png" alt="" id="border13"> 
  <img src="./media/border.png" alt="" id="border14">

 <!-- Foot Header -->
<section class="bottom-content">
    <hr id="bottom-border">
    <div class="content">
                <!-- Featured Broadcast Networks -->
                <div class="brand">
                    <h4>Featured in</h4> 
                    <div class="border3"></div>
                    <img src="./media/Gma.png" style="width: auto; height: 75px;">
                    <img src="./media/Abs-cbn.png" style="width: auto; height: 75px;"> 
                    <img src="./media/CNN.png" style="width: auto; height: 75px;"> 
                    <img src="./media/Trustpilot.png" style="width: auto; height: 75px;"> 
            
                    </div>
                    <div class="border4"></div>
        <img src="./media/logo.png"  class="logo">

        <p>At Volunteer Connect, we believe that everyone has the power to make a positive impact in the world. With our user-friendly interface, you can easily explore a wide range of volunteering opportunities tailored to your location, availability, and interests. Whether you have a few hours to spare each week or want to engage in a longer-term commitment, we have diverse options to suit your schedule.</p>
            <div class="contact">
                <p>VC PARAÑAQUE Ltd<br>
                    Don Galo, 125 - 180 City Road,<br>
                    Parañaque, 1700,<br>
                    Philippines.<br>
                    Registered company: 000001</p>
            </div>
           
            <div class="content2">
                <div class="learn">
                    <h2>Learn More</h2>
                    <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="./FAQs.php">FAQs</a></li>  
                    </ul>
                </div>
                <div class="happy">
                    <h2>User Happiness</h2>
                    <ul>
                    <li><a href="./contactUs.php">Contact Us</a></li>  
                    <li><a href="./Policy.php">Privacy Policy</a></li>
                    <li><a href="./TermsCondition.php">Terms And Conditions</a></li>
                    </ul>
                </div>
            </div>
                
            
            <div class="media">
                <hr class="border-media">
                <a href="www.facebook.com"><img src="./media/facebook.png" style=" width: auto;" height="42px"></a>
                <a href="www.twitter.com"><img src="./media/twitter.png" style=" width: auto;" height="40px"></a>
                <a href="www.instagram.com"><img src="./media/instagram.png" style=" width: auto;" height="40px"></a>
                <p>© 2023-2024   Copyright Volunteer Connect.   All Rights Reserved. </p>
            </div>
    </div> 
</section>









<script src="./java/app.js"></script>
<script src="./java/app1.js"></script>
<script>
let subMenu1 = document.getElementById("subMenu1");

function toggleMenu1(){
subMenu1.classList.toggle("open-menu1");
}
</script>

</body>
</html>