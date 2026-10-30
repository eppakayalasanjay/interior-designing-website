<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", (getenv('DB_PASSWORD') ?: ''), "interior_design");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name   = $conn->real_escape_string($_POST["name"]);
    $mobile = $conn->real_escape_string($_POST["mobile"]);
    $email  = $conn->real_escape_string($_POST["email"]);
    $area   = $conn->real_escape_string($_POST["area"]);
    $Description = $conn->real_escape_string($_POST["Description"]);

    $imageData = file_get_contents($_FILES['image']['tmp_name']);
    $imageType = $_FILES['image']['type'];

    $stmt = $conn->prepare("INSERT INTO designer_contacts (name, mobile, email, area, description, image, image_type) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $mobile, $email, $area, $Description, $imageData, $imageType);
    if ($stmt->execute()) {
        echo "<script>
            alert('Your details were submitted successfully. We will be contacting you soon!');
            window.location.href = 'home.php'; // Change this if your home file is different
        </script>";
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Share  Your Designr</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #ffecd2, #fcb69f);
      padding: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .form-container {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 450px;
    }
    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }
    input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
    input[type="file"] {
      padding: 8px;
    }
    button {
      width: 100%;
      padding: 12px;
      background-color: #f4511e;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }
    button:hover {
      background-color: #d63b13;
    }
  </style>
</head>
<body>

  <form class="form-container" method="POST" enctype="multipart/form-data">
    <h2>Share your Design</h2>
    <input type="text" name="name" placeholder="Name" required>
    <input type="tel" name="mobile" placeholder="Mobile Number" required>
    <input type="email" name="email" placeholder="Email Address" required>
    <input type="text" name="area" placeholder="Area / City" required>
    <input type="text" name="Description" placeholder="Description" required>
    <input type="file" name="image" accept="image/*" required>
    <button type="submit">Share your Design</button>
  </form>

</body>
</html>
