<?php

$server = "localhost";
$username = "id20711704_root";
$password = "MMhLas8e2Tpt%B9U";
$database = "id20711704_malazihotel";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
// else{
//     echo "<script>alert('connection successfully.')</script>";
// }
?>