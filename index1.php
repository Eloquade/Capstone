<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>BIM System</title>
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
    <link rel="stylesheet" href="assets/css/THANOS_fullscreen_image_with_text.css">
</head>

<body>
    <header class="header-blue" style="background: rgb(255,255,255);">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search" style="background: rgb(5,23,33);">
            <a class="navbar-brand" href="index.php"><img alt="Brand" src="assets/img/logo.png" style="width:50px; margin-top:-15px; "></a>
            <div class="container-fluid"><a class="navbar-brand href="#" style="color: white; text-shadow: 2px 2px 4px #000000;">San Vicente East</a>
                <div class="collapse navbar-collapse" id="navcol-1">
                   
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group mb-0"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>
                    </form>
                    <a href="login.php" style="border: 2px solid white; text-decoration: none; width: 60px; text-align: center; font-weight: 600; background-color: #00FF00; color: black;">Login</a>
                </div>
            </div>
        </nav>
        <ul class="nav nav-tabs" style="background: rgb(5,23,33);">
            <li class="nav-item"><a class="nav-link active text-justify text-light" href="index.html" style="background: rgb(38,104,102);color: rgb(248, 249, 250);font-family: 'Akaya Kanadaka', cursive;">Home</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="#" style="font-family: 'Akaya Kanadaka', cursive;">About Us</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="official.html" style="font-family: 'Akaya Kanadaka', cursive;">List of Officials</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="gallery.php" style="font-family: 'Akaya Kanadaka', cursive;">Gallery</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="event.php" style="font-family: 'Akaya Kanadaka', cursive;">Events</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="pages/permit/request.php" style="font-family: 'Akaya Kanadaka', cursive;">Request</a></li>
        </ul>
        <h1 class="text-center " style="background: #B0C4DE; color: black; text-shadow: 2px 2px 4px #f7f8f8; font-family: 'Akaya Kanadaka', cursive;font-family: 'Akaya Kanadaka', cursive;" >San Vicente East</h1>
        <div class="simple-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="container py-5">
            <div class="row mt-4">
                <?php
                require 'pages/connection.php';

                $query = "SELECT * FROM tblactivityphoto";
                $query_run = mysqli_query($con, $query);
                $check_images = mysqli_num_rows($query_run) > 0;

                if($check_images)
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        ?>
                        <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="pages/activity/photo <?php echo $row['filename']; ?>" width="200px" height="200px"alt="Gallery Images">
                            <h4 class="card-title"><?php echo $row['id']; ?> </h4>
                            <h5 class="card-title"><?php echo $row['activityid']; ?> </h5>
                            <p class="card-text">Caption

                            </p>
                        </div>
                    </div>
                </div>

                        <?php
                      
                    }
                }
                else
                {
                    echo "No Image Found";
                }
                ?>
                
            </div>
        </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <h1 class="text-center " style="background: #B0C4DE; color: black; text-shadow: 2px 2px 4px #f7f8f8; font-family: 'Akaya Kanadaka', cursive;" >Welcome</h1>
        <section class="highlight-blue" style="background: rgba(30,106,221,0);">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center" style="font-size: 16px;text-align: left;color: #000000;"><br><strong>SCHEDULE OF AVAILABILITY OF SERVICE</strong><br>&nbsp;Mondays – Fridays (8:00 AM – 5:00 PM)<br></h2>
                </div>
                <div class="buttons"></div>
            </div>
        </section>
        <section class="highlight-blue" style="background: rgba(30,106,221,0);">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center" style="color: rgb(0,0,0); font-family: 'Akaya Kanadaka', cursive;">Vision</h2>
                    <p class="text-center" style="color: #000000;">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
                </div>
                <div class="buttons"></div>
            </div>
        </section>
        <section class="highlight-blue" style="background: rgba(30,106,221,0);">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center" style="color: #000000; font-family: 'Akaya Kanadaka', cursive;">Mission</h2>
                    <p class="text-center" style="color: #000000;">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
                </div>
                <div class="buttons"></div>
            </div>
        </section>
        <section class="highlight-blue" style="background: rgba(30,106,221,0);">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center" style="color: #000000; font-family: 'Akaya Kanadaka', cursive;">Goals</h2>
                    <p class="text-center" style="color: #000000;">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
                </div>
                <div class="buttons"></div>
            </div>
        </section>
        <h1 class="text-center" style="background: #B0C4DE; color: black; text-shadow: 2px 2px 4px #f7f8f8; font-family: 'Akaya Kanadaka', cursive;" >Organizational Chart</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-12"><img width="100%" height="700" src="assets/img/organnn.png"></div>
            </div>
        </div>
        <h1 class="text-center " style="background: #B0C4DE; color: black; text-shadow: 2px 2px 4px #f7f8f8; font-family: 'Akaya Kanadaka', cursive;" >LATEST POPULATION</h1>
        <p class="text-center" style="color: #000000;"><br>According to the 2020 Census, the age group with the highest population in San Vicente East is&nbsp;<em>15 to 19</em>, with 73 individuals. Conversely, the age groups with the lowest population are in the ranges&nbsp;<em>75 to 79</em>, and&nbsp;<em>80 and over</em>, with 8 individuals.<br><br></p>
        <div class="container" style="color: #000000;">
            <div class="row" style="color: #000000;">
                <div class="col-md-6 offset-md-0" style="color: #000000;"><img src="assets/img/AGEEE.jpg" style="width: 191PX;color: #000000;"></div>
                <div class="col-md-6" style="color: #000000;">
                    <p class="text-center" style="color: #000000;background: rgba(0,0,0,0.17);">Combining age groups together, those aged&nbsp;<em>14 and below</em>, consisting of the the young dependent population which include infants/babies, children and young adolescents/teenagers, make up an aggregate of 24.12% (150). Those aged&nbsp;<em>15 up to 64</em>, roughly, the economically active population and actual or potential members of the work force, constitute a total of 66.88% (416). Finally, old dependent population consisting of the senior citizens, those aged&nbsp;<em>65 and over</em>, total 9.00% (56) in all.The computed&nbsp;<a href="https://www.philatlas.com/glossary.html#term-age-dep-ratio">Age Dependency Ratios</a>&nbsp;mean that among the population of San&nbsp;Vicente East, there are 36 youth dependents to every 100 of the working age population; there are 13 aged/senior citizens to every 100 of the working population; and overall, there are 50 dependents (young and old-age) to every 100 of the working population.The&nbsp;<a href="https://www.philatlas.com/glossary.html#term-median-age">median age</a>&nbsp;of 27 indicates that half of the entire population of San&nbsp;Vicente East are aged less than 27 and the other half are over the age of 27.<br><br></p>
                </div>
            </div>
        </div>
        <h1 class="text-center " style="background: #B0C4DE; color: black; text-shadow: 2px 2px 4px #f7f8f8; font-family: 'Akaya Kanadaka', cursive;" >SERVICES</h1>
        <p class="text-center" style="color: rgb(255,255,255);"></p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>