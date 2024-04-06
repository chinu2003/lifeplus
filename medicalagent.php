<?php
@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

    $adminFullName = mysqli_real_escape_string($conn, $_POST['adminFullName']);
    $medicalStoreName = mysqli_real_escape_string($conn, $_POST['medicalStoreName']);
    $medicalLicenseNo = mysqli_real_escape_string($conn, $_POST['medicalLicenseNo']);
    $memail = mysqli_real_escape_string($conn, $_POST['memail']);
    $adminState = mysqli_real_escape_string($conn, $_POST['adminState']);
    $adminCity = mysqli_real_escape_string($conn, $_POST['adminCity']);
    $mpass = md5($_POST['mpass']);

    $select = "SELECT * FROM medical_store WHERE email = '$memail' && password = '$mpass'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'User already exists';
    } else {
        if ($pass != $cpass) {
            $error[] = 'Password not matched!';
        } else {
            $insert = "INSERT INTO medical_store (admin_full_name, medical_store_name, medical_license_no, email, state, city, password) VALUES ('$adminFullName', '$medicalStoreName', '$medicalLicenseNo', '$memail', '$adminState', '$adminCity', '$mpass')";
            
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
    <title>medical-registration-form</title>
    <!-- <link rel="stylesheet" href="./css/home.css"> -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #medical-admin-fields {
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

    <!-- <form class="mainform" id="user-registration-form" method="post" action="process_form.php"> -->
    <form class="mainform" action="" method="post">
        <div id="medical-admin-fields" class="hidden">
            <h1 style="text-align: center;">Medical-Registration-Form</h1>
            <!-- Medical Admin fields -->
            <div class="form-group">
                <label for="admin-full-name"><b>Full Name</b></label>
                <input type="text" id="admin-full-name" name="adminFullName" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="medical-store-name"><b>Medical Store Name</b></label>
                <input type="text" id="medical-store-name" name="medicalStoreName" placeholder="Enter Medical name" required>
            </div>
            <div class="form-group">
                <label for="medical-license-no"><b>Medical License Number</b></label>
                <input type="text" id="medical-license-no" name="medicalLicenseNo" placeholder="Enter medical license number" required>
            </div>
            <div class="form-group">
                <label for="medical-email"><b>Email</b></label>
                <input type="text" id="medical-email" name="memail" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="admin-state"><b>State</b></label>
                <input type="text" id="admin-state" name="adminState" placeholder="Enter your state" required>
            </div>

            <div class="form-group">
                <label for="admin-city"><b>City</b></label>
                <input type="text" id="admin-city" name="adminCity" placeholder="Enter your city" required>
            </div>
            <div class="form-group">
                <label for="doctor-pass"><b>Password</b></label>
                <input type="password" id="doctor-pass" name="mpass" placeholder="Enter your Password" required>
            </div>
            <div  >
            <!-- <input  type="submit" value="Register Now" class="form-btn" name="submit"> -->
            <input  type="submit" value="Register Now" class="btn" name="submit">
            </div>
            
    </form>
</body>

</html>