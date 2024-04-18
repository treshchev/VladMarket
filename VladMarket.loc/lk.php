<?php
$email=$_GET['email'];

include("setup.php");
$zapros="SELECT * FROM `regkl` WHERE `email`='$email'";
$sql=mysqli_query($link, $zapros);
$res=mysqli_fetch_array($sql);

$zapros1="SELECT * FROM `technic`";
$sql1=mysqli_query($link, $zapros1);

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Lugx Gaming - Shop Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Это ваш Личный Кабинет <?=$res['name']?></h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <?php
        while($res1=mysqli_fetch_array($sql1)){
          $id=$res1['id'];
         ?>
      <div class="row trending-box">
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 adv">
          <div class="item">
            <div class="thumb">
              <img src="assets/images/<?=$res1['photo']?>" alt="">
              <span class="price"><em></em>$<?=$res1['price']?></span>
            </div>
            <div class="down-content">
              <h4><?=$res1['name']?></h4>
              <input type="hidden" name="name" value="<?=$res1['name']?>">
              <input type="hidden" name="price" value="<?=$res1['price']?>">
               <input type="hidden" name="email" value="<?=$email?>">
                <input type="hidden" name="photo" value=<?=$res1['photo']?>> 
            <a href="korzina.php?email=<?=$email?>&?id=<?=$id?>"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        
        <?php
}
                       ?>
</div>
    </div>
      

  <footer>
    <div class="container">
      <div class="col-lg-12">
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>