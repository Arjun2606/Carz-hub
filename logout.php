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
            background-color: rgb(238, 227, 238);
            background-image: url("D:\PROJECT2024.jpg"); /* Add the path to your image */
            background-size:contain; /* Adjust as needed */
            font-family: 'Outfit', sans-serif;
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
            background-color:hsl(309.07deg 62.32% 27.06%);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            padding: 1rem 1.5rem;
            font-weight: 600;
            font-size: 1rem;
            border-radius: 10px;
            width: 500px;
        }
        /* Nav */
        header {
            background-color: hsl(309.07deg 62.32% 27.06%);
            position: sticky;
            top: 0;
            z-index: 1;
        }
        h1{
            text-align: center;
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
            text-align: center;
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
        .filter-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.544);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: slideIn 1s ease-out;
        }
        @keyframes slideIn {
                    from {
                        opacity: 0;
                        transform: translateY(-50px);
                    }
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }
        label {
            display: block;
            font-size: 16px;
            margin-bottom: 10px;
            color: #000000;
        }
        
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        
        select:focus {
            outline: none;
            border-color: #000000;
        }
        .custom-dropdown {
            position: relative;
            display: inline-block;
        }

        /* Style for the dropdown button */
        .custom-dropdown button {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #fff;
            cursor: pointer;
        }

        /* Style for the dropdown content */
        .custom-dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 4px;
            z-index: 1;
        }

        /* Style for each dropdown item */
        .custom-dropdown-content img {
            width: 20px;
            margin-right: 10px;
        }

        /* Show the dropdown content on hover */
        .custom-dropdown:hover .custom-dropdown-content {
            display: block;
        }
        input[type="text"] {
            padding: 15px;
            margin: 10px 0;
            text-align: center;
            font-size: 16px;
            width: 500px;
            border-radius: 20px;
            border: 1px solid #ccc;
            box-sizing: border-box;
          }
      
          h2 {
            text-align: center;
            color: #000000;
          }
      
          ul {
            text-align: center;
            list-style: none;
            padding: 0;
          }
      
          li {
            margin-bottom: 15px;
          }
      
          label {
            text-align: center;
            display: block;
            font-size: 20px;
            margin-bottom: 5px;
            color: #000000;
          }
          .container2 {
            display: flex;
            justify-content: center;
            align-items: center;
             /* Adjust as needed */
          }
    </style>
</head>
<body>
    <br>
    <br>
    <h1>Review</h1>
    <div class="filter-container">
        <div class="container2">
            <img src="gold1.png" width="190px" alt="Gold Logo">
        </div>
        <br>
        <form action="logout1.php" method="POST">
            <label for="Name"><b>Name</b></label>
            <div class="input">
                <input type="text" placeholder="None" name="name">
            </div>
            <label for="Mail-ID"><b>Mail-ID</b></label>
            <div class="input">
                <input type="text" placeholder="None" name="email">
            </div>
            <label for="Review"><b>Review</b></label>
            <div class="input">
                <input type="text" placeholder="None" name="review">
            </div>
            <label for="Ratings"><b>Ratings</b></label>
            <select id="Ratings" name="ratings">
                <option value="None">None</option>
                <option value="Excellent">Excellent</option>
                <option value="Good">Good</option>
                <option value="Fair">Fair</option>
                <option value="Poor">Poor</option>
                <option value="Bad">Bad</option>
            </select>
        <br> 
        <br>
        <button type="submit">Logout</button>
        </form> 
    </div>
</body>
</html>
