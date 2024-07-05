<!DOCTYPE html>
<html>
<head>
    <title>Student database</title>
    <link rel="stylesheet" href="./student.css">
</head>
<body>
<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION["username"])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Database connection parameters
$servername = "localhost"; // Change if your database is on a different server
$db_username = "root"; // Replace with your database username
$db_password = ""; // Replace with your database password
$dbname = "mini"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get logged-in username
$username = $_SESSION["username"];

// Query to fetch student data based on username
$sql = "SELECT * FROM studentinfo WHERE Username = '$username'"; 

$result = $conn->query($sql);

// Check if there is any data
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
?>
<div class="header">
    <img class="clg-logo" src="./Photos/image 3.png">
</div>
<div class="std-profile">
<img class="std-photo" src="data:image/jpeg;base64,<?php echo base64_encode($row["profile"]); ?>">
</div>
<div class="basic-details">
    <svg xmlns="http://www.w3.org/2000/svg" width="493" height="110" viewBox="0 0 844 187" fill="none" class="details-svg">
        <path d="M206.059 186.376C141.442 191.076 49.1761 167.99 14.1865 158.365C5.69742 156.03 0 148.294 0 139.489V20C0 8.9543 8.95429 0 20 0H824.399C845.195 0 851.643 26.7656 832.847 35.6629C801.781 50.3685 765.663 66.2522 735.608 76.1537C616.074 115.534 538.734 88.4528 416.549 118.239C332.662 138.688 292.1 180.119 206.059 186.376Z" fill="#A2B1E7" fill-opacity="0.4"/>
    </svg>
    <div class="details">
                <p><?php echo $row["Name"] . " (" . $row["username"] . ")" ?></p>
                <p><?php echo $row["dept"] ?></p>
                <p><?php echo $row["aca_year"] ?></p>
                <p><?php echo $row["DateOfBirth"] ?></p>
                <p><?php echo $row["PhoneNumber"] ?></p>
                <p><?php echo $row["tutor"] ?></p>
    </div>
</div>

<div class="overall-det">
<div class="overall-det">
    <div class="overall-det-left">
        <div class="sub-with-value">
            <p><strong>Name:</strong></p>
            <p><?php echo $row["Name"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Register No:</strong></p>
            <p><?php echo $row["RegisterNo"] ?></p>
        </div>
        <div class="sub-with-value">
            <p><strong>Date.of.Birth:</strong></p>
            <p><?php echo $row["DateOfBirth"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Age:</strong></p>
            <p><?php echo $row["Age"] ?></p>
        </div>
        <div class="sub-with-value">
            <p><strong>Phone No:</strong></p>
            <p><?php echo $row["PhoneNumber"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Gender:</strong></p>
            <p><?php echo $row["Gender"] ?></p>
        </div>
        <div class="sub-with-value">
            <p><strong>Blood Group:</strong></p>
            <p><?php echo $row["BloodGroup"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Address:</strong></p>
            <p><?php echo $row["Address"] ?></p>
        </div>
        <div class="sub-with-value">
            <p><strong>State:</strong></p>
            <p><?php echo $row["State"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Country:</strong></p>
            <p><?php echo $row["Country"] ?></p>
        </div>
        <div class="sub-with-value">
            <p><strong>Pincode:</strong></p>
            <p><?php echo $row["Pincode"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Nationality:</strong></p>
            <p><?php echo $row["Nationality"] ?></p>
        </div>
        <div class="sub-with-value">
            <p><strong>Religion:</strong></p>
            <p><?php echo $row["Religion"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Community:</strong></p>
            <p><?php echo $row["Community"] ?></p>
        </div>
        <div class="sub-with-value">
            <p><strong>Caste:</strong></p>
            <p><?php echo $row["Caste"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Aadhar No:</strong></p>
            <p><?php echo $row["AadharNo"] ?></p>
        </div>
        <div class="sub-with-value">
            <p><strong>Passport No</strong><light>(if you are NRI):</light></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Admission Date:</strong></p>
            <p><?php echo $row["AdmissionDate"] ?></p>
        </div>
        <div class="sub-with-value">
            <p><strong>Date.of.join:</strong></p>
            <p><?php echo $row["DateOfJoin"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Financial Category:</strong></p>
            <p><?php echo $row["FinancialCategory"] ?></p>
        </div>
    </div>
    <div class="overall-det-right">
        <div class="sub-with-value">
            <p><strong>Annual Income:</strong></p>
            <p><?php echo $row["AnnualIncome"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Admission Category:</strong></p>
            <p><?php echo $row["AdmissionCategory"] ?></p>
        </div>
        <div class="sub-with-value">
            <p><strong>Admission Type:</strong></p>
            <p><?php echo $row["AdmissionType"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Mother's Tongue:</strong></p>
            <p><?php echo $row["MothersTongue"] ?></p>
        </div>
        <div class="sub-with-value">
            <p><strong>12th Marks:</strong></p>
            <p><?php echo $row["TwelfthMarks"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>10th Marks:</strong></p>
            <p><?php echo $row["TenthMarks"] ?></p>
        </div>
        <div class="sub-with-value">
            <p><strong>Medium of Studying:</strong></p>
            <p><?php echo $row["MediumOfStudying"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Physically Challenged:</strong></p>
            <p><?php echo $row["PhysicallyChallenged"] ?></p>
        </div>
        <div class="sub-with-value">
            <p><strong>Visually Challenged:</strong></p>
            <p><?php echo $row["VisuallyChallenged"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Parent Ex-Service Man:</strong></p>
            <p><?php echo $row["ParentExServiceMan"] ?></p>
        </div>
        <div class="sub-with-value">
            <p><strong>Parent Ex-Service Man ID no:</strong></p>
            <p><?php echo $row["ParentExServiceManID"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Sports Man:</strong></p>
            <p><?php echo $row["SportsMan"] ?></p>
        </div>
        <div class="sub-with-value">
            <p><strong>Father's Name:</strong></p>
            <p><?php echo $row["FathersName"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Father's Occupation:</strong></p>
            <p><?php echo $row["FathersOccupation"] ?></p>
        </div>
        <div class="sub-with-value">
            <p><strong>Father's Phone No:</strong></p>
            <p><?php echo $row["FathersPhoneNumber"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Father's Aadhar No:</strong></p>
            <p><?php echo $row["FathersAadharNo"] ?></p>
        </div>
        <div class="sub-with-value">
            <p><strong>Mother's Name:</strong></p>
            <p><?php echo $row["MothersName"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Mother's Occupation:</strong></p>
            <p><?php echo $row["MothersOccupation"] ?></p>
        </div>
        <div class="sub-with-value">
            <p><strong>Mother's Phone No:</strong></p>
            <p><?php echo $row["MothersPhoneNumber"] ?></p>
        </div>
        <div class="sub-with-value-1">
            <p><strong>Mother's Aadhar No:</strong></p>
            <p><?php echo $row["MothersAadharNo"] ?></p>
        </div>
    </div>
</div> <!-- Display student details here -->
</div>
<!-- Add the rest of your HTML content here -->
<?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>
