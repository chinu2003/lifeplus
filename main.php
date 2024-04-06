<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Plus</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <style>
        body {
            margin: 0px;
            padding: 0px;
        }

        #nagyarohit {
            font-family: "Baloo Bhaijaan 2", sans-serif;
            font-optical-sizing: auto;
            font-weight: weight;
            font-style: normal;
        }


        .ok ul {
            display: flex;
            /* margin: 23px 66px; */
            padding: 0px 0px;
            text-decoration: none;
        }

        .ok ul li {
            padding: 3px 75px;
            text-decoration: none;
            list-style: none;
            width: 98px;
            font-size: 25px;
        }

        .btn {
            display: flex;
        }

        .btn1 input {
            margin: 22px 52px;
            height: 24px;
            width: 229px;
            border-radius: 6px;
        }

        .btn2 button {
            margin: 20px 167px;
            height: 34px;
            width: 73px;
            border-radius: 24px;
            background-color: #408282;
            color: rgb(255, 255, 255);
        }

        .btn2 button:hover {
            background-color: #76ebeb;
            color: #000000;
        }

        .ok ul li:hover {
            scale: 1.2;

        }


        .info {
            width: px;
            margin: auto;
        }

        .info ul li {
            list-style: none;
        }

        .nagya {
            height: 155px;
            width: 368px;
            border: 2px solid rgb(255, 255, 255);
            box-shadow: 2px 1px 10px 4px #c4c4c4;
            border-radius: 10px;
            z-index: 3;

        }



        .main {
            /* border: 2px solid rgb(0, 17, 128); */
            /* width: 500px; */
            height: 690px;
            /* border: 2px solid red; */
            margin: 8px 0px;

        }

        #main-div {
            display: flex;
            margin-top: 20px;
            margin-left: 92px;

        }

        .div1 {
            width: 347px;
            height: 397px;
            border: 2px solid rgb(255, 255, 255);
            margin: 0px 43px;
            box-shadow: 2px 2px 2px 2px #c4c4c4;
            border-radius: 10px;
        }

        .div1:hover {
            scale: 1.1;

        }

        .div1 img {
            width: 341px;
            height: 279px;

        }

        .rohit {
            margin: 0px 500px;
            font-size: 67px;
            color: black;
        }

        .apt {
            /* background-color: #408282; */
            height: 35px;
            /* display: block; */
            margin: auto;
            color: azure;
            border-radius: 10px;
            display: inline;
        }

        .btn1 {
            background-color: #76ebeb;
        }

        .btn1:hover {
            background-color: #e54680;
            color: black;


        }


        .main2 {
            width: 1250px;
            height: 232px;
            /* border:2px solid red; */
            margin: 124px 12px;
        }

        .main2 img {
            width: 1250px;
            height: 223px;
            margin-top: -210px;
            margin-left: 125px;

        }

        #main3 {
            width: 1250px;
            height: 300px;
            border: 2px solid rgb(255, 255, 255);
            box-shadow: 2px 2px 2px 2px #c4c4c4;
            border-radius: 10px;
            margin-top: -290px;
            margin-left: 140px;
        }

        #main3 h1 {
            margin-left: 549px;
            font-size: 30px;
            color: black;
        }

        #main3 p {
            font-size: 20px;
            text-align: justify;
            color: black;
        }

        /* Layout */
        .top-plane {
            /* background-color: #ebb5b5; */
            color: white;
            padding: 5px;
            /* border: 2px solid red; */
        }

        .top-plane nav ul {
            list-style-type: none;
            display: flex;
            justify-content: space-around;
        }

        .top-plane nav ul li {
            display: inline;
        }

        h2 {
            color: black;
        }

        .chinmay{
            width:50px;
            height:50px;
            background-color:red;
            border: 2px solid red;
            border-radius: 10px;
            margin-left: 699px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="top-plane">



        <div class="ok-main">

            <div class="akshay">
                <section class="main">
                    <a class="chinmay" href="index.php">Log Out</a>
                    <h1 class="rohit">Nearby Hospitals</h1>
                    <div id="main-div">
                        <div class="div1">
                            <img src="pho.webp" alt="">
                            <h2>Gharda Hospital</h2>
                            <!-- <button class="apt">Book apointment</button> -->
                            <!-- <button value="submit"
                            onclick="window.location='https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=UTC&bgcolor=%23ffffff&src=ZDNiMTcyMDBiNzUyNGVkNmQzYjI5NjNiYzAzYWQyZjc5NWZjNjk4OTVhNzkwNTQ3NGIwNWQwNzdjYTdkODZhMUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%234285F4'">Book
                            Appointment</button> -->
                            <div class="apt">
                                <button class="btn1" value="submit"><a href="appointment.php">Book
                                        apointment</a></button>
                                <button class="btn1"><a href="source.php">View neary by sources</a></button>
                            </div>
                        </div>

                        <div class="div1">
                            <img src="hos1.png" alt="">
                            <h2>Aparant Hospital</h2>
                            <div class="apt">
                                <button class="btn1" value="submit"><a href="appointment.php">Book
                                        apointment</a></button>
                                <button class="btn1"><a href="source.php">View neary by sources</a></button>
                            </div>
                        </div>

                        <div class="div1">
                            <img src="hos2.png" alt="">
                            <h2>Lifecare Hospital</h2>
                            <div class="apt">
                                <button class="btn1" value="submit"><a href="appointment.php">Book
                                        apointment</a></button>
                                <button class="btn1"><a href="source.php">View neary by sources</a></button>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="main2">
                    <div class="ad">
                        <img src="rohit.png" alt="AD">
                    </div>
                </section>

                <section id="main3">
                    <h1>About us</h1>
                    <div class="ad">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At nobis vel voluptas accusantium
                            accusamus eveniet. Molestiae voluptatibus quos nostrum, iste vero optio omnis commodi eaque
                            consectetur non reprehenderit, reiciendis esse est suscipit dolore nobis praesentium,
                            voluptatum
                            corrupti! Dolore sunt reprehenderit cumque ad dignissimos quibusdam nam quos aut, omnis
                            ullam
                            illum adipisci nemo atque quidem! Pariatur voluptate est nam dignissimos iure harum unde
                            suscipit officiis rerum, impedit nisi magni explicabo itaque id repellendus similique
                            soluta.
                            Provident similique eum sit assumenda hic mollitia voluptatem ad quis fugiat! Non veritatis
                            laboriosam pariatur ipsa saepe autem officia nemo qui fugiat inventore, minima totam iusto?
                        </p>
                    </div>
                </section>

            </div>

        </div>



</body>

</html>