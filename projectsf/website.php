<?php 
$title = "This Website";
include_once "./templates/head.inc.php"?>
<body>
    <?php include_once "./templates/navbar.inc.php"?>
    <main class = "container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="tab">This Website</h1>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6">
                <img src = "/img/logo.min.png" width ="50%" class="img-center">
            </div>
            
            <div class="col-12 col-md-6">
                <div class="margins">
                    <h3 style = "color: #2ccd70;">Information</h3>
                    <p style = "color: #e9e9e9;">
                        I made this website by my own. I did it using 
                        <span style = "color: #2ccd70;" >html</span>,
                        <span style = "color: #2ccd70;" >css</span> and
                        <span style = "color: #2ccd70;" >javascript</span>. 
                        I also used 
                        <span style = "color: #2ccd70;" >bootstrap</span>. You can check every thing else by your own. 
                        <span style = "color: #2ccd70;" >;)</span>
                    </p>
                    <a href="https://github.com/gen1s/web" class = "btn btn-primary" target="_blank">Github/Dowload</a>
                </div>
            </div>
        </div>
    <?php include_once "./templates/end.inc.php"?>