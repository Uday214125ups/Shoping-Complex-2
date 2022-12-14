<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Complex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="skull-solid.svg" type="image/icon type"> 
  </head>
  <body>
    <?php
if (isset($_POST['query'])) {

  $qemail=$_POST['qemail'];
  $qname=$_Post['qname'];
  $qtext=$_POST['qtext'];
  session_start();

  $con = new mysqli('localhost', 'root', '', 'udml');
  
  if ($con->connect_error)
  {die ("connection failed");
  }

  $q = "INSERT INTO queries values('$qname','$qmail','$qtext')";

  $result = $con->query($q);
  if ($result) {

    header("location:success.php");
} 


else {
 echo $con->error;
  
}

}
    ?>
   
    <header>

        <div class="header_img">


    <nav class="navbar navbar-expand-lg Navbaar fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand ms-5" href="#">UDML</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5 text-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#about">About Us</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link active" href="#trendingitems">Trendings</a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Shops
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#cosmetics">Cosmetics</a></li>
                      <li><a class="dropdown-item" href="#clothes">Clothes</a></li>
                      <li><a class="dropdown-item" href="#electronics">Electronics</a></li>
                      <li><a class="dropdown-item" href="#cinema">Cinema</a></li>
                      <li><a class="dropdown-item" href="C:\Users\uday2\OneDrive\Desktop\Major\Major\demo_project\Restau\index.html">Food</a></li>
                    </ul>
                  </li>


              
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-address-book"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                      <li><a class="dropdown-item" href="#clothes">Cart</a></li>
                      <li><a class="dropdown-item" href="#electronics">Orders</a></li>
                      
                      <li><a class="dropdown-item" href="index.php">Logout</a></li>
                    </ul>
                  </li>

            </ul>
          </div>
        </div>
      </nav>
      
      
        <div class="glow" id="home">
        <br>
            <h2 >We are UDML</h2>
            <h1 >Welcome to our shopping complex</h1>
           
            </div>

      </div>
      
      </header>

      <section class="gallery min-vh-100 text-center" id="trendingitems">

        <h1 style="color: white;
	font-size: 47px;
	-webkit-text-stroke: 1px #F8F8F8;
	text-shadow: 0px 2px 4px blue;">Get , trendy items</h1>

        <div class="container-lg">
          <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
            <div class="col">
              <img src="electronics.jpg" clsss = "gallery-item" alt="gallery">
            </div>

            <div class="col">
              <img src="clothes.jpg" clsss = "gallery-item" alt="gallery">
            </div>

            <div class="col">
              <img src="toys.jpg" clsss = "gallery-item" alt="gallery">
            </div>

            <div class="col">
              <img src="food.jpg" clsss = "gallery-item" alt="gallery">
            </div>
            <div class="col">
              <img src="mackbook.jpg" clsss = "gallery-item" alt="gallery">
            </div>
            <div class="col">
              <img src="Movies.jpg" clsss = "gallery-item" alt="gallery">
            </div>
          </div>
        </div>

             <!-- Button trigger modal -->
<center><button type="button" class="btn btn-primary bg-warning btn-lg " data-bs-toggle="modal" data-bs-target="#gallery-modal">
  Zoomed
</button></center>

      </section>

 
<!-- Modal -->
<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="gallery-modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="electronics.jpg" class="modal-img">
        <img src="clothes.jpg" class="modal-img">
        <img src="toys.jpg" class="modal-img">
        <img src="food.jpg" class="modal-img">
        <img src="mackbook.jpg" class="modal-img">
        <img src="Movies.jpg" class="modal-img">
      </div>
    </div>
  </div>
</div>

