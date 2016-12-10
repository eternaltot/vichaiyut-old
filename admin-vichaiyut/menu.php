<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Vichaiyut</a>
            </div>
            <div class="header-right">

                <a href="process/logoutprocess.php" class="btn btn-danger" title="Logout"><i class="fa fa-sign-out  fa-1x">Log out</i></a>
                <a href="edit-user-management.php" class="btn btn-info" title="Logout"><i class="fa fa-sign-out  fa-1x">Change Password</i></a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <!-- <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>UI Elements <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="panel-tabs.html"><i class="fa fa-toggle-on"></i>Tabs & Panels</a>
                            </li>
                            <li>
                                <a href="notification.html"><i class="fa fa-bell "></i>Notifications</a>
                            </li>
                             <li>
                                <a href="progress.html"><i class="fa fa-circle-o "></i>Progressbars</a>
                            </li>
                             <li>
                                <a href="buttons.html"><i class="fa fa-code "></i>Buttons</a>
                            </li>
                             <li>
                                <a href="icons.html"><i class="fa fa-bug "></i>Icons</a>
                            </li>
                             <li>
                                <a href="wizard.html"><i class="fa fa-bug "></i>Wizard</a>
                            </li>
                             <li>
                                <a href="typography.html"><i class="fa fa-edit "></i>Typography</a>
                            </li>
                             <li>
                                <a href="grid.html"><i class="fa fa-eyedropper "></i>Grid</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Extra Pages <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="invoice.html"><i class="fa fa-coffee"></i>Invoice</a>
                            </li>
                            <li>
                                <a href="pricing.html"><i class="fa fa-flash "></i>Pricing</a>
                            </li>
                             <li>
                                <a href="component.html"><i class="fa fa-key "></i>Components</a>
                            </li>
                             <li>
                                <a href="social.html"><i class="fa fa-send "></i>Social</a>
                            </li>
                            
                             <li>
                                <a href="message-task.html"><i class="fa fa-recycle "></i>Messages & Tasks</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                    <li>
                        <a href="table.html"><i class="fa fa-flash "></i>Data Tables </a>
                        
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Forms <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="form.html"><i class="fa fa-desktop "></i>Basic </a>
                            </li>
                             <li>
                                <a href="form-advance.html"><i class="fa fa-code "></i>Advance</a>
                            </li>
                             
                           
                        </ul>
                    </li>
                      <li>
                        <a href="gallery.html"><i class="fa fa-anchor "></i>Gallery</a>
                    </li>
                     <li>
                        <a href="error.html"><i class="fa fa-bug "></i>Error Page</a>
                    </li>
                    <li>
                        <a href="login.html"><i class="fa fa-sign-in "></i>Login Page</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Multilevel Link <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-bicycle "></i>Second Level Link</a>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-flask "></i>Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#"><i class="fa fa-plus "></i>Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments-o "></i>Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="blank.html"><i class="fa fa-square-o "></i>Blank Page</a>
                    </li> -->
                    <?php 
                        $path = $_SERVER["REQUEST_URI"];
                    ?>
                    <li>
                        <a class="<?= strpos($path,"setup-homepage") == true ? "active-menu" : "" ?>" href="setup-homepage.php"><i class="fa fa-square-o "></i>Setup Homepage</a>
                    </li>
                    <li>
                        <a  href="#"><i class="fa fa-sitemap "></i>About <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level <?= strpos($path,"about") == true || strpos($path,"vision") == true ? "collapse in" : "" ?>">
                            <li>
                                <a class="<?= strpos($path,"about") == true ? "active-menu" : "" ?>" href="about.php"><i class="fa "></i>About Vichaiyut Hospital</a>
                            </li>
                             <li>
                                <a class="<?= strpos($path,"vision") == true ? "active-menu" : "" ?>" href="vision.php"><i class="fa "></i>Hospital Vision and Mission</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="<?= strpos($path,"managementteam") == true ? "active-menu" : "" ?>" href="managementteam.php"><i class="fa fa-square-o "></i>Management Team</a>
                    </li>
                    <li>
                        <a class="<?= strpos($path,"hilight") == true ? "active-menu" : "" ?>" href="hilight.php"><i class="fa fa-square-o "></i>Hilight</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Clinic <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level <?= strpos($path,"clinic") == true ? "collapse in" : "" ?>">
                            <li>
                                <a class="<?= strpos($path,"clinic-profile") == true ? "active-menu" : "" ?>" href="clinic-profile.php"><i class="fa "></i>Profile</a>
                            </li>
                             <li>
                                <a class="<?= strpos($path,"clinic-category") == true ? "active-menu" : "" ?>" href="clinic-category.php"><i class="fa "></i>Clinic Category</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="<?= strpos($path,"packageandpromotion") == true ? "active-menu" : "" ?>" href="packageandpromotion.php"><i class="fa fa-square-o "></i>Package & Promotion</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Patient Services <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level <?= strpos($path,"patient") == true || strpos($path,"home-care") || strpos($path,"restaurant") ? "collapse in" : "" ?>">
                            <li>
                                <a class="<?= strpos($path,"patient") == true ? "active-menu" : "" ?>" href="patient-room.php"><i class="fa "></i>Patient Rooms</a>
                            </li>
                             <li>
                                <a class="<?= strpos($path,"home-care") == true ? "active-menu" : "" ?>" href="vichaiyut-home-care.php"><i class="fa "></i>Vichaiyut Home Care</a>
                            </li>
                            <li>
                                <a class="<?= strpos($path,"restaurant") == true ? "active-menu" : "" ?>" href="restaurant-and-shop.php"><i class="fa "></i>Restaurants and Shops</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="<?= strpos($path,"contact") == true ? "active-menu" : "" ?>" href="contact-information.php"><i class="fa fa-square-o "></i>Contact Information</a>
                    </li>
                    <?php
                        if($_SESSION['user_session'] == 1){
                    ?>
                    <li>
                        <a class="<?= strpos($path,"user-management") == true ? "active-menu" : "" ?>" href="user-management.php"><i class="fa fa-square-o "></i>User Management</a>
                    </li>
                    <?php
                        }
                    ?>
                </ul>

            </div>

        </nav>