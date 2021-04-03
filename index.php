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
            <a class="navbar-brand text-secondary" href="#">
              <img src="img/refinery.jpg" alt="" width="30" height="24" class="d-inline-block align-top">
              Uthman
            </a>
            <button class="navbar-toggler menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item ">
                  <a class="nav-link active text-secondary" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-secondary" href="#">About</a>
                </li>
                <li class="nav-item dropdown ">
                  <a class="nav-link text-secondary dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Projects
                  </a>
                  <ul class="dropdown-menu nav-background dropdown-outline-info" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-secondary" href="Phonebook/phonbk.html">Phonebook Search</a></li>
                    <li><a class="dropdown-item text-secondary" href="solar-system/solar-system.html">Solar System</a></li>
                    <!-- <li><a class="dropdown-item" href="#">Contact Me</a></li> -->
                  </ul>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
              </ul>

              <!-- Login and Sign up page -->
              <div class="form-group">
                <!--************************** Register Modal ********************************************-->
               
                        <!-- Button trigger modal -->
                      <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                  <input type="text" name="first_name" class="get-intouch-form mb-3 input" placeholder="First Name" required>
                                  <label for="">Last Name</label>
                                  <input type="text" name="last_name" class="get-intouch-form mb-3 input" placeholder="Last Name" required>
                                  <label for="">Email</label>
                                  <input type="email" name="email" class="get-intouch-form mb-3 input" placeholder="Email" required>
                                  <label for="">Password</label>
                                  <input type="password" name="password" class="get-intouch-form mb-3 input" placeholder="Password" required>
                                  <div class="modal-button">
                                      <button class="btn btn-outline-info button w-100" value="Submit" type="submit">Signup</button>
                                  </div>
                              </form>
                            </div>
                            <div class="modal-footer body-of-footer-modal">
                              <button type="button" id="verify" class="btn btn-outline-success"  data-bs-dismiss="modal">Close</button>
                              <button type="button" id="verify" class="btn btn-outline-success">Save Changes</button>
                              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                          </div>
                        </div>
                      </div>
                <button class="btn btn-outline-info"><a href="login.php" style="color: inherit;">Login</a></button>
              </div>
            </div>
          </div>
        </nav>
      </header>

  <main role="main" class="container mt-5">  
      <div class="starter-template">
        <span class="img-span"><img src="img/refinery.jpg" class="img-center d-block w-auto" alt=""></span>
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
      <button class="btn btn-outline-info mb-5">Get In Touch</button>
      
          
          
<<<<<<< Updated upstream
      <!--------------------- Tab navigation --------------------->
      <div class="container">
=======
    <!--------------------- Tab navigation --------------------->
    <div class="container">
>>>>>>> Stashed changes
        <div class="tab row">
          <button class="tablinks active col" onclick="openCity(event,'About')">About</button>
          <button class="tablinks col" onclick="openCity(event,'Work')">Worked</button>
          <button class="tablinks col" onclick="openCity(event,'Built')">Projects</button>
        </div>
      </div>
<<<<<<< Updated upstream
          
      <!-- About Me -->
     <div class="container"> 
      <!-- About Me -->
=======

    <div class="container"> 
      <!-- About Me -->
>>>>>>> Stashed changes
        <div id="About" class="tabcontent tabcontent1">
          <p class="display-6 text-info"> About me</p>
          <p>Hello! I'm Uthman, A Web Developer baesd in Lagos, Ikorodu. <br><br>
            I enjoy creating Lorem ipsum doipisicing elit. Nemo, doloremque nostrum accusamus molestiae blanditiis numquam exercitationem veritatis iste deserunt, minus esse eveniet, perferendis dolores temporibus aperiam debitis obcaecati animi quidem iusto dolorem saepe consectetur alias. Odio ratione, provident autem non dicta delectus quo laboriosam facere accusantium iste repudiandae pariatur eligendi suscipit illum quaerat officia fugit velit ipsa. Quo velit mollitia nihil illo. Animi, explicabo, voluptatem eaque repudiandae, quaerat iusto nobis ducimus exercitationem alias quae quasi fugiat vero quam veritatis tempora. consectetur adipisicing elit. Impedit culpa sint est dolore ipsam suscipit possimus iusto iste velit amet mollitia pariatur, a ratione consequatur et ipsum nulla unde quaerat hic! Libero eos vel voluptates obcaecati consequatur blanditiis ex numquam.</p>
<<<<<<< Updated upstream
            <div class="btn all-button-center mb-5">
                <button class="btn btn-outline-info text-center">Know More</button>
            </div>
