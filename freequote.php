<?php
$host = 'localhost';
$dbname = 'interior_design';
$username = 'root'; // or your MySQL username
$password = getenv('DB_PASSWORD') ?: '';     // or your MySQL password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
        $property_name = htmlspecialchars($_POST['property_name']);

        $stmt = $conn->prepare("INSERT INTO free_quotes (name, phone, email, property_name) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $phone, $email, $property_name]);

        echo "<script>alert('Thank you! Our Designer will contact you in next 4 hours.'); window.location.href='thank_you.php';</script>";
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
