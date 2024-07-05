<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "mini";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];
$registerNo = $_POST['registerNo'];
$name = $_POST['name'];
$dateOfBirth = $_POST['dob'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$blood_group = $_POST['blood_group'];
$address = $_POST['address'];
$state = $_POST['state'];
$country = $_POST['country'];
$pincode = $_POST['pincode'];
$nationality = $_POST['nationality'];
$religion = $_POST['religion'];
$community = $_POST['community'];
$caste = $_POST['caste'];
$aadhar_no = $_POST['aadhar_no'];
$passport_no = $_POST['passport_no'];
$admission_date = $_POST['admission_date'];
$date_of_join = $_POST['date_of_join'];
$financial_category = $_POST['financial_category'];
$annual_income = $_POST['annual_income'];
$admission_category = $_POST['admission_category'];
$admission_type = $_POST['admission_type'];
$mothers_tongue = $_POST['mothers_tongue'];
$twelfth_marks = $_POST['twelfth_marks'];
$tenth_marks = $_POST['tenth_marks'];
$medium_of_studying = $_POST['medium_of_studying'];
$physically_challenged = $_POST['physically_challenged'];
$visually_challenged = $_POST['visually_challenged'];
$parent_ex_service_man = $_POST['parent_ex_service_man'];
$parent_ex_service_man_id = $_POST['parent_ex_service_man_id'];
$sports_man = $_POST['sports_man'];
$fathers_name = $_POST['fathers_name'];
$fathers_occupation = $_POST['fathers_occupation'];
$fathers_phone = $_POST['fathers_phone'];
$fathers_aadhar = $_POST['fathers_aadhar'];
$mothers_name = $_POST['mothers_name'];
$mothers_occupation = $_POST['mothers_occupation'];
$mothers_phone = $_POST['mothers_phone'];
$mothers_aadhar = $_POST['mothers_aadhar'];
// For file upload
$profile = $_FILES['profile']['name'];
$dept = $_POST['dept'];
$acaYear = $_POST['aca_year'];
$tutor = $_POST['tutor'];
$nameRollNo = $_POST['name_rollno'];
$role = $_POST['role'];

// Prepare and execute SQL statement for studentinfo table
$sql_studentinfo = "INSERT INTO studentinfo (username, password, RegisterNo, Name, DateOfBirth, Age, PhoneNumber, Gender, BloodGroup, Address, State, Country, Pincode, Nationality, Religion, Community, Caste, AadharNo, PassportNo, AdmissionDate, DateOfJoin, FinancialCategory, AnnualIncome, AdmissionCategory, AdmissionType, MothersTongue, TwelfthMarks, TenthMarks, MediumOfStudying, PhysicallyChallenged, VisuallyChallenged, ParentExServiceMan, ParentExServiceManID, SportsMan, FathersName, FathersOccupation, FathersPhoneNumber, FathersAadharNo, MothersName, MothersOccupation, MothersPhoneNumber, MothersAadharNo, profile, dept, aca_year, tutor, name_rollno) 
        VALUES ('$username', '$password', '$role', '$registerNo', '$name', '$dateOfBirth', '$age', '$phone', '$gender', '$blood_group', '$address', '$state', '$country', '$pincode', '$nationality', '$religion', '$community', '$caste', '$aadhar_no', '$passport_no', '$admission_date', '$date_of_join', '$financial_category', '$annual_income', '$admission_category', '$admission_type', '$mothers_tongue', '$twelfth_marks', '$tenth_marks', '$medium_of_studying', '$physically_challenged', '$visually_challenged', '$parent_ex_service_man', '$parent_ex_service_man_id', '$sports_man', '$fathers_name', '$fathers_occupation', '$fathers_phone', '$fathers_aadhar', '$mothers_name', '$mothers_occupation', '$mothers_phone', '$mothers_aadhar', '$profile', '$dept', '$acaYear', '$tutor', '$nameRollNo')";

// Prepare and execute SQL statement for login table
$sql_login = "INSERT INTO login (username, password) VALUES ('$username', '$password', '$role')";

// Execute studentinfo table insertion
if ($conn->query($sql_studentinfo) === TRUE) {
    // Execute login table insertion
    if ($conn->query($sql_login) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql_login . "<br>" . $conn->error;
    }
} else {
    echo "Error: " . $sql_studentinfo . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
