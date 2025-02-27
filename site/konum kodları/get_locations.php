<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "konum_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$sql = "SELECT user_id, latitude, longitude FROM users";
$result = $conn->query($sql);

$locations = [];
while ($row = $result->fetch_assoc()) {
    $locations[] = $row;
}

header('Content-Type: application/json');
echo json_encode($locations);

$conn->close();
?>
