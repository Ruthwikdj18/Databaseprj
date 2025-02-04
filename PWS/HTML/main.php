<?php
require('connection.php');  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Project Submission System</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="stylesheet" href="../CSS/main.css">
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css"/>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    </head>
    <body>
        <header>
            <img src="../pics/clg.png" class="logo">
            <h1 style="color:red;">Project Submission System</h1>
            <br>
            <nav>
                <ul class="nav-area">
                    <li><a href="main.php"><i class="fa fa-home"></i>&nbsp;HOME&nbsp;&nbsp;</a></li>
					<li><a href="perks.php"><i class="fa fa-medal"></i>&nbsp;PERKS&nbsp;</a></li>
                    <li><a href="developers.php"><i class="fa fa-user"></i>DEVELOPERS</a></li>
                </ul>
            </nav>
            <a href="../HTML/login.php" class="btn-area"><!--Student--> Login</a>
            <!--<a href="../HTML/faculty_login.php" class="btn-area">Faculty Login</a>-->
</br>
        </header>
        <div class="row">
            <div class="col-1">
                <h1> WELCOME!   </h1>
                <br>
                <h3>Project submission has never been this easy before.</h3>
                <br>
                <p><b>You can also earn rewards each time you upload your Project</b></p>
            
                <h4>So what are you waiting for?</h4>
                <a href="../HTML/login.php"><button type="button">Get Started<img src="../pics/arrow.png"></button></a>
            </div>
        
            <div class="col-2">
                <img src="../pics/pic4.jpg" class="student" align="right">

            </div>
        </div>
    </body> 
    </html>