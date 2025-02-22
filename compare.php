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
        <h1 STYLE="text-align:center;">Select Your Cars...!</h1>
<form action="process.php" method="POST">
    <div class="container1">
        <!-- Left Side -->
        <div>
            <h2>Car-A</h2>
            <input type="text" name="car_a_search" placeholder="Search">
        </div>
        <!--Right side-->
            <button type="submit">Compare</button>
        <div>
            <h2>Car-B</h2>
            <input type="text" name="car_b_search" placeholder="Search">
        </div> 
    </div>
</form>

        <!-- Container 1 with input box -->
    <div class="container2">
        <div class="input">
            <input type="text" name="owner" placeholder="none">
        </div>
            <b><label for="Owner">Owner</label></b>
        <div class="input">
            <input type="text" name="owner" placeholder="none">
        </div>
    </div>

    <div class="container3">
        <div class="input">
            <input type="text" name="budget" placeholder="none">
        </div>
            <b><label for="Budget">Budget</label></b>
        <div class="input">
            <input type="text" name="budget" placeholder="none">
        </div>
    </div>

    <div class="container2">
        <div class="input">
            <input type="text" name="body_type" placeholder="none">
        </div>
            <b><label for="Body-type">Body-type</label></b>
        <div class="input">
            <input type="text" name="body_type" placeholder="none">
        </div>
    </div>

    <div class="container3">
        <div class="input">
            <input type="text" name="engine" placeholder="none">
        </div>
            <b><label for="Engine">Engine</label></b>
        <div class="input">
            <input type="text" name="engine" placeholder="none">
        </div>
    </div>

    <div class="container2">
        <div class="input">
            <input type="text" name="mileage" placeholder="none">
        </div>
            <b><label for="Mileage">Mileage</label></b>
        <div class="input">
            <input type="text" name="mileage" placeholder="none">
        </div>
    </div>

    <div class="container3">
        <div class="input">
            <input type="text" name="seats" placeholder="none">
        </div>
            <b><label for="Seats">Seats</label></b>
        <div class="input">
            <input type="text" name="seats" placeholder="none">
        </div>
    </div>

    <div class="container2">
        <div class="input">
            <input type="text" name="transmission" placeholder="none">
        </div>
        <b><label for="Transmission">Transmission</label></b>
        <div class="input">
            <input type="text" name="transmission" placeholder="none">
        </div>
    </div>

    <div class="container3">
        <div class="input">
            <input type="text" name="fuel_type" placeholder="none">
        </div>
            <b><label for="Fuel-type">Fuel-type</label></b>
        <div class="input">
            <input type="text" name="fuel_type" placeholder="none">
        </div>
    </div>

    <div class="container2">
        <div class="input">
            <input type="text" name="colours" placeholder="none">
        </div>
            <b><label for="Colours">Colours</label></b>
        <div class="input">
            <input type="text" name="colours" placeholder="none">
        </div>
    </div>

  <script>
    // Function to go back (can be customized)
    function goBack() 
    {
      window.history.back();
    }
  </script>
</body>
</html>
