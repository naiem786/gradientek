<?php
include('createPost.php');
include("../connection.php");

if(isset($_POST['post_delete_btn'])){
    $post_id=$_POST['post_delete_btn'];

    $check_img_query ="SELECT * FROM post WHERE id='$post_id' LIMIT 1";
    $img_res =mysqli_query($con,$check_img_query);
    $res_data = mysqli_fetch_array($img_res);    
    
    $image= $res_data['image'];

    $query= "DELETE FROM post WHERE id='$post_id'LIMIT 1 ";
    $query_run =mysqli_query($con,$query);


    
    if($query_run)
    {
            if(file_exists('../images/webImages/'.$image)){
                unlink("../images/webImages/'.$image");
            }
        
        echo '<script>
        window.location.href= "../content.php";
        alert("Post Deleted suscessfully")
        </script>';
        exit(0);
    }
    else{
        $_SESSION['message']="Something went wrong";
        header("Location:editPost.php");
        exit(0); 
    }
    

}



if(isset($_POST['post_update']))
{
    $post_id=$_POST['post_id'];
    $title=$_POST['title'];
    $description=$_POST['description'];
   
    $old_filename=$_POST['old_image'];
    $image=$_FILES['image']['name'];

    $update_filename="";
    if($image != NULL){
    //rename this image
    $image_extension= pathinfo($image,PATHINFO_EXTENSION);
    $filename=time().'.'.$image_extension;

    $update_filename=$filename;
    }
    else
    {
        $update_filename=$old_filename;
    }
    $query="UPDATE post SET title='$title', content='$description', image='$update_filename' WHERE id='$post_id'";
    $query_run =mysqli_query($con,$query);


    if($query_run){
        if($image != NULL){

            if(file_exists('../images/webImages/'.$filename)){
                unlink("../images/webImages/'.$filename");
            }
            move_uploaded_file($_FILES['image']['tmp_name'],'../images/webImages/'.$update_filename);
        }
        echo '<script>
        window.location.href= "../content.php";
        alert("Post Updated suscessfully")
        </script>';
        exit(0);
    }
    else{
        header("Location:editPost.php");
        exit(0); 
    }

}




if(isset($_POST['post_add'])){
    $title=$_POST['title'];
    $description=$_POST['description'];
    $image=$_FILES['image']['name'];

    //rename this image
    $image_extension= pathinfo($image,PATHINFO_EXTENSION);
    $filename=time().'.'.$image_extension;

    
    $query="INSERT INTO post(title,content,image) VALUES('$title','$description','$filename')";
    $query_run =mysqli_query($con,$query);

    if($query_run){
        move_uploaded_file($_FILES['image']['tmp_name'],'../images/webImages/'.$filename);
        echo '<script>
        window.location.href= "createPost.php";
        alert("Post Added suscessfully")
        </script>';
        exit(0);
    }
    else{
        $_SESSION['message']="Something went wrong";
        header("Location:createPost.php");
        exit(0); 
    }
}
