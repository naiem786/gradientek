<?php
include('bgColor.php');
include("../connection.php");
if(isset($_POST['add_bg'])){
    $homepagecolor=$_POST['homepagecolor'];
    $postcolor=$_POST['postcolor'];
    $aboutuscolor=$_POST['aboutuscolor'];
    $textcolor=$_POST['textcolor'];
    $inquirecolor=$_POST['inquirecolor'];

    $query="UPDATE bgcolor SET homepagecolor='$homepagecolor', postcolor='$postcolor', aboutuscolor='$aboutuscolor',textcolor='$textcolor',inquirecolor='$inquirecolor' WHERE id='1'";
    $query_run =mysqli_query($con,$query);



    if($query_run){
        echo '<script>
        window.location.href= "bgColor.php";
        alert("Color edited suscessfully")
        </script>';
        exit(0);
    }
    else{
        $_SESSION['message']="Something went wrong";
        header("Location:bgColor.php");
        exit(0); 
    }
}
?>