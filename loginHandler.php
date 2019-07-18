<?php
include 'config.php';

$check="SELECT  `email`, `password` FROM `viatu`";
 if(mysqli_query($conn,$check)){
     header('location:index.php');
 }else{
     header('location:signup.php');
 }