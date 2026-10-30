<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Get Your Free Quote</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Styling (Same Style as Consultation) -->
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    body {
      background: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }
    .quote-container {
      background: #ffffff;
      padding: 40px 30px;
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 450px;
    }
    .quote-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
      font-weight: 600;
    }
    form input, form select {
      width: 100%;
      padding: 12px 15px;
      margin-bottom: 18px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
      background: #fafafa;
    }
    form select {
      background: #fafafa;
    }
    button {
      width: 100%;
      padding: 12px;
      background-color: #f4511e;
      border: none;
      border-radius: 8px;
      color: white;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s, transform 0.2s;
    }
    button:hover {
      background-color: #d63b13;
      transform: scale(1.05);
    }
    p {
      font-size: 13px;
      margin-top: 10px;
      text-align: center;
      color: #666;
    }
    a {
      color: #f4511e;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>

<div class="quote-container">
  <h2>Get Your Free Quote</h2>

  <form action="freequote.php" method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="tel" name="phone" placeholder="Phone Number" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="Description" placeholder="Product Code/Description" required>

    <button type="submit">Request Quote</button>

    <p>By submitting this form, you agree to our <a href="#">privacy policy</a> &amp; <a href="#">terms</a>.</p>
  </form>
</div>

</body>
</html>
