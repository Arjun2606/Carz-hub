<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carz-hub</title>
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
        h2{
            color:hsl(309.07deg 62.32% 27.06%);
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
.grid-item:active {
   size-adjust:initial ;
}

.grid-item:hover {
   size-adjust:unset ;
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
        <h2 STYLE="text-align:center;">Clicking on the given link will lead you to the official page of the car brand,where you can discover the latest models, technological innovations,and the brand's automotive legacy.</h2>
    <div class="image-grid">
        <div class="grid-row">
            <div class="grid-item" style="--navAni:6">
                <a href="https://www.toyotabharat.com">
                <img src="company\toyota.jpg" alt="Image 1"> 
                </a>
                <h2 href=>Toyota</h2>
            </div>
            <div class="grid-item" style="--navAni:6">
                <a href="https://www.hyundai.com/in/en">
                <img src="company\hyundai.jpg" alt="Image 2">
                </a>
                <h2>Hyundai</h2>
            </div>
            <div class="grid-item" style="--navAni:6">
                <a href="https://www.kia.com/in/home.html">
                <img src="company\kia.jpg" alt="Image 3">
                </a>
                <h2>Kia</h2>
            </div>
            <div class="grid-item" style="--navAni:6">
                <a href="https://www.mahindra.com">
                <img src="company\mahindra.jpg" alt="Image 4">
                </a>
                <h2>Mahindra</h2>
            </div>
            <div class="grid-item" style="--navAni:6">
                <a href="https://www.mgmotor.co.in">
                <img src="company\mg.jpg" alt="Image 5">
                </a>
                <h2>MG</h2>
            </div>
            <div class="grid-item" style="--navAni:6">
                <a href="https://www.marutisuzuki.com">
                <img src="company\suzuki.jpg" alt="Image 6">
                </a>
                <h2>Maruthi Suzuki</h2>
            </div>
            <div class="grid-item" style="--navAni:6">
                <a href="https://www.tatamotors.com">
                <img src="company\tata.jpg" alt="Image 5">
                </a>
                <h2>TaTa</h2>
            </div>
        </div>
        <div class="grid-row">
            <div class="grid-item" style="--navAni:7">
                <a href="https://www.skoda-auto.co.in">
                <img src="company\skodaa.jpg" alt="Image 6">
                </a>
                <h2>Skoda</h2>
            </div>
            <div class="grid-item" style="--navAni:7">
                <a href="https://www.hondacarindia.com">
                <img src="company\honda.jpg" alt="Image 6">
                </a>
                <h2>honda</h2>
            </div>
            <div class="grid-item" style="--navAni:7">
                <a href="https://www.hondacarindia.com">
                <img src="company\volkswagen.jpg" alt="Image 6">
                </a>
                <h2>volkswagen</h2>
            </div>
            <div class="grid-item" style="--navAni:7">
                <a href="https://www.nissan.in">
                <img src="company\nissan.jpg" alt="Image 6">
                </a>
                <h2>Nissan</h2>
            </div>
            <div class="grid-item" style="--navAni:7">
                <a href="https://www.renault.co.in">
                <img src="company\renault.jpg" alt="Image 6">
                </a>
                <h2>Renault</h2>
            </div>
            <div class="grid-item" style="--navAni:7 ">
                <a href="https://www.audi.in/in/web/en.html">
                <img src="company\audi.jpg" alt="Image 6">
                </a>
                <h2>Audi</h2>
            </div>
            <div class="grid-item" style="--navAni:8">
                <a href="https://www.bmw.in/en/index.html">
                <img src="company\bmw.jpg" alt="Image 6">
                </a>
                <h2>BMW</h2>
            </div>
        </div>
        <div class="grid-row">
            <div class="grid-item" style="--navAni:8">
                <a href="https://www.jeep-india.com">
                <img src="company\jeep.jpg" alt="Image 6">
                </a>
                <h2>Jeep</h2>
            </div>
            <div class="grid-item" style="--navAni:8">
                <a href="https://www.jaguar.in/index.html">
                <img src="company\jaguar.jpg" alt="Image 6">
                </a>
                <h2>Jaguar</h2>
            </div>
            <div class="grid-item" style="--navAni:8">
                <a href="https://www.volvocars.com/in">
                <img src="company\volvo.jpg" alt="Image 6">
                </a>
                <h2>Volvo</h2>
            </div>
            <div class="grid-item" style="--navAni:8">
                <a href="https://www.mercedes-benz.co.in">
                <img src="company\mercedes-benz.jpg" alt="Image 6">
                </a>
                <h2>Benz</h2>
            </div>
            <div class="grid-item" style="--navAni:8">
                <a href="https://www.citroen.in">
                <img src="company\citroen.jpg" alt="Image 6">
                </a>
                <h2>Citroen</h2>
            </div>
            <div class="grid-item" style="--navAni:8">
                <a href="https://www.landrover.in/index.html">
                <img src="company\land-rover.jpg" alt="Image 6">
                </a>
                <h2>Land-Rover</h2>
            </div>
            <div class="grid-item" style="--navAni:8">
                <a href="https://www.lexusindia.co.in/en.html">
                <img src="company\lexus.jpg" alt="Image 6">
                </a>
                <h2>Lexus</h2>
            </div>
        </div>
        <br><br>
    </div>      
</body>
</html>