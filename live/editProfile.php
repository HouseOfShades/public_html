<?php
session_start();
include 'scripts/stylesScriptsAdmin.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="dist/img/favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Profile</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

    </head>

    <!doctype html>
    <html lang="en">

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
                                <!--<a class="navbar-brand" href="#">Edit Profile</a>-->
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
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="header">
                                            <h4 class="title">Edit Profile</h4>
                                        </div>
                                        <div class="content">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label>Company </label>
                                                            <input type="text" class="form-control" disabled placeholder="Company" value="House Of Shades">
                                                        </div>        
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Username</label>
                                                            <input type="text" class="form-control"  value="<?php echo $_SESSION['uname'] ?> ">
                                                        </div>        
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input type="email" class="form-control"  value="<?php echo $_SESSION['email'] ?> ">
                                                        </div>        
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Category </label>
                                                            <input type="text" class="form-control" disabled placeholder="" value="Administrator">
                                                        </div>      
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Screen Name</label>
                                                            <input type="text" class="form-control" placeholder="Company" value="<?php echo $_SESSION['screenName'] ?> ">
                                                        </div>         
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Date Joined</label>
                                                            <input type="email" class="form-control" disabled placeholder="Date">
                                                        </div>        
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input type="text" class="form-control" disabled placeholder="Company" value="<?php echo $_SESSION['fname'] ?> ">
                                                        </div>        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input type="text" class="form-control" disabled placeholder="Last Name" value="<?php echo $_SESSION['lname'] ?> ">
                                                        </div>        
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input type="text" class="form-control" placeholder="Home Address" value="???">
                                                        </div>        
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>City</label>
                                                            <input type="text" class="form-control" placeholder="City" value="???">
                                                        </div>        
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            <input type="text" class="form-control" placeholder="Country" value="???">
                                                        </div>        
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Postal Code</label>
                                                            <input type="number" class="form-control" placeholder="ZIP Code">
                                                        </div>        
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>About Me</label>
                                                            <textarea rows="5" class="form-control" placeholder="Here can be your description" value=""></textarea>
                                                        </div>        
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-info btn-fill pull-right" style="background-color: #090234">Update Profile</button>
                                                <div class="clearfix"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-user">
                                        <div class="image">
                                            <img src="dist/img/test.jpg" alt="..."/>   
                                        </div>
                                        <div class="content">
                                            <div class="author">
                                                <a href="#">
                                                    <img class="avatar border-gray" src="dist/img/avatar1.jpg" alt="..."/>

                                                    <h4 class="title" ><?php echo $_SESSION['name'] ?><br />
                                                        <small>Administrator</small>
                                                    </h4> 
                                                </a>
                                            </div>  
                                            <p class="description text-center"> "Here can be your description"
                                            </p>
                                        </div>
                                        <hr>
                                        <div class="text-center">
                                            <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                            <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                            <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                                        </div>
                                    </div>
                                </div>

                            </div>                    
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

    </html>