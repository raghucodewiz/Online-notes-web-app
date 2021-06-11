<?php
//session_start();
include('connection.php');
  $message_sent = false;
if(isset($_POST['email'])&& $_POST['email'] !=''){

  if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
  
  $userName = $_POST['name'];
  $userEmail = $_POST['email'];
  $messageSubject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "singhraaghavendra@gmail.com";
  $body = "";

  $body .= "Form: ".$userName. "\r\n";
  $body .= "Email: ".$userEmail. "\r\n";
  $body .= "Message: ".$message. "\r\n";

  $message_sent = true;

  mail($to,$messageSubject,$body);

}


}
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Hire me - Brand</title>
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
?>

<?php

if($message_sent):
?>

<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">NoteX</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects-grid-cards.php">Tools</a></li>
                    <li class="nav-item"><a class="nav-link active" href="hire-me.php">Contact-us</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Log in</a></li>
                    <!-- href="hire-me.html"href="cv.html" -->
                </ul>
            </div>
        </div>
    </nav>

    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
        <div class="container">
        <div class="heading">
                    <h2 class="heading">Contact Us</h2>
                    <p>Thanks we will be in touch !!</p>
                </div>
        <form action="hire-me.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@email.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit"  class="btn btn-outline-primary" role="button">Send Message!</button>
            </div>
        </form>
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

<?php
else: 
?>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">NoteX</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects-grid-cards.php">Tools</a></li>
                    <li class="nav-item"><a class="nav-link active" href="hire-me.php">Contact-us</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Log in</a></li>
                    <!-- href="hire-me.html"href="cv.html" -->
                </ul>
            </div>
        </div>
    </nav>

    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
        <div class="container">
        <div class="heading">
                    <h2 class="heading">Contact Us</h2>
                    <p>Get in touch with us we will answer all your queries!</p>
                </div>
        <form action="hire-me.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@mail.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit"  class="btn btn-outline-primary" role="button">Send Message!</button>
            </div>
        </form>
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
    <?php
endif;
?>
</body>

</html>