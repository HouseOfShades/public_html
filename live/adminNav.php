<div class="sidebar" data-color="black" data-image="dist/img/full-screen-image-3.jpg">

    <div class="logo">
        <a href="admin.php" class="logo-text">
            House Of Shades 
        </a>
    </div>

    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="dist/img/avatar1.jpg" />
            </div>
            <div class="info" >
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <p> <?php echo $_SESSION['user'] ?>  <b class="caret">   </b>   
                        <!--<p> <?php echo $_SESSION[''] ?>  <b class="caret">   </b>-->   
                    </p> 
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
                <a href="admin.php">
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
            <li>
                <a href="newWriter.php">
                    <i class="pe-7s-tools"></i>
                    <p>Add New Writer</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="pe-7s-pen"></i>
                    <p>View Writers</p>
                </a>
            </li>

            <li>
                <a href="calendar.html">
                    <i class="pe-7s-date"></i>
                    <p>Calendar</p>
                </a>
            </li>

            <li>
                <a data-toggle="collapse" href="#pagesExamples">
                    <i class="pe-7s-gift"></i>
                    <p>Categories
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
            </li>

            <li>
                <a data-toggle="collapse" href="#pagesExamples">
                    <i class="pe-7s-gift"></i>
                    <p>Categories
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
            </li>

            <li>
                <a data-toggle="collapse" href="#pagesExamples">
                    <i class="pe-7s-gift"></i>
                    <p>Categories
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
            </li>
        </ul>
    </div>
</div>

