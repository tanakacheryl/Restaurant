<?php
include ('header.php');
require_once 'functions.php'
?>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar" style="background-color: #ADD8E6;">
        <div class="container-fluid">
            <div class="logo">
                <a href="#" title="Logo">
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
                        <a href="login.php">Admin Dashboard</a>
                    </li>

                </ul>
            </div>

            <!-- <div class="clearfix"></div> -->
        </div>
    </section>
        <div class="container">
            <h1 class="text-center">Tanya Hams Restaurant</h1>
            <hr>
            <br>
            <h2 class="text-center">Offer of the Day</h2>


            <?php daily_offer();?>

            <div class="clearfix"></div>
        </div>

<?php include ('footer.php') ?>