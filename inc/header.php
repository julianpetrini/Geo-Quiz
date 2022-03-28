<?php  session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>GEOMINDS</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;800&family=Gideon+Roman&family=Karla:ital,wght@0,200;0,300;0,400;1,200;1,300&family=Lato:wght@300&display=swap" rel="stylesheet">
</head>


<header>
    <div class="bg-image p-5 text-center shadow-1-strong rounded text-white" style="background-image: url('img/2.png');">
    
        <nav class="navbar navbar-expand-lg navbar navbar-dark shadow-5-strong">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" alt="" width="auto" height="58">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="question1.php">Quiz</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    </div>
</header>