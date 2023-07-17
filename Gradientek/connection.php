<?php
// $servername = "localhost";
// $username = "root";
// $password = " ";
// $db_name = "gradientek";
$con = new mysqli('localhost','root','','gradientek');
if($con->connect_error){
    die("Connection failed".$con->connect_error);
}
echo "";
?>