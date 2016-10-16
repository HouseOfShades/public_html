<?php
include 'scripts/stylesScriptsAdmin.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="dist/img/favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Dashboard</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

    </head>
    <body>  

        <div class="wrapper">
            <div class="sidebar" data-color="darkblue" data-image="dist/img/full-screen-image-3.jpg">

                <div class="logo">
                    <a href="writer.php" class="logo-text">
                        House Of Shades 
                    </a>
                </div>

                <div class="sidebar-wrapper">
                    <div class="user">
                        <div class="photo">
                            <img src="dist/img/default-avatar.png" />
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                                Martins Agbayekhai           
                                <b class="caret"></b><br>
                                <i>Writer</i>
                            </a>
                            <div class="collapse" id="collapseExample">
                                <ul class="nav">
                                    <li><a href="editProfile.php">My Profile</a></li>
                                    <!--<li><a href="#">Edit Profile</a></li>-->
                                    <li><a href="#">Settings</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <ul class="nav">
                        <li class="active">
                            <a href="writer.php">
                                <i class="pe-7s-graph"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li>
                            <a href="createPost.php">
                                <i class="pe-7s-pen"></i>
                                <p>Create New Post</p>
                            </a>
                        </li>

                        <li>
                            <a href="viewPosts.php">
                                <i class="pe-7s-display2"></i>
                                <p>View All Posts</p>
                            </a>
                        </li>
                        <!--                        <li>
                                                    <a href="#">
                                                        <i class="pe-7s-pen"></i>
                                                        <p>Edit Previous Post</p>
                                                    </a>
                                                </li>
                        
                                                <li>
                                                    <a href="calendar.html">
                                                        <i class="pe-7s-date"></i>
                                                        <p>Calendar</p>
                                                    </a>
                                                </li>-->

                        <!--                        <li>
                                                    <a data-toggle="collapse" href="#pagesExamples">
                                                        <i class="pe-7s-gift"></i>
                                                        <p>Pages
                                                            <b class="caret"></b>
                                                        </p>
                                                    </a>
                                                    <div class="collapse" id="pagesExamples">
                                                        <ul class="nav">
                                                            <li><a href="pages/login.html">Login Page</a></li>
                                                            <li><a href="pages/register.html">Register Page</a></li>
                                                            <li><a href="pages/lock.html">Lock Screen Page</a></li>
                                                            <li><a href="pages/user.html">User Page</a></li>
                                                            <li><a href="#">More coming soon...</a></li>
                                                        </ul>
                                                    </div>
                                                </li>-->
                    </ul>
                </div>
            </div>

            <div class="main-panel">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">    
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Writer Dashboard</a>
                        </div>
                        <div class="collapse navbar-collapse">       

                            <form class="navbar-form navbar-left navbar-search-form" role="search">                  
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                </div> 
                            </form>

                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="charts.html">
                                        <i class="fa fa-line-chart"></i>
                                        <p>Stats</p>
                                    </a>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-gavel"></i>
                                        <p class="hidden-md hidden-lg">
                                            Actions
                                            <b class="caret"></b>
                                        </p>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Create New Post</a></li>
                                        <li><a href="#">Edit Previous Post</a></li>
                                        <li><a href="#">View All Posts</a></li>
                                        <!--÷  <li><a href="#">Submit to live</a></li>-->
                                        <!--<li class="divider"></li>-->
                                        <!--÷   <li><a href="#">Another Action</a></li>-->
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-bell-o"></i>
                                        <span class="notification">5</span>
                                        <p class="hidden-md hidden-lg">
                                            Notifications
                                            <b class="caret"></b>
                                        </p>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Notification 1</a></li>
                                        <li><a href="#">Notification 2</a></li>
                                        <li><a href="#">Notification 3</a></li>
                                        <li><a href="#">Notification 4</a></li>
                                        <li><a href="#">Another notification</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown dropdown-with-icons">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-list"></i>
                                        <p class="hidden-md hidden-lg">
                                            More
                                            <b class="caret"></b>
                                        </p>
                                    </a>
                                    <ul class="dropdown-menu dropdown-with-icons">
                                        <li>
                                            <a href="#">
                                                <i class="pe-7s-mail"></i> Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="pe-7s-help1"></i> Help Center
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="pe-7s-tools"></i> Settings
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                          <a href="lockScreen.php">
                                                <i class="pe-7s-lock"></i> Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="scripts/logoutScript.php?logout" class="text-danger">
                                                <i class="pe-7s-close-circle"></i>
                                                Log out
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>





                <footer class="footer">
                    <div class="container-fluid">

                        <p class="copyright pull-right">
                            &copy; 2016 <a href="http://www.hofshades.com">House Of Shades</a>
                        </p>
                    </div>
                </footer>


            </div>   
        </div>





    </body>




    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-46172202-1', 'auto');
        ga('send', 'pageview');

    </script>

</html>