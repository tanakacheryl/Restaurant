<?php
include ('header.php');
require_once 'functions.php'
?>


<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container-fluid">
            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <!-- <li>
                        <a href="categories.php">Categories</a>
                    </li> -->
                    <li>
                        <a href="foods.php">Menu</a>
                    </li>
                    <li>
                        <a href="login.php">Admin Dashboard</a>
                    </li>

                </ul>
            </div>

            <!-- <div class="clearfix"></div> -->
        </div>
    </section>
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>


        <?php get_all_data(); ?>

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Vijay Thapa</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

    <?php include ('footer.php') ?>