<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kitchen Price Calculator | Wooden Countertops</title>

  <!-- FontAwesome for Close Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    /* Your previous CSS (unchanged) */
    :root {
      --primary: #5d4037;
      --primary-light: #8d6e63;
      --secondary: #a1887f;
      --dark: #3e2723;
      --light: #efebe9;
      --gray: #d7ccc8;
      --shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
      background-color: #efebe9;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }
    .calculator-container {
      background: white;
      border-radius: 12px;
      box-shadow: var(--shadow);
      width: 100%;
      max-width: 600px;
      padding: 30px;
      position: relative; /* Needed for close button positioning */
      transition: all 0.3s ease;
      border: 1px solid #d7ccc8;
    }
    /* X Close Button */
    #close-btn {
      position: absolute;
      top: 20px;
      right: 20px;
      text-decoration: none;
      font-size: 24px;
      color: var(--dark);
      background: #ffffff;
      padding: 6px 10px;
      border-radius: 50%;
      box-shadow: var(--shadow);
      transition: background 0.3s, transform 0.2s;
    }
    #close-btn:hover {
      background: var(--primary-light);
      color: white;
      transform: scale(1.1);
    }
    .calculator-header {
      text-align: center;
      margin-bottom: 25px;
    }
    .calculator-header h1 {
      color: var(--dark);
      font-size: 28px;
      margin-bottom: 10px;
    }
    .calculator-header p {
      color: #5d4037;
      font-size: 16px;
    }
    .form-group { margin-bottom: 20px; }
    .form-group label { display: block; margin-bottom: 8px; font-weight: 600; color: var(--dark); }
    select, input {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid var(--gray);
      border-radius: 8px;
      font-size: 16px;
      transition: all 0.3s;
      background-color: white;
    }
    select:focus, input:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(93, 64, 55, 0.2);
    }
    .radio-group {
      display: flex;
      gap: 15px;
      margin-top: 10px;
    }
    .radio-option {
      flex: 1;
      text-align: center;
    }
    .radio-option input { display: none; }
    .radio-option label {
      display: block;
      padding: 12px;
      border: 1px solid var(--gray);
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s;
    }
    .radio-option input:checked + label {
      border-color: var(--primary);
      background-color: rgba(93, 64, 55, 0.1);
      color: var(--primary);
      font-weight: 600;
    }
    button {
      width: 100%;
      padding: 15px;
      background: linear-gradient(to right, var(--primary), var(--primary-light));
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s;
      margin-top: 10px;
    }
    button:hover {
      background: linear-gradient(to right, var(--primary-light), var(--primary));
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(93, 64, 55, 0.2);
    }
    .result {
      margin-top: 25px;
      padding: 20px;
      background: #efebe9;
      border-radius: 8px;
      border-left: 4px solid var(--primary);
      display: none;
      animation: fadeIn 0.5s ease;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .result h3 {
      color: var(--primary);
      margin-bottom: 10px;
      font-size: 18px;
    }
    .price-display {
      font-size: 24px;
      font-weight: 700;
      color: var(--dark);
      margin-bottom: 10px;
    }
    .result p { color: #5d4037; font-size: 14px; }
    .countertop-info {
      margin-top: 15px;
      padding: 10px;
      background-color: #f5f5f5;
      border-radius: 6px;
      font-size: 14px;
      color: #5d4037;
    }
    @media (max-width: 480px) {
      .calculator-container { padding: 20px; }
      .radio-group { flex-direction: column; gap: 10px; }
    }
  </style>

</head>
<body>

<div class="calculator-container">

  <!-- X Close Button -->
  <a href="home.php" id="close-btn">
    <i class="fas fa-times"></i>
  </a>

  <div class="calculator-header">
    <h1>Wooden Kitchen Price Calculator</h1>
    <p>Get an instant estimate for your wooden kitchen</p>
  </div>

  <div class="form-group">
    <label for="kitchen-type">Kitchen Shape</label>
    <select id="kitchen-type">
      <option value="straight">Straight Kitchen</option>
      <option value="l-shaped">L-Shaped Kitchen</option>
      <option value="u-shaped">U-Shaped Kitchen</option>
      <option value="parallel">Parallel Kitchen</option>
    </select>
  </div>

  <div class="form-group">
    <label for="size">Kitchen Size (in sq.ft.)</label>
    <input type="number" id="size" placeholder="Enter size in square feet">
  </div>

  <div class="form-group">
    <label>Material Type</label>
    <div class="radio-group">
      <div class="radio-option">
        <input type="radio" id="material-basic" name="material" value="basic" checked>
        <label for="material-basic">Basic (₹1,200/sq.ft)</label>
      </div>
      <div class="radio-option">
        <input type="radio" id="material-premium" name="material" value="premium">
        <label for="material-premium">Premium (₹1,800/sq.ft)</label>
      </div>
      <div class="radio-option">
        <input type="radio" id="material-luxury" name="material" value="luxury">
        <label for="material-luxury">Luxury (₹2,500/sq.ft)</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="countertop">Countertop Wood Type</label>
    <select id="countertop">
      <option value="teak">Teak Wood (₹450/sq.ft)</option>
      <option value="oak">Oak Wood (₹400/sq.ft)</option>
      <option value="maple">Maple Wood (₹380/sq.ft)</option>
      <option value="sheesham">Sheesham Wood (₹350/sq.ft)</option>
      <option value="plywood">Plywood (₹250/sq.ft)</option>
      <option value="mdf">MDF (₹200/sq.ft)</option>
    </select>
    <div class="countertop-info">
      <i class="fas fa-info-circle"></i> Prices vary based on wood quality and thickness
    </div>
  </div>

  <button onclick="calculateKitchenPrice()">
    <i class="fas fa-calculator"></i> Calculate Price
  </button>

  <div id="result" class="result">
    <h3>Estimated Kitchen Cost</h3>
    <div class="price-display" id="price-result">₹0</div>
    <p>Includes modular cabinets, wooden countertop, and installation. Final price may vary based on design choices.</p>
  </div>

</div>

<script>
function calculateKitchenPrice() {
  const kitchenType = document.getElementById('kitchen-type').value;
  const size = parseFloat(document.getElementById('size').value) || 0;
  const material = document.querySelector('input[name="material"]:checked').value;
  const countertop = document.getElementById('countertop').value;

  let basePrice = 0;
  switch(material) {
    case 'basic': basePrice = 1200; break;
    case 'premium': basePrice = 1800; break;
    case 'luxury': basePrice = 2500; break;
  }

  let typeMultiplier = 1;
  switch(kitchenType) {
    case 'l-shaped': typeMultiplier = 1.2; break;
    case 'u-shaped': typeMultiplier = 1.3; break;
    case 'parallel': typeMultiplier = 1.1; break;
  }

  let countertopCost = 0;
  switch(countertop) {
    case 'teak': countertopCost = 450 * size; break;
    case 'oak': countertopCost = 400 * size; break;
    case 'maple': countertopCost = 380 * size; break;
    case 'sheesham': countertopCost = 350 * size; break;
    case 'plywood': countertopCost = 250 * size; break;
    case 'mdf': countertopCost = 200 * size; break;
  }

  const totalPrice = (size * basePrice * typeMultiplier) + countertopCost;

  document.getElementById('price-result').textContent = '₹' + totalPrice.toLocaleString('en-IN');
  document.getElementById('result').style.display = 'block';
  document.getElementById('result').scrollIntoView({ behavior: 'smooth' });
}
</script>

</body>
</html>