<section class="gallery Ourservice min-vh-100 text-center" id="services" style="color:white ;">

  <h1 style="color:#e75480 ;">Services</h1>
  <p>We are always their to provide good service</p>

  <div class="container-lg">
    <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
      <div class="col">
        <div class="imgsetting d-inline-block m-auto">
          <img src="toysIcon.png" id="toys">
        </div>
        <h2>Toys</h2>
        <p>Get amazing toys for your kid's</p>
      </div>

      <div class="col">
        <div class="imgsetting d-inline-block m-auto">
          <a href="clo/index.html"> <img src="shirt.png" id="clothes"></a>
         </div>
         <h2>Clothes</h2>
         <p>Get the trendy clothes.</p>
      </div>

      <div class="col">
        <div class="imgsetting d-inline-block m-auto">
          <img src="electronic.png" id="electronics">
        </div>
        <h2>Electronics</h2>
        <p>Get the latest and best electronic items.</p>
      </div>

      <div class="col">
        <div class="imgsetting d-inline-block m-auto">
          <a href="Restau/index.html"><img src="restaurant.png" id="food"></a>
        </div>
        <h2>Food</h2>
        <p>Eat mouth watering food.</p>
      </div>
      <div class="col">
        <div class="imgsetting d-inline-block m-auto">
         <a href="C:\Users\uday2\OneDrive\Desktop\Major\Major\demo_project\index1.html"><img src="cinema.png" id="cinema"></a> 
        </div>
        <h2>Cinema</h2>
        <p>Watch latest and most reviewed movies</p>
      </div>
      <div class="col">
        <div class="imgsetting d-inline-block m-auto">
          <img src="skincare.png" id="cosmetics">
        </div>
        <h2>Cosmetics</h2>
        <p>Get the natural made Cosmetic items.</p>
      </div>
    </div>
  </div>


  <section class="Team min-vh-100 text-center" id="about" style="color: black; background-image:linear-gradient(purple,blue);">

    <h1>Our Amazing Team</h1>
    
    <div class="container-lg">
      <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
        <div class="col">
          <div class="photo d-inline-block m-auto">
            <img src="mohit.jpeg">
          </div>
          <h2>Mohit Sharma</h2>
          <p>Lead Engineer</p>
        </div>
  
        <div class="col">
          <div class="photo d-inline-block m-auto">
             <img src="Profile.jpeg">
           </div>
           <h2>Luvkush Sharma</h2>
           <p>Web developer</p>
        </div>
  
        <div class="col">
          <div class="photo d-inline-block m-auto">
            <img src="uday.jpeg">
          </div>
          <h2>Uday Pratap Singh</h2>
          <p>Data Scientists</p>
        </div>
  
        <div class="col">
          <div class="photo d-inline-block m-auto">
            <img src="Movies.jpg">
          </div>
          <h2>Dheeraj Sharma</h2>
          <p>Data Scientists</p>
        </div>
        
      </div>
    </div>

    <section class="ContactUs" id="contact" style="color:white; background-color:black;">
      <div class="container">
        <div class="row">
         <h1 style="margin-bottom: 20px; color:#e75480 ;">Contact Us</h1>
          <div class="col-md-8 Forrm">



            <form action='?' method="post" style="border-radius:25px;">
              <div class="form-group">
                <label>Enter Your Name</label>
                    <input type="text" class="form-control" id="inputname3" placeholder="Name" name='qname'>
              </div>
  
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email-Address</label>
                <input type="email" class="form-control" name='qemail' id="inputemail3" placeholder="Email">
             </div>
  
             <div class="form-group">
              <label>Enter Your Message</label>
              <textarea class="form-control" name='qtext' cols="30" rows="10" required></textarea>
           </div>
  
           <div class="form-group">
            <br>
            <button type="submit" name='query' class="btn message">Send Message</button>
         </div>
            
            </form>
          </div>
           
          <!-- Graph column -->
          <div class="col-md-4 Map" style="border-radius:25px;">
            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=500&amp;hl=en&amp;q=GLA University Mathura&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://formatjson.org/word-counter">Word Counter</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:500px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:500px;}.gmap_iframe {height:500px!important;}</style></div>
  
          </div>
  
        </div>
  
      </div>
    </section>

    

    
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white Footer mt-800">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">
                UDML
              </h6>
              <p>
                Hello , we are UDML (Uday Pratap Singh , Dheeraj , Mohit and Luvkush)
              </p>
            </div>
            <!-- Grid column -->
  
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
              <p>
                <a class="text-white">Clothes</a>
              </p>
              <p>
                <a class="text-white">Watches</a>
              </p>
              <p>
                <a class="text-white">Games</a>
              </p>
              <p>
                <a  href = "https://luvkush8941.github.io/Coffee_Website/" class="text-white">Frsh Coffee</a>
              </p>
            </div>
            <!-- Grid column -->
  
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3" id="contact">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
              <p><i class="fas fa-home mr-3"></i>Agra , Ag 282007 , UP , India</p>
              <p><i class="fas fa-envelope mr-3"></i> udml211@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> 8534084958 </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>
  
              <!-- Facebook -->
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #3b5998"
                 href="https://www.facebook.com/profile.php?id=100075852915803"
                 role="button"
                 ><i class="fab fa-facebook-f"></i
                ></a>
  
              <!-- Twitter -->
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #55acee"
                 href="#!"
                 role="button"
                 ><i class="fab fa-twitter"></i
                ></a>
  
              <!-- Google -->
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #dd4b39"
                 href="#!"
                 role="button"
                 ><i class="fab fa-google"></i
                ></a>
  
              <!-- Instagram -->
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #ac2bac"
                 href="#!"
                 role="button"
                 ><i class="fab fa-instagram"></i
                ></a>
  
              <!-- Linkedin -->
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #0082ca"
                 href="#!"
                 role="button"
                 ><i class="fab fa-linkedin-in"></i
                ></a>
              <!-- Github -->
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #000814"
                 href="#!"
                 role="button"
                 ><i class="fab fa-github"></i
                ></a>
            </div>
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
      </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div
           class="text-center p-3"
           style="background-color: rgba(0, 0, 0, 0.2)"
           >
        ?? 2022 Copyright:
        <a class="text-white" href="https://luvkush8941.github.io/Coffee_Website/"
           >UDML.com</a
          >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  
    
    <script src="main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

   

  </body>
</html>