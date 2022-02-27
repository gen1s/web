<?php 
$title = "Encrypt - Decript";
include_once "./templates/head.inc.php"?>
<body>
    <?php include_once "./templates/navbar.inc.php"?>
    <main class = "container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="tab">GUI Encrypt Decrypt</h1>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6">
                <img src = "/img/projects/encdecimg.png" width ="50%" class="img-center">
            </div>
            
            <div class="col-12 col-md-6">
                <div class="margins">
                    <h3 style = "color: #2ccd70;">Information</h3>
                    <p style = "color: #e9e9e9;">
                        This is a program to 
                        <span style = "color: #2ccd70;" >encrypt</span> or 
                        <span style = "color: #2ccd70;" >decrypt</span> your files easily. It encrypts/decrypts 
                        <span style = "color: #2ccd70;" >all</span> the 
                        <span style = "color: #2ccd70;" >files</span> inside a chosen 
                        <span style = "color: #2ccd70;" >folder</span> 
                        (make sure there is no folders inside). To do it you will need a 
                        <span style = "color: #2ccd70;" >key</span> stored in a 
                        <span style = "color: #2ccd70;" >".key" file</span>. You can 
                        <span style = "color: #2ccd70;" >generate</span> the keys usig the program.
                        You can rename this files but 
                        <span style = "color: #2ccd70;" >don't modify them</span>. Don't modify the alredy encripted files either, or 
                        <span style = "color: #2ccd70;" >you won't be able to decrypt them</span>.
                        <br>
                        <br>
                    </p>
                    <h3 style = "color: #2ccd70;">How to use it</h3>
                    <p style = "color: #e9e9e9;">
                        First select an option between 
                        <span style = "color: #2ccd70;" >Encrypt</span> and 
                        <span style = "color: #2ccd70;" >Decrypt</span>. 
                        <br>
                        <br>
                        If you 
                        <span style = "color: #2ccd70;" >selected Encrypt</span> then browse 
                        <span style = "color: #2ccd70;" >the path of the folder</span> where the file is in.
                         Now you have to select if u want to 
                         <span style = "color: #2ccd70;" >generate</span> a new key or 
                         <span style = "color: #2ccd70;" >use one</span> that you have 
                         <span style = "color: #2ccd70;" >alredy generated</span>. If you have chosen to 
                         <span style = "color: #2ccd70;" >generate</span> 
                        the key just click on 
                        <span style = "color: #2ccd70;" >Encrypt</span>. If not, just 
                        <span style = "color: #2ccd70;" >browse the key location</span> before clicking on Encrypt.
                        <br>
                        <br>
                        If you selected 
                        <span style = "color: #2ccd70;" >Decrypt</span> then 
                        <span style = "color: #2ccd70;" >browse the folder</span> where the file is in, and 
                        <span style = "color: #2ccd70;" >the key file</span>. Then just click on 
                        <span style = "color: #2ccd70;" >Decrypt</span>.
                    </p>
                    <br>
                    <a href="https://github.com/gen1s/GUI-Encrypt-Decrypt" class = "btn btn-primary" target="_blank">Github/Dowload</a>
                </div>
            </div>
        </div>
<?php include_once "./templates/end.inc.php"?>