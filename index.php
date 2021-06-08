<?php
   include ("./db.php");

   include ("./insertdata.php");

   
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
    <link rel="stylesheet" href="./fontawesome-free/css/all.css">
</head>
<body  id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">   
  <!-- -----------------------Header Starts here -->
    <?php include ("./navbar.php") ?>
  <!-- -----------------------Header Ends here -->
        <!-- -------------------Content----------------- -->
        <p class="left">scroll down &RightArrow;</p>
      <p class="right">scroll down &rightarrow;</p>
  <main role="main" class="container">  
      <div class="starter-template">
        <span class="img-span slideanim"><img src="img/uthman icon.png" class="img-center d-block w-auto" alt=""></span>
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

          <div class="slideanim">

              <h1>I build Things for the Web</h1>
              <p class="lead">I'm a Web Developer based in Lagos, Ikorodu specialize in building and designing a Website and everything in between
                </p>
                <button class="btn shadow mb-5"><a href="mailto:animashaunua@gmail.com">Get In Touch</a></button>
          </div>
      

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
            <!-- WHere I've Worked -->
        <div id="Work" class="tabcontent tabcontent1">
          <p class="display-6 mt-3 mb-3">Where I've Worked</p>
          
              <!-- Cards -->
              <div class="row mb-3 shadow slideanim">

                <div class="col-sm-12 col-md-6" id="card-background-color">
                  <img src="img/chemietech2.jpg" class="card-img-top" alt="..." >
                </div>

                <div class="col-sm-12 col-md-6 mt-4 text-center">
                  <h5 class="card-title">Chemie-Tech</h5>
                  <p class="card-text"><b>Designation:</b> Assistance/Helper</p>
                  <p class="card-text"><b>Category:</b> Painting and Blasting</p>
                  <a href="https://www.chemietech.com" class="btn shadow">Know More</a>
                </div>
              </div>  <!--   End of Row-->
      
                <!-- Second card -->
                <div class="row mb-3 shadow slideanim">

                    <div class="col-sm-12 col-md-6" id="card-background-color">
                      <img src="img/lsmtl.jpg" class="card-img-top" alt="...">
                    </div>

                    <div class="col-sm-12 col-md-6 mt-4 text-center">
                      <h5 class="card-title">Lagost State Material Testing (LSMTL)</h5>
                      <p class="card-text"><b>Designation:</b> Assistance/Helper</p>
                      <p class="card-text"><b>Category:</b> Crusher/Testing</p>
                      <a href="https://lsmtl.lagosstate.gov.ng" class="btn shadow">Know More</a>
                    </div>
              </div>  <!--   End of Row-->
        </div>  <!--   End of Tab-->


          <!-- Some Things I've Built  -->
      <div id="Education" class="tabcontent slideanim tabcontent3">
          <p class="display-6 mt-3 mb-3">Education</p>
          
          <!-- Cards -->
            <!-- 1st Card -->
          <div class="row slideanim">
            <div class="col mb-3">
            <div class="card shadow" id="card-background-color" style="width: 18rem;">
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
              <div class="card shadow" id="card-background-color" style="width: 18rem;">
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
              <div class="card shadow" id="card-background-color" style="width: 18rem;">
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
        <div class="row slideanim">
          <div class="col mb-3">
            <div class="card shadow" id="card-background-color" style="width: 18rem;">
              <div class="card-body">
                <p class="pbold">Contact</p>

                <span class="glyph"></span><img src="img/call.png" class="imglogo">
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
        <div class="row slideanim">
          <div class="col mb-3">
            <div class="card shadow" id="card-background-color" style="width: 18rem;">
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
            <div class="card shadow" id="card-background-color" style="width: 18rem;">
              <div class="card-body">
                <h6>Fashion/Operator</h6>
                <label>FASHION DESIGNER</label><br>
                <div class="langskill">
                
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="en2"></P>
                    <P class="en2"></P>
                  </div><br>
    
    
               <!--Skills 
                For Operator-->
               <label>CRANE OPERATOR</label><br>
                <div class="langskill">
                
                    <P class="web"></P>
                    <P class="web"></P>
                    <P class="web"></P>
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
          <div class="container slideanim mb-5">
              <p class="display-6 about-text mt-5">What's Next?</p>
              <h2>Get In Touch</h2>
              <p class="lead">If possible you find any bugg on this website, please na <strong><i>God</i></strong> I used take beg you, send me a message on my Gmail <a href="mailto:animashaunua@gmail.com" class="text-info footer-mail-link">here</a></p>
            </div>
            </div>
          </div>       <!-- closing of  Stater-template -->
              
  </main>  <!--/.container -->
 
 <!-- Footer Starts here -->
  <?php include ("./footer.php") ?>
 <!-- Footer Ends here -->
        
      <script src="js/jquery.js"></script>
      <!-- <script src="js/jquery-3.6.0.min.js"></script> -->
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="login.js"></script>
      <script src="js/main.js"></script>
     
  </body>
  </html>
