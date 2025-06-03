<?php

include('./connect.php');

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $image = $_FILES['file'];
    //echo $username;
   // echo "<br>";
    //echo $mobile;
   // echo "<br>";
   // print_r($image);
    //echo "<br>";
    $image_file_name=$image['name'];
    //print_r($image_file_name);
    //echo "<br>";
    $image_file_error=$image['error'];
    //print_r($image_file_error);
    //echo "<br>";
    $image_file_temp=$image['tmp_name'];
    //print_r($image_file_temp);
   // echo "<br>";

    $filename_separate=explode('.',$image_file_name);
   // print_r($filename_separate);

    //$file_extension=strlower($filename_separate[1]);
    //print_r($file_extension);
    //echo "<br>";
    $file_extension=strtolower(end($filename_separate));
    //print_r($file_extension);
   

    $extension=array("jpeg","jpg","png","gif");
    if(in_array($file_extension,$extension)) {
        $upload_image='images/'.$image_file_name;
        move_uploaded_file($image_file_temp,$upload_image);

        $sql="INSERT INTO `registration` (name, mobile, image) VALUES ('$username','$mobile','$upload_image')";
        $result=mysqli_query($con,$sql);

        if($result) {
            echo ' <div class="alert alert-success" role="alert">
 <strong>Success </strong> DATA inserted successfully! 😎
</div> ';
        }else{
            die(mysqli_error($con));
        }
    }


}
?>


<DOCTYPE html>
    <html lang = "en">
    <head>
        <meta charset ="UTF-8">
        <meta http-equiv="X-UA-Compitable" content ="IE=edge">
        <meta name="viewport" content="width-device-width", initial-scale = 1.0">
        <title>Display Data</title>
        <style type="text/css">
            body {
                background: linear-gradient(90deg, #cfecd0, #a0cea7, #9ec0db);
            }
            img{
                width:100px;

            }
        </style>

        <!--bootstrap css cdn -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- stylesheet -->
        <link rel ="stylesheet" href = "style.css">
        <!-- font awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    </head>
    <body>
    <h1 class = "text-center my-4">User Data</h1>
    <div class="container mt-5 d-flex justify-content-center">
        <table class="table table-bordered w-50">
            <thead class="table-dark">
            <tr>
                <th scope="col">№</th>
                <th scope="col">username</th>
                <th scope="col">image</th>
            </tr>
            </thead >
            <tbody>
            <?php
                $sql="SELECT * FROM `registration`";
                $result=mysqli_query($con,$sql);
                while ($row=mysqli_fetch_assoc($result)) {

                    $id=$row['id'];
                    $name=$row['name'];
                    $image=$row['image'];
                    echo '<tr>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td><img src='.$image.'></td>

            </tr>';
 }

            ?>



            </tbody>
        </table>
    </div>
    </body>
    </html>