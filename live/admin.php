<?php
session_start();
include 'scripts/connect_to_mysql.php';

ob_start();
include_once'scripts/stylesScriptsAdmin.php';

if (!isset($_SESSION['user'])) {
    header("Location:login.php");
}

if (!isset($_SESSION['email'])) {
    if ($_SESSION['isAdmin']) {
        header('Location:admin.php');
    } else {
        header('Location:writer.php');
    }
}


ob_end_flush();
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="dist/img/HOS2.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Dashboard</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

    </head>
    <body>  

        <div class="wrapper">


            <?php
            include 'adminNav.php';
            ?>


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
                            <a class="navbar-brand" href="#">Admin Dashboard</a>
                        </div>
                        <div class="collapse navbar-collapse">       

                            <form class="navbar-form navbar-left navbar-search-form" role="search">                  
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="pe-7s-search"></i></span>
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                </div> 
                            </form>

                            <?php
                include 'adminNavbarRight.php';
                            ?>
                            

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