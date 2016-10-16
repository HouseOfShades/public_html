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
                                <p> <?php echo $_SESSION['user'] ?>  <b class="caret">   </b>  
                                <b class="caret"></b><br>
                                <i>Writer</i>
                            </a>
                            <div class="collapse" id="collapseExample">
                                <ul class="nav">
                            <li><a href="editProfile.php">My Profile</a></li>
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
