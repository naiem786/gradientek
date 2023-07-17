<!doctype html>
<html lang="en">
<?php include('message.php');?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/create.css">
</head>

<body>

    <body>
        <div class="container-fluid vh-100"style="background-color: #64E1FF">

            <div class="admin-wrapper">
                <div class=" sidebar container-fluid  col-lg-2 col-md-3 col-sm-4  float-start vh-100" style="background-color: #0E313E;">
                <ul class="list-unstyled  vh-100">
                    <li class="text-center pt-3 "><img src="../images/logo/logo1.png" class="rounded-circle"  style="height: 60px;" /></a></li>

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
                            <a href="../coursels.php" class="text-white text-decoration-none">
                                <span class="icon"><i class="fa fa-image"></i></span>
                                <span class="item">Coursel</span>
                            </a>
                        </li>
                        <li>
                            <a href="FooterHeader.php" class="text-white text-decoration-none">
                                <span class="icon"><i class="fa fa-header"></i></span>
                                <span class="item">Header</span>
                            </a>
                        </li>
                        <li>
                            <a href="footer.php" class="text-white text-decoration-none">
                                <span class="icon"><i class="fa fa-comment"></i></span>
                                <span class="item">Footer</span>
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
                </div>
                <div class="admin-content"style="background-color: #64E1FF">

                    <div class="content border shadow-lg p-3 mb-5 bg-body rounded"  >
                        <h2 class="fw-bold p-3 mb-5 bg-light rounded text-center border-bottom">Add Posts</h2>
                        <form action="code.php" method="post" class="px-3" enctype="multipart/form-data">
                            <div class="form-group mt-3">
                                <label for="">Title</label>
                                <input type="text" class="form-control shadow-sm" name="title" id="title" required placeholder="Title of the website">
                            </div>
                            <div class="form-group mt-3">
                                <label>Content on the Post</label>
                                <textarea class="form-control shadow-sm"  name="description" id="description" required rows="5"></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <label class="mr-2">Upload Image</label>
                                <input type="file" id="image" class="shadow-sm"  name="image">
                            </div>
                            <hr>
                            <button type="submit" name="post_add" class="btn btn-primary shadow-sm">Save Post</button>
                            <div class="button-group float-end shadow-sm" >
                                        <a href="../Content.php" class="btn btn-danger float-end ">Back</a>
                                    </div>
                        </form>
                    </div>
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