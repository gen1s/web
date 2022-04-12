<?php 
$title = "Gen1s | My Projects";
include_once "templates/head.inc.php"?>
<body>
    <?php include_once "templates/navbar.inc.php"?>
    <main class = "container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="tab" style = "color: #2ccd70; font-size: 450%;">
                    My Projects
                </h1>
                <p class="tab" style = "color: #e9e9e9;">  Here are all the projects that I published so far</p>
            </div>
        
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card crd-center" style="width: 18rem;">
                    <img src="<?php echo IMG_PATH?>projects/youtubelogo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Automated Youtube Channel</h5>
                            <p class="card-text" style = "color: #2b2b2b;">Python file automate an entire youtube channel.</p>
                            <a href="<?php echo AUTOMATED_YOUTUBE?>" class="btn btn-primary">Learn More</a>
                        </div>
                </div>
            </div>
            
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card crd-center" style="width: 18rem;">
                    <img src="<?php echo IMG_PATH?>projects/encdecimg.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">GUI Encrypt Decrypt</h5>
                            <p class="card-text" style = "color: #2b2b2b;">Python file to encrypt or decrypt your files.</p>
                            <a href="<?php echo ENCRYPT_DECRYPT?>" class="btn btn-primary">Learn More</a>
                        </div>
                </div>
            </div>
            
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card crd-center" style="width: 18rem;">
                    <img src="<?php echo IMG_PATH?>projects/srct.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Shortcut</h5>
                            <p class="card-text"style = "color: #2b2b2b;" >This file generates .bat files to run multiple programs at once.</p>
                            <a href="<?php echo SHORTCUT?>" class="btn btn-primary">Learn More</a>
                        </div>
                </div>
            </div>
            
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card crd-center" style="width: 18rem;">
                    <img src="<?php echo IMG_PATH?>projects/discordlogo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Discord Bot</h5>
                            <p class="card-text"style = "color: #2b2b2b;">Discord bot that notifies you of your tasks.</p>
                            <a href="<?php echo DISCORD_BOT?>" class="btn btn-primary">Learn More</a>
                        </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card crd-center" style="width: 18rem;">
                    <img src="<?php echo IMG_PATH?>logo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Website</h5>
                            <p class="card-text"style = "color: #2b2b2b;">This website font code.</p>
                            <a href="<?php echo WEBSITE?>" class="btn btn-primary">Learn More</a>
                        </div>
                </div>
            </div>

            
            
        </div>
<?php include_once "templates/end.inc.php"?>