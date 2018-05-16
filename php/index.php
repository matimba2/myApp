<?php
include_once ("conn.php");

if(isset($_POST['startbtn'])){
    header('location:../start.php');
}
if(isset($_POST['index'])){
    header('location:../index.html');
}   
    
?>