 
 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>smart-bar </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/styleMain.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+255 684539399</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sun: 24hrs</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">

        <ul>
          <li><a href="auth/customer/login.php">Login</a></li>
          <li><a href="auth/customer/register.php">SignUp</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <h1 class="logo me-auto me-lg-0"><a href="index.php">SMART-BAR</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto active" href="#about">list of bars</a></li>
          
          <li class="dropdown"><a href="#"><span>Staff</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="auth/employee/login.php">Employee</a></li>
              <li><a href="auth/manager/login.php">Manager</a></li>
            </ul>
          </li>
          <!-- <li><a class="nav-link scrollto" href="auth/admin/index.php">Admin</a></li> -->
        </ul>
        <i class=" bi bi-list mobile-nav-toggle"></i>
      </nav><!-- navbar -->
      <a href="list-of-bars.php" class="book-a-table-btn active">View available bars</a>

    </div>
  </header><!-- End Header -->



  <main id="main">

     <!-- ======= About Section ======= -->
     <section id="about" class="about">
      <div class="container" data-aos="fade-up">
     

        <div class="row">
         

          <?php require_once("database/dbConnect.php");

          $sql = "SELECT b.barId,b.barName,b.barOwner , b.barPhysicalAddress, p.productName, p.productPrice
           FROM product p JOIN bar b ON p.barID = b.barId;";

            $results = mysqli_query($mysqli, $sql);

            // output data of each row
            $count = 1;
            while ($row = mysqli_fetch_array($results)) {
                $barID = 'barID' . $count;
          
            echo' <div class="col-sm-12 col-lg-5 order-1 order-lg-12 mt-5" >
                        <div class="card" style="width: 25rem;">
                             <img class="card-img-top" src="assets/img/baar.jpg" alt="Card image cap">
                                 <div class="card-body">
           
                       
                          

                 <h5 class="card-title" style="color: blue;">' .'Bar name :'.' '. $row["barName"] . '</h5>
                     <p class="card-text" style="color: black;" >'.'Bar Manager :'.' '. $row["barOwner"] .'<br>
                     '.'Located at :'.' '. $row["barPhysicalAddress"] .'
                     <br>'.'Available Drinks :'.' '. $row["productName"] .'  '.'<br>Priced at Tsh '.number_format($row["productPrice"]).'</p><br>
                    <p><a href="auth/customer/bar-in-detail.php?bar_name='.$row["barName"].'&bar_id='.$row["barId"].'" class="btn btn-primary">Visit this bar</a></p>
                </div>
                </div>
                </div>';
                        }
                        
                        ?>
        
            
        </div>
            
      </div>
          
        
       

    </section><!-- End About Section -->

  

 

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Smart-Bar</h3>
              <p>
                <strong>Email:</strong>smartbar@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Project Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Network Administration</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>For more updates!</h4>
            <p>Enter your E-mail then Click subscribe button </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Smart-Bar</span></strong>. All Rights Reserved
      </div>
      <div class="credits">Designed by <a href="#">Smart-Girls</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/mainJs.js"></script>

</body>

</html>