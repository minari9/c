<?php 
require '../config/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/icons/css/all.css">
    <link rel="stylesheet" href="build/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="build/css/main.css">
    <link rel="stylesheet" href="build/css/query.org.css">
    <link rel="stylesheet" href="build/css/head.css">
    <script src="build/jquery/dist/jquery.min.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <header class="position-fixed p-0 m-0" style="padding-top:1rem;background: white; width: 100vw;  z-index: 10; border-bottom:1px solid grey;">
        <nav class="navbar navbar-expand-lg p-0" style="margin-top: 1rem;" >
            <div class="container-fluid " style="background: white; padding: 0 24px;">
                <a href="<?=ROOT_URL?>" class="navbar-brand p-0"><img src="./assets/media/logo.png" class="logos" id="vc"></a>
                <button class="btn px-4 togle">
                </button>
                <div class="collapse navbar-collapse container-fluid p-0" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 fonts p-0" >
                            <li class="nav-item its">
                                <a href="<?=ROOT_URL?>progams1.php" class="nav-link p-0" >Volunteer Programs</a>                              
                            </li>
                            <li class="nav-item its">
                                    <a href="<?=ROOT_URL?>HowItWorks.php" class="nav-link p-0">How It Works</a>
                            </li>
                            <li class="nav-item its">
                                <a href="<?=ROOT_URL?>FAQs.php" class="nav-link p-0">FAQs</a>
                            </li>
                            
                        </ul>
                        <ul class="signs">
                            <li id="signout"><img src="assets/media/org2.png" alt="" class="icon"><p class="down ps-1">^</p></li>
                       </ul>
                    </div>
            </div>
        </nav>
    </header>

    