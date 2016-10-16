<?php include 'scripts/stylesScriptsHOS.php'; ?>

<html>
    <head>

        <!--#500f06-->
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#090234 ; color: white; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
        <div class="container-fluid" >

            <div class="navbar-header" >
                <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span  class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse collapse" id="navbar" >

                <ul class="nav navbar-nav navbar-left ">
                    <li class="activ"><a style="text-align: right; "href="writer.php"><i class="fa fa-home"></i>HOME   </a></li>
                    <li class="divider"></li>

                    <li><a style="text-align: right; " href="javascript:void(0)"><i class="fa fa-clock-o"></i> SAVED POSTS</a></li>
                    <li><a style="text-align: right; " href="createPost.php"><i class="fa fa-pencil "></i> CREATE POST</a></li>
<!--                    <li><a style="text-align: right; " href="javascript:void(0)"><i class="fa fa-users"></i> WRITERS</a></li>-->
                    <!--                    
                                        <li><a style="text-align: right; " href="javascript:void(0)"><i class="fa fa-fire"></i> TRENDING </a></li>
                                        <li><a style="text-align: right; " href="javascript:void(0)"><i class="fa fa-music"></i> ENTERTAINMENT</a></li>
                                        <li><a style="text-align: right; " href="javascript:void(0)"><i class="fa fa-desktop"></i> TECHNOLOGY </a></li>-->

                </ul>


                <ul class="nav navbar-nav navbar-center ">
                    <li class="dropdown">
                        <a style="text-align: right; "class="dropdown-toggle" data-toggle="dropdown" href="">
                            CATEGORIES <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" style="background-color:#090234; ">
                            <li><a style="text-align: right;color:white; "href="javascript:void(0)"> <i class="fa fa-futbol-o "></i> SPORTS</a></li>
                            <li><a style="text-align: right; color:white;"href="javascript:void(0)"><i class="fa fa-heartbeat"></i>LIFESTYLE</a></li>
                            <li><a style="text-align: right; color:white;"href="javascript:void(0)"><i class="fa fa-newspaper-o"></i> NEWS </a></li>
                            <li><a style="text-align: right; color:white;"href="javascript:void(0)"><i class="fa fa-fire"></i> TRENDING </a></li>
                            <li><a style="text-align: right; color:white;"href="javascript:void(0)"><i class="fa fa-music"></i> ENTERTAINMENT</a></li>
                            <li><a style="text-align: right; color:white;"href="javascript:void(0)"><i class="fa fa-desktop"></i> TECHNOLOGY </a></li>
                        </ul>
                    </li>

                                    </ul>
                                    <ul class="nav navbar-nav navbar-right ">
     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
          <ul class="dropdown-menu" style="padding:12px;">
            <form class="form-inline">
            	<div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
            	</div>
            </form>
          </ul>
        </li>
        <li class="dropdown">
                        <a style="text-align: right; "class="dropdown-toggle" data-toggle="dropdown" href="">
                            ABOUT US <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" style="background-color:#090234; ">
                            <li><a style="text-align: right;color:white; "href="javascript:void(0)">Our Story</a></li>
                            <li><a style="text-align: right; color:white;"href="javascript:void(0)">The Team</a></li>
                            <li class="divider"></li>
                            <li><a style="text-align: right; color:white;" href="javascript:void(0)">Careers</a></li>
                        </ul>
                    </li>

                </ul>

<!--                <ul class="nav navbar-nav navbar-right ">
                    <li> Hello Admin </li>

                </ul>-->


            </div>
        </div>


    </nav>

</head>
<body >

    <br><br>
    <br>
</body>
<script>
//           $(document).ready(function () {
//        $('ul.nav > li').click(function (e) {
//            e.preventDefault();
//            $('ul.nav > li').removeClass('active');
//            $(this).addClass('active');                
//        });            
//    });

$("div.collapse li").on("click", function(){
   $("div.collapse li").find(".activ").removeClass("activ");
   $(this).parent().addClass("activ");
});
          
          </script>

</html>


