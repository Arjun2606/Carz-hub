<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Grid Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@200;300;400;500;600;700;800&family=Roboto:wght@100;300;400&display=swap');

        :root {
            --primary-color: #f4ca51;
            --primary-dark: #1F252E;
        }

        * {
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background: hsl(0, 0%, 100%);
            height: 100vh;
            color: #000;
        }

        /* Genral */
        .container {
            padding: 0 8.4rem;
        }

        .img-w {
            width: 100%;
            height: auto;
        }

        button {
            background-color: var(--primary-color);
            border: 2px solid var(--primary-color);
            font-family: 'Outfit', sans-serif;
            padding: 1rem 1.5rem;
            font-weight: 600;
            font-size: 1rem;
            border-radius: 10px;
        }

        /* Nav */
        header {
            background-color: hsl(309.07deg 62.32% 27.06%);
            position: sticky;
            top: 0;
            z-index: 1;
        }
        h1{
            color:hsl(309.07deg 62.32% 27.06%);
        }
        p{
            color:hsl(309.07deg 62.32% 27.06%);
            font-size:medium;
        }
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            opacity: 0;
            animation: leftSideAni 1s ease forwards;
        }

        .logo a {
            color: var(--primary-color);
            text-decoration: none;
        }

        ul {
            display: flex;
            gap: .6rem;
            list-style-type: none;
            background-color: transparent;
            overflow: hidden;
        }

        li a {
            display: inline-block;
            padding: .3rem 1rem;
            color: #fff;
            text-decoration: none;
            font-size: 1.05rem;
            font-weight: 300;
            letter-spacing: .7px;
            border-radius: 36px;
            line-height: 2;
            transition: .3s;
            opacity: 0;
            animation: navani .3s ease forwards;
            animation-delay: calc(.15s * var(--navAni));
        }

        li a.active,
        li a:hover {
            color: var(--primary-color);
        }

        .nav-btn {
            font-size: .9rem;
            padding: .6rem 1.5rem;
            opacity: 0;
            animation: rightSideAni 1s ease forwards;
        }

        #click {
            display: none;
        }

        .menu {
            display: none;
        }

        .nav-btn {
            display: block;
        }

        .nav-btn-mobile {
            display: none;
        }

        /* Nav End */

        /* Section 1 */

        .main {
            padding-top: 4rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        .main .detail {
            width: 50%;
        }

        .main .discount {
            color: #000000;
            font-size: 1rem;
            font-weight: 300;
            word-spacing: 8px;
            opacity: 0;
            animation: topSideAni 1s ease forwards;
        }

        .main .discount::before {
            content: "";
            height: 3px;
            width: 60px;
            display: inline-block;
            background-color: var(--primary-color);
            margin-bottom: 5px;
            margin-right: 10px;
        }

        .main h1 {
            color: #f00d0d;
            font-size: 4rem;
            font-weight: 600;
            opacity: 0;
            animation: leftSideAni 1s ease forwards;
            animation-delay: 1s;
        }

        .main button {
            margin-top: 1.5rem;
            opacity: 0;
            animation: topSideAni 1s ease forwards;
            animation-duration: 1s;
        }

        .images {
            width: 50%;
            text-align: end;
        }

        .images img {
            background-color: var(--primary-color);
            width: 450px;
            border-radius: 50%;
        }

        /* Section 1 End */

        /* Animation */
        @keyframes leftSideAni {
            0% {
                transform: translateX(-100px);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes navani {
            0% {
                transform: translateY(100px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes rightSideAni {
            0% {
                transform: translateX(100px);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes topSideAni {
            0% {
                transform: translateY(-100px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* @keyframes ImgAni {
    0% {
        transform: translateX(0);
    }
    50% {
        transform: translateX(-9px);
    }
    100% {
        transform: translateX(0);
    }
} */
        @keyframes imageAni {
            0% {
                opacity: 0;
                transform: scale(0);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @media screen and (max-width: 1024px) {
            .container {
                padding: 0 4.4rem;
            }

            .main h3 {
                color: #000;
                margin-top: 1rem;
            }
        }

        @media screen and (max-width: 768px) {
            html {
                font-size: 75%;
            }

            .container {
                padding: 0 1.6rem;
            }

            .images img {
                width: 330px;
            }
        }

        @media screen and (max-width:600px) {
            body {
                height: auto;
            }

            header {
                height: auto;
            }

            ul {
                background: hsl(309.07deg 62.32% 27.06%);
                width: 100%;
                height: 100vh;
                position: absolute;
                display: flex;
                flex-direction: column;
                text-align: center;
                top: 3.4rem;
                left: -100%;
                z-index: 111111;
            }

            .menu {
                display: block;
                font-size: 1.5rem;
                font-weight: bold;
                color: var(--primary-color);
            }

            #click:checked~ul {
                left: 0%;
                transition: all 0.3s ease;
            }

            .nav-btn {
                display: none;
            }

            .nav-btn-mobile {
                display: block;
            }

            .main .detail {
                width: 100%;
            }

            .images {
                text-align: center;
                width: 100%;
            }

            .main {
                margin-top: 2rem;
            }
        }

        @media screen and (max-width: 375px) {
            .images img {
                width: 280px;
            }
        }
        .image-grid {
            display: flex;
            flex-direction: column; /* Items are in a column */
            gap: 20px;
            padding: 20px;
        }
        
        .grid-row {
            display: flex;
            gap: 20px;
        }
        
        .grid-item {
            text-align: center;
            flex: 1;
            animation: navani 2s ease backwards;
            animation-delay: calc(.15s * var(--navAni))
        }
        
        .grid-item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .grid-item h2 {
            margin-top: 10px;
            font-size: 18px;
            color: #333;
        }
        a {
                    text-decoration: none;
                }
        /* Remove underline only for links within elements with class "no-underline" */
        .no-underline a {
            text-decoration: none;
        }
        
</style>
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
                <li><a href="Brand.php" class="active" style="--navAni:2">Brands</a></li>
                <li><a href="compare.php" style="--navAni:3">Comparison</a></li>
                <li><a href="filter.php" style="--navAni:4">Filter</a></li>
                <li><a href="offlink.php" style="--navAni:5">Official link</a></li>
            </ul>
        </div>
    </header>
        <h1 STYLE="text-align:center;">MERCEDES-BENZ</h1>
    <!-- Repeat the above structure for the remaining 6 images and titles -->
</div>
<div class="image-grid">
    <div class="grid-row">
        <div class="grid-item" style="--navAni:6">
        <a href="benz a-class.php">
            <img src="cars\benz\a-class.jpg" alt="Image 1"></a>
            <h2>BENZ A-CLASS</h2>
        </div>
        <div class="grid-item" style="--navAni:7">
        <a href="benz amg-a35.php">
            <img src="cars\benz\amg-a35.jpg" alt="Image 2"></a>
            <h2>BENZ AMG-A35</h2>
        </div>
        <div class="grid-item" style="--navAni:8">
        <a href="benz amg-a45.php">
            <img src="cars\benz\amg-a45.jpg" alt="Image 3"></a>
            <h2>BENZ AMG-A45</h2>
        </div>
    </div>
    <div class="grid-row">
        <div class="grid-item" style="--navAni:9">
        <a href="benz amg-43.php">
            <img src="cars\benz\amg-c-43.jpg" alt="Image 1"></a>
            <h2>BENZ AMG-C-43</h2>
        </div>
        <div class="grid-item" style="--navAni:10">
        <a href="benz amg-e53.php">
            <img src="cars\benz\amg-e53.jpg" alt="Image 2"></a>
            <h2>BENZ AMG-E53</h2>
        </div>
        <div class="grid-item" style="--navAni:11">
        <a href="benz amg-e53 exterior.php">
            <img src="cars\benz\amg-e53-exterior.jpg" alt="Image 3"></a>
            <h2>BENZ AMG-E53-EXTERIOR</h2>
        </div>
    </div>
    <div class="grid-row">
        <div class="grid-item" style="--navAni:12">
        <a href="benz amg-e63.php">
            <img src="cars\benz\amg-e63.jpg" alt="Image 1"></a>
            <h2>BENZ AMG-E63</h2>
        </div>
        <div class="grid-item" style="--navAni:13">
        <a href="benz amg-eqs.php">
            <img src="cars\benz\amg-eqs.jpg" alt="Image 2"></a>
            <h2>BENZ AMG-EQS</h2>
        </div>
        <div class="grid-item" style="--navAni:14">
        <a href="benz amg-gla35.php">
            <img src="cars\benz\amg-gla35.jpg" alt="Image 3"></a>
            <h2>BENZ AMG-GLA35</h2>
        </div>
    </div>
    <div class="grid-row">
        <div class="grid-item" style="--navAni:15">
        <a href="benz amg-glc43.php">
            <img src="cars\benz\amg-glc43.jpg" alt="Image 1"></a>
            <h2>BENZ AMG-GLC43</h2>
        </div>
        <div class="grid-item" style="--navAni:16">
        <a href="benz amg-gle.php">
            <img src="cars\benz\amg-gle.jpg" alt="Image 2"></a>
            <h2>BENZ AMG-GLE</h2>
        </div>
        <div class="grid-item" style="--navAni:17">
        <a href="benz amg-gt63performance.php">
            <img src="cars\benz\amg-gt-63-performance.jpg" alt="Image 2"></a>
            <h2>BENZ AMG-GT-63-PERFORMANCE</h2>
        </div>
    </div>
    <div class="grid-row">
    <div class="grid-item" style="--navAni:15">
    <a href="benz amg-gt60 plus.php">
        <img src="cars\benz\amg-gt-63-plus.jpg" alt="Image 1"></a>
        <h2>BENZ AMG-GT-63-PLUS</h2>
    </div>
    <div class="grid-item" style="--navAni:16">
    <a href="benz amg-s155.php">
        <img src="cars\benz\amg-sl55.jpg" alt="Image 2"></a>
        <h2>BENZ AMG-SL55<AMG-SL55></AMG-SL55></h2>
    </div>
    <div class="grid-item" style="--navAni:17">
    <a href="benz c-class.php">
        <img src="cars\benz\c-class.jpg" alt="Image 2"></a>
        <h2>BENZ C-CLASS</h2>
    </div>
</div>
<div class="grid-row">
<div class="grid-item" style="--navAni:15">
<a href="benz e-class.php">
    <img src="cars\benz\e-class.jpg" alt="Image 1"></a>
    <h2>BENZ E-CLASS</h2>
</div>
<div class="grid-item" style="--navAni:16">
<a href="benz eqb.php">
    <img src="cars\benz\eqb.jpg" alt="Image 1">
     <h2>BENZ EQB</h2>
</div>
<div class="grid-item" style="--navAni:17">
<a href="benz eqe.php">
    <img src="cars\benz\eqe.jpg" alt="Image 1"></a>
       <h2>BENZ EQE</h2>
</div>
</div>
<div class="grid-row">
<div class="grid-item" style="--navAni:15">
<a href="benz eqs.php">
    <img src="cars\benz\eqs.jpg" alt="Image 1"></a>
    <h2>BENZ EQS</h2>
</div>
<div class="grid-item" style="--navAni:16">
<a href="benz g-class.php">
    <img src="cars\benz\g-class.jpg" alt="Image 1"></a>
     <h2>BENZ G-CLASS</h2>
</div>
<div class="grid-item" style="--navAni:17">
<a href="benz gla.php">
    <img src="cars\benz\gla.jpg" alt="Image 1"></a>
       <h2>BENZ GLA</h2>
</div>
</div>
<div class="grid-row">
<div class="grid-item" style="--navAni:15">
<a href="benz glb exterior.php">
    <img src="cars\benz\glb-exterior.jpg" alt="Image 1"></a>
    <h2>BENZ GLB-EXTERIOR</h2>
</div>
<div class="grid-item" style="--navAni:16">
<a href="benz glc.php">
    <img src="cars\benz\glc.jpg" alt="Image 1"></a>
     <h2>BENZ GLC</h2>
</div>
<div class="grid-item" style="--navAni:17">
<a href="benz glc coupe.php">
    <img src="cars\benz\glc-exterior.jpg" alt="Image 1"></a>
       <h2>BENZ GLC COUPE</h2>
</div>
</div>
<div class="grid-row">
<div class="grid-item" style="--navAni:15">
<a href="benz gle.php">
    <img src="cars\benz\gle-facelift.jpg" alt="Image 1"></a>
    <h2>BENZ GLE-FACELIFT</h2>
</div>
<div class="grid-item" style="--navAni:16">
<a href="benz gls.php">
    <img src="cars\benz\gls-facelift.jpg" alt="Image 1"></a>
     <h2>BENZ GLS-FACELIFT</h2>
</div>
<div class="grid-item" style="--navAni:17">
<a href="benz maybach.php">
    <img src="cars\benz\maybach.jpg" alt="Image 1"></a>
       <h2>BENZ MAYBACH</h2>
</div>
</div>
<div class="grid-row">
    <div class="grid-item" style="--navAni:15">
    <a href="benz maybach s-class.php">
        <img src="cars\benz\maybach-sclass.jpg" alt="Image 1"></a>
        <h2>BENZ MAYBACH-SCLASS</h2>
    </div>
    <div class="grid-item" style="--navAni:16">
    <a href="benz s-class.php">
        <img src="cars\benz\s-class.jpg" alt="Image 1"></a>
        <h2>BENZ S-CLASS</h2>
    </div>
    <div class="grid-item" style="--navAni:16">
         <h2></h2>
    </div>
</div>
    <!-- Repeat the above structure for the remaining 6 images and titles -->
</div>

</body>
</html>
