<?php

require_once ('./operations.php')
?>



<DOCTYPE html>
    <html lang = "en">
    <head>
        <meta charset ="UTF-8">
        <meta http-equiv="X-UA-Compitable" content ="IE=edge">
        <meta name="viewport" content="width-device-width", initial-scale = 1.0">
        <title>Image Upload</title>
        <style type="text/css">
            body {
                background: linear-gradient(90deg, #cfecd0, #ffc5ca);
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

    <h1 class="text-center my-3"> 📋 Registration Form</h1>
    <div class="container d-flex justify-content-center">
        <form action="display.php" method="post"  class="w-50" enctype="multipart/form-data">

            <?php  inputFields("username", "username", "", "text") ?>
            <?php  inputFields("mobile", "mobile", "", "text") ?>
            <?php  inputFields("", "file", "", "file") ?>
            <button class="btn btn-light" type="submit" name="submit">submit</button>
        </form>
    </div>
    </body>
    </html>