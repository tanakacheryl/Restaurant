<?php
require_once ('functions.php');
include ('header.php');
$row = update_get_offer();
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


<div class="container">
<div class="col pt-5">

    <h2>Update Data</h2>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $row['id'];?> " method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="update_offer_name">Name</label>
                        <input type="text" name="update_offer_name" class="form-control" id="name"  value="<?php echo $row['name']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="update_offer_name">Price</label>
                        <input type="text" name="update_offer_price" class="form-control" id="price"  value="<?php echo $row['price']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="update_offer_description">Description</label>
                        <input type="text" name="update_offer_description" class="form-control" id="description"  value="<?php echo $row['description']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="update_offer_images">Images</label>
                        <input name="update_offer_images" type="file" class="form-control" id="update_images" placeholder="Image" value="<?php echo $row['images']?>" required>
                    </div>

                    <button type="submit" name="edit_offer_submit" class="btn btn-primary">Update</button>
                </form>



</div>

</div>


<?php include ('footer.php');?>
