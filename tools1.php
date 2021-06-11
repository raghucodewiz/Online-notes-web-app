<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tools</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link href="style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">   
</head>

<body>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">NoteX</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link active activex" href="tools1.php">Tools</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact-us</a></li>
                    <li class="nav-item"><a class="nav-link" href="mainpageloggedin.php">My Notes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Logged in as <b><i><?php echo $_SESSION['username']?></i></b></a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?logout=1">Log Out</a></li>
                    <!-- href="hire-me.php"href="cv.html" -->
                </ul>
            </div>
        </div>
    </nav>
    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <div class="heading">
                    <h2 class="heading">Tools</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="assets/img/nature/image1.jpg" alt="Card Image"></a>
                            <div class="card-body">
                                <h6><a href="#">Customizable</a></h6>
                                <p class="text-muted card-text">Edit your notes anytime you feel something's off. Quick updation and organization</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="assets/img/nature/image2.jpg" alt="Card Image"></a>
                            <div class="card-body">
                                <h6><a href="#">Responsive</a></h6>
                                <p class="text-muted card-text">Automatically adjusts for different screen sizes and viewports(desktops, tablets, and phones)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="assets/img/nature/image3.jpg" alt="Card Image"></a>
                            <div class="card-body">
                                <h6><a href="#">All Browser Compatibility</a></h6>
                                <p class="text-muted card-text">Functions across different browsers and degrades gracefully when browser features are absent or lacking.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <!-- <footer class="page-footer">
        <div class="container">
            <div class="links"><a href="#">About me</a><a href="#">Contact me</a><a href="#">Projects</a></div>
            <div class="social-icons"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-instagram-outline"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a></div>
        </div>
    </footer> -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>