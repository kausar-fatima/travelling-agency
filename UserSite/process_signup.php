<?php
// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['nameInput'];
    $email = $_POST['emailInput'];
    $password = $_POST['passwordInput'];
    $confirmpassword = $_POST['confirmpasswordInput'];

    // Validation logic here

    // Database connection
    $servername = "localhost"; // Assuming MySQL is installed locally
    $username = "root"; // Your MySQL username
    $password = ""; // Your MySQL password, if any
    $dbname = "travelagency";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert user data into database
    $sql = "INSERT INTO usersdata (name, email, password)
            VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        // Redirect to login page
        header("Location: signin.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>