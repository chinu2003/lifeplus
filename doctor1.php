<?php include 'config.php'; ?>

<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);

    $select = " SELECT * FROM doctor WHERE email = '$email' && password = '$pass'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email;
        header('location:clinic.php');
    } else {
        $error[] = 'incorrect password or email.';
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor-Registration-Form</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body style="background-color: rgb(160, 255, 255); ">
    <div class="container" style="height:500px;">
        <div class="image">
            <img src="ok.png" alt="">
        </div>
        <div class="login-head">
            <div class="word1">Life Plus</div>
            <div class="word2">Login as doctor</div>
            <?php
            // Check if there are any errors to display
            if (isset($error)) {
                foreach ($error as $error_msg) {
                    echo '<span class="error-msg">' . $error_msg . '</span>';
                }
            }
            ?>
        </div>
        <form action="" method="post">
            <div class="inputs">
                <input type="email" id="email" name="email" placeholder=" Enter you email">
                <br>
                <input type="password" id="password" name="password" placeholder=" Enter your password">
                <!-- 
            <label for="role">Select your Role</label>

            <select name="role" id="role">
                <option value="patient">Patient</option>
                <option value="doctor">Doctor</option>
                <option value="medicalstore">Medical Store</option>
            </select> -->
            </div>
            <div class="btn" style="width:100px; display: block; margin:auto; ">
                <button name="submit">Submit</button>
            </div>
        </form>
        <div class="reg">Don't have any account?<a href="role1.php">Register Now</a></div>
    </div>


</body>

</html>