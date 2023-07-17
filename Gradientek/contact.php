<!DOCTYPE html>
<html lang="en">
<?php include("connection.php");
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inquire</title>
  <link href="css/index.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/index.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
  </script>
  <script type="text/javascript">
    (function () {
      emailjs.init("shznDrrsNxgC6jD8P");
    })();
  </script>
</head>

<body>
  <div class="container-fluid">
  <?php
  $post = "SELECT * FROM header ";
  $post_run = mysqli_query($con, $post);

      if (mysqli_num_rows($post_run) > 0) {
        foreach ($post_run as $post) {
      ?>
           <span style="text-align: left;" class="nav-logo">
                  <img src="images/logo/header/<?= $post['image'] ?>" alt="logo" width="50" height="50">
                  </span>

                  <div style="position: absolute; top: 23px;
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
          <a class="nav-link active" style="color: white; " href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: white; " href="AboutUs/AboutUs.php">About US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: white; " href="AdminLogin.php">Admin Login</a>
        </li>
      </ul>
    </div>
   


    <!-- form begins -->

    <?php
      $post = "SELECT * FROM bgcolor ";
      $post_run = mysqli_query($con, $post);

        if (mysqli_num_rows($post_run) > 0) {
           foreach ($post_run as $post) {
      ?>
    <section class="h-100" style="background-color: <?= $post['inquirecolor'] ?>;">
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
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-12 col-xl-11">
            <div class="card shadow-lg p-3 mb-2 mt-2 text-black" style="border-radius: 25px;">
              <div class="card-body p-md-5">
                <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                    <div >
                      <h1 class=" fw-bold ">Ask Your Queries</h1>
                      <div class="form-group mt-4">
                        <h5 class="name">Name</h5>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" />
                      </div>
                      <div class="form-group mt-4 " >
                        <h5 class="email">Email</h5>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" />
                      </div>
                      <div class="form-group mt-4">
                        <h5 for="message">Message</h5>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                      </div>
                      <button class="btn btn-primary  mt-4" onclick="sendMail()">Submit</button>
                    </div>

                  </div>
                  <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                    <img src="images/admin/Register.jpg" class="img-fluid" alt="Sample image">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
          $('.carouselExampleFade').carousel({
            interval: 2
          })</script>
</body>

</html>