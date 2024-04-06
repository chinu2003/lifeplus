<?php
@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

    $patientName = mysqli_real_escape_string($conn, $_POST['patientName']);
    $patientSex = mysqli_real_escape_string($conn, $_POST['patientSex']);
    $patientdob = mysqli_real_escape_string($conn, $_POST['patientdob']);
    $patientphone = mysqli_real_escape_string($conn, $_POST['patientphone']);
    $patientemail = mysqli_real_escape_string($conn, $_POST['patientemail']);
    $patientaddress = mysqli_real_escape_string($conn, $_POST['patientcity']);
    $patientcity = mysqli_real_escape_string($conn, $_POST['patientaddress']);
    $patientstate = mysqli_real_escape_string($conn, $_POST['patientstate']);
    $ppass = md5($_POST['ppass']);

    $select = "SELECT * FROM patient WHERE patient_email = '$patientemail' && password = '$ppass'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'User already exists';
    } else {
        if ($pass != $cpass) {
            $error[] = 'Password not matched!';
        } else {
            $insert = "INSERT INTO patient (patient_name, patient_sex, patient_dob, patient_phone, patient_email, patient_address, patient_city, patient_state, password) VALUES ('$patientName', '$patientSex', '$patientdob', '$patientphone', '$patientemail', '$patientaddress', '$patientcity', '$patientstate', '$ppass')";
                        
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
    <title>patient-registration-form</title>
    <!-- <link rel="stylesheet" href="./css/home.css"> -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #patient-fields {
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
        <div id="patient-fields" class="hidden">
            <h1 style="text-align: center;"><b>Patient-Registration-Form</b></h1>
            <!-- Patient fields -->
            <div class="form-group">
                <label for="patient-name"><b>Patient Name</b></label>
                <input type="text" id="patient-name" name="patientName" placeholder="Enter Your Name" required>
            </div>
            <div class="form-group">
                <label for="patient-sex"><b>Sex</b></label>
                <select id="patient-sex" name="patientSex" required>
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="patient-dob"><b>Date of Birth</b></label>
                <input type="date" id="patient-dob" name="patientdob" required>
            </div>
            <div class="form-group">
                <label for="patient-phone"><b>Phone Number</b></label>
                <input type="tel" id="patient-phone" name="patientphone" placeholder="Enter a modile number" required>
            </div>
            <div class="form-group">
                <label for="patient-email"><b>Email</b></label>
                <input type="email" id="patient-email" name="patientemail" placeholder="Enter Your Email" required>
            </div>
            <div class="form-group">
                <label for="patient-address"><b>Address</b></label>
                <input type="text" id="patient-address" name="patientaddress" placeholder="Street Address" required>
            </div>
            <div class="form-group">
                <label for="patient-city"><b>City</b></label>
                <input type="text" id="patient-city" name="patientcity" placeholder="Enter Your City" required>
            </div>
            <div class="form-group">
                <label for="patient-state"><b>State</b></label>
                <input type="text" id="patient-state" name="patientstate" placeholder="Enter Your State" required>
            </div>
            <div class="form-group">
                <label for="doctor-pass"><b>Password</b></label>
                <input type="password" id="doctor-pass" name="ppass" placeholder="Enter Your password" required>
            </div>
            <div>
                <!-- <input  type="submit" value="Register Now" class="form-btn" name="submit"> -->
                <input type="submit" value="Register Now" class="btn" name="submit">
            </div>

        </div>
        <!-- <button type="submit">Register</button> -->

    </form>


</body>

</html>