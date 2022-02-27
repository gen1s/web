<?php

header($_SERVER['SERVER_PROTOCOL'] . "404 Not Found", true, 404);


$title = "Comments";
include_once "templates/head.inc.php"?>
<body>
    <?php include_once "templates/navbar.inc.php"?>
        
    <main class = "container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="margins">
                    <h1 style = "color: #2ccd70;">ERROR 404 PAGE NOT FOUND</h1>
                    <p style = "color: #e9e9e9;">Sorry, I can't find this page. Keep exploring.</p>
                </div>
            </div>
        </div>
<?php include_once "templates/end.inc.php"?>