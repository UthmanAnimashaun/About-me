<?php
include "navbar.php";
?>
<!-- -----------------------Header Ends here -->

<main role="main" class="container">
  <div class="starter-template animate2 two">
    <span class="img-span ">
      <img src="img/me.png" class="img-center w3-animate-zoom d-block w-auto" alt=""></span>
    <div class="container animate one text-center mb-5 mt-5">
      <span class=" ">W</span>
      <span class=" ">E</span>
      <span class=" ">L</span>
      <span class=" ">C</span>
      <span class=" ">O</span>
      <span class=" ">M</span>
      <span class=" ">E</span><br>
      <span class=" ">T</span>
      <span class=" ">O</span><br>
      <span class="light ">U</span>
      <span class="light">T</span>
      <span class="light">H</span>
      <span class="light">M</span>
      <span class="light">A</span>
      <span class="light">N</span>
      <span class="">'</span>
      <span class="">S</span>&nbsp;&nbsp;
      <span class="">W</span>
      <span class="">E</span>
      <span class="">B</span>
      <span class="">S</span>
      <span class="">I</span>
      <span class="">T</span>
      <span class="">E</span>
    </div>

    <div class="get_in_touch" id="about">

      <h1>I build Things for the Web</h1>
      <p class="">I'm a Web Developer based in Lagos, Ikorodu. Specialize in building and designing a Website and everything in between
      </p>
      <button class="btn shadow mb-5"><a href="mailto:animashaunua@gmail.com">Holla Me</a></button>
    </div>


    <!--------------------- Tab navigation --------------------->
    <div class="container">
      <div class="tab row">
        <button class="tablinks active col" onclick="openCity(event,'About')">About</button>
        <button class="tablinks col" onclick="openCity(event,'Work')">Worked</button>
        <button class="tablinks col" onclick="openCity(event,'potfolio')">Potfolio</button>
        <button class="tablinks col" onclick="openCity(event,'Skills')">Skills</button>
        <button class="tablinks col" onclick="openCity(event,'Contact')">Contact</button>
      </div>
    </div>

    <div class="container">
      <!-- WHere I've Worked -->
      <div id="Work" class="tabcontent tabcontent1">
        <p class="display-6 my-3">Where I've Worked</p>

        <!-- Cards -->
        <div class="row mb-3 w3-animate-bottom w3-animate-left">

          <div class=" col-12 col-md-5 m-3">
            <div class="card" >
              <img class="card-img-top" src="img/chemietech2.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h5 class="card-title">Chemie-Tech</h5>
                <p class="card-text"><b>Designation:</b> Assistance/Helper</p>
                <p class="card-text"><b>Category:</b> Painting and Blasting</p>
                <a href="https://www.chemietech.com" target="_blank" class=" btn light aa">Explore</a>
              </div>
            </div>
          </div> <!--   End of col-->


          <div class=" col-12 col-md-5 m-3">
            <div class="card" >
              <img class="card-img-top" src="img/lsmtl.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h5 class="card-title">Lagost State Material Testing (LSMTL)</h5>
                <p class="card-text"><b>Designation:</b> Assistance/Helper</p>
                <p class="card-text"><b>Category:</b> Crusher/Tester</p>
                <a href="https://lsmtl.lagosstate.gov.ng" target="_blank" class=" btn light aa">Explore</a>
              </div>
            </div>

          </div> <!--   End of col-->

        </div> <!--   End of Row-->
    </div> <!--   End of Tab-->



    <!----------------- Contact ----------------------->
    <div id="Contact" class="tabcontent tabcontent5">
      <p class="display-6 mt-3 mb-3">Contact</p>


      <div class="row w3-animate-bottom w3-animate-left">
        <div class="col mb-3">
          <div class="card shadow" id="card-background-color" style="width: 20rem;">
            <div class="card-body">

              <!-- call -->
              <p class="call"><i class="nav-icon fa-2x mx-2 fa fa-phone"></i> +2347017815158</p>

              <!-- whatsapp -->
              <p><i class="nav-icon fa-2x mx-2 fab fa-whatsapp"></i> +2348128335797</p>

              <!--email  -->
              <p><i class="nav-icon fa-2x mx-2 fa fa-envelope"></i> animashaunua@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!----------------- Skills ----------------------->
    <div id="Skills" class="tabcontent tabcontent5">
      <p class="display-6 mt-3 mb-3">Skills</p>

      <div class="row w3-animate-bottom w3-animate-left">
        <!-- ===========
          Web Card
         ========= -->
        <div class="col-12 col-md-5 mb-3">
          <div class="card" id="card-background-color">
            <div class="card-body">
              <div class="mb-5">
                <h3 class="w3-larmge"><b><i class="fa fa-asterisk fa-fw w3-margin-right light"></i>Web</b></h3>

                <span>HTML</span>
                <div class="progress bggray w3-round-xlarge w3-small mb-3">
                  <div class="progress-bar light progress-bar-striped light  bglight progress-bar-animated" role="progressbar" style="width:90%" aria-valuenow="40" aria-valuemin="1" aria-valuemax="100">90%</div>
                </div>

                <span>CSS</span>
                <div class="progress bggray w3-round-xlarge w3-small mb-3">
                  <div class="progress-bar light progress-bar-striped  bglight progress-bar-animated" role="progressbar" style="width:90%" aria-valuenow="40" aria-valuemin="1" aria-valuemax="100">90%</div>
                </div>

                <span>JavaScript</span>
                <div class="progress bggray w3-round-xlarge w3-small mb-3">
                  <div class="progress-bar light progress-bar-striped  bglight progress-bar-animated" role="progressbar" style="width:70%" aria-valuenow="40" aria-valuemin="1" aria-valuemax="100">70%</div>
                </div>

                <span>Bootstrap</span>
                <div class="progress bggray w3-round-xlarge w3-small mb-3">
                  <div class="progress-bar light progress-bar-striped  bglight progress-bar-animated" role="progressbar" style="width:80%" aria-valuenow="40" aria-valuemin="1" aria-valuemax="100">80%</div>
                </div>

                <span>PHP</span>
                <div class="progress bggray w3-round-xlarge w3-small mb-3">
                  <div class="progress-bar light progress-bar-striped  bglight progress-bar-animated" role="progressbar" style="width:90%" aria-valuenow="40" aria-valuemin="1" aria-valuemax="100">90%</div>
                </div>

                <span>SQL</span>
                <div class="progress bggray w3-round-xlarge w3-small mb-3">
                  <div class="progress-bar light progress-bar-striped  bglight progress-bar-animated" role="progressbar" style="width:90%" aria-valuenow="40" aria-valuemin="1" aria-valuemax="100">90%</div>
                </div>

                <span>Laravel</span>
                <div class="progress bggray w3-round-xlarge w3-small mb-3">
                  <div class="progress-bar light progress-bar-striped  bglight progress-bar-animated" role="progressbar" style="width:40%" aria-valuenow="40" aria-valuemin="1" aria-valuemax="100">40%</div>
                </div>

                <span>jquery</span>
                <div class="progress bggray w3-round-xlarge w3-small mb-3">
                  <div class="progress-bar light progress-bar-striped  bglight progress-bar-animated" role="progressbar" style="width:30%" aria-valuenow="30" aria-valuemin="1" aria-valuemax="100">30%</div>
                </div>

                <span>Github</span>
                <div class="progress bggray w3-round-xlarge w3-small mb-3">
                  <div class="progress-bar light progress-bar-striped  bglight progress-bar-animated" role="progressbar" style="width:50%" aria-valuenow="40" aria-valuemin="1" aria-valuemax="100">50%</div>
                </div>

                <span>Heroku</span>
                <div class="progress bggray w3-round-xlarge w3-small mb-3">
                  <div class="progress-bar light progress-bar-striped  bglight progress-bar-animated" role="progressbar" style="width:50%" aria-valuenow="50" aria-valuemin="1" aria-valuemax="100">50%</div>
                </div>

                <span>Illustrator</span>
                <div class="progress bggray w3-round-xlarge w3-small mb-3">
                  <div class="progress-bar light progress-bar-striped  bglight progress-bar-animated" role="progressbar" style="width:30%" aria-valuenow="30" aria-valuemin="1" aria-valuemax="100">30%</div>
                </div>
              </div>



            </div>
          </div>
        </div>

        <!-- ===========
            Others Card
             ========= -->
        <div class="col-12 col-md-5 mb-3">
          <div class="card shadow" id="card-background-color">
            <div class="card-body">
              <h3 class="w3-larmge"><b><i class="fa fa-asterisk fa-fw w3-margin-right light"></i>Others</b></h3>
              <span>Customer Service</span>
              <div class="progress bggray w3-round-xlarge w3-small mb-3">
                <div class="progress-bar light progress-bar-striped  bglight progress-bar-animated" role="progressbar" style="width:90%" aria-valuenow="60" aria-valuemin="1" aria-valuemax="100">90%</div>
              </div>

              <span>Fashion Designer</span>
              <div class="progress bggray w3-round-xlarge w3-small mb-3">
                <div class="progress-bar light progress-bar-striped  bglight progress-bar-animated" role="progressbar" style="width:90%" aria-valuenow="60" aria-valuemin="1" aria-valuemax="100">90%</div>
              </div>

              <span>Crane Operator</span>
              <div class="progress bggray w3-round-xlarge w3-small mb-3">
                <div class="progress-bar light progress-bar-striped  bglight progress-bar-animated" role="progressbar" style="width:60%" aria-valuenow="90" aria-valuemin="1" aria-valuemax="100">60%</div>
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
      <p class="">If possible you find any bugg on this website, please na <strong><i>God</i></strong> I used take beg you, send me a message on my Gmail <a href="mailto:animashaunua@gmail.com" class="text-info footer-mail-link">here</a></p>
    </div>
  </div>
  </div> <!-- closing of  Stater-template -->

</main>
<!--/.container -->


<?php
include "footer.php";


?>