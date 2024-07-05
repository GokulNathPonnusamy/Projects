<!DOCTYPE html>
<html>
<head>
    <title>Admin - Enter Student Data</title>
    <link rel="stylesheet" href="./admin.css">
</head>
<body>
    <div class="header">
        <img class="clg-logo" src="./Photos/image 3.png">
    </div>
    <div class="container">
        <h2 class="heading">Admin - Enter Student Data</h2>
        <div class="overall-det">
            <form action="insert_student.php" method="post" enctype="multipart/form-data">
                <div class="form-group-1">
                    <label for="username">User Name:</label>
                    <input type="text" id="username" name="username" required>
                </div> 
                <div class="form-group">
                    <label for="name">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group-1">
                    <label for="name">Role:</label>
                    <input type="text" id="role" name="role" required>
                </div>     
            <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group-1">
                    <label for="registerNo">Register No:</label>
                    <input type="text" id="registerNo" name="registerNo" required>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" required>
                </div>
                <div class="form-group-1">
                    <label for="age">Age:</label>
                    <input type="text" id="age" name="age" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone No:</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                <div class="form-group-1">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="blood_group">Blood Group:</label>
                    <input type="text" id="blood_group" name="blood_group">
                </div>
                <div class="form-group-1">
                    <label for="address">Address:</label>
                    <textarea id="address" name="address" required></textarea>
                </div>
                <div class="form-group">
                    <label for="state">State:</label>
                    <input type="text" id="state" name="state">
                </div>
                <div class="form-group-1">
                    <label for="country">Country:</label>
                    <input type="text" id="country" name="country">
                </div>
                <div class="form-group">
                    <label for="pincode">Pincode:</label>
                    <input type="text" id="pincode" name="pincode">
                </div>
                <div class="form-group-1">
                    <label for="nationality">Nationality:</label>
                    <input type="text" id="nationality" name="nationality">
                </div>
                <div class="form-group">
                    <label for="religion">Religion:</label>
                    <input type="text" id="religion" name="religion">
                </div>
                <div class="form-group-1">
                    <label for="community">Community:</label>
                    <input type="text" id="community" name="community">
                </div>
                <div class="form-group">
                    <label for="caste">Caste:</label>
                    <input type="text" id="caste" name="caste">
                </div>
                <div class="form-group-1">
                    <label for="aadhar_no">Aadhar No:</label>
                    <input type="text" id="aadhar_no" name="aadhar_no">
                </div>
                <div class="form-group">
                    <label for="passport_no">Passport No (if NRI):</label>
                    <input type="text" id="passport_no" name="passport_no">
                </div>
                <div class="form-group-1">
                    <label for="admission_date">Admission Date:</label>
                    <input type="date" id="admission_date" name="admission_date">
                </div>
                <div class="form-group">
                    <label for="date_of_join">Date of Join:</label>
                    <input type="date" id="date_of_join" name="date_of_join">
                </div>
                <div class="form-group-1">
                    <label for="financial_category">Financial Category:</label>
                    <input type="text" id="financial_category" name="financial_category">
                </div>
                <div class="form-group">
                    <label for="annual_income">Annual Income:</label>
                    <input type="text" id="annual_income" name="annual_income">
                </div>
                <div class="form-group-1">
                    <label for="admission_category">Admission Category:</label>
                    <input type="text" id="admission_category" name="admission_category">
                </div>
                <div class="form-group">
                    <label for="admission_type">Admission Type:</label>
                    <input type="text" id="admission_type" name="admission_type">
                </div>
                <div class="form-group-1">
                    <label for="mothers_tongue">Mother's Tongue:</label>
                    <input type="text" id="mothers_tongue" name="mothers_tongue">
                </div>
                <div class="form-group">
                    <label for="twelfth_marks">12th Marks:</label>
                    <input type="text" id="twelfth_marks" name="twelfth_marks">
                </div>
                <div class="form-group-1">
                    <label for="tenth_marks">10th Marks:</label>
                    <input type="text" id="tenth_marks" name="tenth_marks">
                </div>
                <div class="form-group">
                    <label for="medium_of_studying">Medium of Studying:</label>
                    <input type="text" id="medium_of_studying" name="medium_of_studying">
                </div>
                <div class="form-group-1">
                    <label for="physically_challenged">Physically Challenged:</label>
                    <input type="text" id="physically_challenged" name="physically_challenged">
                </div>
                <div class="form-group">
                    <label for="visually_challenged">Visually Challenged:</label>
                    <input type="text" id="visually_challenged" name="visually_challenged">
                </div>
                <div class="form-group-1">
                    <label for="parent_ex_service_man">Parent Ex-Service Man:</label>
                    <input type="text" id="parent_ex_service_man" name="parent_ex_service_man">
                </div>
                <div class="form-group">
                    <label for="parent_ex_service_man_id">Parent Ex-Service Man ID no:</label>
                    <input type="text" id="parent_ex_service_man_id" name="parent_ex_service_man_id">
                </div>
                <div class="form-group-1">
                    <label for="sports_man">Sports Man:</label>
                    <input type="text" id="sports_man" name="sports_man">
                </div>
                <div class="form-group">
                    <label for="fathers_name">Father's Name:</label>
                    <input type="text" id="fathers_name" name="fathers_name">
                </div>
                <div class="form-group-1">
                    <label for="fathers_occupation">Father's Occupation:</label>
                    <input type="text" id="fathers_occupation" name="fathers_occupation">
                </div>
                <div class="form-group">
                    <label for="fathers_phone">Father's Phone No:</label>
                    <input type="text" id="fathers_phone" name="fathers_phone">
                </div>
                <div class="form-group-1">
                    <label for="fathers_aadhar">Father's Aadhar No:</label>
                    <input type="text" id="fathers_aadhar" name="fathers_aadhar">
                </div>
                <div class="form-group">
                    <label for="mothers_name">Mother's Name:</label>
                    <input type="text" id="mothers_name" name="mothers_name">
                </div>
                <div class="form-group-1">
                    <label for="mothers_occupation">Mother's Occupation:</label>
                    <input type="text" id="mothers_occupation" name="mothers_occupation">
                </div>
                <div class="form-group">
                    <label for="mothers_phone">Mother's Phone No:</label>
                    <input type="text" id="mothers_phone" name="mothers_phone">
                </div>
                <div class="form-group-1">
                    <label for="mothers_aadhar">Mother's Aadhar No:</label>
                    <input type="text" id="mothers_aadhar" name="mothers_aadhar">
                </div>
                <!-- Add more input fields for other student details here -->
                <div class="form-group">
                    <label for="profile">Profile Photo:</label>
                    <input type="file" id="profile" name="profile" required>
                </div>
                <div class="form-group-1">
                    <label for="dept">Department:</label>
                    <input type="text" id="dept" name="dept" required>
                </div>
                <div class="form-group">
                    <label for="name_rollno">Name Roll No:</label>
                    <input type="text" id="name_rollno" name="name_rollno" required>
                </div>
                <div class="form-group-1">
                    <label for="tutor">Tutor:</label>
                    <input type="text" id="tutor" name="tutor" required>
                </div>
                <div class="form-group">
                    <label for="aca_year">Academic Year:</label>
                    <input type="text" id="aca_year" name="aca_year" required>
                </div>
                <div class="submit-button">
                    <button class="sub-btn" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
