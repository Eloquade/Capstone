<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Request</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Kanadaka">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Autour+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="bgs/pages/permit/moda/css/modal.css">
    <link rel="stylesheet" href="assets/css/THANOS_fullscreen_image_with_text.css">
</head>

<body>
    <header class="header-blue" style="background: rgb(255,255,255);">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search" style="background: rgb(5,23,33);">
            <a class="navbar-brand" href="index.php"><img alt="Brand" src="assets/img/logo.png" style="width:50px; margin-top:-15px; "></a>
            <div class="container-fluid"><a class="navbar-brand" style="color: white; text-shadow: 2px 2px 4px #000000;">San Vicente East</a>
                <div class="collapse navbar-collapse" id="navcol-1">
                   
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group mb-0"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>
                    </form>
                    <a href="login.php" style="border: 2px solid white; text-decoration: none; width: 60px; text-align: center; font-weight: 600; background-color: #00FF00; color: black;">Login</a>
                </div>
            </div>
        </nav>
        <ul class="nav nav-tabs" style="background: rgb(5,23,33);">
            <li class="nav-item"><a class="nav-link text-light" href="../../index.html" style="font-family: 'Akaya Kanadaka', cursive;">Home</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="../../about.html" style="font-family: 'Akaya Kanadaka', cursive;">About Us</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="../../official.html" style="font-family: 'Akaya Kanadaka', cursive;">List of Officials</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="../../gallery.php" style="font-family: 'Akaya Kanadaka', cursive;">Gallery</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="../../event.php ?>" style="font-family: 'Akaya Kanadaka', cursive;">Events</a></li>
            <li class="nav-item"><a class="nav-link active text-justify text-light" href="request.php" style="background: rgb(38,104,102);color: rgb(248, 249, 250);font-family: 'Akaya Kanadaka', cursive;">Request</a></li>
        </ul>
        <h1 class="text-center " style="background: #B0C4DE; color: black; text-shadow: 2px 2px 4px #f7f8f8; font-family: 'Akaya Kanadaka', cursive;" >Request a Form</h1>

<center>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Permit</button>
<br>
<br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Clearance</button>
<br>
<br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">Indigency</button>
</center>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PERMIT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form action="../pages/permit/func.php" method="post" >
        <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >Name:</label>
                                    <input name="txt_name" class="form-control input-sm" type="text" placeholder="Name"/>
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >Business Name:</label>
                                    <input name="txt_busname" class="form-control input-sm" type="text" placeholder="Business Name"/>
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >Business Address:</label>
                                    <input name="txt_busadd" class="form-control input-sm" type="text" placeholder="Business Address"/>
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >Type of Business:</label>
                                    <input name="txt_type" class="form-control input-sm" type="text" placeholder="Type of Business"/>
                                                                    
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >OR Number:</label>
                                    <input name="txt_ornum" class="form-control input-sm" type="number" placeholder="OR Number"/>
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >Amount:</label>
                                    <input name="txt_amount" class="form-control input-sm" type="number" value="500" disabled/>
                                </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary btn-sm" name="btn_permit_send" value="Send "/>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CLEARANCE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form action="../pages/permit/func.php" method="post" >
        <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >Clearance #:</label>
                                    <input name="txt_cnum" class="form-control input-sm" type="number" placeholder="Clearance #"/>
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >Name:</label>
                                    <input name="txt_name" class="form-control input-sm" type="text" placeholder="Name"/>
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >Purpose:</label>
                                    <input name="txt_purpose" class="form-control input-sm" type="text" placeholder="Purpose"/>
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;">OR Number:</label>
                                    <input name="txt_ornum" class="form-control input-sm" type="number" placeholder="OR Number"/>
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;">Amount:</label>
                                    <input name="txt_amount" class="form-control input-sm" type="number" value="200" disable/>
                                
                                </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary btn-sm" name="btn_permit_send" value="Send"/>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INDIGENCY</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form action="../pages/permit/func.php" method="post" >
        <div class="form-group">
        <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >Name:</label>
                                    <input name="txt_name" class="form-control input-sm" type="text" placeholder="Name"/>
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >Purpose:</label>
                                    <input name="txt_purpose" class="form-control input-sm" type="text" placeholder="Purpose"/>
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;">Street:</label>
                                    <input name="txt_street" class="form-control input-sm" type="text" placeholder="Street"/>
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;">Amount:</label>
                                    <input name="txt_amount" class="form-control input-sm" type="number" value="200" disable/>
                                </div>
                                
                                </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary btn-sm" name="btn_permit_send" value="Send"/>
      </div>
    </div>
  </div>
</div>
        <footer class="footer-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Request a Form</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About Us</h3>
                        <ul>
                            <li><a href="#">Learn more about the Philippine government, its structure, how government works and the people behind it.<br><br></a></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Barangay Links</h3>
                        <p>San Vicente South<br>San Vicente West<br>San Vicente Central<br>San Vicente North<br></p>
                        <p><br></p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">San Vicente East © 2021</p>
            </div>
        </footer>
    </header>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="modal.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>