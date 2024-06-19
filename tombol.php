<?php
// Create connection
$conn = mysqli_connect("localhost", "root", "", "dbmonitoring");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the POST data
$postData = file_get_contents('php://input');
$data = json_decode($postData, true);

// Insert data into the database
$value = $data['value'];
$sql = "INSERT INTO sensor (tombol) VALUES ('$value')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Data inserted successfully"]);
} else {
    echo json_encode(["message" => "Error: " . $sql . "<br>" . $conn->error]);
}

$conn->close();
?>
