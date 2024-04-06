<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Plus</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400..800&display=swap" rel="stylesheet"> -->
    <style>
        /* *{
    margin: 0px;
    padding: 0px;
} */
        body {
            margin: 0px;
            padding: 0px;

        }

        .main {

            width: 1325px;
            height: 400px;
            /* border: 2px solid red; */
            margin: 8px 0px;

        }

        #main-div {
            display: flex;
            margin-top: 20px;

        }

        .div1 {
            width: 220px;
            height: 270px;
            border: 2px solid rgb(255, 255, 255);
            margin: 0px 43px;
            box-shadow: 2px 2px 2px 2px #c4c4c4;
            border-radius: 10px;
        }

        .div1:hover {
            scale: 1.1;

        }

        .div1 img {
            width: 221px;
            height: 155px;

        }

        .rohit {
            margin: 0px 44px;
            font-size: 35px;
            text-align: center;
            font-weight: bold;
        }

        .medical {
            /* display: flex; */
            flex-direction: column;
            font-size: small;
        }

        .apt {
            background-color: #408282;
            height: 35px;
            display: block;
            margin: auto;
            color: azure;
            border-radius: 10px;
        }

        .apt:hover {
            background-color: #46e5e5;
            color: black;


        }

        body {
            overflow-x: hidden;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="medical">
        <section class="main">
            <p class="rohit">Nearby Medicals</p>
            <div id="main-div">
                <div class="div1">
                    <img src="./images/13.jpeg" alt="">
                    <h2>Gharda Medicals</h2>
                    <h4>Near Gharda Hospital,Gharda,Khed
                        Contact :- 846523XXXX
                    </h4>
                </div>

                <div class="div1">
                    <img src="./images/11.webp" alt="">
                    <h2>Wellness Forever</h2>
                    <h4>Near Petrol-Pump,Gharda, Khed Contact :- 956547XXXX
                    </h4>

                </div>

                <div class="div1">
                    <img src="./images/18.jpeg" alt="">
                    <h2>Neelkant Mediacal Store</h2>
                    <h4>Near Mumbai-Goa Highway, Gharda
                        Contact :- +91 884576XXXX
                    </h4>
                </div>

                <div class="div1">
                    <img src="./images/19.avif" alt="">
                    <h2>Kumar Medical Store</h2>
                    <h4>Near Indian oil Petrol-Pump, Gharda Contact :- +91 798458XXXX
                    </h4>
                </div>
            </div>
        </section>
    </div>

    <div class="medical">
        <section class="main">
            <p class="rohit">Nearby Hotels</p>
            <div id="main-div">
                <div class="div1">
                    <img src="./images/14.jpg" alt="">
                    <h2>Hotel Annapurna</h2>
                    <h4>Near Mumbai-Goa Highway, Gharda
                        Contact :- +91 884576XXXX
                    </h4>
                </div>

                <div class="div1">
                    <img src="./images/15.avif" alt="">
                    <h2>Hotel Gangasagar</h2>
                    <h4>Near Indian oil Petrol-Pump, Gharda Contact :- +91 798458XXXX
                    </h4>
                </div>

                <div class="div1">
                    <img src="./images/16.avif" alt="">
                    <h2>Hotel Shreyas</h2>
                    <h4>Near Gharda Hospital,Gharda,Khed
                        Contact :- 846523XXXX
                    </h4>
                </div>

                <div class="div1">
                    <img src="./images/17.avif" alt="">
                    <h2>Shelar Dhaba</h2>
                    <h4>Near Petrol-Pump,Gharda, Khed Contact :- 956547XXXX
                    </h4>

                </div>
            </div>
        </section>
    </div>

    <div>
        <button class="apt"><a  href="main.php">Get Back</a></button>
    </div>

</body>

</html>