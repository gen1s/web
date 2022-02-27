<?php 
$title = "Discord Bot";
include_once "../templates/head.inc.php"?>
<body>
    <?php include_once "../templates/navbar.inc.php"?>
    <main class = "container-fluid">
        <div class="row">
            <div class="col-12 ">
                <h1 class="tab">Discord Bot</h1>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 ">
                <img src = "/img/projects/discordlogo.png" width ="50%" class="img-center">
            </div>
            
            <div class="col-12 col-md-6 ">
                <div class="margins">
                    <h3 style = "color: #2ccd70;">Information</h3>
                    <p style = "color: #e9e9e9;">
                        This is a 
                        <span style = "color: #2ccd70;" >discord</span>
                        bot to 
                        <span style = "color: #2ccd70;" >notify</span>
                        me if I have some tasks 
                        <span style = "color: #2ccd70;" >to do</span>.
                        It works only with discord 
                        <span style = "color: #2ccd70;" >commands</span>. 
                        Currently 
                        <span style = "color: #2ccd70;" >it doesn't work</span> 
                        because it notifies for a period of time. I 
                        <span style = "color: #2ccd70;" >will fix </span>this bug.
                        <br>
                        <br>
                    </p>

                    <h3 style = "color: #2ccd70;">How to use it</h3>
                    <p style = "color: #e9e9e9;">
                        I will 
                        <span style = "color: #2ccd70;" >not share</span>
                        my discord bot because the way it works it writes the tasks on a server file. This means 
                        <span style = "color: #2ccd70;" >it would notify everyone</span>
                        of my tasks. But you can still make  
                        <span style = "color: #2ccd70;" >your own discord bot</span> and 
                        <span style = "color: #2ccd70;" >copy paste</span> all the code.
                        <br>
                        These are the commands:
                        <br>
                        <br>
                        - <span style = "color: #2ccd70;" >*hTask</span> (Title) (min); This will create a task that notifies you hourly
                        <br>
                        <br>
                        - <span style = "color: #2ccd70;" >*dTask</span> (Title) (hour);This will create a task that notifies you daily
                        <br>
                        <br>
                        - <span style = "color: #2ccd70;" >*wTask</span> (Title) (hour) (weekday 0-6; 0 = Monday ... 6 = Sunday); This will create a task that notifies you weekly
                        <br>
                        <br>
                        - <span style = "color: #2ccd70;" >*mTask</span> (Title) (hour) (day); This will create a task that notifies you monthly
                        <br>
                        <br>
                        - <span style = "color: #2ccd70;" >Task</span> (Title) (hour) (date); This will create a task that notifies you once
                        <br>
                        <br>
                        - <span style = "color: #2ccd70;" >*list</span>; This will list all your tasks stored with some information.
                        <br>
                        <br>
                        - <span style = "color: #2ccd70;" >*remove</span> (Title); This will remove a task by its title.
                        <br>
                        <br>
                        - <span style = "color: #2ccd70;" >*notify</span>; This will notify you your tasks.
                        <br>
                        <br>
                        <span style = "color: #2ccd70;" >()</span>parameter <span style = "color: #2ccd70;" >;</span>Explanation
                    </p>
                    <a href="https://github.com/gen1s/discordBot" class = "btn btn-primary" target="_blank">Github/Dowload</a>
                </div>
            </div>
        </div>
<?php include_once "../templates/end.inc.php"?>