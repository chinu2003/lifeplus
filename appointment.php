<?php
@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

    $aname = mysqli_real_escape_string($conn, $_POST['aname']);
    $aemail = mysqli_real_escape_string($conn, $_POST['aemail']);
    $adate = mysqli_real_escape_string($conn, $_POST['adate']);
    $atime = mysqli_real_escape_string($conn, $_POST['atime']);

    $check_availability = "SELECT * FROM appointments WHERE appointment_date = '$adate' AND appointment_time = '$atime'";
    $result = mysqli_query($conn, $check_availability);

    if (mysqli_num_rows($result) > 0) {
        // If the date and time are already assigned, show an alert message
        echo "<script>alert('This date and time are already assigned to another customer. Please choose a different date and time.');</script>";
    } else {
        // Proceed with the booking
        $insert = "INSERT INTO appointments (customer_name, customer_email, appointment_date, appointment_time) VALUES ('$aname', '$aemail', '$adate', '$atime')";

        if (mysqli_query($conn, $insert)) {
            header('location: index.php');
            exit;
        } else {
            $error[] = 'Error: ' . mysqli_error($conn);
        }
    }
}
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Patient-Appointment-Details-Form</title>

    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
    background-color: #f5f5f5;
}

.form-container {
    width: 100%;
    max-width: 500px;
    background-color: #fff;
    padding: 25px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.form-container .title {
    text-align: center;
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

.form-container .box {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    background-color: #f5f5f5;
    font-size: 16px;
    color: #333;
}

.form-container .box:focus {
    outline: none;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
}

.form-container select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'><path d='M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 4.343 6.586 5.757 5l1.414 1.414L10 9.172z'/></svg>");
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 15px;
    padding-right: 40px;
}

.form-container .form-btn {
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    border: none;
    border-radius: 5px;
    background-color: #5fba7d;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

.form-container .form-btn:hover {
    background-color: #4da86d;
}

.form-container .form-btn:focus {
    outline: none;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
}

.display-calender {
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    border: none;
    border-radius: 5px;
    background-color: #5fba7d;
    color: #fff;
    font-size: 16px;
    cursor: pointer;

}

.form-container p {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: #333;
}

.form-container p a {
    color: #5fba7d;
    text-decoration: none;
}

.form-container p a:hover {
    text-decoration: underline;
}

.error-msg {
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    border-radius: 5px;
    background-color: #ffc5c5;
    color: #ff0000;
    font-size: 14px;
}


    </style>
</head>

<body>

    <div class="form-container">
        <form action="" method="post">
            <h3 class="title">Patient Details</h3>
            <!-- <?php
            // Check if there are any errors to display
            if (isset($error)) {
                foreach ($error as $error_msg) {
                    echo '<span class="error-msg">' . $error_msg . '</span>';
                }
            }
            ?> -->
            <input type="text" name="aname" class="box" placeholder="Name" required>
            <input type="email" name="aemail" class="box" placeholder="Email" required>
            <input type="date" name="adate" class="box date-picker" placeholder="Date" required>
            <input type="time" name="atime" class="box time-picker" placeholder="Time" required>
            <!-- <button id="display-calendar">Check Available Slots</button> -->

            <button class="display-calender"
                onclick="window.location='https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=UTC&bgcolor=%23ffffff&src=ZDNiMTcyMDBiNzUyNGVkNmQzYjI5NjNiYzAzYWQyZjc5NWZjNjk4OTVhNzkwNTQ3NGIwNWQwNzdjYTdkODZhMUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%234285F4'">Check
                Appointment Slots</button>


            <input type="submit" value="Create Appointment" class="form-btn" name="submit">

            
        </form>
    </div>


</body>

</html>