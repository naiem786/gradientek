<!doctype html>
<html lang="en">
<?php include("../connection.php");
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Us</title>
  <link href="../css/index.css" rel="stylesheet">

  <link href="../css/aboutus.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
  .anime{
  position: relative;
  animation-name: appear;
  animation-duration: 3s;
  animation-iteration-count: 1;
  animation-delay: 0.5;
}

@keyframes appear{
  from{
    color:aliceblue;
  }

}</style>



</head>

<body>
<?php
$post = "SELECT * FROM bgcolor ";
$post_run = mysqli_query($con, $post);

if (mysqli_num_rows($post_run) > 0) {
  foreach ($post_run as $post) {
?>
  <div class="container-fluid" style="background-color: <?= $post['aboutuscolor'] ?>;">
  <?php
        }
      } else {
          ?>
  <tr>
    <td colspan="6">NO record found</td>
  </tr>
<?php

      }
?>
    
  <?php
  $post = "SELECT * FROM header ";
  $post_run = mysqli_query($con, $post);

      if (mysqli_num_rows($post_run) > 0) {
        foreach ($post_run as $post) {
      ?>
           <span style="text-align: left;" class="nav-logo">
                  <img src="../images/logo/header/<?= $post['image'] ?>" alt="logo" width="50" height="50">
                  </span>

                  <div  style="position: absolute; top: 23px;
                    right:15px; display: inline;">
                  
                  <div class="inline"> 
                      <i class="fa fa-envelope" style="font-size:17px;"></i>
                      <?= $post['email'] ?>&nbsp
                      <i class="fa fa-phone" style="font-size:17px;"></i>
                      <?= $post['phone'] ?></div> 
    <?php
        }
      } else {
          ?>
  <tr>
    <td colspan="6">NO record found</td>
  </tr>
<?php

      }
?>
</div>


    <!-- navbar -->

    <div class="nav2 sticky-top">
    <?php
$post = "SELECT * FROM bgcolor ";
$post_run = mysqli_query($con, $post);

if (mysqli_num_rows($post_run) > 0) {
  foreach ($post_run as $post) {
?>
  <ul class="nav justify-content-center" style="background-color: <?= $post['postcolor'] ?>;">
  <?php
        }
      } else {
          ?>
  <tr>
    <td colspan="6">NO record found</td>
  </tr>
<?php

      }
?>
        <li class="nav-item">
          <!-- onMouseOver="this.style.color='red'" -->
          <a class="nav-link active" style="color: white; " href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: white; " href="AboutUs.php">About US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: white; " href="../AdminLogin.php">Admin Login</a>
        </li>
        <a class="btn btn-primary " href="../contact.php" role="button">Inquire</a>

      </ul>


    </div>

    <!-- carousel begin -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
       
<?php
$post = "SELECT * FROM coursel ";
$post_run = mysqli_query($con, $post);

if (mysqli_num_rows($post_run) > 0) {
  foreach ($post_run as $post) {
?>

    <div class="carousel-item active">
      <img src="../images/carousel/<?= $post['image1'] ?>" class="d-block w-100" alt="carousel image">
  </div>
    
<?php
  }
} else {
  ?>
  <tr>
    <td colspan="6">NO record found</td>
  </tr>
<?php

}
?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
          <!-- Content begin -->
<!-- code for background color -->
<?php
$post = "SELECT * FROM bgcolor ";
$post_run = mysqli_query($con, $post);

if (mysqli_num_rows($post_run) > 0) {
  foreach ($post_run as $post) {
?>
    <div class=" container-fluid " style="background-color:  <?= $post['textcolor'] ?> ;text-align: center;font-family: serif;">

  <?php
        }
      } else {
          ?>
  <tr>
    <td colspan="6">NO record found</td>
  </tr>
<?php

      }
?>

<!-- code for changing the content  -->
<?php
$post = "SELECT * FROM aboutus ";
$post_run = mysqli_query($con, $post);

