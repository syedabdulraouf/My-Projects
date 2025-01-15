<?php
// Start the session (optional, depending on whether you want to keep session data)
session_start();

// Check if the form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize and Validate Input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $pickup = htmlspecialchars(trim($_POST['pickup']));
    $date = htmlspecialchars(trim($_POST['date']));
    $car_type = htmlspecialchars(trim($_POST['car']));
    $special_requests = htmlspecialchars(trim($_POST['message']));

    // Validate required fields
    if (empty($name) || empty($email) || empty($pickup) || empty($date)) {
        echo "<h2>Error: All required fields must be filled!</h2>";
        exit;
    }

    // Simple sanitization: Ensure no unwanted HTML tags
    $name = strip_tags($name);
    $email = strip_tags($email);
    $pickup = strip_tags($pickup);
    $date = strip_tags($date);
    $car_type = strip_tags($car_type);
    $special_requests = strip_tags($special_requests);

    // Output the confirmation page
    echo "<html>
<head>
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Booking Confirmation</h1>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Pick-Up Location:</strong> $pickup</p>
    <p><strong>Rental Date:</strong> $date</p>
    <p><strong>Car Type:</strong> $car_type</p>
    <p><strong>Special Requests:</strong> $special_requests</p>

    <footer>
        <p>&copy; 2024 Syed's Rentals. All Rights Reserved.</p>
    </footer>
</body>
</html>";
} else {
    // If the form wasn't submitted via POST, redirect back to the booking form
    header("Location: booking_form.html");
    exit;
}
?>
