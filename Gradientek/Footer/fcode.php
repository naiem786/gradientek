<?php
include('footer.php');
include("../connection.php");

    // Footer settings



if(isset($_POST['fcontent']))
{

    $title=$_POST['title'];
    $description=$_POST['description'];
   
   
    $query="UPDATE footerc SET title='$title', content='$description' WHERE id='1'";
    $query_run =mysqli_query($con,$query);


    if($query_run){
        echo '<script>
        window.location.href= "footer.php";
        alert("Post Updated suscessfully")
        </script>';
        exit(0);
    }
    else{
        header("Location:footer.php");
        exit(0); 
    }

}


if(isset($_POST['flinks'])){
    $instagram=$_POST['instagram'];
    $linkedin=$_POST['linkedin'];
    $facebook=$_POST['facebook'];
    $twitter=$_POST['twitter'];
    $phone1=$_POST['phone1'];
    $phone2=$_POST['phone2'];
    $phone3=$_POST['phone3'];
    

        // code for inserting data
    $query="UPDATE footerl SET instagram='$instagram',linkedin='$linkedin',facebook='$facebook',twitter='$twitter',phone1='$phone1',phone2='$phone2',phone3='$phone3'  WHERE id='1'";
    $query_run =mysqli_query($con,$query);

    if($query_run){
       
        echo '<script>
        window.location.href= "footer.php";
        alert("Header updated successfully")
        </script>';
        exit(0);
    }
    else{
        $_SESSION['message']="Something went wrong";
        header("Location:footer.php");
        exit(0); 
    }
}