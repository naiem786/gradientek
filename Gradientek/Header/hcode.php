<?php
include('header.php');
include('../images/adminlogo/adminlogo.php');
include("../connection.php");

    // Header settings
if(isset($_POST['header'])){
    $email=$_POST['email'];
    $phone=$_POST['phone'];


        // code for inserting data
    $query="UPDATE header SET email='$email', phone='$phone' WHERE id='15'";
    $query_run =mysqli_query($con,$query);

    if($query_run){
       
        echo '<script>
        window.location.href= "header.php";
        alert("Header updated successfully")
        </script>';
        exit(0);
    }
    else{
        $_SESSION['message']="Something went wrong";
        header("Location:header.php");
        exit(0); 
    }
}



            // Logo settings




if(isset($_POST['logo'])){
    // Gmail logo
    $old_filename=$_POST['old_image'];
    $image=$_FILES['image']['name'];

    $update_filename="";
    if($image != NULL)  
        {
            //rename this image
            $image_extension= pathinfo($image,PATHINFO_EXTENSION);
            $filename=time().'.'.$image_extension;

            $update_filename=$filename;
        }
        else
        {
            $update_filename=$old_filename;
        }



        // code for inserting data
    $query="UPDATE header SET image='$update_filename' WHERE id='15'";
    $query_run =mysqli_query($con,$query);

    if($query_run){
       
        if($image != NULL){

            if(file_exists('../images/logo/header/'.$filename)){
                unlink("../images/logo/header/'.$filename");
            }
            move_uploaded_file($_FILES['image']['tmp_name'],'../images/logo/header/'.$update_filename);
        }
        echo '<script>
        window.location.href= "header.php";
        alert("Company logo updated successfully")
        </script>';
        exit(0);
    }
    else{
        $_SESSION['message']="Something went wrong";
        header("Location:header.php");
        exit(0); 
    }
}




// Admn LOGO

// if(isset($_POST['adminlogo'])){



//     $image=$_FILES['adminlogo']['name'];

//     //rename this image
//     $image_extension= pathinfo($image,PATHINFO_EXTENSION);
//     $filename=time().'.'.$image_extension;

    
//     $query="INSERT INTO header(adminlogo) VALUES('$filename')";
//     $query_run =mysqli_query($con,$query);

//     if($query_run){
//         move_uploaded_file($_FILES['adminlogo']['tmp_name'],'../images/adminlogo/'.$filename);
        
    
//         $pold_filename=$_POST['pold_image'];
//         $pimage=$_FILES['adminlogo']['name'];
    
//         $pupdate_filename="";
//         if($pimage != NULL)  
//             {
//                 //rename this pimage
//                 $pimage_extension= pathinfo($pimage,PATHINFO_EXTENSION);
//                 $pfilename=time().'.'.$pimage_extension;
    
//                 $pupdate_filename=$pfilename;
//             }
//             else
//             {
//                 $pupdate_filename=$pold_filename;
//             }
    
    
    
    
    
//             // code for inserting data
//         $query="UPDATE header SET adminlogo='$pupdate_filename' WHERE id='2'";
//         $query_run =mysqli_query($con,$query);
    
//         if($query_run){
//             if($image != NULL){
    
//                 if(file_exists('../images/adminlogo/'.$pfilename)){
//                     unlink("../images/adminlogo/'.$pfilename");
//                 }
//                 move_uploaded_file($_FILES['pimage']['tmp_name'],'../images/adminlogo/'.$pupdate_filename);
//             }

//             echo '<script>
//             window.location.href= "../images/adminlogo/adminlogo.php";
//             alert("Admin logo updated successfully")
//             </script>';
//             exit(0);
//         }
//         else{
//             $_SESSION['message']="Something went wrong";
//             header("Location:../images/adminlogo/adminlogo.php");
//             exit(0); 
//         }
//     }
    
    
    ?>