<?php
session_start();
require('connection.php');
require('auth.php');
if(isset($_POST['submit']))
{
    $proj_id=User::query_project_id($con,$_SESSION['usn']);
    $guideid=$_POST['guide_id'];
    $guidename=$_POST['guide_name'];
    $field=$_POST['field'];
    
    if (User::add_research($con,$proj_id,$guideid,$guidename,$field)) {
        header('Location: comments.php');
    }
    else{
        echo "<script>alert('Check Again');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/research.css">
    <title>Project Submission System</title>
</head>
<body>
    <section class="header">
        <div class="page">
            <img src="../pics/clg.png">
            <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Project Submission System</h1>               
        </div>
        <form method='post'>
        <div class="container">
            <div class="custom-select">
            <h2>Specific Field:</h2>
            <select name="field" id="field">
            <option value="Machine Learning">Machine Learning</option>
            <option value="Front End Development">Front End Development</option>
            <option value="Back End Development">Back End Development</option>
            <option value="Android App Development">Android App Development</option>
            <option value="React Native App Development">React Native App Development</option>
            <option value="Artificial Intelligence">Artificial Intelligence</option>
            <option value="Data Science">Data Science</option>
            <option value="Cloud Computing">Cloud Computing/option>
            <option value="Cyber Security">Cyber Security</option>
            <option value="AR/VR">AR/VR</option>
            <option value="AutoCad">AutoCad</option>
            <option value="IC Engine">IC Engine</option>
            <option value="Hybrid Electric Vehicles">Hybrid Electric Vehicles</option>
            <option value="Embedded Systems">Embedded Systems</option>
            <option value="Digital Marketing">Digital Marketing</option>
            <option value="AWS">AWS</option>
            </select>
            <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
            <h2>Guide Details:</h2>
            <input class="text" type="text" name="guide_id" id="guide_id" required placeholder="Enter the id of the guide you've been assigned to:" size="45"><br>
            <input class="text" type="text" name="guide_name" id="guide_name" required placeholder="Enter the name of the guide you've been assigned to:" size="45"><br>
        </div>
    </div>
    <div class="btn-holder">
        <input class="simple-btn" type="submit" name="submit">
        <!--<div class="wrapper">
         <a class="link" href="login.php"><span>BACK</span></a>
        </div>-->
    </div>
    </form>
</section>
</body>
</html>