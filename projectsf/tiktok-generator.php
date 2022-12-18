<?php 
$title = "Gen1s | Projects | TikTok Generator";
$keyword = "projects, tiktok, generator, tiktok generator, tiktok project";
$description = "This is my project about generating videos for TikTok. Here you have some information and the link to the github repository.";
$extra = "";
include_once "templates/head.inc.php"?>
<body>
    <?php include_once "templates/navbar.inc.php"?>
        
    <main class = "container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class = "tab" style = "color: #2ccd70">TikTok Video Generator</h1>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 ">
                <img src = "<?php echo IMG_PATH?>projects/tiktoklogo.png" width ="50%" class="img-center" alt="youtube">
            </div>
            
            <div class="col-12 col-md-6 ">
                <div class="margins">
                    <h3 style = "color: #2ccd70;">Information</h3>
                    <p style = "color: #e9e9e9;">
                        With this simple python 
                        <span style = "color: #2ccd70;" >script</span> you are able to
                        <span style = "color: #2ccd70;" >generate</span> a video to upload to 
                        <span style = "color: #2ccd70;" >TikTok</span>.
                        <br>
                        <br>
                        <span style = "color: #2ccd70;" >1</span> - It will 
                        <span style = "color: #2ccd70;" >scrape</span> a photo from a given 
                        <span style = "color: #2ccd70;" >subreddit</span> and will 
                        <span style = "color: #2ccd70;" >download</span> it.
                    
                        <br>
                        <span style = "color: #2ccd70;" >2</span> - It will 
                        <span style = "color: #2ccd70;" >select</span> 1 quote from the
                        "<span style = "color: #2ccd70;" >quotes.txt</span>" file. Then it will split the quote in 
                        <span style = "color: #2ccd70;" >2</span> diferent parts.
                        
                        <br>
                        <span style = "color: #2ccd70;" >3</span> - It will 
                        <span style = "color: #2ccd70;" >randomly</span> choose 1 of the specified songs located in the 
                        "<span style = "color: #2ccd70;" >music</span>" folder.
                        <br>
                        <span style = "color: #2ccd70;" >4</span> - It will merge all the components into a single
                        <span style = "color: #2ccd70;" >video</span>.
                        <br>
                        Here Is My TikTok Page
                        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@dailymotivat1onalquotes" data-unique-id="dailymotivat1onalquotes" data-embed-type="creator" style="max-width: 720px; min-width: 288px;" > <section> <a target="_blank" href="https://www.tiktok.com/@dailymotivat1onalquotes?refer=creator_embed">@dailymotivat1onalquotes</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
                    </p>

                    <h3 style = "color: #2ccd70;">How to use it</h3>
                    <p style = "color: #e9e9e9;">
                        Here are some things that you should do before using the script:
                        <br>
                        <br>
                        - Fill the 
                        <span style = "color: #2ccd70;" >reddit personal info</span> variables in the 
                        "<span style = "color: #2ccd70;" >main.py</span>" file.
                        <br>
                        
                        
                        <br>
                        You just need to run the script and in a few minutes the video will be saved as 
                        "<span style = "color: #2ccd70;" >output.mp4</span>" on the same folder where the
                        "<span style = "color: #2ccd70;" >main.py</span>" file.
                        <br>   
                        <br>
                        Thats all, now you manualy post the video to TikTok. 
                    </p>
                    <a href="https://github.com/gen1s/TikTok-Generator" class = "btn btn-primary" target="_blank">Github/Dowload</a>
                </div>
            </div>
        </div>  
<?php include_once "templates/end.inc.php"?>