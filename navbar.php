<?php
include $_SERVER['DOCUMENT_ROOT'] . '/lib/scripts/stylesScriptsHOS.php';
?>
<div class="container-fluid" >

    <nav class="navbar navbar-fixed-top main-nav" style="background-color:#00324d ; color: white; ">

        <div class="logo-image pull-left">
            <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/lib/img/HOS1.png">
        </div>

        <div class="navbar-header " >
            <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span  class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse collapse" id="navbar" >
            <ul class="nav navbar-nav">
                <li class="activ"  ><a   style="text-align: right; "href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/index.php"><i class="fa fa-home "></i>HOME   </a></li>

                <li class=" dropdown ">
                    <a style="text-align: right; "class="dropdown-toggle " data-toggle="dropdown" href="#">
                        <i class="fa fa-heartbeat"></i> LIFESTYLE </a>
                    <ul class="wideMenuItem dropdown-menu" style="background-color:#00324d; ">
                        <li ><a  style="text-align: left ;background-color: #00324d; color:white;font-size: 12px; "href="#"><i class="fa fa-heart"></i> FITNESS</a></li>
                        <li><a style="text-align: left; background-color: #00324d;color:white;font-size: 12px;"href="javascript:void(0)"><i class="fa fa-female"></i> FASHION</a></li>
                    </ul>
                </li>


                <li id="sports" class="dropdown">
                    <a style="text-align: right; "class="dropdown-toggle " data-toggle="dropdown" href="football.php">
                        <i class="fa fa-futbol-o "></i> SPORTS</a>
                    <ul class="nav dropdown-menu" style="background-color:#004E78; ">
                        <li ><a  style="text-align: right ;background-color: #004E78; color:white;font-size: 12px; "href="football.php"><i class="fa fa-futbol-o"></i> FOOTBALL</a></li>
                        <li><a style="text-align: right; background-color: #004E78;color:white;font-size: 12px;"href="#"><i class="fa fa-"></i> BASKETBALL</a></li>
                        <li><a style="text-align: right; background-color: #004E78;color:white;font-size: 12px;"href="#"><i class="fa fa-bicycle"></i> CYCLING </a></li>
                        <li><a style="text-align: right; background-color: #004E78;color:white;font-size: 12px;"href="#"><i class="fa fa-video-camera"></i> LIVE SPORTS </a></li>

                    </ul>
                </li>


                <li id="news" class="dropdown">
                    <a style="text-align: right; "class="dropdown-toggle " data-toggle="dropdown" href="#">
                        <i class="fa fa-newspaper-o"></i> NEWS</a>
                    <ul class="dropdown-menu" style="background-color:#004E78; ">
                        <li ><a  style="text-align: left ;background-color: #004E78; color:white;font-size: 12px; "href="#"><i class="pe pe-7s-gym"></i>BREAKING NEWS</a></li>
                        <li><a style="text-align: left; background-color: #004E78;color:white;font-size: 12px;"href="javascript:void(0)">POLITICS</a></li>
                    </ul>
                </li>

                <li id="trending" class="dropdown">
                    <a style="text-align: right; "class="dropdown-toggle disabled" data-toggle="dropdown" href="#">
                        <i class="fa fa-fire"></i> TRENDING </a>
                </li>

                <li id="entertainment" class="dropdown">
                    <a style="text-align: right; "class="dropdown-toggle " data-toggle="dropdown" href="#">
                        <i class="fa fa-music"></i> ENTERTAINMENT</a>
                    <ul class="dropdown-menu" style="background-color:#004E78; ">
                        <li ><a  style="text-align: left ;background-color: #004E78; color:white;font-size: 12px; "href="#"><i class="fa fa-running"></i>LATEST MUSIC</a></li>
                        <li><a style="text-align: left; background-color: #004E78;color:white;font-size: 12px;"href="javascript:void(0)">VIDEOS</a></li>
                    </ul>
                </li>

                   <li id="columns" >
                    <a style="text-align: right; "class="dropdown-toggle disabled" data-toggle="dropdown" href="#">
                        <i class="fa fa-list"></i> COLUMNS </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