=======
>>>>>>> Stashed changes
        </div>
            
            <!-- WHere I've Worked -->
           <div id="Work" class="tabcontent tabcontent2">
            <p class="display-6 text-info">Where I've Worked</p>
          
              <!-- Cards -->
              <div class="row">
                <div class="col mb-3">
                  <div class="card card-img-top" style="width: 18rem;">
                    <img src="img/spacework3.jpg" class="card-img-top" alt="..." >
                    <div class="card-body card-background-color">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-outline-info">Go somewhere</a>
                    </div>
                  </div>
              </div>

                <!-- Second card -->
                <div class="col mb-3">
                <div class="card" style="width: 18rem;">
                  <img src="img/spacework6.jpg" class="card-img-top" alt="...">
                  <div class="card-body card-background-color">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-info">Go somewhere</a>
                  </div>
                </div>
              </div>

                <!-- 3rd Card -->
                <div class="col mb-3">
                    <div class="card" style="width: 18rem;">
                      <img src="img/spacework5.jpg" class="card-img-top" alt="...">
                      <div class="card-body card-background-color">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-outline-info">Go somewhere</a>
                      </div>
                    </div>
                </div>
            </div>
<<<<<<< Updated upstream
          <div class="btn all-button-center mb-5">
                <button class="btn btn-outline-info">Know More</button>
          </div>
=======
            <div class="btn all-button-center mb-5">
                  <button class="btn btn-outline-info">Know More</button>
            </div>
>>>>>>> Stashed changes
        </div>

          <!-- Some Things I've Built  -->
          <div id="Built" class="tabcontent tabcontent3">
            <p class="display-6 text-info mb-5">Some Things I've Built</p>
          
                <!-- 1st Card -->
             <!-- Cards -->
            <div class="row">
                <div class="col mb-3">
<<<<<<< Updated upstream
                <div class="card card-img-top" style="width: 18rem;">
                  <img src="img/spacework3.jpg" class="card-img-top" alt="..." >
                  <div class="card-body card-background-color">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-info">Go somewhere</a>
                  </div>
                </div>
          </div>

            <!-- Second card -->
            <div class="col mb-3">
                <div class="card" style="width: 18rem;">
                  <img src="img/spacework6.jpg" class="card-img-top" alt="...">
                  <div class="card-body card-background-color">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-info">Go somewhere</a>
                  </div>
            </div>
          </div>
=======
                  <div class="card card-img-top" style="width: 18rem;">
                    <img src="img/spacework3.jpg" class="card-img-top" alt="..." >
                    <div class="card-body card-background-color">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-outline-info">Go somewhere</a>
                    </div>
                  </div>
                </div>

            <!-- Second card -->
                <div class="col mb-3">
                    <div class="card" style="width: 18rem;">
                      <img src="img/spacework6.jpg" class="card-img-top" alt="...">
                      <div class="card-body card-background-color">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-outline-info">Go somewhere</a>
                      </div>
                </div>
              </div>
>>>>>>> Stashed changes

                <!-- 3rd Card -->
                <div class="col mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/spacework5.jpg" class="card-img-top" alt="...">
                    <div class="card-body card-background-color">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-outline-info">Go somewhere</a>
                    </div>
                    </div>
                </div>
<<<<<<< Updated upstream
            </div>
           </div>
=======
              </div>
>>>>>>> Stashed changes
           <div class="btn all-button-center mb-5">
                  <button class="btn btn-outline-info">Know More</button>
            </div>
        </div>


          <!-- Whats Next -->
          <p class="display-6 text-info mt-5">What's Next?</p>
              <h5>Get In Touch on Whatsapp</h5>
                <form action="https://wa.me/+2348128335797" class="form-row get-in-touch-form-body">
                    <div class="col-lg-6">
                        <label for="">Your Name</label><br>
                        <input type="text" name="your_name" class="get-intouch-form col-lg-6 mb-3  input" placeholder="Your Name" required><br>
                    </div>

                    <div class="col-lg-6">
                        <label for="">Email</label><br>
                        <input type="email" name="email" class="get-intouch-form mb-3 input" placeholder="Email" required><br>
                    </div>
                    <div class="col-lg-6">
                        <label for="">Message</label><br>
                        <textarea name="message" class="get-intouch-message mb-3 input" placeholder="Send a Message" required></textarea> <br>
                    </div>

                    <div class="col-lg-6">
                        <div class="get-intouch-form-button mb-5">         
                        <button class="btn btn-outline-info button" name="submit" type="submit" >Send</button>
                    </div>
                </form>
  </main>  <!--/.container -->

  <footer class="footer">
  <div class="row">
        <div class="col mb-3">
       <a href="https://www.instagram.com/animashaun_uthman_akorede">
       <img src="img/ig.jpg" class="span1" alt="">
       </a> 
        </div>
        
        <div class="col mb-3">
            <a href="https://wa.me/+2348128335797">
            <img src="img/whatsapp.jpg" class="span1" alt="">
            </a> 
        </div>
        
        <div class="col mb-3">
             <img src="img/twitter.png" class="span1" alt="">
        </div>
        
        <div class="col mb-3">
          <a href="https://www.facebook.com/monikkaa23"><img src="img/facebook.jpg" class="span1" alt=""></a>
        </div>
     </div>
      <p class="lead"> &copy; Designed & Built By Uthman Animashaun</p>

  </footer>
      
    <script src="js/bootstrap.bundle.min.js"></script>
<!--     <script src="js/login.js"></script> -->
    <script src="js/main.js"></script>

   
</body>
</html>