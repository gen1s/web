<?php 
date_default_timezone_set("Europe/Madrid");
$title = "Gen1s | Comments";
include_once "app/dbh.inc.php";
include_once "app/comments.inc.php";
include_once "templates/head.inc.php"?>
<head><link href="<?php echo CSS_PATH;?>contact.css" rel = "stylesheet"></head>
<body>
    <?php include_once "templates/navbar.inc.php"?>
    <main class = "container-fluid">
        <div class="row">
            <div class="col-12" align="center">
                <div class="margins">
                    <div class="container-form">
                       <form action="<?php echo setComment($conn)?>" method="POST" class="form">
                            <div class="form-group">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" name='uid' placeholder="Your Name" tabindex="1" required>
                            </div>

                            <input type="hidden" name='date' value="<?php echo date('Y-m-d H:i:s')?>">

                            <div class="form-group">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
                            </div>
                            
                            <button name="commentSubmit" type="submit" class="btn btn-primary">Comment</button>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="margins">
                    <div class="row justify-conent-center">
                        
                    <?php getComment($conn)?>
                    
                    
                </div>
            </div>
        </div>
<?php include_once "templates/end.inc.php"?>