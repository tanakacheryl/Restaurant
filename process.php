<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['login']))
    {
       if(empty($_POST['username']) || empty($_POST['password']))
       {
            header("location:login.php?empty= Please Fill in the Blanks");
       }
       else
       {
            $query="SELECT * FROM users WHERE username='".$_POST['username']."' and password='".$_POST['password']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['user']=$_POST['username'];
                header("location:admin.php");
            }
            else
            {
                header("location:login.php?invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'btn not working';
    }

?>