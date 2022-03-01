<?php

$conn = mysqli_connect("localhost", "root", "", "comentsection");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}