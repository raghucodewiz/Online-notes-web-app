<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: index.php");
}
include('connection.php');

$user_id = $_SESSION['user_id'];

//get username and email
$sql = "SELECT * FROM users WHERE user_id='$user_id'";
$result = mysqli_query($link, $sql);

$count = mysqli_num_rows($result);

if($count == 1){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
    $username = $row['username'];
    $email = $row['email']; 
}else{
    echo "There was an error retrieving the username and email from the database";   
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link href="styling.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets2/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets2/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets2/fonts/fontawesome5-overrides.min.css">
    <style>
        tr{
            cursor: pointer;
        }
    </style>
</head>
<body id="page-top">
    <a class="btnx2" href="mainpageloggedin.php">❎</a>
    <div id="wrapper">
        <div class="container-fluid">
            <h3 class="text-dark mb-4 heading">Profile</h3>
            <div class="row mb-3 profilecontainer">

                <div class="col-lg-8">

                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 font-weight-bold">User Settings</p>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-col">
                                            <table class="table table-hover table-condensed table-bordered">
                                                <tr data-target="#updateusername" data-toggle="modal">
                                                    <td class="heading2">Username</td>
                                                    <td><?php echo $username; ?></td>
                                                </tr>
                                                <tr data-target="#updateemail" data-toggle="modal">
                                                    <td class="heading2">Email</td>
                                                    <td><?php echo $email ?></td>
                                                </tr>
                                                <tr data-target="#updatepassword" data-toggle="modal">
                                                    <td class="heading2">Password</td>
                                                    <td>hidden</td>
                                                </tr>
                                            </table>
                                            <!-- <div class="row">
                                                <div class="form-group"><label for="username"><strong>Username</strong></label><input class="form-control" type="text" id="username" placeholder="user.name" name="username"></div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group"><label for="email"><strong>Email Address</strong></label><input class="form-control" type="email" id="email" placeholder="user@example.com" name="email"></div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group"><label for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" id="first_name" placeholder="John" name="first_name"></div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group"><label for="last_name"><strong>Last Name</strong></label><input class="form-control" type="text" id="last_name" placeholder="Doe" name="last_name"></div>
                                            </div> -->
                                        </div>
                                        <div class="form-group"><button class="btn-primary btn-sm" type="submit">Other Details</button></div>
                                    </form>
                                </div>
                            </div>
                            
    <!--Update username-->    
      <form method="post" id="updateusernameform">
        <div class="modal" id="updateusername" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel" class="heading">
                    Edit Username: 
                  </h4>
              </div>
              <div class="modal-body">
                  
                  <!--update username message from PHP file-->
                  <div id="updateusernamemessage"></div>
                  

                  <div class="form-group">
                      <label for="username" class="heading2">Username:</label>
                      <input class="form-control" type="text" name="username" id="username" maxlength="30" value="">
                  </div>
                  
              </div>
              <div class="modal-footer">
                  <!-- <input class="btn green" name="updateusername" type="submit" value="Submit">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>  -->
                <a class="btn btn-outline-primary heading" name="updateusername" type="submit" value="Submit" role="button">Submit</a>
                <button class="btn btn-primary text-white btn-user heading" data-dismiss="modal" type="button">Cancel</button>
              </div>
          </div>
      </div>
      </div>
      </form>

    <!--Update email-->    
      <form method="post" id="updateemailform">
        <div class="modal" id="updateemail" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel"class="heading">
                    Enter new email: 
                  </h4>
              </div>
              <div class="modal-body">
                  
                  <!--Update email message from PHP file-->
                  <div id="updateemailmessage"></div>
                  

                  <div class="form-group">
                      <label for="email" class="heading2">Email:</label>
                      <input class="form-control" type="email" name="email" id="email" maxlength="50" value="">
                  </div>
                  
              </div>
              <div class="modal-footer">
                  <!-- <input class="btn green" name="updateusername" type="submit" value="Submit"> -->
                  <a class="btn btn-outline-primary heading" name="updateemail" type="submit" value="Submit" role="button">Submit</a>
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>  -->
                <button class="btn btn-primary text-white btn-user heading" data-dismiss="modal" type="button">Cancel</button>
              </div>
          </div>
      </div>
      </div>
      </form>
      
    <!--Update password-->    
      <form method="post" id="updatepasswordform">
        <div class="modal" id="updatepassword" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel" class="heading">
                    Enter Current and New password:
                  </h4>
              </div>
              <div class="modal-body">
                  
                  <!--Update password message from PHP file-->
                  <div id="updatepasswordmessage"></div>
                  

                  <div class="form-group">
                      <label for="currentpassword" class="sr-only heading2">Your Current Password:</label>
                      <input class="form-control" type="password" name="currentpassword" id="currentpassword" maxlength="30" placeholder="Your Current Password">
                  </div>
                  <div class="form-group">
                      <label for="password" class="sr-only heading2" >Choose a password:</label>
                      <input class="form-control" type="password" name="password" id="password" maxlength="30" placeholder="Choose a password">
                  </div>
                  <div class="form-group">
                      <label for="password2" class="sr-only heading2" >Confirm password:</label>
                      <input class="form-control" type="password" name="password2" id="password2" maxlength="30" placeholder="Confirm password">
                  </div>
                  
              </div>
              <div class="modal-footer">
                  <!-- <input class="btn green" name="updateusername" type="submit" value="Submit">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>  -->
                <a class="btn btn-outline-primary heading" name="updatepassword" type="submit" value="Submit" role="button">Submit</a>
                <button class="btn btn-primary text-white btn-user heading" data-dismiss="modal" type="button">Cancel</button>
              </div>
          </div>
      </div>
      </div>
      </form>
                            <!-- <div class="card shadow">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 font-weight-bold">Contact Settings</p>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group"><label for="address"><strong>Address</strong></label><input class="form-control" type="text" id="address" placeholder="Sunset Blvd, 38" name="address"></div>
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group"><label for="city"><strong>City</strong></label><input class="form-control" type="text" id="city" placeholder="Los Angeles" name="city"></div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group"><label for="country"><strong>Country</strong></label><input class="form-control" type="text" id="country" placeholder="USA" name="country"></div>
                                            </div>
                                        </div>
                                        <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Save&nbsp;Settings</button></div>
                                    </form>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="profile.js"></script>

</body>
</html>