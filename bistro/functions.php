<?php
require_once 'connection.php';

if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['description'])){

  // check title and content empty or not
  if(!empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['description'])){

      // Escape special characters.
      $name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['name']));
      $price = mysqli_real_escape_string($conn, htmlspecialchars($_POST['price']));  
      $description = mysqli_real_escape_string($conn, htmlspecialchars($_POST['description'])); 
      $image = $_FILES['images'];

      print_r ($image);
      echo "<br>";
      $image_file_name = $image['name'];
      print_r($image_file_name);
      echo "<br>";
  
      $image_error = $image['error'];
      print_r($image_error);
      echo "<br>";
  
      $image_tmp = $image['tmp_name'];
      print_r ($image_tmp);
      echo "<br>";
  
      $filename_seperate = explode('.',$image_file_name);
      print_r($filename_seperate);
      echo "<br>";
  
      $file_extension = strtolower($filename_seperate[1]);
      print_r($file_extension);
  
      $extension = array('jpeg','jpg','png');
      if(in_array($file_extension, $extension)){
          $upload_image = 'assets/images/'.$image_file_name;
          move_uploaded_file($image_tmp, $upload_image);

        //    Insert data into database
      $insert_query = mysqli_query($conn,"INSERT INTO menu(name,price,description,images) VALUES('$name','$price','$description','$upload_image')");

          //Now check if data has been inserted
          if($insert_query){
              echo "<script>alert('Data inserted');window.location.href = 'insert.php';</script>";
              exit(0);
          }else{
              echo "<h3>Data was not inserted!</h3>";
          }
      
  }
  }else{
      echo "<h4>Please fill all fields</h4>";
  }

}  


if(isset($_POST['name_offer']) && isset($_POST['price_offer']) && isset($_POST['description_offer'])){

    // check title and content empty or not
    if(!empty($_POST['name_offer']) && !empty($_POST['price_offer']) && !empty($_POST['description_offer'])){
  
        // Escape special characters.
        $name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['name_offer']));
        $price = mysqli_real_escape_string($conn, htmlspecialchars($_POST['price_offer']));  
        $description = mysqli_real_escape_string($conn, htmlspecialchars($_POST['description_offer'])); 
        $image = $_FILES['images_offer'];
  
        print_r ($image);
        echo "<br>";
        $image_file_name = $image['name'];
        print_r($image_file_name);
        echo "<br>";
    
        $image_error = $image['error'];
        print_r($image_error);
        echo "<br>";
    
        $image_tmp = $image['tmp_name'];
        print_r ($image_tmp);
        echo "<br>";
    
        $filename_seperate = explode('.',$image_file_name);
        print_r($filename_seperate);
        echo "<br>";
    
        $file_extension = strtolower($filename_seperate[1]);
        print_r($file_extension);
    
        $extension = array('jpeg','jpg','png');
        if(in_array($file_extension, $extension)){
            $upload_image = 'assets/images/'.$image_file_name;
            move_uploaded_file($image_tmp, $upload_image);
  
          //    Insert data into database
        $insert_query = mysqli_query($conn,"INSERT INTO daily_offer(name,price,description,images) VALUES('$name','$price','$description','$upload_image')");
  
            //Now check if data has been inserted
            if($insert_query){
                echo "<script>alert('Data inserted');window.location.href = 'insert_offer.php';</script>";
                exit(0);
            }else{
                echo "<h3>Data was not inserted!</h3>";
            }
        
    }
    }else{
        echo "<h4>Please fill all fields</h4>";
    }
  
  }  
  




if(isset($_POST['update_name']) && isset($_POST['update_price']) && isset($_POST['update_description'])){

    if(!empty($_POST['update_name']) && !empty($_POST['update_price']) && !empty($_POST['update_description'])){

      $name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['update_name']));
      $price = mysqli_real_escape_string($conn, htmlspecialchars($_POST['update_price']));  
      $description = mysqli_real_escape_string($conn, htmlspecialchars($_POST['update_description'])); 
      $id = $_GET['id'];

      $image = $_FILES['update_images'];

      print_r ($image);
      echo "<br>";
      $image_file_name = $image['name'];
      print_r($image_file_name);
      echo "<br>";
  
      $image_error = $image['error'];
      print_r($image_error);
      echo "<br>";
  
      $image_tmp = $image['tmp_name'];
      print_r ($image_tmp);
      echo "<br>";
  
      $filename_seperate = explode('.',$image_file_name);
      print_r($filename_seperate);
      echo "<br>";
  
      $file_extension = strtolower($filename_seperate[1]);
      print_r($file_extension);
  
      $extension = array('jpeg','jpg','png');
      if(in_array($file_extension, $extension)){
          $upload_image = 'assets/images/'.$image_file_name;
          move_uploaded_file($image_tmp, $upload_image);

  
 

      $update_query = mysqli_query($conn,"UPDATE menu SET name='$name',price='$price',images='$upload_image',description='$description' WHERE id=$id");

      if($update_query){
        echo "<script>alert('Post Updated');window.location.href = 'admin.php';</script>";
        exit;
    }else{
        echo "<h3>Data was not updated!</h3>";

        }
    }
    }else{
        echo "<h4>Please fill all fields</h4>";
    }
}


