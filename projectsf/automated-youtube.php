<?php 
$title = "Gen1s | Projects | Automated Youtube";
$keyword = "projects, youtube, automated, automated youtube, youtube project";
$description = "This is my project about automating a youtube channel. Here you have some information and the link to the github repository.";
include_once "templates/head.inc.php"?>
<body>
    <?php include_once "templates/navbar.inc.php"?>
        
    <main class = "container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class = "tab" style = "color: #2ccd70">Automated Youtbe Channel</h1>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 ">
                <img src = "<?php echo IMG_PATH?>projects/youtubelogo.png" width ="50%" class="img-center" alt="youtube">
            </div>
            
            <div class="col-12 col-md-6 ">
                <div class="margins">
                    <h3 style = "color: #2ccd70;">Information</h3>
                    <p style = "color: #e9e9e9;">
                        With this simple python 
                        <span style = "color: #2ccd70;" >script</span> you are able to
                        <span style = "color: #2ccd70;" >automate</span> an entire 
                        <span style = "color: #2ccd70;" >youtube channel</span>.
                        <br>
                        <br>
                        <span style = "color: #2ccd70;" >1</span> - It will 
                        <span style = "color: #2ccd70;" >scrape</span> videos from a given 
                        <span style = "color: #2ccd70;" >subreddit</span> and will 
                        <span style = "color: #2ccd70;" >download</span> them on your 
                        "<span style = "color: #2ccd70;" >memes</span>" folder.
                        <br>
                        <span style = "color: #2ccd70;" >2</span> - It will 
                        <span style = "color: #2ccd70;" >merge</span> all the non corrupted 
                        <span style = "color: #2ccd70;" >videos</span> into 1 single video. This video is 
                        <span style = "color: #2ccd70;" >saved</span> on your 
                        "<span style = "color: #2ccd70;" >output</span>" folder.
                        <br>
                        <span style = "color: #2ccd70;" >3</span> - It will 
                        <span style = "color: #2ccd70;" >upload</span> the video to 
                        <span style = "color: #2ccd70;" >youtube</span>.
                        <br>

                        <br>

                        This is my <a href = "https://www.youtube.com/channel/UC3TKf4aKWhalYtPzfn2lbQw" style = "color:#2ccd70;">test youtube channel<a>. subscribe ;)
                    </p>

                    <h3 style = "color: #2ccd70;">How to use it</h3>
                    <p style = "color: #e9e9e9;">
                        Here are some things that you should do before using the script:
                        <br>
                        <br>
                        <span style = "color: #2ccd70;" >-</span> On the 
                        <span style = "color: #2ccd70;" >same folder</span> where the 
                        <span style = "color: #2ccd70;" >main.py</span> file is, you have to create 2 folders. One named 
                        "<span style = "color: #2ccd70;" >memes</span>" and another one named 
                        "<span style = "color: #2ccd70;" >output</span>"
                        <br>
                        - Fill the 
                        <span style = "color: #2ccd70;" >reddit personal info</span> variables in the 
                        <span style = "color: #2ccd70;" >main.py</span> file.
                        <br>
                        - Get your own 
                        <span style = "color: #2ccd70;" >client_secrets.json</span>
                        <br>
                        <br>
                        Thats all.
                        <br>
                        You just need to run the script and in a few minutes the video will be uploaded to youtube.
                        <br>    
                    </p>
                    <a href="https://github.com/gen1s/Automated-Youtube" class = "btn btn-primary" target="_blank">Github/Dowload</a>
                </div>
            </div>
        </div>  
<?php include_once "templates/end.inc.php"?>