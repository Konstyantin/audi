<?php

/* @var $this yii\web\View */

?>

<!--Logo Company-->

<div class="audi_logo">
    <div>
        <img src="/img/audi_logo.png" alt="">
    </div>
</div>

<!--navigation-->

<nav class="navbar navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Inspection</a></li>
                        <li><a href="#">Corporate sales</a></li>
                        <li><a href="#">Insurance</a></li>
                        <li><a href="#">Test drive</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Technology<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Engine</a></li>
                        <li><a href="#">Transmission</a></li>
                        <li><a href="#">Quattro</a></li>
                        <li><a href="#">Lighting</a></li>
                        <li><a href="#">Assistent system</a></li>
                        <li><a href="#">Information system</a></li>
                    </ul>
                </li>
                <li><a href="">News</a></li>
                <li><a href="">Sport</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dillers<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Kiev</a></li>
                        <li><a href="#">Kharkiv</a></li>
                        <li><a href="#">Lviv</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">History</a></li>
                        <li><a href="#">Museum</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--Slide-->

<section class="slider">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="/img/slider/S8130037_medium.jpg"/>
                <p>The art of progress</p>
            </li>
            <li>
                <img src="/img/slider/RS7140005_medium.jpg"/>
                <p>Unforgettable performance</p>
            </li>
            <li>
                <img src="/img/slider/Q7150204_medium.jpg"/>
                <p>New begins where limitations end</p>
            </li>
            <li>
                <img src="/img/slider/A1610856_medium.jpg"/>
                <p>Concentrated power</p>
            </li>
        </ul>
    </div>
</section>

<!--Services-->

<section class="services">
    <div class="container">
        <h2 class="text-center">Audi Service</h2>
        <hr>
        <div class="col-md-3 col-sm-6">
            <img src="/img/service/insurance.jpg" alt="">
            <p class="text-center">Insurance</p>
        </div>
        <div class="col-md-3 col-sm-6">
            <img src="/img/service/test_drive.jpg" alt="">
            <p class="text-center">Test drive</p>
        </div>
        <div class="col-md-3 col-sm-6">
            <img src="/img/service/corporate_sales.jpg" alt="">
            <p class="text-center">Corporate sales</p>
        </div>
        <div class="col-md-3 col-sm-6">
            <img src="/img/service/inspection.jpg" alt="">
            <p class="text-center">Inspection</p>
        </div>
    </div>
</section>

<section class="news">
    <div class="container">
        <h2 class="text-center">Audi News</h2>
        <hr>
        <ul id="newsTab" class="nav nav-pills">
            <li class="active">
                <a href="#news" data-toggle="tab">News</a>
            </li>
            <li>
                <a href="#sport" data-toggle="tab">Sport</a>
            </li>
        </ul>
        <div id="newsContent" class="tab-content">
            <div class="tab-pane fade in active" id="news">
                <div class="container">
                    <div class="col-sm-3 col-xs-6">
                        <img src="/img/news/A164202_large.jpg" alt="">
                        <p class="news_title text-center">Audi Sport TT Cup, Hungaroring 2016</p>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <img src="/img/news/A164202_large.jpg" alt="">
                        <p class="news_title text-center">Audi Sport TT Cup, Hungaroring 2016</p>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <img src="/img/news/A164202_large.jpg" alt="">
                        <p class="news_title text-center">Audi Sport TT Cup, Hungaroring 2016</p>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <img src="/img/news/A164202_large.jpg" alt="">
                        <p class="news_title text-center">Audi Sport TT Cup, Hungaroring 2016</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="sport">
                <div class="container">
                    <div class="col-sm-3 col-xs-6">
                        <img src="/img/sport/A1610224_medium.jpg" alt="">
                        <p class="news_title text-center">Audi Sport TT Cup, Hungaroring 2016</p>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <img src="/img/sport/A1610287_medium.jpg" alt="">
                        <p class="news_title text-center">Audi Sport TT Cup, Hungaroring 2016</p>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <img src="/img/sport/A1610309_medium.jpg" alt="">
                        <p class="news_title text-center">Audi Sport TT Cup, Hungaroring 2016</p>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <img src="/img/sport/A1610394_medium.jpg" alt="">
                        <p class="news_title text-center">Audi Sport TT Cup, Hungaroring 2016</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="col-sm-3">
            <ul>
                <li>Inspection</li>
                <li>Corporate Sales</li>
                <li>Insurance</li>
                <li>Test drive</li>
            </ul>
        </div>
        <div class="col-sm-9">
            <h3>About Us</h3>
            <p>Audi is a German automobile manufacturer that designs, engineers, produces, markets and distributes 
                luxury vehicles. Audi oversees worldwide operations from its headquarters in Ingolstadt, Bavaria, 
                Germany. Audi-branded vehicles are produced in nine production facilities worldwide.</p>
        </div>
    </div>
</footer>