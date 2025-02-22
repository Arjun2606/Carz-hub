
<?php
// Check if form is submitted
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Get values entered by the user
    $car_a_search = $_POST["car_a_search"];
    $car_b_search = $_POST["car_b_search"];

    // Perform backend processing, such as fetching data from the database
    // For demonstration purposes, we'll just display the entered values
    //echo "Car-A Search: " . $car_a_search . "<br>";
    //echo "Car-B Search: " . $car_b_search . "<br>"."<br>";
    
    $sql = "SELECT * FROM compare WHERE name LIKE '%$car_a_search%'";
    $sql1 = "SELECT * FROM compare WHERE name LIKE '%$car_b_search%'";

    $result = $conn->query($sql);
    $result1 = $conn->query($sql1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Image Grid Page</title>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="style_compare.css">
</head>
<body>
    <header class="container">
        <div class="page-header">
            <div class="logo">
                <a href="#"></a>
                <img src="gold1.png" width="190px">
            </div>
            <input type="checkbox" id="click">

            <label for="click" class="mainicon">
                <div class="menu">
                    <i class='bx bx-menu'></i>
                </div>
            </label>
            <ul>
                <li><a href="home.php"  style="--navAni:1">Home</a></li>
                <li><a href="Brand.php"  style="--navAni:2">Brands</a></li>
                <li><a href="compare.php" class="active" style="--navAni:3">Comparison</a></li>
                <li><a href="filter.php" style="--navAni:4">Filter</a></li>
                <li><a href="offlink.php" style="--navAni:5">Official link</a></li>
               
            </ul>
        </div>
    </header>

<?php
    if (($result->num_rows > 0) && ( $result1->num_rows > 0 ) ) 
    {
        // Output data of each row
        while(($row = $result->fetch_assoc()) &&( $row1 = $result1->fetch_assoc()) )
        {
?>
<form action="process.php" method="POST">
    <div class="container1">
        <!-- Left Side -->
        <div class="input">
            <h2>Car-A</h2>
            <input type="text" name="car_a_search" value="<?php echo $row['name']?>" placeholder="Search">
        </div>
        <!--Right side-->
        <button type="submit">Compare</button>
        <div class="input1">
            <h2>Car-B</h2>
            <input type="text" name="car_b_search" value="<?php echo $row1['name']?>" placeholder="Search">
        </div> 
    </div>
    <div class="container2">
        <div class="input">
            <input type="text" name="owner" value="<?php echo $row['owner']?>" placeholder="none">
        </div>
            <b><label for="Owner">Owner</label></b>
        <div class="input1">
            <input type="text" name="owner" value="<?php echo $row1['owner']?>"  placeholder="none">
        </div>
    </div>

    <div class="container3">
        <div class="input">
            <input type="text" name="budget" value="<?php echo $row['budget']?>" placeholder="none">
        </div>
        <b><label for="Budget">Budget</label></b>
        <div class="input1">
            <input type="text" name="budget" value="<?php echo $row1['budget']?>" placeholder="none">
        </div>
    </div>

    <div class="container2">
        <div class="input">
            <input type="text" name="body_type" value="<?php echo $row['bodytype']?>" placeholder="none">
        </div>
            <b><label for="Body-type">Body-type</label></b>
        <div class="input1">
            <input type="text" name="body_type" value="<?php echo $row1['bodytype']?>" placeholder="none">
        </div>
    </div>

    <div class="container3">
        <div class="input">
            <input type="text" name="engine" value="<?php echo $row['engine']?>" placeholder="none">
        </div>
        <b><label for="Engine">Engine</label></b>
        <div class="input1">
            <input type="text" name="engine" value="<?php echo $row1['engine']?>" placeholder="none">
        </div>
    </div>

    <div class="container2">
        <div class="input">
            <input type="text" name="mileage" value="<?php echo $row['mileage']?>" placeholder="none">
        </div>
            <b><label for="Mileage">Mileage</label></b>
        <div class="input1">
            <input type="text" name="mileage" value="<?php echo $row1['mileage']?>" placeholder="none">
        </div>
    </div>

    <div class="container3">
        <div class="input">
            <input type="text" name="seats" value="<?php echo $row['seats']?>" placeholder="none">
        </div>
            <b><label for="Seats">Seats</label></b>
        <div class="input1">
            <input type="text" name="seats" value="<?php echo $row1['seats']?>" placeholder="none">
        </div>
    </div>

    <div class="container2">
        <div class="input">
            <input type="text" name="transmission" value="<?php echo $row['transmission']?>" placeholder="none">
        </div>
            <b><label for="Transmission">Transmission</label></b>
        <div class="input1">
            <input type="text" name="transmission" value="<?php echo $row1['transmission']?>" placeholder="none">
        </div>
    </div>

    <div class="container3">
        <div class="input">
            <input type="text" name="fuel_type" value="<?php echo $row['fueltype']?>" placeholder="none">
        </div>
        <b><label for="Fuel-type">Fuel-type</label></b>
        <div class="input1">
            <input type="text" name="fuel_type" value="<?php echo $row1['fueltype']?>" placeholder="none">
        </div>
    </div>

    <div class="container2">
        <div class="input">
            <input type="text" name="colours" value="<?php echo $row['color']?>" placeholder="none">
        </div>
            <b><label for="Colours">Colours</label></b>
        <div class="input1">
            <input type="text" name="colours" value="<?php echo $row1['color']?>" placeholder="none">
        </div>
    </div>
</form>
</body>
</html>
<?php
        }
    } 
    else 
    {
        echo "0 results";
    }
}
else 
{
    // If the form is not submitted, redirect the user back to the form page
    header("Location: index.html");
    exit();
}
?>