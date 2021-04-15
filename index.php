<?php
    $db =new mysqli("localhost", "root", "", "uthman");
    if(mysqli_connect_error()) {
        // echo "Wrong connection";
    }
    // echo "<br>";

    if(isset($_POST['submit'])){
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        
        // send to DB Table
        $insert="insert into navbar_signup values('', '".$first_name."', '".$last_name."', '".$email."', '".$password."')";

        $q=$db->query($insert);
        if($q){
            echo "Signup Successfully";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uthman</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="icon" href="img/refinery.jpg">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>   
    <header class="container-fluid ">
        <nav class="navbar navbar-expand-lg navbar-light nav-background">
          <div class="container-fluid ">
          <div class="logo">
            <a>U</a>
          </div>
          <button class="navbar-toggler menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item ">
                  <a class="nav-link active menu-text" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link menu-text" href="#">About</a>
                </li>
                <li class="nav-item dropdown ">
                  <a class="nav-link menu-text dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Projects
                  </a>
                  <ul class="dropdown-menu nav-background dropdown-outline-info" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item menu-text" href="Phonebook/phonbk.html">Phonebook Search</a></li>
                    <li><a class="dropdown-item menu-text" href="solar-system/solar-system.html">Solar System</a></li>
                    <!-- <li><a class="dropdown-item" href="#">Contact Me</a></li> -->
                  </ul>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
              </ul>

              <!-- Login and Sign up page -->
              <!-- <div class="form-group"> -->
                <!--************************** Register Modal ********************************************-->
               
                        <!-- Button trigger modal -->
                      <button type="button" class="btn btn-outline-secondary sign-login-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Signup
                      </button>
    
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header text-center head-of-modal">
                              <h5 class="modal-title " id="exampleModalLabel">Signup</h5>
                              <button type="button" class="btn-close btn-outline-info" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                            </div>
                            <div class="modal-body  background-modal">
                              <form action="login.php" method="POST" class="form-row">
                                  <label for="">First Name</label>
                                  <input type="text" name="first_name" class="get-intouch-form mb-3 input card-shadow" placeholder="First Name" required>
                                  <label for="">Last Name</label>
                                  <input type="text" name="last_name" class="get-intouch-form mb-3 input card-shadow" placeholder="Last Name" required>
                                  <label for="">Email</label>
                                  <input type="email" name="email" class="get-intouch-form mb-3 input card-shadow" placeholder="Email" required>
                                  <label for="">Password</label>
                                  <input type="password" name="password" class="get-intouch-form mb-3 input card-shadow" placeholder="Password" required>
                                  <div class="modal-button">
                                      <button class="btn btn-outline-info button w-100 card-shadow" value="Submit" type="submit">Signup</button>
                                  </div>
                              </form>
                            </div>
                            <div class="modal-footer body-of-footer-modal">
                              <button type="button" id="verify" class="btn btn-outline-light button-of-footer-modal"  data-bs-dismiss="modal">Close</button>
                              <button type="button" id="verify" class="btn btn-outline-light button-of-footer-modal">Save Changes</button>
                              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                           </div>
                          </div>
                        </div>
                      </div>
                  </a>
                </li>
              </ul>
                <button class="btn btn-outline-secondary sign-login-btn"><a href="login.html" style="color: inherit;">Login</a></button>
                <form class="d-flex">
                <div class="custom-control custom-switch" style="padding-top: 5px;">
                  <input type="checkbox" class="custom-control-input" id="switch" onclick="darkModes()">
                  <label for="switch" class="custom-control-label light-mode-check">Light Mode</label>
                  <!-- <button type="button" class="darkmode" onclick="darkMode()">Dark/Light Mode</button> -->
                </div>
              </form>
            </div>
          </div>
        </nav>
      </header>

        <!-- -------------------Content----------------- -->
        <p class="left">scroll down &RightArrow;</p>
      <p class="right">scroll down &rightarrow;</p>
  <main role="main" class="container">  
      <div class="starter-template">
        <span class="img-span"><img src="img/uthman icon.png" class="img-center d-block w-auto" alt=""></span>
        <div class="container text-center mb-5 mt-5">
            <span class="span-txt1 lead">W</span>
            <span class="span-txt2 lead">E</span>
            <span class="span-txt3 lead">L</span>
            <span class="span-txt4 lead">C</span>
            <span class="span-txt5 lead">O</span>
            <span class="span-txt6 lead">M</span>
            <span class="span-txt7 lead">E</span><br>
            <span class="span-txt8 lead">T</span>
            <span class="span-txt9 lead">O</span><br>
            <span class="span-txt10 lead">U</span>
            <span class="span-txt11 lead">T</span>
            <span class="span-txt12 lead">H</span>
            <span class="span-txt13 lead">M</span>
            <span class="span-txt14 lead">A</span>
            <span class="span-txt15 lead">N</span>
            <span class="span-txt16 lead">'</span>
            <span class="span-txt17 lead">S</span>
            <span class="span-txt18 lead">W</span>
            <span class="span-txt19 lead">E</span>
            <span class="span-txt20 lead">B</span>
            <span class="span-txt21 lead">S</span>
            <span class="span-txt22 lead">I</span>
            <span class="span-txt23 lead">T</span>
            <span class="span-txt24 lead">E</span>
          </div>
          <h1>I build Things for the Web</h1>
      <p class="lead">I'm a Web. Developer baesd in Lagos, Ikorodu specializing in building and designing a Website and everything in between
           </p>
      <button class="btn card-shadow mb-5">Get In Touch</button>
      

      <!--------------------- Tab navigation --------------------->
      <div class="container">
        <div class="tab row">
          <!-- <button class="tablinks active col" onclick="openCity(event,'About')">About</button> -->
          <button class="tablinks active col" onclick="openCity(event,'Work')">Worked</button>
          <button class="tablinks col" onclick="openCity(event,'Education')">Education</button>
          <button class="tablinks col" onclick="openCity(event,'Skills')">Skills</button>
          <button class="tablinks col" onclick="openCity(event,'Contact')">Contact</button>
        </div>
      </div>

    <div class="container"> 
      <!-- About Me -->
        <!-- <div id="About" class="tabcontent tabcontent1">
          <p class="display-6 mt-3 mb-3"> About me</p>
          <p>Hello! I'm Uthman, A Web Developer baesd in Lagos, Ikorodu. <br><br>
            I enjoy creating tiis ex numquam.</p>
        </div> -->

            
            <!-- WHere I've Worked -->
        <div id="Work" class="tabcontent tabcontent1">
          <p class="display-6 mt-3 mb-3">Where I've Worked</p>
          
              <!-- Cards -->
              <div class="row">
                <div class="col mb-3">
                <div class="card card-img-top card-shadow" id="card-background-color" style="width: 18rem;">
                  <img src="img/chemietech2.jpg" class="card-img-top" alt="..." >
                  <div class="card-body card-background-color">
                    <h5 class="card-title">Chemie-Tech</h5>
                    <p class="card-text"><b>Designation:</b> Assistance/Helper</p>
                    <p class="card-text"><b>Category:</b> Painting and Blasting</p>
                    <a href="https://www.chemietech.com" class="btn card-shadow">Know More</a>
                  </div>
                </div>
              </div>

                <!-- Second card -->
                <div class="col mb-3">
                <div class="card card-img-top card-shadow" id="card-background-color" style="width: 18rem;">
                  <img src="img/lsmtl.jpg" class="card-img-top" alt="...">
                  <div class="card-body card-background-color">
                    <h5 class="card-title">Lagost State Material Testing (LSMTL)</h5>
                    <p class="card-text"><b>Designation:</b> Assistance/Helper</p>
                    <p class="card-text"><b>Category:</b> Crusher/Testing</p>
                    <a href="https://www.lsmtl.lagosstate.gov.ng" class="btn card-shadow">Know More</a>
                  </div>
                </div>
              </div>
            </div>
          
        </div>


          <!-- Some Things I've Built  -->
      <div id="Education" class="tabcontent tabcontent3">
          <p class="display-6 mt-3 mb-3">Education</p>
          
          <!-- Cards -->
            <!-- 1st Card -->
          <div class="row">
            <div class="col mb-3">
            <div class="card card-shadow" id="card-background-color" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Lagos State Polytechnic Ikorodu(LASPOTECH)</h5>
                <p class="card-text"><b>Program:</b> ND</p>
                <p class="card-text"><b>Major:</b> Computer Science</p>
                <p class="card-text"><b>Year:</b> 2019-2021</p>
              </div>
            </div>
          </div>

            <!-- Second card -->
              <div class="col mb-3">
              <div class="card card-shadow" id="card-background-color" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Community High School Akodo</h5>
                  <p class="card-text"><b>Program:</b> High School</p>
                  <p class="card-text"><b>Major:</b> Science</p>
                  <p class="card-text"><b>Year:</b> 2010-2016</p>
                </div>
              </div>
            </div>

            <!-- 3rd Card -->
              <div class="col mb-3">
              <div class="card card-shadow" id="card-background-color" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Ishaga Close Nur/Pry School</h5>
                  <p class="card-text"><b>Program:</b> Primary</p>
                  <p class="card-text"><b>Major:</b> All</p>
                  <p class="card-text"><b>Year:</b> 2004-2010</p>
                </div>
              </div>
            </div>
      </div>
      </div>



      <!----------------- Contact ----------------------->
    <div id="Contact" class="tabcontent tabcontent4">
        <p class="display-6 mt-3 mb-3">Contact</p>
        
        <!-- Cards -->
          <!-- 1st Card -->
        <div class="row">
          <div class="col mb-3">
            <div class="card card-shadow" id="card-background-color" style="width: 18rem;">
              <div class="card-body">
                <p class="pbold">Contact</p>

                <img src="img/call.png" class="imglogo">
                <p class="call">+2347017815158</p>
                
                <img src="img/whatsapp.jpg" class="imglogo">
                <p>+2348128335797</p>
                
                <img src="img/email.png" class="imglogo">
                <p>animashaunua@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>

      <!----------------- Skills ----------------------->
    <div id="Skills" class="tabcontent tabcontent5">
        <p class="display-6 mt-3 mb-3">Skills</p>
        
        <!-- Cards -->
          <!-- 1st Card -->
        <div class="row">
          <div class="col mb-3">
            <div class="card card-shadow" id="card-background-color" style="width: 18rem;">
              <div class="card-body">
                <!-- For Web -->
                <h6>Web Development</h6><br>
                <!----------------- HTML ---------------->
                
                <label>HTML</label><br>
                <div class="langskill">
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                  </div><br>
                <!----------------- HTML ends---------------->
    
                <!----------------- CSS ---------------->
                
                <label>CSS</label><br>
                <div class="langskill">
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                  </div><br>
                <!----------------- CSS ends---------------->
    
                <!----------------- Javascript ---------------->
                
                <label>JAVASCRIPT</label><br>
                <div class="langskill">
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                  </div><br>
                <!----------------- Javascript ends---------------->
    
                <!----------------- PHP ---------------->
                
                <label>PHP</label><br>
                <div class="langskill">
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                  </div><br>
                <!----------------- PHP ends---------------->
    
                <!----------------- BOOTSTRAP ---------------->
                
                <label>BOOTSTRAP</label><br>
                <div class="langskill">
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                  </div><br>
                <!----------------- BOOTSTRAP ends---------------->
    
                <!----------------- JQuery ---------------->
                
                <label>JQUERY</label><br>
                <div class="langskill">
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                  </div><br>
                <!----------------- JQuery ends---------------->
    
                <!----------------- REACT JS ---------------->
                
                <label>REACT JS</label><br>
                <div class="langskill">
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                  </div><br>
                <!----------------- REACT JS ends---------------->
    
                <!----------------- GITHUB ---------------->
                
                <label>GITHUB</label><br>
                <div class="langskill">
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                  </div><br>
                <!----------------- GITHUB ends---------------->
    
                <!----------------- HEROKU ---------------->
                
                <label>HEROKU</label><br>
                <div class="langskill">
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                  </div><br>
                       
              </div>
            </div>
          </div>

                <!----------------- HEROKU ends---------------->
    
               <!--Skills 
                For Fashion-->
                  <!-- Cards -->
          <!-- 1st Card -->
          <div class="col mb-3">
            <div class="card card-shadow" id="card-background-color" style="width: 18rem;">
              <div class="card-body">
                <h6>Fashion/Operator</h6>
                <label>FASHION DESIGNER</label><br>
                <div class="langskill">
                
                    <P class="fa"></P>
                    <P class="fa"></P>
                    <P class="fa"></P>
                    <P class="fa"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                  </div><br>
    
    
               <!--Skills 
                For Operator-->
               <label>CRANE OPERATOR</label><br>
                <div class="langskill">
                
                    <P class="cr"></P>
                    <P class="cr"></P>
                    <P class="cr"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                  </div>
            </div>
          </div>
        </div>
      </div>
      </div>
              

          <!-- Whats Next -->
          <p class="display-6 about-text mt-5">What's Next?</p>
            <div class="container mb-5">
              <h2>Get In Touch</h2>
              <p class="lead">If possible you find any bugg on this website, please na <strong><i>God</i></strong> I used take beg you, send me a message on my Gmail <a href="mailto:animashaunua@gmail.com" class="text-info footer-mail-link">here</a></p>
            </div>
            </div>
          </div>       <!-- closing of  Stater-template -->
              
  </main>  <!--/.container -->
  <footer class="footer mt-5">
    <div class="row">
          <div class="col mb-3 mt-3">
         <a href="https://www.instagram.com/animashaun_uthman_akorede">
         <img src="img/ig.jpg" class="span1" alt="">
         </a> 
          </div>
          
          <div class="col mb-3 mt-3">
              <a href="https://wa.me/+2348128335797">
              <img src="img/whatsapp.jpg" class="span1" alt="">
              </a> 
          </div>
          
          <div class="col mb-3 mt-3">
               <img src="img/twitter.png" class="span1" alt="">
          </div>
          
          <div class="col mb-3 mt-3">
            <a href="https://www.facebook.com/monikkaa23"><img src="img/facebook.jpg" class="span1" alt=""></a>
          </div>
       </div>
        <p class="lead"> &copy; Designed & Built By Uthman Animashaun</p>
  
    </footer>
        
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="login.js"></script>
      <script src="js/main.js"></script>
     
  </body>
  </html>
