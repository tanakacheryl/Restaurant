<?php
    include ('header.php');
?>

    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container-fluid">

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="foods.php">Menu</a>
                    </li>
                    <li>
                        <a href="admin.php">Admin Dashboard</a>
                    </li>

                </ul>
            </div>

            <!-- <div class="clearfix"></div> -->
        </div>
    </section>
    <!-- Navbar Section Ends Here -->



<section class="vh-100" style="background-color: rgb(238, 238, 238);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-3 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <h3 class="mb-5">Log in</h3>
                <?php
                if(@$_GET['empty']==true)
                {
                ?>
                <div class="alert-light text-danger my-3"><?php echo $_GET['empty'] ?></div>
                <?php
                }
                ?>
                <?php
                if(@$_GET['invalid']==true)
                {
                ?>
                <div class="alert-light text-danger my-3"><?php echo $_GET['invalid'] ?></div>
                <?php
                }
                ?>

                


            <form action="process.php" method="post">
            <div class="form-outline mb-4">
              <input type="text" id="username" class="form-control form-control-lg" name="username" placeholder="Username" />
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="password" class="form-control form-control-lg" name="password" placeholder="Password" />
            </div>


            <button class="btn btn-primary btn-lg btn-block" type="login" name="login"><i class="bi bi-box-arrow-right"></i> Login</button>
            </form>
            <hr class="my-4">


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
               
<?php
    include ('footer.php');
?>
