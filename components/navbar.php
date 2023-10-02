

<header>



        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                  <a class="navbar-brand" href="index.php">
                      <img src="../images/logo.png" alt="" class="img-fluid">
                  </a>
    
                  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
              </button>
              
              <form action="#"  method="post">

              <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                   <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="service.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="department.php">Departments</a></li>
                  
    
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="doctor.php" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item" href="doctor.php">Doctors</a></li>
                            <li><a class="dropdown-item" href="appoinment.php">Appoinment</a></li>
                        </ul>
                      </li>
      
                      <li class="nav-item"><a class="nav-link" href="blogs.php">blogs</a></li>

                      <button class="nav-item" style="background : none;border:none;" name="logout">
                         <li><a class="nav-link">
                          
                          <i class="nav-item fa-solid fa-right-from-bracket icon"  
                          style="font-size: larger; cursor: pointer;"  ></i>
                          
                        </a></li>
                        
                      </button>
                        
                      </form>

                </ul>
              </div>
            </div>
        </nav>



<?php



if(isset($_POST['logout'])){

session_start();
  session_unset();
session_destroy();

echo "<script>window.location.href='userAuth/login.php'</script>";

}

?>  
    </header>
