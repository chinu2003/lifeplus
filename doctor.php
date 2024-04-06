<?php
@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

    $doctorFullName = mysqli_real_escape_string($conn, $_POST['doctorFullName']);
    $mobileno = mysqli_real_escape_string($conn, $_POST['doctorMobileNo']);
    $email = mysqli_real_escape_string($conn, $_POST['doctorEmail']);
    $specialization = mysqli_real_escape_string($conn, $_POST['doctorSpecialization']);
    $experience = mysqli_real_escape_string($conn, $_POST['doctorExperience']);
    $state = mysqli_real_escape_string($conn, $_POST['doctorState']);
    $city = mysqli_real_escape_string($conn, $_POST['doctorCity']);
    $dpass = md5($_POST['dpass']);

    $select = "SELECT * FROM doctor WHERE email = '$email' && password = '$dpass'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'User already exists';
    } else {
        if ($pass != $cpass) {
            $error[] = 'Password not matched!';
        } else {
            $insert = "INSERT INTO doctor (full_name, mobile_number, email, specialization, years_of_experience, state, city, password) VALUES ('$doctorFullName', '$mobileno', '$email', '$specialization', '$experience', '$state', '$city', '$dpass')";

            if (mysqli_query($conn, $insert)) {
                header('location: index.php');
                exit;
            } else {
                $error[] = 'Error: ' . mysqli_error($conn);
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doctor-registration-form</title>
    <!-- <link rel="stylesheet" href="./css/home.css"> -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #doctor-fields {
            /* border: 2px solid red; */
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            display: block;
            margin: auto;
            width: 500px;
        }

        .form-header {
            /* border: 2px solid red; */
            margin: 22px;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin: 22px 20px;
            margin-bottom: 20px;
            /* border: 2px solid red; */

        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"],
        input[type="tel"],
        input[type="email"],
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="datetime-local"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .radio-group {
            display: flex;
            align-items: center;
            margin-left: -5px;
        }

        .radio-group input[type="radio"] {
            margin-left: 5px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: 20px auto;
        }
        
    </style>
</head>

<body>

    <form class="mainform" action="" method="post">
        <div id="doctor-fields" class="">
        <h1 style="text-align: center;">Doctor-Registration-Form</h1>
            <!-- Doctor fields -->
            <div class="form-group">
                <label for="doctor-full-name"><b>Full Name</b></label>
                <input type="text" id="doctor-full-name" name="doctorFullName" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="doctor-mobile-no"><b>Mobile Number</b></label>
                <input type="tel" id="doctor-mobile-no" name="doctorMobileNo" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="doctor-email"><b>Email</b></label>
                <input type="email" id="doctor-email" name="doctorEmail" required>
            </div>
            <div class="form-group">
                <label for="doctor-specialization"><b>Specialization</b></label>
                <input type="text" id="doctor-specialization" name="doctorSpecialization" required>
            </div>
            <div class="form-group">
                <label for="doctor-experience"><b>Years of Experience</b></label>
                <input type="number" id="doctor-experience" name="doctorExperience" required>
            </div>
            <div class="form-group">
                <label for="doctor-state"><b>State</b></label>
                <input type="text" id="doctor-state" name="doctorState" required>
            </div>
            <div class="form-group">
                <label for="doctor-city"><b>City</b></label>
                <input type="text" id="doctor-city" name="doctorCity" required>
            </div>
            <div class="form-group">
                <label for="doctor-pass"><b>Password</b></label>
                <input type="password" id="doctor-pass" name="dpass" required>
            </div>
            <div  >
            <!-- <input  type="submit" value="Register Now" class="form-btn" name="submit"> -->
            <input  type="submit" value="Register Now" class="btn" name="submit">
            </div>
            
        </div>

    </form>
</body>

</html>