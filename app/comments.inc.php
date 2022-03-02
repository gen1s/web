<?php

function setComment($conn){
     if(isset($_POST['commentSubmit'])){

        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
        $result = $conn->query($sql);
    }
}

function getComment($conn){
    $sql = "SELECT * FROM comments order by date desc";
    $result = $conn->query($sql);
    
    $i = 5;
    while($row = $result->fetch_assoc()){
        echo '
        <div class="col-12 col-lg-6 col-xxl-4" align="center">
            <div class="margins">
                <div class="comment">
                    <div class="margins">
                        <p style="color:#2ccd70; font-size:26px" class="left"><span style="color:#e9e9e9; font-size: 14px" class="left">Posted By </span>' . $row["uid"] . '</p>
                        <p style="color:#e9e9e9">' . $row["message"] . '</p>
                        <p style="color:#e9e9e9" class="right"> '. $row["date"] . '</p>
                    </div>
                </div>
            </div>
        </div>
        ';
        $i = $i-1;
    }
}