if(isset($_POST['update_offer_name']) && isset($_POST['update_offer_price']) && isset($_POST['update_offer_description'])){

    if(!empty($_POST['update_offer_name']) && !empty($_POST['update_offer_price']) && !empty($_POST['update_offer_description'])){

      $name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['update_offer_name']));
      $price = mysqli_real_escape_string($conn, htmlspecialchars($_POST['update_offer_price']));  
      $description = mysqli_real_escape_string($conn, htmlspecialchars($_POST['update_offer_description'])); 
      $id = $_GET['id'];

      $image = $_FILES['update_offer_images'];

      print_r ($image);
      echo "<br>";
      $image_file_name = $image['name'];
      print_r($image_file_name);
      echo "<br>";
  
      $image_error = $image['error'];
      print_r($image_error);
      echo "<br>";
  
      $image_tmp = $image['tmp_name'];
      print_r ($image_tmp);
      echo "<br>";
  
      $filename_seperate = explode('.',$image_file_name);
      print_r($filename_seperate);
      echo "<br>";
  
      $file_extension = strtolower($filename_seperate[1]);
      print_r($file_extension);
  
      $extension = array('jpeg','jpg','png');
      if(in_array($file_extension, $extension)){
          $upload_image = 'assets/images/'.$image_file_name;
          move_uploaded_file($image_tmp, $upload_image);

  
 

      $update_query = mysqli_query($conn,"UPDATE daily_offer SET name='$name',price='$price',images='$upload_image',description='$description' WHERE id=$id");

      if($update_query){
        echo "<script>alert('Post Updated');window.location.href = 'admin.php';</script>";
        exit;
    }else{
        echo "<h3>Data was not updated!</h3>";

        }
    }
    }else{
        echo "<h4>Please fill all fields</h4>";
    }
}


function get_all_data(){
     global $conn;  
     $result = mysqli_query($conn, "SELECT * FROM menu");

     if(mysqli_num_rows($result) > 0){
      echo '<div class="col-12 pt-5"><h1></H1></div> <br>';

          while($row = mysqli_fetch_assoc($result)){
          echo' 

          <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
            <img src="'.$row['images'].'" alt="Chicke Hawain Pizza" class="img-responsive img-curve" width="150" height="200">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><a class="text-secondary" href="single.php?id='.$row['id'].'">'.$row['name'].'</a></h5>
                <h6 class="card-title"><p class="food-price"><h4 class="text">$<a class="text-secondary" >'.$row['price'].'</a></h4></p></h6>
                <p class="card-text"><p class="food-detail"><h4>Description: </h4><a class="text-secondary">'.$row['description'].'</a></p></p>
              </div>
            </div>
          </div>
        </div>






               
              ';
          }

     }else "<h3>Database not working</h3>";
     die;
}

function get_admin_data()
{
  global $conn;  
  $result = mysqli_query($conn, "SELECT * FROM menu");

  if(mysqli_num_rows($result) > 0){
   echo '<div class="col-12 pt-5"><h1>All items <a href="insert.php"><button class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-plus" aria-hidden="true"></i> Add new item</button></a>  <a href="insert_offer.php"><button class="btn btn-warning" style="margin-bottom: 20px;"><i class="fa fa-plus" aria-hidden="true"></i> Update offer of the day</button></a></H1></div>';

       while($row = mysqli_fetch_assoc($result)){
       echo' 
       



       <div class="container-fluid">
       <table class="table-responsive table-bordered"">
           <thead>
               <tr>
               
                   <th>ID</th>
                   <th class="col-sm-4">Name</th>
                   <th class="col-sm-3">Price</th>
                   <th class="col-sm-3">Description</th>
                   <th class="col-sm-3">Image</th>
                   <th class="col-sm-2">View</th>
                   <th class="col-sm-2">Edit</th>
                   <th class="col-sm-2">Delete</th>

               </tr>
           </thead>
           <tbody>
           <tr>
           <td><h4 class=""><a class="text-secondary" >'.$row['id'].'</a></h4></td>
           <td><h4 class=""><a class="text-secondary" href="single.php?id='.$row['id'].'">'.$row['name'].'</a></h4></td>
           <td><h6 class="">$ <a class="text-secondary">'.$row['price'].'</a></h6></td>
           <td><h6 class=""><a class="text-secondary">'.$row['description'].'</a></h6></td>
           <td><h6 class=""><a class="text-secondary" href="single.php?id='. $row['id'].'"><img src="'.$row['images'].'" width="150" height="150"/></a></h6></td>
           <td><a href="single.php?id='.$row['id'].'" class="btn btn-sm btn-outline-success" role="button" aria-pressed="true">View</a></td>
           <td><a href="update.php?id='.$row['id'].'" class="btn btn-sm btn-outline-warning" role="button" aria-pressed="true">Edit</a></td>
           <td><a href="delete.php?id='.$row['id'].'" class="btn btn-sm btn-danger" role="button" aria-pressed="true">Delete</a></td> ';


           echo '



           </tr>
           </tbody>
       </table>
   </div>
     

            
           ';
       }

  }else "<h3>Database not working</h3>";
  die;


}

