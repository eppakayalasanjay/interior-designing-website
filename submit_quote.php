<?php
// Connect to Database
$host = 'localhost';
$dbname = 'interior_design';
$username = 'root'; // Change if your MySQL user is different
$password = getenv('DB_PASSWORD') ?: ''; // Change if your MySQL password is not empty

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if form submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Fetch form data safely
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $city = htmlspecialchars($_POST['city']);

        // Insert into database
        $stmt = $conn->prepare("INSERT INTO consultations (name, email, phone, city) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $phone, $city]);

        // Redirect or success message
        echo "<script>alert('Thank you! Your consultation has been booked we will be contacting you with in 24 hours.'); window.location.href='home.php';</script>";
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
