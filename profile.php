<html>
       <head>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<link rel="stylesheet" href="style.css">

<link rel="icon" href="skull-solid.svg" type="image/icon type"> 


       </head>
<body>
      
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
            <a class="nav-link active" href="index2.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index2.php#about">About Us</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" href="index2.php#trendingitems">Trendings</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="index2.php#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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






<section >
    
            <?php
            
session_start();
$con = new mysqli('localhost', 'root', '', 'udml');

if ($con->connect_error)
{die ("connection failed");
}



$mobile=$_SESSION['mobile'];

$q="select * from customers where mobile='$mobile'";
$result = $con->query($q);


if($result->num_rows>0)
{
    $row=$result->fetch_assoc();
    $Phone=$row['mobile'];
    $fname=$row['father_name'];
    $dob=$row['dob'];
    $gender=$row['gender'];
    $address=$row['address'];
    $state=$row['state'];


}
echo "<div class='glow'>";
echo "<span style='color:white;'>Name : </span>";
echo "<span style='color:white;'>";
echo $_SESSION['name'];
echo "</span>";
echo "<br>";
echo "<span style='color:white;'>Phone number : </span>";
echo "<span style='color:white;'>";
echo $Phone;
echo "</span>";
echo "<br>";
echo "<span style='color:white;'>Father Name : </span>";
echo "<span style='color:white;'>";
echo $fname;
echo "</span>";
echo "<br>";
echo "<span style='color:white;'>Email : </span>";
echo "<span style='color:white;'>";
echo $email;
echo "</span>";
echo "<br> </div>";

?>
<center><a class="dropdown-item" href="index.php"><button style="border-radius:20px;">&emsp;Logout&emsp;</button></a></center>
</section>

</div>


</body>
</html>

















