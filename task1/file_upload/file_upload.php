<?php
if(isset($_FILES['image'])){

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    move_uploaded_file($file_tmp,"upload-image/".$file_name);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
   <u> <h1><-----Uploading File----></h1></u>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>