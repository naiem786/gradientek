<!doctype html>
<html lang="en">
<?php include('message.php'); ?>
<?php include("../connection.php");
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post Content</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/create.css">
</head>

<body>

    <body>
        <div class="container-fluid">

            <div class="admin-wrapper">
                <div class=" sidebar container-fluid  col-lg-2 col-md-3 col-sm-4  float-start vh-100" style="background-color: #0E313E;">
                    <ul class="list-unstyled">
                        <li class="nav-item">
                            <a href="../index.php" class="text-white text-decoration-none">
                                <span class="icon"><i class="fa fa-home"></i></span>
                                <span class="item">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../AboutUs.php" class="text-white text-decoration-none">
                                <span class="icon"><i class="fa fa-info"></i></span>
                                <span class="item">About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="../Dashboard.php" class="text-white text-decoration-none">
                                <span class="icon"><i class="fa fa-dashboard"></i></span>
                                <span class="item">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="../UserInfo.php" class="text-white text-decoration-none">
                                <span class="icon"><i class="fa fa-user"></i></span>
                                <span class="item">User Info</span>
                            </a>
                        </li>
                        <li>
                            <a href="../Images.php" class="text-white text-decoration-none">
                                <span class="icon"><i class="fa fa-image"></i></span>
                                <span class="item">Images</span>
                            </a>
                        </li>
                        <li>
                            <a href="../Content.php" class="active text-white text-decoration-none">
                                <span class="icon"><i class="fa fa-edit"></i></span>
                                <span class="item">Content</span>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="admin-content">

                    <thead>
                        <tr>
                            <th>id</th>
                        </tr>
                    </thead>

                    <tbody class="border">
                        <?php
                        $post = "SELECT * FROM post ";
                        $post_run = mysqli_query($con, $post);
                         
                        if (mysqli_num_rows($post_run) > 0)
                         {
                            foreach($post_run as $post)
                            {
                                ?><tr scope="row">
                                    <td><?=$post['id']?></td>
                                    <td><?=$post['title']?></td>
                                    <td><?=$post['content']?></td>
                                    <td><?=$post['created_at']?></td>
                                    <td><img src="../uploads/posts/<?=$post['image']?>"/></td>  
                                </tr><br>
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







                </div>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.j"></script>
        <!-- Custom script -->
        <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

        <script src="js/script.js"></script>
    </body>


</html>