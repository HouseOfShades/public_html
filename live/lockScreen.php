<?php
session_start();
ob_start();
include 'scripts/stylesScriptsAdmin.php';
include 'scripts/lockScreenScript.php';


    if ($_SESSION['isAdmin'] == 1) {
               $color = "black";
     //   header('Location:admin.php');
    } else {
        $color = "darkblue";
      //  header('Location:writer.php');
    }
    ob_end_flush();
    // echo $color ;
?>
<!doctype html>
<html lang="en">    
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="dist/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Lock Screen</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

    </head>

    <body> 

        <div class="wrapper wrapper-full-page">

            <div class="full-page lock-page" data-color="<?php echo "$color" ?>" data-image="dist/img/test.jpg">   

                <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
                <div class="content">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
                        <div class="user-profile">        
                            <div class="author">
                                <img class="avatar" disabled src="dist/img/avatar1.jpg" alt="...">
                            </div> 
                            <h4><?php echo $_SESSION["name"] ?> </h4> 
                            <div class="form-group">
                                <input name="password" id="password" type="password" placeholder="Enter Password" class="form-control">
                            </div>
                            <button name="submit" type="submit" class="btn btn-neutral btn-round btn-fil btn-wd">Unlock</button>                                 
                        </div>
                    </form>
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
        $(document).ready(function () {

            lbd.checkFullPageBackgroundImage();

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