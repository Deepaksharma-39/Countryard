<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate and sanitize input data
    $name = htmlspecialchars($_POST["name_contact"]);
    $lastname = htmlspecialchars($_POST["lastname_contact"]);
    $email = filter_var($_POST["email_contact"], FILTER_VALIDATE_EMAIL);
    $phone = preg_replace('/[^0-9]/', '', $_POST["phone_contact"]);
    $message = htmlspecialchars($_POST["message_contact"]);
    $verify = intval($_POST["verify_contact"]);

    // Perform additional validation checks
    if (empty($name) || empty($lastname) || empty($email) || empty($phone) || empty($message) || $verify !== 4) {
        echo "Please fill all required fields and answer the verification question correctly.";
        exit();
    }

    // Database connection
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'countryard';

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and execute SQL statement using prepared statement
    $query = "INSERT INTO contact_form (name, lastname, email, phone, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sssss", $name, $lastname, $email, $phone, $message);
    
    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Form submitted successfully!') ; window.location = '../contact.php'</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
