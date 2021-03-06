<!DOCTYPE html>
<html>
<?php
session_start();
?>
    <head>
        <meta charset="UTF-8">
        <title>Barangay Information Management System</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="skin-black" style="background: rgb(5,23,33);">
        <div class="container" style="margin-top:30px" >
          <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-default">
            <div class="panel-heading" style="text-align:center;">
                <img src="img/logoo.png" style="height:150px;"/>
              <h3 class="panel-title">
                <strong style="font-family: 'Akaya Kanadaka', cursive;font-family: 'Akaya Kanadaka', cursive; color: black; text-shadow: 2px 2px 4px #87CEEB;">
                    Barangay Information Management System
                </strong>
              </h3>
            </div>
            <div class="panel-body" >
              <form role="form" method="post">
                <div class="form-group">
                  <label for="txt_username" style="color: black; text-shadow: 2px 2px 4px #87CEEB;">Username</label>
                  <input type="text" class="form-control" style="border-radius:0px" name="txt_username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                  <label for="txt_password" style="color: black; text-shadow: 2px 2px 4px #87CEEB;">Password</label>
                  <input type="password" class="form-control" style="border-radius:0px" name="txt_password" placeholder="Enter Password">
                </div>

                <button type="submit" class="btn btn-sm btn-primary" name="btn_login">Log in</button>
                <label id="error" class="label label-danger pull-right"></label> 

              </form>
            </div>
          </div>
          </div>
        </div>

      <?php
        include "pages/connection.php";
        if(isset($_POST['btn_login']))
        { 
            $username = $_POST['txt_username'];
            $password = $_POST['txt_password'];


            $admin = mysqli_query($con, "SELECT * from tbluser where username = '$username' and password = '$password' and type = 'administrator' ");
            $numrow_admin = mysqli_num_rows($admin);


            $staff = mysqli_query($con, "SELECT * from tblstaff where username = '$username' and password = '$password' ");
            $numrow_staff = mysqli_num_rows($staff);

            if($numrow_admin > 0)
            {
                while($row = mysqli_fetch_array($admin)){
                  $_SESSION['role'] = "Administrator";
                  $_SESSION['userid'] = $row['id'];
                  $_SESSION['username'] = $row['username'];
                }    
                header ('location: pages/dashboard/dashboard.php');
            }
            elseif($numrow_staff > 0)
            {
                while($row = mysqli_fetch_array($staff)){
                  $_SESSION['role'] = $row['name'];
                  $_SESSION['staff'] = "Staff";
                  $_SESSION['userid'] = $row['id'];
                  $_SESSION['username'] = $row['username'];
                }    
                header ('location: pages/dashboard/dashboard.php');
            }
            else
            {
              echo '<script type="text/javascript">document.getElementById("error").innerHTML = "Invalid Account";</script>';
               
            }
             
        }
        
      ?>
        <footer class="footer-dark">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </footer>
    </header>
    </body>
</html>