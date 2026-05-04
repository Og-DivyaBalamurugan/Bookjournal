<?php
// Database configuration
$servername = "localhost"; // Use your server name or IP
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "portfolio"; // The database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Prepare and bind SQL query
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message); // "sss" means the query expects three string values

    // Execute the statement and check for success
    if ($stmt->execute()) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Invalid email format');</script>";
            echo "<script>window.location.href = 'contact.php';</script>";
            exit();
        }
        else{
        echo "<script>alert('Message sent successfully and stored in database!');</script>";
        echo "<script>window.location.href = 'contact.php';</script>";}
    } else {
        echo "<script>alert('Failed to send message or store data in database.');</script>";
        echo "<script>window.location.href = 'contact.php';</script>";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    header("Location: contact.php");
    exit();
}
?>
