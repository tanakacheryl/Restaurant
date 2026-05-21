<?php
    include ('header.php');
    require_once 'functions.php';
 ?>

<body>
        <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="admin.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="logout.php?logout">Logout</a>
                    </li>


                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->




            <?php
                session_start();

                if(isset($_SESSION['user']))
                {
                    echo '';
                }
                else
                {
                    header("location:login.php");
                }

            ?>
            <div class="container">
            <div class="row">
            <?php get_admin_data();?>
            </div>
            </div>

<?php include ('footer.php');?>
