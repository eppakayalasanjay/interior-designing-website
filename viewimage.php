<?php
// view_image.php? id=1

$conn = new mysqli("localhost", "root", (getenv('DB_PASSWORD') ?: ''), "interior_design");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = intval($_GET['id']);
$result = $conn->query("SELECT image, image_type FROM designer_contacts WHERE id = $id");

if ($result && $row = $result->fetch_assoc()) {
    header("Content-Type: " . $row['image_type']);
    echo $row['image'];
} else {
    http_response_code(404);
    echo "Image not found";
}
$conn->close();
?>
