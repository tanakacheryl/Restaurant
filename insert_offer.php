<?php
    include('header.php');
    require_once ('functions.php');
    //require_once ('upload.php');

?>
                
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


<div class="container">
    <div class="row">
        <div class="col pt-5">
            <h2>Enter Item Details</h2>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name_offer">Name</label>
                        <input type="text" name="name_offer" class="form-control" id="brand" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="price_offer">Price</label>
                        <input type="text" name="price_offer" class="form-control" id="price" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label for="description_offer">Description</label>
                        <input type="text" name="description_offer" class="form-control" id="description" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label for="images_offer">Images</label>
                        <input name="images_offer" type="file" class="form-control" id="images" placeholder="Image" value="Upload">
                    </div>

                    <button type="submit" name="submit_offer" class="btn btn-primary">Submit</button>
                </form>
                <hr>
                <?php gadoft(); ?>
        </div>
    </div>

</div>
<?php include ('footer.php'); ?>