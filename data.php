<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<style>
        .container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px; /* Adjust this value as needed */
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
    <head>
        <meta charset="utf-8">
        <title>Data</title>
    </head>
    <body>
         <div class="container">
            <a href="upload.php">
                <button type="button">UPLOAD</button>
            </a>
        </div>
        <table border = 1 cellspacing = 0 cellpadding = 10>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Image</td>
            </tr>
            <?php
            $i=1;
            $rows = mysqli_query($conn,"SELECT * FROM filter ORDER BY id DESC");
            ?>
            <?php foreach($rows as $row): ?>
            <tr>    
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td> <img src="img/<?php echo $row['image']; ?>" width = 200 title="<?php echo $row['image']; ?>"></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <br>
    </body>
</html>