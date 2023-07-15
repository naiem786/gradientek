<!doctype html>
<html lang="en">
<?php include("connection.php");
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="sidebar/style.css">
  <link rel="stylesheet" href="css/adminContent.css">

<body style="background-color: #64E1FF">
<nav class="sidebar">

      <div class="menu-content">

        <ul class="menu-items" style="list-style-type: none;">
          
            <div class="pt-3"><a href="../internship/Dashboard.php" class="pt-3">
              <img src="images/logo/logo1.png" href="#" class="logo" style="height: 60px;">
            </a>
            </div>
          
          <div class="menu-title">Admin Control</div>
          

          <li class="item">
          <a href="index.php">
            <span class="icon">
              <i class="fa fa-home"></i>
            </span>
            <span>Home</span>
          </a>
          </li>

          <li class="item">
          <a href="AboutUS/AboutUs.php">
            <span class="icon">
              <i class="fa fa-info"></i>
            </span>
            <span>AboutUs</span>
          </a>
          </li>  
          <li class="item">
          <a href="Dashboard.php">
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
              <a href="Header/header.php">
                <span class="icon">
                  <i class="fa fa-header"></i>
                </span>
                <span>Header</span>
              </a>
              </li>

              <li class="item">
              <a href="Footer/footer.php">
                <span class="icon">
                  <i class="fa fa-comment"></i>
                </span>
                <span>Footer</span>
              </a>
              </li>

              <li class="item">
              <a href="carousel/carousel.php">
                <span class="icon">
                  <i class="fa fa-image"></i>
                </span>
                <span>Carousel</span>
              </a>
              </li>

            </ul>
          </li>
       

          <li class="item">
          <a href="bgColor/bgColor.php">
            <span class="icon">
              <i class="fa-fa-solid fa fa-paint-brush"></i>
            </span>
            <span>BG Color</span>
          </a>
          </li>

          <li class="item">
          <a href="AboutUs/AboutUsSettings.php">
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


    <main class="main pt-4">
    <div class="admin-content"style="background-color: #64E1FF">
                   
                   <div class="content  border bg-white rounded">
                   <div id="layoutSidenav_content">
               <main>
                   <div class="container-fluid px-4">
                       <h1 class="mt-4">Dashboard</h1>

                       <div class="row">
                           <div class="col-xl-3 col-md-6">
                               <div class="card bg-primary text-white mb-4">
                                   <div class="card-body">Post</div>
                                   <div class="card-footer d-flex align-items-center justify-content-between">
                                       <a class="small text-decoration-none  text-white" href="Dashboard.php"> 
                                       <?php
                                               $sql = "SELECT * from post";

                                               if ($result = mysqli_query($con, $sql)) {

                                                   // Return the number of rows in result set
                                                   $rowcount = mysqli_num_rows( $result );
                                                   
                                                   // Display result
                                                   printf("Total post :  %d", $rowcount);
                                               }
                                                           ?>
                                                                                       </a>
                                       <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-xl-3 col-md-6">
                               <div class="card bg-warning text-white mb-4">
                                   <div class="card-body">..... ....</div>
                                   <div class="card-footer d-flex align-items-center justify-content-between">
                                       <a class="small text-white stretched-link" href="#">..... ....</a>
                                       <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-xl-3 col-md-6">
                               <div class="card bg-success text-white mb-4">
                                   <div class="card-body">..... ....</div>
                                   <div class="card-footer d-flex align-items-center justify-content-between">
                                       <a class="small text-white stretched-link" href="#">..... ....</a>
                                       <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-xl-3 col-md-6">
                               <div class="card bg-danger text-white mb-4">
                                   <div class="card-body">..... ....</div>
                                   <div class="card-footer d-flex align-items-center justify-content-between">
                                       <a class="small text-white stretched-link" href="#">..... ....</a>
                                       <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div >
                               <div class="card mb-4">
                                   <div class="card-header">
                                       <i class="fas fa-chart-area me-1"></i>
                                       Manage Posts
                                   </div>
                       <div style="overflow-x:auto; overflow-y:scroll; height:500px;">
                       <table>
                           <thead>
                               <th>ID</th>
                               <th class="col">Title</th>
                               <th>Website</th>
                               <th>Image</th>
                               <th>Last updated</th>
                               <th colspan="2">Action</th>
                           </thead>
                           <tbody>
                               <?php
                               $post = "SELECT * FROM post ";
                               $post_run = mysqli_query($con, $post);

                               if (mysqli_num_rows($post_run) > 0) {
                                   foreach ($post_run as $post) {
                               ?>
                                       <tr>
                                           <td><?= $post['id'] ?></a></td>
                                           <td><?= $post['title'] ?></td>
                                           <td><?= $post['content'] ?></td>
                                           <td><img src="images/webImages/<?=$post['image']?>"  style="height: 100px;" /></td>
                                           <td><?= $post['created_at'] ?></td>
                                           <td><a href="js/editPost.php?id=<?= $post['id'] ?>" class="btn btn-success">Edit</a></td>
                                           <td>
                                               <form action="js/code.php" method="POST">
                                                   <button type="submit" name="post_delete_btn" value="<?= $post['id'] ?>" class="btn btn-danger">Delete</button>
                                               </form>
                                           </td>
                                       </tr>
                                   <?php
                                   }
                               } else {
                                   ?>
                                   <tr>
                                       <td colspan="6">NO resord found</td>
                                   </tr>
                               <?php

                               }
                               ?>
                           </tbody>
                       </table>
                       </div>
                               </div>
                           </div>
                      
                       </div>
                       
                   </div>
               </main>
              
           </div>


                   </div>
                   <div class="button-group pt-3 ">
                       <a href="js/createPost.php" class="w-100 btn btn-primary btn-big">Add Post</a>
                   </div>
               </div>
              </main>


<!-- Dashboard ends -->


    <script src="sidebar/script.js"></script>

  </body>

</html>

