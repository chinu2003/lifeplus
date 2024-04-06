<?php
// Include the configuration file
include 'config.php';

// Fetch appointment records from the database
$sql = "SELECT * FROM patient";
$result = mysqli_query($conn, $sql);

// Check if there are any appointment records
if (mysqli_num_rows($result) > 0) {
    // Start HTML content
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Patient  Information</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <h2>Patient Information</h2><a href="index.php">Home</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Mobile No</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>State</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["patient_name"]."</td>";
                    echo "<td>".$row["patient_sex"]."</td>";
                    echo "<td>".$row["patient_dob"]."</td>";
                    echo "<td>".$row["patient_phone"]."</td>";
                    echo "<td>".$row["patient_email"]."</td>";
                    echo "<td>".$row["patient_address"]."</td>";
                    echo "<td>".$row["patient_city"]."</td>";
                    echo "<td>".$row["patient_state"]."</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </body>
    </html>
    <?php
} else {
    echo "No appointment records found.";
}

// Close the connection
mysqli_close($conn);
?>
