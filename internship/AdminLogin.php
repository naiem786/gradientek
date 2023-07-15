<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Homepage</title>
  <link href="css/index.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
<body>
<?php
include('connection.php');
?>
  <div class="container-fluid">
    <span style="text-align: left;" class="nav-logo">
      <img src="images/logo/logo.jpg" alt="logo" width="50" height="50">
    </span>
    <div style="position: absolute; top: 23px;
       right:15px; display: inline;">
      <i class="fa fa-envelope" style="font-size:17px"></i>
      <a href="#">gradient@gmail.com</a>
      <i class="fa fa-phone" style="font-size:17px"></i>
      +91 9328842129
    </div>


    <!-- navbar -->

    <div class="nav2 sticky-top">
      <ul class="nav justify-content-center" style="background-color: #00171f;
        ">
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
        <a class="btn btn-primary " href="contact.php" role="button">Inquire</a>

      </ul>


    </div>

    <section class="h-100" style="background-color: #64E1FF;">
        <div class="container  h-100">
          <div class="row d-flex  justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card shadow-lg p-3 mb-2 mt-2 text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Admin Login </p>
      
                      <form class="mx-1 mx-md-4" name="form" method="POST" onsubmit="return isvalid()" action="login.php" >
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas  fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" maxlength="15"id="user" name="user" class="form-control" />
                            <label class="form-label" >UserName</label>
                          </div>
                        </div>
      
                
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas  fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="pass" name="pass" class="form-control" />
                            <label class="form-label">Password</label>
                          </div>
                        </div>
      
      
                      
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <input type="submit" value="Login" id="submit" name="submit" class="btn btn-primary btn-lg"/>
                        </div>
                        

                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="images/admin/loginA.avif"
                        class="img-fluid" alt="Sample image">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <script> 
    function isvalid(){
      var user =document.form.user.value;
      var pass =document.form.pass.value;
      if(user.length=="" && pass.length==""){
        alert("Username and Password field is empty!!!");
        return false
      }
      else{
        if(user.length==""){
        alert("Username field is empty!!!");
        return false}
        if(pass.length==""){
        alert("Password field is empty!!!");
        return false}

      }
    }
    </script>
</body>
</html>