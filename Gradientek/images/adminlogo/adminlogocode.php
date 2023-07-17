<?php
include('adminlogo.php');
include("../../connection.php");


if(isset($_POST['adminlogo'])){
    $pold_filename=$_POST['old_image'];
    $pimage=$_FILES['adminlogo']['name'];

    $pupdate_filename="";
    if($pimage != NULL)  
        {
            //rename this pimage
            $pimage_extension= pathinfo($pimage,PATHINFO_EXTENSION);
            $pfilename=time().'.'.$pimage_extension;

            $pupdate_filename=$pfilename;
        }
        else
        {
            $pupdate_filename=$pold_filename;
        }
        $query="UPDATE header SET adminlogo='$pupdate_filename' WHERE id='15'";
        $query_run =mysqli_query($con,$query);
    
        if($query_run){
            if($pimage != NULL){
    
                if(file_exists('../adminlogo/'.$pfilename)){
                    unlink("../adminlogo/'.$pfilename");
                }
                move_uploaded_file($_FILES['adminlogo']['tmp_name'],'../adminlogo/'.$pupdate_filename);
            }

            echo '<script>
            window.location.href= "adminlogo.php";
            alert("Admin logo updated successfully")
            </script>';
            exit(0);
    }
    else{
        $_SESSION['message']="Something went wrong";
        header("Location:adminlogo.php");
        exit(0); 
    }
}
?>