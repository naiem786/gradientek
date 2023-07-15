<!doctype html>
<html lang="en">
<?php include("connection.php");
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Content settings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/adminContent.css">
</head>

<body>

    <body>
        <div class="container-fluid vh-100"style="background-color: #64E1FF">
                  <div class="admin-wrapper">
                <div class=" sidebar container-fluid  col-lg-2 col-md-3 col-sm-4  float-start" style="background-color: #0E313E;">

                    <ul class="list-unstyled  vh-100">
                    <li class="text-center pt-3 "><a href="adminDetailSettings.php"><img src="images/logo/logo1.png" class="rounded-circle"  style="height: 60px;" /></a></li>

                        <li class="nav-item">
                            <a href="index.php" class="text-white text-decoration-none">
                                <span class="icon"><i class="fa fa-home"></i></span>
                                <span class="item">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="AboutUs/AboutUs.php" class="text-white text-decoration-none">
                                <span class="icon"><i class="fa fa-info"></i></span>
                                <span class="item">About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="Dashboard.php" class="text-white active text-decoration-none">
                                <span class="icon"><i class="fa fa-dashboard"></i></span>
                                <span class="item">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="UserInfo.php" class="text-white text-decoration-none">
                                <span class="icon"><i class="fa fa-user"></i></span>
                                <span class="item">User Info</span>
                            </a>
                        </li>
                        <li>
                            <a href="bgColor/bgcolor.php" class="text-white text-decoration-none">
                                <span class="icon"><i class="fa fa-paint-brush"></i></span>
                                <span class="item">BG color</span>
                            </a>
                        </li>
                        <li>
                            <a href="coursels.php" class="text-white text-decoration-none">
                                <span class="icon"><i class="fa fa-image"></i></span>
                                <span class="item">Coursel</span>
                            </a>
                        </li>
                        <li>
                            <a href="js/FooterHeader.php" class="text-white text-decoration-none">
                                <span class="icon"><i class="fa fa-header"></i></span>
                                <span class="item">Header</span>
                            </a>
                        </li>
                        <li>
                            <a href="js/footer.php" class="text-white text-decoration-none">
                                <span class="icon"><i class="fa fa-comment"></i></span>
                                <span class="item">Footer</span>
                            </a>
                        </li>
                        <li>
                            <a href="Content.php" class=" text-white text-decoration-none">
                                <span class="icon"><i class="fa fa-edit"></i></span>
                                <span class="item">Content</span>
                            </a>
                        </li>
                        <li>
                            <a href="AboutUs/aboutusform.php" class="text-white text-decoration-none">
                                <span class="icon"><i class="fa fa-dashboard"></i></span>
                                <span class="item">AboutUs</span>
                            </a>
                        </li>
                    </ul>

                </div>

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

            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>


</html>