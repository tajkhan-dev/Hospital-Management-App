<?php include("./connection.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blog</title>
</head>
<body>
    <h2>Add Blog</h2>
    <form action="addblog_process.php" method="post" enctype="multipart/form-data">
        <label for="blogtitle">blogtitle:</label>
        <input type="text" name="blogtitle" id="blogtitle" required>
        <br><br>
        <label for="blogimage">blogimage:</label>
        <input type="file" name="blogimage" id="blogimage" required>
        <br><br>
        <label for="bloglink">bloglink:</label>
        <input type="text" name="bloglink" id="bloglink" required>
        <br><br>
        <label for="blogparagraph">blogparagraph:</label>
        <textarea name="blogparagraph" id="blogparagraph" rows="4" required></textarea>
        <br><br>
        <input type="submit" value="Add Blog">
    </form>
</body>
</html>




    <?php
    
     
    $title = $_POST["blogtitle"];
    $link = $_POST["bloglink"];
    $paragraph = $_POST["blogparagraph"];

   
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        exit();
    }


     
     $sql = "INSERT INTO blogs (`blogtitle`, `blogimage`, `bloglink`, `blogparagraph`) VALUES ('$title', '$target_file', '$link', '$paragraph')";

     if ($conn->query($sql) === TRUE) {
         echo "Blog added successfully!";
     } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }
 
    
     $conn->close();
 
 ?>


</body>
</html>