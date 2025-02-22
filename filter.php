<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Grid Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style_filter.css">
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
                <li><a href="compare.php" style="--navAni:3">Comparison</a></li>
                <li><a href="filter.php" class="active" style="--navAni:4">Filter</a></li>
                <li><a href="offlink.php" style="--navAni:5">Official link</a></li>
            </ul>
        </div>
    </header>
    <div class="filter-container">
        <h1>Car Filters</h1>
        <form action="fil.php" method="POST">
            <label for="budget"><b>Budget</b></label>
            <select id="budget" name="budget">
                <option value="None">None</option>
                <option value="5">Under 5 Lakh</option>
                <option value="10">Under 10 Lakh</option>
                <option value="25">Under 25 Lakh</option>
                <option value="50">Under 50 Lakh</option>
                <option value="70">Under 70 Lakh</option>
                <option value="90">Under 90 Lakh</option>
                <option value="1">Under 1 Crore</option>
                <option value="2">Luxury Cars</option>
                <!-- Add more options based on your car data -->
            </select>
            <label for="fueltype"><b>Fuel-Type</b></label>
            <select id="fueltype" name="fueltype">
                <option value="None">None</option>
                <option value="petrol & diesel">Petrol & Diesel</option>
                <option value="CNG" >CNG</option>
                <option value="electric" >Electric</option>
                <option value="hybrid" >Hybrid</option>
            </select>
            <label for="transmission"><b>Transmission</b></label>
            <select id="transmission" name="transmission">
                <option value="None">None</option>
                <option value="manual">Manual</option>
                <option value="automatic">Automatic</option>
            </select>
            <label for="seats"><b>Seating-Capacity</b></label>
            <select id="seats" name="seats">
                <option value="None">None</option>
                <option value="5"> 5 Seater</option>
                <option value="6">6 Seater</option>
                <option value="7" >7 Seater</option>
                <option value="8" >8 Seater</option>
            </select>
            <label for="mileage"><b>Mileage</b></label>
            <select id="mileage" name="mileage">
                <option value="None">None</option>
                <option value="10">Upto 10 Kmpl</option>
                <option value="15">11 Kmpl-15 Kmpl</option>
                <option value="20" >16 Kmpl-20 Kmpl</option>
                <option value="25" >Above 20 Kmpl</option>
            </select> 
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>