<?php
include("../connection.php");
include('carousel.php');
if(isset($_POST['post_add'])){
    $image1=$_FILES['image1']['name'];


    //rename this image
    $image_extension1= pathinfo($image1,PATHINFO_EXTENSION);
    $filename1=time().'.'.$image_extension1;


    $query="INSERT INTO coursel(image1) VALUES('$filename1')";
    $query_run =mysqli_query($con,$query);

    if($query_run){
        move_uploaded_file($_FILES['image1']['tmp_name'],'../images/carousel/'.$filename1);
        echo '<script>
        window.location.href= "carousel.php";
        alert("Image added suscessfully")
        </script>';
        exit(0);
    }
    else{
        $_SESSION['message']="Something went wrong";
        header("Location:carousel.php");
        exit(0); 
    }
}




// IMage delete 
if(isset($_POST['post_delete_btn'])){
    $post_id=$_POST['post_delete_btn'];

    $check_img_query ="SELECT * FROM coursel WHERE id='$post_id' LIMIT 1";
    $img_res =mysqli_query($con,$check_img_query);
    $res_data = mysqli_fetch_array($img_res);    
    
    $image= $res_data['image1'];

    $query= "DELETE FROM coursel WHERE id='$post_id'LIMIT 1 ";
    $query_run =mysqli_query($con,$query);


    
    if($query_run)
    {
            if(file_exists('../images/carousel/'.$image)){
                unlink("../images/carousel/'.$image");
            }
        
        echo '<script>
        window.location.href= "carousel.php";
        alert("Image Deleted suscessfully")
        </script>';
        exit(0);
    }
    else{
        $_SESSION['message']="Something went wrong";
        header("Location:carousel.php");
        exit(0); 
    }
    

}




// $old_filename1=$_POST['old_image1'];
// $image1=$_FILES['image1']['name'];

// $old_filename2=$_POST['old_image2'];
// $image2=$_FILES['image2']['name'];

// $old_filename3=$_POST['old_image3'];
// $image3=$_FILES['image3']['name'];


// //rename image 1
// {  $update_filename1="";
// if($image1 != NULL){

// $image_extension1= pathinfo($image1,PATHINFO_EXTENSION);
// $filename1=time().'.'.$image_extension1;

// $update_filename1=$filename1;
// }
// else
// {
//     $update_filename1=$old_filename1;
// }
// }
// //rename image 2
// { $update_filename2="";
// if($image2 != NULL){

// $image_extension2= pathinfo($image2,PATHINFO_EXTENSION);
// $filename2=time().'.'.$image_extension2;

// $update_filename2=$filename2;
// }
// else
// {
//     $update_filename2=$old_filename2;
// }
// }
// //rename image 3
// {$update_filename3="";
// if($image3 != NULL){
// $image_extension3= pathinfo($image3,PATHINFO_EXTENSION);
// $filename3=time().'.'.$image_extension3;

// $update_filename3=$filename3;
// }
// else
// {
//     $update_filename3=$old_filename3;
// }
// }

// $query="UPDATE coursel SET image1='$update_filename1', image2='$update_filename2',image3='$update_filename3' WHERE id='1'";   
// $query_run =mysqli_query($con,$query);

// if($query_run){
//    { if($image1 != NULL){

//         if(file_exists('../images/carousel/'.$filename1)){
//             unlink("../images/carousel/'.$filename1");
//         }
//         move_uploaded_file($_FILES['image1']['tmp_name'],'../images/carousel/'.$update_filename1);
//     }
// }
//    { if($image2 != NULL){

//         if(file_exists('../images/carousel/'.$filename2)){
//             unlink("../images/carousel/'.$filename2");
//         }
//         move_uploaded_file($_FILES['image2']['tmp_name'],'../images/carousel/'.$update_filename2);
//     }
// }
//    { if($image3 != NULL){

//         if(file_exists('../images/carousel/'.$filename3)){
//             unlink("../images/carousel/'.$filename3");
//         }
//         move_uploaded_file($_FILES['image3']['tmp_name'],'../images/carousel/'.$update_filename3);
//     }
// }