if (mysqli_num_rows($post_run) > 0) {
  foreach ($post_run as $post) {
?>
      <div class="anime">
        <h1 ><?= $post['heading1'] ?></h1>
        <p style="font-style: italic;"><?= $post['text1'] ?></p>
        <p><?= $post['text2'] ?> </p>
    <br>
        <h1><?= $post['heading2'] ?></h1>
        <p style="font-style: italic;"><?= $post['text01'] ?></p>
        <p class="pb-5"><?= $post['text02'] ?></p>
      </div>
    </div>
    <?php
        }
      } else {
          ?>
  <tr>
    <td colspan="6">NO record found</td>
  </tr>
<?php

      }
?>


<!-- Footer begin -->
<footer class="text-white text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
      <?php
  $post = "SELECT * FROM footerc ";
  $post_run = mysqli_query($con, $post);

      if (mysqli_num_rows($post_run) > 0) {
        foreach ($post_run as $post) {
      ?>
        <h5 class="text-uppercase"><?= $post['title'] ?></h5>

        <p>
        <?= $post['content'] ?>
        </p>
        <?php
        }
      } else {
          ?>
  <tr>
    <td colspan="6">NO record found</td>
  </tr>
<?php

      }
?>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Social media links</h5>
        <?php
  $post = "SELECT * FROM footerl ";
  $post_run = mysqli_query($con, $post);

      if (mysqli_num_rows($post_run) > 0) {
        foreach ($post_run as $post) {
      ?>
        <ul class="list-unstyled mb-0">
          <li>
            <a href="<?= $post['linkedin'] ?>" class="text-white" style="text-decoration: none;"><i class="fa fa-linkedin-square"></i>
              Linkedin</a>
          </li>
          <li>
            <a href="<?= $post['instagram'] ?>" class="text-white" style="text-decoration: none;"><i class="fa fa-instagram"></i>
              Instagram</a>
          </li>
          <li>
            <a href="<?= $post['facebook'] ?>" class="text-white" style="text-decoration: none;"><i class="fa fa-facebook-f"></i>

              Facebook</a>
          </li>
          <li>
            <a href="<?= $post['twitter'] ?>" class="text-white" style="text-decoration: none;"><i class="fa fa-twitter-square"></i>

              Twitter</a>
          </li>
        </ul>
      </div>
   <?php }
      } else {
          ?>
  <tr>
    <td colspan="6">NO record found</td>
  </tr>
<?php

      }
?>



      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">Contact Us</h5>

        <ul class="list-unstyled">
          <li>
            <?php
                    $post = "SELECT * FROM header ";
                    $post_run = mysqli_query($con, $post);

                        if (mysqli_num_rows($post_run) > 0) {
                          foreach ($post_run as $post) {
                        ?>
                          <div class="inline"><i class="fa fa-envelope" style="font-size:17px; color: white;"></i>
                  <?= $post['email'] ?>&nbsp

                            <!-- <a href="#">gradient@gmail.com</a> -->
                      <?php
                          }
                        } else {
                            ?>
                    <tr>
                      <td colspan="6">NO record found</td>
                    </tr>
                  <?php

                        }
                  ?>
                          
          </li>
          


<!-- phone details start here -->

<?php
    $post = "SELECT * FROM footerl ";
    $post_run = mysqli_query($con, $post);

        if (mysqli_num_rows($post_run) > 0) {
          foreach ($post_run as $post) {
        ?>
          <li>
           
              <i class="fa fa-phone" style="font-size:17px; color: white;text-decoration: none;"></i>
              <?= $post['phone1'] ?></a>
          </li>
          <li>
           
              <i class="fa fa-phone" style="font-size:17px; color: white;"></i>
              <?= $post['phone2'] ?></a>
          </li>
          <li>
           
              <i class="fa fa-phone" style="font-size:17px; color: white;"></i>
              <?= $post['phone3'] ?></a>
          </li>

      </div></a>
    
      </ul>
      <?php
        }
      } else {
          ?>
  <tr>
    <td colspan="6">NO record found</td>
  </tr>
<?php

      }
?>
    </div>
    <!--Grid column-->
  </div>
  <!--Grid row-->
  </div>

  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
      $('.carouselExampleFade').carousel({
        interval: 2
      })</script>
</body>

</html>