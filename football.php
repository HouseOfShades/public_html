<?php
session_start();
ob_start();
include $_SERVER['DOCUMENT_ROOT'].'/navbar.php';

echo dirname(__FILE__);
ob_end_flush();
?>

<html>
    <head>
        <style>

        </style>
        <meta charset="UTF-8">
        <title> Football </title>

    </head>
    
    <body style="background-color: white;">
    <nav class="navbar" style="background-color: white; color: black; width: 80%;  margin: auto;">
                            
    </nav>

              


    </body>



        
   
                
                <script>
                    $(".activ").removeClass("activ");
                    document.getElementById("sports").classList.add("activ");
                    </script>
    
</html>