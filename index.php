<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Plus</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body style="background-color: rgb(160, 255, 255); ">
    <div class="container" style="height:500px;">
        <div class="image">
            <img src="./icon/ok.png" alt="">
        </div>
        <div class="login-head">
            <div class="word1">Life Plus</div>
            <!-- <div class="word2">Login here</div> -->
            <p style=" size: 12px;  text-align: center; background-color: #fff; " >Select Your Role</p>
        </div>
        <form action="" method="post">
            <!-- <div class="inputs">
                <input type="email" id="email" name="email" placeholder=" Enter you email">
                <br>
                <input type="password" id="password" name="password" placeholder=" Enter your password">

            </div> -->
            <div class="btn" style="width:100px; display: block; margin:auto; background-color: #fff; ">
                <button name="submit"><a style="text-decoration: none;" href="doctor1.php">Doctor Login</a></button>
            </div>
            <div class="btn" style="width:100px; display: block; margin:auto; background-color: #fff;">
                <button name="submit"><a style="text-decoration: none;" href="patient1.php">Patient Login</a></button>
            </div>
            <div class="btn" style="width:100px; display: block; margin:auto; background-color: #fff;">
                <button name="submit"><a style="text-decoration: none;" href="medicalagent1.php">Medical Store Login</a></button>
            </div>
        </form>
        <div class="reg">Don't have any account?<a href="role1.php">Register Now</a></div>
    </div>


</body>

</html>