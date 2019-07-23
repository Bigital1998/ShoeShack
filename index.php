<?php
include 'header.php';
include "config.php";
session_start();

if(!isset($_SESSION['email'])){
    header('location:signup.php');
}
?>

<div class="container-fluid">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
           <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
            <li data-target="#myCarousel" data-slide-to="8"></li>
            <li data-target="#myCarousel" data-slide-to="9"></li>

        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="./shoes/kiatu3.jpg" alt="cool" style="width:100%;height: initial;">
            </div>
            <div class="item">
                <img src="./shoes/kiatu4.jpg" alt="cool" style="width:100%;height: initial;">
            </div>


            <div class="item">
                <img src="./shoes/airjordan.jpg" alt="cool shoe" style="...">
            </div>



            <div class="item">
                <img src="./shoes/kiatu7.jpg" alt="cool shoe" style="...">
            </div>

            <div class="item">
                <img src="./shoes/kiatu8.jpg" alt="cool shoe" style="...">
            </div>

            <div class="item">
                <img src="./shoes/kiatu9.jpg" alt="cool shoe" style="...">
            </div>

            <div class="item">
                <img src="./shoes/kiatuone.jpeg.jpg" alt="cool shoe" style="...">
            </div>

            <div class="item">
                <img src="./shoes/kiatutwo.jpeg.jpg" alt="cool shoe" style="...">
            </div>

        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
