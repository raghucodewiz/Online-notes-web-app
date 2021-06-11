<?php
//The user is re-directed to this file after clicking the activation link
//Signup link contains two GET parameters: email and activation key
session_start();
include('connection.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Brand</title>
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets2/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets2/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets2/fonts/fontawesome5-overrides.min.css">
    <link href="styling.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet"> 
</head>

<body class="cont bg-gradient-primary">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets2/img/dogs/image2.jpg&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                    <a class="btnx" href="index.php">❎</a>
                        <div class="p-5">
                        <div class="col-sm-offset-1 col-sm-10 contactForm">

            <h1>Account Activation</h1>
<?php
//If email or activation key is missing show an error
if(!isset($_GET['email']) || !isset($_GET['key'])){
    echo '<div class="alert alert-danger">There was an error. Please click on the activation link you received by email.</div>'; exit;
}
//else
    //Store them in two variables
$email = $_GET['email'];
$key = $_GET['key'];
    //Prepare variables for the query
$email = mysqli_real_escape_string($link, $email);
$key = mysqli_real_escape_string($link, $key);
    //Run query: set activation field to "activated" for the provided email
$sql = "UPDATE users SET activation='activated' WHERE (email='$email' AND activation='$key') LIMIT 1";
$result = mysqli_query($link, $sql);
    //If query is successful, show success message and invite user to login
if(mysqli_affected_rows($link) == 1){
    echo '<div class="alert alert-success">Your account has been activated.</div>';
    echo '<a href="index.php" type="button" class="btn-lg btn-sucess">Log in<a/>';
    
}else{
    //Show error message
    echo '<div class="alert alert-danger">Your account could not be activated. Please try again later.</div>';
    echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';
    
}
?>
            
        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets2/js/chart.min.js"></script>
    <!-- <script src="assets2/js/bs-init.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets2/js/theme.js"></script>
</body>

</html>