function update_get()
{

    if(isset($_GET['id']) && is_numeric($_GET['id'])){

        global $conn;
        $id = $_GET['id'];
        $get_id = mysqli_query($conn, "SELECT * FROM menu WHERE id='$id'");

            if(mysqli_num_rows($get_id) === 1){
                $row = mysqli_fetch_assoc($get_id);
                return($row);
            }
    }

}

function update_get_offer()
{

    if(isset($_GET['id']) && is_numeric($_GET['id'])){

        global $conn;
        $id = $_GET['id'];
        $get_id = mysqli_query($conn, "SELECT * FROM daily_offer WHERE id='$id'");

            if(mysqli_num_rows($get_id) === 1){
                $row = mysqli_fetch_assoc($get_id);
                return($row);
            }
    }

}


function delete()
{
    global $conn;
    if(isset($_GET['id']) && is_numeric($_GET['id'])){

        $user_id =$_GET['id'];
        $delete_user = mysqli_query($conn, "DELETE FROM menu WHERE id='$user_id'");
        if($delete_user){
            echo "<script>alert('Item Deleted');window.location.href = 'admin.php';</script>";
            exit;
        }else{
            echo "<h3>Data was not Deleted!</h3>";
    
            }
    
    }
}

function delete_offer()
{
    global $conn;
    if(isset($_GET['id']) && is_numeric($_GET['id'])){

        $user_id =$_GET['id'];
        $delete_user = mysqli_query($conn, "DELETE FROM daily_offer WHERE id='$user_id'");
        if($delete_user){
            echo "<script>alert('Item Deleted');window.location.href = 'admin.php';</script>";
            exit;
        }else{
            echo "<h3>Data was not Deleted!</h3>";
    
            }
    
    }
}


function gadoft()
{

    global $conn;
    $get_data = mysqli_query($conn, "SELECT * FROM daily_offer");
    if(mysqli_num_rows($get_data) > 0)
    {
        echo '
                <table class="table table-striped">
                <tr>
                    <th><h2>Edit Data</h2></th>
                </tr>';
                while($row = mysqli_fetch_assoc($get_data)){

                    echo '
                        <tr>
                        <td>'.$row['name'].'</td>

                        <td>
                        <a href="update_offer.php?id='.$row['id'].'">Edit</a> |  <a href="delete_offer.php?id='.$row['id'].'">Delete</a> 
                        </td>
                        </tr>

                    
                    ';



                }
                echo '</table>';
            }else
            {
                echo '<h3> Please more cars</h3>';
            }
        
        
}

function get_all_edit_data()
{

    global $conn;
    $get_data = mysqli_query($conn, "SELECT * FROM menu");
    if(mysqli_num_rows($get_data) > 0)
    {
        echo '
                <table class="table table-striped">
                <tr>
                    <th><h2>Edit Data</h2></th>
                </tr>';
                while($row = mysqli_fetch_assoc($get_data)){

                    echo '
                        <tr>
                        <td>'.$row['name'].'</td>

                        <td>
                        <a href="update.php?id='.$row['id'].'">Edit</a> |  <a href="delete.php?id='.$row['id'].'">Delete</a> 
                        </td>
                        </tr>

                    
                    ';



                }
                echo '</table>';
            }else
            {
                echo '<h3> Please more cars</h3>';
            }
        
        
}


function single_page(){
    global $row;
 echo '
 
 
  <img class="card-img-top" src="'.$row['images'].'" alt="Card image cap">

 
 ';

}

function daily_offer(){

    global $conn;  
    $result = mysqli_query($conn, "SELECT * FROM daily_offer");

    if(mysqli_num_rows($result) > 0){
     echo '<div class="col-12 pt-5"><h1></H1></div> <br>';

         while($row = mysqli_fetch_assoc($result)){
         echo' 


         <div class="card mb-3">
         <img src="'.$row['images'].'" alt="Chicke Hawain Pizza" class="img-responsive img-curve" width="150" height="700">
         <div class="card-body">
           <h5 class="card-title"><a class="text-secondary" href="single.php?id='.$row['id'].'">'.$row['name'].'</a></h5>
           <h6 class="card-title">$<a class="text-secondary" >'.$row['price'].'</a></h6>
           <p class="card-text"><h4>Description: </h4><a class="text-secondary">'.$row['description'].'</a></p>
         </div>
       </div>

              
             ';
         }

    }else "<h3>Database not working</h3>";
    die;



}










?>

