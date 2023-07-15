<!doctype html>
<html lang="en">
<?php include('../../js/message.php'); ?>
<?php include("../../connection.php");
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Logo settings</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../sidebar/style.css">
  <link rel="stylesheet" href="../../Header/style.css">

<body style="background-color: #64E1FF">
<nav class="sidebar">

      <div class="menu-content">

        <ul class="menu-items" style="list-style-type: none;">
          
            <div class="pt-3"><a href="../internship/Dashboard.php" class="pt-3">
              <img src="../images/logo/logo1.png" href="#" class="logo" style="height: 60px;">
            </a>
            </div>
          
          <div class="menu-title">Admin Control</div>
          

          <li class="item">
          <a href="../index.php">
            <span class="icon">
              <i class="fa fa-home"></i>
            </span>
            <span>Home</span>
          </a>
          </li>

          <li class="item">
          <a href="../AboutUS/AboutUs.php">
            <span class="icon">
              <i class="fa fa-info"></i>
            </span>
            <span>AboutUs</span>
          </a>
          </li>  
          <li class="item">
          <a href="../Dashboard.php">
            <span class="icon">
              <i class="fa fa-dashboard"></i>
            </span>
            <span>Dashboard</span>
          </a>
          </li>  

          <li class="item">
          
            <div class="submenu-item border-bottom border-primary" >
              <span><i class="fa fa-cog"></i>&nbsp &nbspHomepage Settings &nbsp &nbsp<i class=" fa fa-arrow-right"></i></span>
              
            </div>

            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa fa-arrow-left"></i>
                Main menu
              </div>
              <li class="item">
              <a href="header.php">
                <span class="icon">
                  <i class="fa fa-header"></i>
                </span>
                <span>Header</span>
              </a>
              </li>

              <li class="item">
              <a href="../Footer/footer.php">
                <span class="icon">
                  <i class="fa fa-comment"></i>
                </span>
                <span>Footer</span>
              </a>
              </li>

              <li class="item">
              <a href="../carousel/carousel.php">
                <span class="icon">
                  <i class="fa fa-image"></i>
                </span>
                <span>Carousel</span>
              </a>
              </li>

            </ul>
          </li>
       

          <li class="item">
          <a href="../bgColor/bgColor.php">
            <span class="icon">
              <i class="fa-fa-solid fa fa-paint-brush"></i>
            </span>
            <span>BG Color</span>
          </a>
          </li>

          <li class="item">
          <a href="../AboutUs/AboutUsSettings.php">
            <span class="icon">
              <i class="fa fa-info-circle"></i>
            </span>
            <span>AboutUs settings</span>
          </a>
          </li>
        </ul>
      </div>
    </nav>

    <nav class="navbar">
      <i class="fa fa-bars" id="sidebar-close"></i>
    </nav>


    <!-- MAin content of Dashboard -->


    <main class="main pt-4" >
    <div class="admin-content w-100"style="background-color: #64E1FF">

<div class="content border shadow-lg p-3 mb-5 bg-body rounded">
   



<h2 class="fw-bold p-3 mt-3 mb-5 bg-light rounded text-center border-bottom overflow-hidden">Admin Logo </h2>
    <?php
            $post = "SELECT * FROM header ";
            $post_run = mysqli_query($con, $post);

            if (mysqli_num_rows($post_run) > 0) {
                foreach ($post_run as $post) {
            ?>
    <form action="../../Header/hcode.php" method="post" class="px-3  overflow-hidden" enctype="multipart/form-data">
        
        <div class="form-group mt-3">
            <label class="mr-2">Choose admin logo</label>
            <input type="file" id="adminlogo" class="shadow-sm"  name="adminlogo">
        </div>
        <hr>
        <button type="submit" name="adminlogo" class="btn btn-primary shadow-sm">Update</button>
        <div class="button-group float-end shadow-sm" >
                    <a href="../../Dashboard.php" class="btn btn-danger float-end ">Back</a>
                </div>
    </form>
    <?php
}
} else {
?>
<tr>
<td colspan="6">Something went wrong</td>
</tr>
<?php

}
?>                  
    </div>
</div>
              </main>


<!-- Dashboard ends -->


    <script src="../sidebar/script.js"></script>

  </body>

</html>

