<?php
// thank_you.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thank You | Jay Interiors</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .thank-you-box {
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
      text-align: center;
    }
    h1 {
      color: #6a5acd;
      margin-bottom: 20px;
    }
    p {
      font-size: 18px;
      color: #555;
    }
    a {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background: #6a5acd;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      transition: background 0.3s;
    }
    a:hover {
      background: #5a4bb7;
    }
  </style>
</head>
<body>

<div class="thank-you-box">
  <h1>Thank You!</h1>
  <p>Your form has been submitted successfully.</p>
  <a href="home.php">Back to Home</a>
</div>

</body>
</html>
