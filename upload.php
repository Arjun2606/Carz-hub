<?php
require 'config.php';
if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    if($_FILES["image"]["error"]===4)
    {
        echo "<script> alert('Image does not exist');</script>";
    }
    else
    {
        $fileName=$_FILES["image"]["name"];
        $fileSize=$_FILES["image"]["size"];
        $tmpName=$_FILES["image"]["tmp_name"];

        $validImageExtension=['.jpg','.jpeg','.png'];
        $imageExtension=explode('.',$fileName);
        $imageExtension=strtolower(end($imageExtension));
        if(in_array($imageExtension,$validImageExtension))
        {
            echo "<script> alert('Invalid Image Extension');</script>";
        }
        else if($fileSize>1000000)
        {      
            echo "<script> alert('Image size is Too Large');</script>";
        }
        else 
        {
            $newImageName=uniqid();
            $newImageName .= '.' . $imageExtension;

            move_uploaded_file($tmpName, 'img/'.$newImageName);
            $query="INSERT INTO filter(name,image) VALUES('$name', '$newImageName')";
            mysqli_query($conn,$query);
            echo "<script>
                alert('Successfully Added');
                document.location.href='data.php';
                </script>";
        }
    }
}
?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
        <head>
            <meta charset ="utf-8">
            <title>Upload Image File</title>
        </head>
        <body>
            <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
                <label for="name">Name :</label>
                <input type="text" name="name" id="name" required value=""><br>
                <label for="image">Image :</label>
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value=""><br><br>
                <button type="submit" name="submit">Submit</button>
            </form>
            <br>
            <a href="data.php">Data</a>
        </body>
    </html>