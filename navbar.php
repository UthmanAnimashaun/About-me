<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uthman</title>

  <!-- rel icon -->
  <link rel="icon" href="img/refinery.jpg">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!--  fontawesome Style, lightMode  -->
  <link rel="stylesheet" href="./fontawesome-free/css/all.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/lightmode.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/w3CSS.css">

  <!--  switch -->
  <link rel="stylesheet" href="css/switch.css">

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;500&display=swap" rel="stylesheet">

  <!-- // SCSS -->
  <!-- <link rel="stylesheet" href="css/floating.scss"> -->
</head>

<body id="">
  <!-- -----------------------Header Starts here -->
  <header class="fixed-top mt-0">
    <nav class="navbar navbar-default navbar-expand-lg  navbar-light nav-background">
      <div class="container-fluid ">
        <!-- Logo -->
        <div class="logo">
          <a class="index.php" href="index.php">U</a>
        </div>
        <!-- //Logo -->

        <!-- Toggle button -->
        <span class="d-lg-none p-1 menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icomn"></span>
          <div class='menu_btn1 my-1' style="width: 15px; padding: 1px;"></div>
          <div class='menu_btn2 my-1  ' style="width: 20px; padding: 1px;"></div>
          <div class='menu_btn3 my-1' style="width: 25px; padding: 1px;"></div>

        </span>
      
        <!-- /Toggle button -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto text-center mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active menu-text" aria-current="page" href="index.php">
                <i class="nav-icon fas fa-home"></i>
                Home
              </a>
            </li>
         
            <li class="nav-item">
              <a class="nav-link menu-text" href="cv.php">
                <i class="nav-icon fas fa-address-card"></i>
                Resume
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu-text" href="new.php">
                <i class="nav-icon fas fa-address-card"></i>
                New
              </a>
            </li>
      
            <li class="nav-item dropdown  ">
              <a class="nav-link menu-text dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="nav-icon fas fa-bezier-curve"></i>
                Projects
              </a>
              <ul class="dropdown-menu text-center text-lg-left nav-background " aria-labelledby="navbarDropdown">

                <li>
                  <a class="dropdown-item nav-link menu-text" target="_blank" href="https://laspotechols.000webhost.com/">
                   Online Siwes Logbook System
                  </a>
                </li>
                <li>
                  <a class="dropdown-item nav-link menu-text" href="Phonebook/phonbk.html">
                    Phonebook Search
                  </a>
                </li>
                <li>
                  <a class="dropdown-item nav-link menu-text" href="solar-system/solar-system.html">
                    Solar System
                  </a>
                </li>
                <li>
                  <a class="dropdown-item nav-link menu-text" href="./JsCalculator/calc2.html">
                    JavaScript Calculator
                  </a>
                </li>
                <!-- <li>
                  <a class="dropdown-item nav-link menu-text" href="./PHPCalculator/calculator.php">
                    PHP Calculator
                  </a>
                </li> -->
              </ul>
            </li>
          </ul>


          <!-- Switch starts here -->

          <form class="d-flex">
            <label class="switch">
              <input type="checkbox" id="switch" onclick="darkModes()" checked>
              <span class="slider round"> 
                <div class="m-2">
                  <i class="nav-icon  pe-1 light-mode-check fas fa-sun"></i> 
                  <i class="nav-icon ps-1 light-mode-check fas fa-moon"></i>
                </div>
              </span>
            </label>
          </form>
          <!-- Switch ends here -->
        </div>
      </div>
    </nav>
  </header>