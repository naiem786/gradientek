<?php
include('AboutUsSettings.php');
include("../connection.php");

if(isset($_POST['edit'])){
    $heading1=$_POST['heading1'];
    $text1=$_POST['text1'];
    $text2=$_POST['text2'];
    $heading2=$_POST['heading2'];
    $text01=$_POST['text01'];
    $text02=$_POST['text02'];

    $query="UPDATE aboutus SET heading1='$heading1', text1='$text1', text2='$text2',heading2='$heading2', text01='$text01', text02='$text02' WHERE id='1'";
    $query_run =mysqli_query($con,$query);

    if($query_run){
        echo '<script>
        window.location.href= "AboutUsSettings.php";
        alert("Page Edited suscessfully")
        </script>';
        exit(0);
    }
    else{
        $_SESSION['message']="Something went wrong";
        header("Location:AboutUsSettings.php");
        exit(0); 
    }
}
?>