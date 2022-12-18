<?php 
$title = "Gen1s | My Projects | All The Projects I Have Published";
$keyword = "projects, my projects";
$description = "Hi I'm Gen1s Here ⏫⏫⏫ is were I share all my projects on my website. You can learn more about every single project and you can check it on github and dowlad it.";
$extra = "";
include_once "templates/head.inc.php"?> 
<body>
    <?php include_once "templates/navbar.inc.php"?>
    <main class = "container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="tab" style = "color: #2ccd70; font-size: 450%;">
                    My Projects
                </h1>
                <h2 class="tab" style = "color: #e9e9e9;">  Here are all the projects that I published so far</h2>
            </div>
        
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card crd-center" style="width: 18rem;height:32rem">
                    <img src="<?php echo IMG_PATH?>projects/tiktoklogo.png" class="card-img-top" alt="youtube">
                        <div class="card-body" style="height:9rem">
                            <h3 class="card-title">Automated TikTok Page</h3>
                            <p class="card-text" style = "color: #2b2b2b;">Python file to genarate TikTok videos.</p>
                            
                        </div>
                        <div class="card-body">
                            <a href="<?php echo TIKTOK_GENERATOR?>" class="btn btn-primary">Learn More</a>
                        </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card crd-center" style="width: 18rem;height:32rem">
                    <img src="<?php echo IMG_PATH?>projects/youtubelogo.png" class="card-img-top" alt="youtube">
                        <div class="card-body" style="height:9rem">
                            <h3 class="card-title">Automated Youtube Channel</h3>
                            <p class="card-text" style = "color: #2b2b2b;">Python file to automate an entire youtube channel.</p>
                            
                        </div>
                        <div class="card-body">
                            <a href="<?php echo AUTOMATED_YOUTUBE?>" class="btn btn-primary">Learn More</a>
                        </div>
                </div>
            </div>
            
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card crd-center" style="width: 18rem;height:32rem">
                    <img src="<?php echo IMG_PATH?>projects/encdecimg.png" class="card-img-top" alt="encrypt-decrypt">
                        <div class="card-body" style="height:9rem">
                            <h3 class="card-title">GUI Encrypt Decrypt</h3>
                            <p class="card-text" style = "color: #2b2b2b;">Python file to encrypt or decrypt your files.</p>
                            
                        </div>
                        <div class="card-body">
                            <a href="<?php echo ENCRYPT_DECRYPT?>" class="btn btn-primary">Learn More</a>
                        </div>
                </div>
            </div>
            
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card crd-center" style="width: 18rem;height:32rem">
                    <img src="<?php echo IMG_PATH?>projects/srct.png" class="card-img-top" alt="shortcut">
                        <div class="card-body" style="height:9rem">
                            <h3 class="card-title">Shortcut</h3>
                            <p class="card-text"style = "color: #2b2b2b;" >This file generates .bat files to run multiple programs at once.</p>

                        </div>
                        <div class="card-body">
                            <a href="<?php echo ENCRYPT_DECRYPT?>" class="btn btn-primary">Learn More</a>
                        </div>
                </div>
            </div>
            
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card crd-center" style="width: 18rem;height:32rem">
                    <img src="<?php echo IMG_PATH?>projects/discordlogo.png" class="card-img-top" alt="discord">
                        <div class="card-body" style="height:9rem">
                            <h3 class="card-title">Discord Bot</h3>
                            <p class="card-text"style = "color: #2b2b2b;">Discord bot that notifies you of your tasks.</p>

                        </div>
                        <div class="card-body">
                            <a href="<?php echo ENCRYPT_DECRYPT?>" class="btn btn-primary">Learn More</a>
                        </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card crd-center" style="width: 18rem;height:32rem">
                    <img src="<?php echo IMG_PATH?>logo.png" class="card-img-top" alt="gen1s">
                        <div class="card-body" style="height:9rem">
                            <h3 class="card-title">Website</h3>
                            <p class="card-text"style = "color: #2b2b2b;">This website font code.</p>

                        </div>
                        <div class="card-body">
                            <a href="<?php echo ENCRYPT_DECRYPT?>" class="btn btn-primary">Learn More</a>
                        </div>
                </div>
            </div>

            
            
        </div>
<?php include_once "templates/end.inc.php"?>