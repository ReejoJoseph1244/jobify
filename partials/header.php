<header class="main-header front-header" style="background-color:#f39766;">

<div class="container-fluid" style="background-color:#f39766;" >
    <div class="row" style="background-color:#f39766;">
        <div class="col-md-3">
            <!-- Logo -->
            <a href="index.php" class="site_logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <img src="img/logo5.jpeg" alt="Jobify">
            </a>
        </div>

        <div class="col-md-9" style="background-color:#f39766;">
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top "style="background-color:#f39766;">
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu" style="background-color:#f39766;">
                    <ul class="nav navbar-nav" style="background-color:#f39766;">
                        <li>
                            <a href="jobs.php">Jobs</a>
                        </li>
                        <li>
                            <a href="#candidates">Candidates</a>
                        </li>
                        <li>
                            <a href="#company">Company</a>
                        </li>
                        <li>
                            <a href="#about">About Us</a>
                        </li>
                        <?php if(empty($_SESSION['id_user']) && empty($_SESSION['id_company'])) { ?>
                            <li>
                                <a href="login.php">Login</a>
                            </li>
                            <li>
                                <a href="sign-up.php">Sign Up</a>
                            </li>
                        <?php } else {

                            if(isset($_SESSION['id_user'])) {
                                ?>
                                <li>
                                    <a href="user/index.php">Dashboard</a>
                                </li>
                                <?php
                            } else if(isset($_SESSION['id_company'])) {
                                ?>
                                <li>
                                    <a href="company/index.php">Dashboard</a>
                                </li>
                            <?php } ?>
                            <li>
                                <a href="logout.php">Logout</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
</header>