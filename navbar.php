<header class="fixed-top mt-0">
        <nav class="navbar navbar-default navbar-expand-lg  navbar-light nav-background">
          <div class="container-fluid ">
          <div class="logo">
            <a class="index.php">U</a>
          </div>
          <button class="navbar-toggler menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto text-center mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active menu-text" aria-current="page" href="index.php">
                    <i class="nav-icon fas fa-home"></i>
                      Home
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link menu-text" href="#">
                    <i class="nav-icon fas fa-address-card"></i>
                      About
                  </a>
                </li>
                <li class="nav-item dropdown ">
                  <a class="nav-link menu-text dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="nav-icon fas fa-project-diagram"></i>
                      Projects
                  </a>
                  <ul class="dropdown-menu nav-background text-center dropdown-outline-info" aria-labelledby="navbarDropdown">

                    <li>
                      <a class="dropdown-item menu-text"style="color: inherit;" href="Phonebook/phonbk.html">
                        <i class="nav-icon fas fa-book"></i>
                           Phonebook Search
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item menu-text" href="solar-system/solar-system.html">
                        <i class="nav-icon fas fa-globe-europe"></i>
                          Solar System
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item menu-text" href="./JsCalculator/calc2.html">
                      <i class="nav-icon fas fa-calculator"></i>
                        JavaScript Calculator
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item menu-text" href="./PHPCalculator/calculator.php">
                      <i class="nav-icon fas fa-calculator"></i>
                        PHP Calculator
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>

                <form class="d-flex">
                <div class="custom-control custom-switch" style="padding-top: 5px;">
                <i class="nav-icon light-mode-check fas fa-sun"></i>
                  <input type="checkbox" class="custom-control-input light-mode-check" id="switch" onclick="darkModes()">
                  <label for="switch" class="custom-control-label light-mode-check">Light Mode</label>
                </div>
              </form>
            </div>
          </div>
        </nav>
      </header>
