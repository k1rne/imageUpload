<?php

$con= new mysqli("localhost","root","", "image_upload_project");

if(!$con){
    die(mysqli_error($con));
}
?>