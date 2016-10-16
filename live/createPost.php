<?php
session_start();
ob_start();
include 'scripts/stylesScriptsAdmin.php';
ob_end_flush();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="dist/img/favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Create New Post</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

    </head>
    <body> 

        <div class="wrapper">
            <?php
            if ($_SESSION['isAdmin'] == 1) {
                include 'adminNav.php';
            } else {
                include 'writerNav.php';
            }
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
                            <a class="navbar-brand" href="#">Create New Post</a>
                        </div>
                        <div class="collapse navbar-collapse">       

                            <form class="navbar-form navbar-left navbar-search-form" role="search">                  
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                </div> 
                            </form>

                                 <?php
            if ($_SESSION['isAdmin'] == 1) {
                include 'adminNavbarRight.php';
            } else {
                include 'writerNavbarRight.php';
            }
            ?>
                        </div>
                    </div>


                </nav>
                <div class="content">
                    <div class="container-fluid">

                        <form class="form-horizontal">

                            <div class="form-group">
                                <div class="col-md-9" >
                                    <input type="text" placeholder="Title" class="form-control">
                                </div>
                                <button name="save" type="submit"  type="button" class="btn btn-primary"> Save </button>
                                <button name="submit" type="submit"  type="button" class="btn btn-success"> Publish </button> 
                                <button name="save" type="submit"  type="button" class="btn btn-danger"> Cancel </button>

                                <br>
                                <br>                        

                                <textarea id="edit" name="content"></textarea>



                            </div>
                        </form>
                    </div>    
                </div>


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
    <script>
//        $(function () {
//            $('#edit').froalaEditor({
//                height: 300,
//                width: 1000
//            })
//        });
    </script>

</html>