<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "robot_control");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if 'direction' is sent via POST method
if (isset($_POST['direction'])) {
    $direction = $_POST['direction'];

    // Insert the direction into the database
    $sql = "INSERT INTO directions (direction) VALUES ('$direction')";

    if ($conn->query($sql) === TRUE) {
        echo "Direction saved successfully!";
    } else {
        // Display error if the query fails
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
