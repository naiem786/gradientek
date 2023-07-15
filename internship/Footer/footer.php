<!doctype html>
<html lang="en">
<?php include('../js/message.php'); ?>
<?php include("../connection.php");
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Footer settings</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../sidebar/style.css">
  <link rel="stylesheet" href="../css/sidebar.css">

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
              <a href="../Header/header.php">
                <span class="icon">
                  <i class="fa fa-header"></i>
                </span>
                <span>Header</span>
              </a>
              </li>

              <li class="item">
              <a href="footer.php">
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
            <div class="admin-content w-100 px-3" style="background-color: #64E1FF">

            <div class="content border shadow-lg p-3 mb-5 bg-body rounded " >
                <h2 class="fw-bold p-3 mb-5 bg-light rounded text-center border-bottom overflow-hidden">Footer Settings</h2>
                <?php
                        $post = "SELECT * FROM footerc ";
                        $post_run = mysqli_query($con, $post);

                        if (mysqli_num_rows($post_run) > 0) {
                            foreach ($post_run as $post) {
                        ?>
                <form action="fcode.php" method="post" class="px-3  overflow-hidden" enctype="multipart/form-data">
                    <div class="form-group mt-3">
                        <label for="">footer heading</label>
                        <input type="text" class="form-control shadow-sm" name="title" value="<?= $post['title'] ?>" id="title" required placeholder="Enter your email">
                    </div>
                    <div class="form-group mt-3">
                        <label>footer content</label>
                        <textarea class="form-control shadow-sm" name="description" id="description" required rows="5"><?= $post['content'] ?></textarea>
                    </div>
                    <div class="form-group mt-3">
                    <button type="submit" name="fcontent" class="btn btn-primary shadow-sm">Save Post</button>
                    </div>
                </form>
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

            <!-- footer links  -->


            <?php
                        $post = "SELECT * FROM footerl ";
                        $post_run = mysqli_query($con, $post);

                        if (mysqli_num_rows($post_run) > 0) {
                            foreach ($post_run as $post) {
                        ?>
                <form action="fcode.php" method="post" class="px-3  overflow-hidden" enctype="multipart/form-data">

                    <h2 class="fw-bold p-3 mb-5 bg-light rounded text-center border-bottom">Social media Settings</h2>

                    <div class="form-group mt-3">
                        <label> link for instagram</label>
                        <input type="text" class="form-control shadow-sm" name="instagram" id="instagram"  value="<?= $post['instagram'] ?>">

                        
                    </div>
                    <div class="form-group mt-3">
                        <label> link for linkedin</label>
                        <input type="text" class="form-control shadow-sm" name="linkedin" id="linkedin"  value="<?= $post['linkedin'] ?>">

                        
                    </div>
                    <div class="form-group mt-3">
                        <label> link for facebook</label>
                        <input type="text" class="form-control shadow-sm" name="facebook" id="facebook"  value="<?= $post['facebook'] ?>">

                        
                    </div>
                    <div class="form-group mt-3">
                        <label> link for twitter</label>
                        <input type="text" class="form-control shadow-sm" name="twitter" id="twitter"  value="<?= $post['twitter'] ?>">

                        
                    </div>
                    <!-- contact details -->
                    <h2 class="fw-bold p-3 mb-5 bg-light rounded text-center border-bottom">Contact details</h2>
                    <div class="form-group mt-3">
                        <label>contact details 1</label>
                        <input type="text" class="form-control shadow-sm" name="phone1" id="phone1"  value="<?= $post['phone1'] ?>">

                        
                    </div>

                    <div class="form-group mt-3">
                        <label>contact details 1</label>
                        <input type="text" class="form-control shadow-sm" name="phone2" id="phone2"  value="<?= $post['phone2'] ?>">

                        
                    </div>
                    <div class="form-group mt-3">
                        <label>contact details 1</label>
                        <input type="text" class="form-control shadow-sm" name="phone3" id="phone3"  value="<?= $post['phone3'] ?>">

                        
                    </div>
                    <hr>
                    <button type="submit" name="flinks" class="btn btn-primary shadow-sm">Save Post</button>
                    <div class="button-group float-end shadow-sm">
                        <a href="../Dashboard.php" class="btn btn-danger float-end ">Back</a>
                    </div>
                </form>
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
            </div>
              </main>


<!-- Dashboard ends -->


    <script src="../sidebar/script.js"></script>

  </body>

</html>

