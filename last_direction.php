<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "robot_control");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch the last direction
$sql = "SELECT direction, timestamp FROM directions ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Last Direction: " . $row['direction'] . "<br>";
    echo "Timestamp: " . $row['timestamp'];
} else {
    echo "No directions found.";
}

// Close the connection
$conn->close();
?>
