<?php
    $title = "Gen1s";
    include_once "templates/head.inc.php";
?>

<body>
    
    <?php include_once "templates/navbar.inc.php";?>
        
    <main class = "container-fluid">
        <div class="row">
            <div class="div">
                <div class="col-12">
                    <p style="color: #2b2b2b;">
                        in depth looking? ;)

                    </p>
                </div>
            </div>
        </div>
        <div class = "row">
            <div class = "col-12 col-md-6">
                <img src = "img/logo.min.png" width="100%" class="img-center">
            </div>
            <div class = "col-12 col-md-6">
                <div class = "margins">
                    <div class="bg-primary round">
                        <br>
                        <br>
                        <br>
                        <h1 style = "text-align: center; font-size: 700%; color: #2b2b2b;">Gen1s</h1>
                        <h6 style = "text-align: center; color: #2b2b2b;">Just a regular every day normal programmer</h6>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col12 col-lg-2 col-md-3 col-sm-4 border">
                <a href = "<?php echo ABOUT_ME?>" class="neon-button">About Me</a>
            </div>
            <div class="col12 col-lg-2 col-md-3 col-sm-4 border">
                <a href = "<?php echo PROJECTS?>" class="neon-button">Projects</a>
            </div>
        </div>
<?php include_once "templates/end.inc.php"?>