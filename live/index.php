<?php
session_start();

ob_start();
include 'scripts/stylesScriptsAdmin.php';
include 'scripts/loginScript.php';

ob_end_flush();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="dist/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Login</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

    </head>
    <body>
        <div class="wrapper wrapper-full-page">
            <div class="full-page login-page" data-color="darkblue" data-image="dist/img/test.jpg">

                <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " method="post">

                                    <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                                    <div class="card card-hidden">
                                        <div class="header text-center">Login</div>
                                        <div class="content">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" placeholder="Enter Username" name="uname" id="uname" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" placeholder="Password" name="password" id="password" class="form-control">
                                            </div>

                                        </div>
                                        <div class="footer text-center">
                                            <button type="submit" name="submit" id="submit" class="btn btn-fill btn-warning btn-wd">Login</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <footer class="footer footer-transparent">
                    <div class="container">

                        <p class="copyright pull-right">
                            &copy; 2016 <a href="http://www.hofshades.com">House Of Shades</a>
                        </p>
                    </div>
                </footer>

            </div>

        </div>




    </body>

    <script type="text/javascript">
        $().ready(function () {
            lbd.checkFullPageBackgroundImage();

            setTimeout(function () {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>

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
