<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Home - NoteX</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
        <link href="styling.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
    <style>
        body {
        font-family: Arvo, serif;
        background: url("image.png") no-repeat center center;
        background-attachment: fixed;
        background-size: cover;
        letter-spacing: 1px;
        }
        #notePad, #allNotes, #done, .delete{
            display: none;   
        }
        .para{
            color: #189CFE;
            font-size: 40px;
            font-weight: bold;
            -webkit-text-stroke: 1px #3d0b7f;
        }
        #container{
                margin-top:120px;   
            }
        .delete{
            margin-bottom: 10px;
            margin-top: 10px;
            width: 100px;
        }
        .pull-right1 {
            position: absolute;
            top: 0;
            right: 12px;
        }
        .button {
            margin-bottom: 20px;
        }
        textarea{
            width: 100%;
            height: auto;
                max-width: 100%;
                font-size: 16px;
                line-height: 1.5em;
                padding: 10px;
        }
        .noteheader{
            color: #087bce;  
            border-radius: 10px;
            margin-bottom: 10px;
            cursor: pointer;
        }
          
        .text{
            color: #3d0b7f;
            font-size: 20px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
          
        .timetext{
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        #notes {
            background:rgba(255,255,255, 0.7);
        }

            .notes{
                margin-bottom: 100px;
            }
            
    #paper {
        color:#FFF;
        font-size:20px;
    }
    #margin {
        margin-left:12px;
        margin-bottom:20px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none; 
    }
    #text {
        width:800px;
        overflow:hidden;
        background-color:#FFF;
        color:#222;
        font-family:Courier, monospace;
        font-weight:normal;
        font-size:24px;
        resize:none;
        line-height:40px;
        padding-left:100px;
        padding-right:100px;
        padding-top:45px;
        padding-bottom:34px;
        background-image:url(https://static.tumblr.com/maopbtg/E9Bmgtoht/lines.png), url(https://static.tumblr.com/maopbtg/nBUmgtogx/paper.png);
        background-repeat:repeat-y, repeat;
        -webkit-border-radius:12px;
        border-radius:12px;
        -webkit-box-shadow: 0px 2px 14px #000;
        box-shadow: 0px 2px 14px #000;
        border-top:1px solid #FFF;
        border-bottom:1px solid #FFF;
    }
    
    #wrapper {
        width:100%;
        height:auto;
        margin-left:auto;
        margin-right:auto;
        margin-top:24px;
        margin-bottom:100px;
    }
    
    </style>
    </head>

<body>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">NoteX</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="tools1.php">Tools</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact-us</a></li>
                    <li class="nav-item"><a class="nav-link active activex" href="mainpageloggedin.php">My Notes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Logged in as <b><i><?php echo $_SESSION['username']?></i></b></a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?logout=1">Log Out</a></li>
                    <!-- href="hire-me.php"href="cv.html" -->
                </ul>
            </div>
        </div>
    </nav>
    <main class="page projets-page">
        <section class="portfolio-block project-no-images">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary text-white btn-user" type="button" id="addNote">Addnote</button>
                        <button class="btn btn-primary text-white btn-user pull-right1" type="button" id="edit">Edit</button>
                        <button class="btn btn-outline-primary pull-right1" type="button" id="done">Done</button>
                        <button class="btn btn-primary text-white btn-user" type="button" id="allNotes">All Notes</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="notePad">
                            <div id="wrapper">
        
                                <form id="paper" method="get" action="">
                            
                                   <textarea placeholder="Enter something funny." id="text" name="text" rows="12" style="overflow: hidden; word-wrap: break-word; resize: none; height:auto;"></textarea>  
                                    <br>
                                    
                                </form>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="heading">
                    <p class="para" id="para">Notes are here!!
                    </p>

                </div>
                <div id="notes" class="notes project-card-no-image">
                    <!-- ajax code for php file -->
                </div>
                </div>
            </div>
        </section>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="mynotes.js"></script>
</body>

</html>