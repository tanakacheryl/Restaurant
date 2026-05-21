<?php
include ('header.php');
require_once 'functions.php'
?>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container-fluid">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="foods.php">Menu</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="login.php">Admin Dashboard</a>
                    </li>

                </ul>
            </div>

            <!-- <div class="clearfix"></div> -->
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Offer of the Day</h2>


            <?php daily_offer();?>

            <div class="clearfix"></div>
        </div>

<?php include ('footer.php') ?>