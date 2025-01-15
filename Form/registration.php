<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formstyles.css">
    <title>Course Information</title>
</head>
<body>
    <h2>Course Information</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Personal Information</h3>";
        echo "<p>Name: " . $_POST['name'] . "</p>";
        echo "<p>Email: " . $_POST['email'] . "</p>";
        echo "<p>Age: " . $_POST['age'] . "</p>";
        echo "<p>Gender: " . $_POST['gender'] . "</p>";
        
        echo "<h3>Course Information</h3>";
        echo "<p>Selected Course: " . $_POST['course'] . "</p>";
        
        if (isset($_POST['levels'])) {
            echo "<p>Selected Level(s): " . implode(", ", $_POST['levels']) . "</p>";
        } else {
            echo "<p>By default, Level 1 selected</p>";
        }
    } else {
        echo "<p>No form submission detected.</p>";
    }
    ?>
    <p>Course Registration Is Successful!</p>
</body>
</html>