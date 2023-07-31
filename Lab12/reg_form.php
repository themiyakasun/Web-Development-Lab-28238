<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        label, input, select {
            display: block;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            margin-top: 15px;
        }
    </style>
</head>

<body>

<form action="" method="post">
    <h2>Registration Form</h2>
    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName" required>

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName" required>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label>Gender:</label>
    <input type="radio" id="male" name="gender" value="Male" required>
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="Female" required>
    <label for="female">Female</label>

    <label for="academicYear">Academic Year:</label>
    <select id="academicYear" name="academicYear" required>
        <option value="1st Year">1st Year</option>
        <option value="2nd Year">2nd Year</option>
        <option value="3rd Year">3rd Year</option>
        <option value="4th Year">4th Year</option>
    </select>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required>

    <input type="submit" value="Register">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $academicYear = $_POST["academicYear"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    echo "<h2>Registration Successful!</h2>";

    echo "<table border='1' cellpadding='5'>";
    echo "<tr><td><strong>First Name:</strong></td><td>" . $firstName . "</td></tr>";
    echo "<tr><td><strong>Last Name:</strong></td><td>" . $lastName . "</td></tr>";
    echo "<tr><td><strong>Username:</strong></td><td>" . $username . "</td></tr>";
    echo "<tr><td><strong>Password:</strong></td><td>" . $password . "</td></tr>";
    echo "<tr><td><strong>Gender:</strong></td><td>" . $gender . "</td></tr>";
    echo "<tr><td><strong>Academic Year:</strong></td><td>" . $academicYear . "</td></tr>";
    echo "<tr><td><strong>Email:</strong></td><td>" . $email . "</td></tr>";
    echo "<tr><td><strong>Phone Number:</strong></td><td>" . $phone . "</td></tr>";
    echo "</table>";
} else {
    echo "<h2>Error: Form submission method not allowed.</h2>";
}
?>

</body>
</html>
