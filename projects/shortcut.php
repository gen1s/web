<?php 
$title = "Shortcut";
include_once "../templates/head.inc.php"?>
<body>
    <?php include_once "../templates/navbar.inc.php"?> 
    <main class = "container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="tab">Shortcut Generator</h1>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6">
                <img src = "/img/projects/srct.png" width ="50%" class="img-center">
            </div>
            
            <div class="col-12 col-md-6">
                <div class="margins">
                    <h3 style = "color: #2ccd70;">Information</h3>
                    <p style = "color: #e9e9e9;">
                        This is a program made with 
                        <span style = "color: #2ccd70;" >Python</span>.
                        With this program you can 
                        <span style = "color: #2ccd70;" >generate .bat</span>
                        files. These files will 
                        
                        <span style = "color: #2ccd70;" >execute</span>
                        all the programs you want 
                        <span style = "color: #2ccd70;" >at once</span>. 
                        <br>
                        <br>
                    </p>

                    <h3 style = "color: #2ccd70;">How to use it</h3>
                    <p style = "color: #e9e9e9;">
                        First open the program. Then click on the
                        <span style = "color: #2ccd70;">open file</span>
                        button. Then, just select the 
                        <span style = "color: #2ccd70;">.exe</span>
                        file of the program you want to execute.
                        Do this as 
                        <span style = "color: #2ccd70;">many times</span>
                        as you want for the 
                        <span style = "color: #2ccd70;">diferent programs</span>
                        you want.
                        <br>
                        <br>
                        Last, click on the 
                        <span style = "color: #2ccd70;" >generate file</span>
                        button. A 
                        <span style = "color: #2ccd70;" >.bat file</span> will apear on
                        <span style = "color: #2ccd70;" >the same folder</span> where the genarator program is running.
                        <span style = "color: #2ccd70;" >You can rename</span> the file if you want.
                    </p>
                    <br>
                    <a href="https://github.com/gen1s/shortcut" class = "btn btn-primary" target="_blank">Github/Dowload</a>
                </div>
            </div>
        </div>
<?php include_once "../templates/end.inc.php"?>