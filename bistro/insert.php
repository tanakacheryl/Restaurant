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
                        <a href="logout.php">Logout</a>
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
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="brand" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" id="description" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label for="images">Images</label>
                        <input name="images" type="file" class="form-control" id="images" placeholder="Image" value="Upload">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
                <hr>
                <?php get_all_edit_data() ?>
        </div>
    </div>

</div>
<?php include ('footer.php'); ?>