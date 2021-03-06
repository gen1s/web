<?php
include_once "app/contact.inc.php";
$title = "Gen1s | Contact Me | Thanks For Contacting Me";
$keyword = "Contact, contact form, contact me";
$description = "Fill this simple contact form to contact me. I will make sure to read you as fast as I can and reply to you if it's necesary.";
include_once "templates/head.inc.php";
?>

<head><link href="<?php echo CSS_PATH;?>contact.css" rel = "stylesheet"></head>
<body>
    <?php include_once "templates/navbar.inc.php"?>
        
    <main class = "container-fluid">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="margins">
                <h1 style = "color: #2ccd70; font-size: 450%;" class="tab">Contact Me</h1>
                <p  style = "color: #e9e9e9;">
                 I leave you this 
                 <span style = "color: #2ccd70;" >form</span> here. If you want to 
                 <span style = "color: #2ccd70;" >contact me</span>, just fill the folowing inputs
                 with the required information. Click on the 
                 "<span style = "color: #2ccd70;" >Send</span>" button once you are done.
                 <br>
                 <br>
                 I will try to read you as fast as posible.
                </p>
            </div>

        </div>  
        <div class="col-12 col-md-6" align="center">
            <div class="margins">
                <?php if($messageSent):?>
                    <h1 style = "color: #2ccd70">Thank You For Your Feed Back</h1>
                <?php else: ?>
                <div class="container-form">
                   <form action="https://formsubmit.co/566661d79790c8a672e64a21a6d933a5 " method="POST" class="form">
                        <div class="form-group">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" tabindex="1" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Example@example.com" tabindex="2" required>
                        </div>
                        <div class="form-group">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3" required>
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
                        </div>

                        <input type="hidden" name="_next" value="<?php echo THANKS?>">
                        <input type="hidden" name="_captcha" value="false">

                        <button type="submit" class="btn btn-primary">Send</button>

                    </form> 
                </div>
                
            </div>
        </div>
    </div>
    <?php endif;?>
    
<?php include_once "templates/end.inc.php"?>