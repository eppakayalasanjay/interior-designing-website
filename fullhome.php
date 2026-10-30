<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Colorful Home Interior Price Calculator</title>

  <!-- FontAwesome for Close Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    :root {
      --primary: #6a5acd;
      --secondary: #9370db;
      --accent: #ff7f50;
      --light: #f8f9fa;
      --dark: #343a40;
      --success: #28a745;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
      min-height: 100vh;
      margin: 0;
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .calculator-container {
      background: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 600px;
      position: relative; /* Important for X button */
      transition: all 0.3s ease;
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
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: background 0.3s, transform 0.2s;
    }
    #close-btn:hover {
      background: var(--primary);
      color: white;
      transform: scale(1.1);
    }

    h1 {
      color: var(--primary);
      text-align: center;
      margin-bottom: 30px;
      font-size: 28px;
      position: relative;
      padding-bottom: 15px;
    }

    h1::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background: var(--accent);
      border-radius: 2px;
    }

    .form-group {
      margin-bottom: 25px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: var(--dark);
    }

    select, input {
      width: 100%;
      padding: 12px 15px;
      border: 2px solid #e0e0e0;
      border-radius: 8px;
      font-size: 16px;
      background-color: #f8f9fa;
      transition: all 0.3s;
    }

    select:focus, input:focus {
      outline: none;
      border-color: var(--secondary);
      box-shadow: 0 0 0 3px rgba(106, 90, 205, 0.2);
    }

    button {
      background: linear-gradient(to right, var(--primary), var(--secondary));
      color: white;
      padding: 15px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 18px;
      font-weight: 600;
      width: 100%;
      transition: all 0.3s;
      box-shadow: 0 4px 15px rgba(106, 90, 205, 0.3);
    }

    button:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(106, 90, 205, 0.4);
    }

    .result {
      margin-top: 30px;
      padding: 20px;
      background: linear-gradient(135deg, #e0f7fa 0%, #b2ebf2 100%);
      border-radius: 10px;
      display: none;
      animation: fadeIn 0.5s ease;
      border-left: 5px solid var(--accent);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .result h2 {
      color: var(--primary);
      margin-top: 0;
    }

    #price {
      color: var(--accent);
      font-size: 24px;
      font-weight: bold;
    }

    .form-group:hover label {
      color: var(--primary);
    }

    .quality-option {
      display: flex;
      justify-content: space-between;
      margin-top: 5px;
    }

    .quality-option span {
      font-size: 12px;
      color: #666;
      font-style: italic;
    }
  </style>
</head>

<body>

<div class="calculator-container">

  <!-- X Close Button -->
  <a href="home.php" id="close-btn">
    <i class="fas fa-times"></i>
  </a>

  <h1>Design Your Dream Home</h1>

  <div class="form-group">
    <label for="property-type">Property Type</label>
    <select id="property-type">
      <option value="apartment">🏢 Apartment</option>
      <option value="villa">🏡 Villa</option>
      <option value="independent-house">🏠 Independent House</option>
      <option value="office">🏢 Office Space</option>
    </select>
  </div>

  <div class="form-group">
    <label for="rooms">Number of Rooms</label>
    <select id="rooms">
      <option value="1">1 Room</option>
      <option value="2">2 Rooms</option>
      <option value="3">3 Rooms</option>
      <option value="4">4 Rooms</option>
      <option value="5+">5+ Rooms</option>
    </select>
  </div>

  <div class="form-group">
    <label for="area">Area (in sq.ft.)</label>
    <input type="number" id="area" placeholder="Enter your property area">
  </div>

  <div class="form-group">
    <label for="service">Service Required</label>
    <select id="service">
      <option value="full-home">✨ Full Home Interior</option>
      <option value="modular-kitchen">🍳 Modular Kitchen</option>
      <option value="wardrobe">👗 Wardrobe Design</option>
      <option value="living-room">🛋️ Living Room</option>
      <option value="bedroom">🛏️ Bedroom</option>
    </select>
  </div>

  <div class="form-group">
    <label for="quality">Quality Preference</label>
    <select id="quality">
      <option value="economy">💰 Economy (₹800/sq.ft)</option>
      <option value="standard">🏠 Standard (₹1200/sq.ft)</option>
      <option value="premium">🌟 Premium (₹1800/sq.ft)</option>
      <option value="luxury">💎 Luxury (₹2500/sq.ft)</option>
    </select>
    <div class="quality-option">
      <span>Basic materials</span>
      <span>Standard materials</span>
      <span>Premium materials</span>
      <span>Luxury materials</span>
    </div>
  </div>

  <button onclick="calculatePrice()">
    Calculate Your Design Cost
  </button>

  <div id="result" class="result">
    <h2>Your Estimated Design Cost: <span id="price"></span></h2>
    <p>This estimate includes design fees and material costs. For a personalized quote with exact specifications, our design experts will contact you.</p>
  </div>

</div>

<script>
function calculatePrice() {
  const propertyType = document.getElementById('property-type').value;
  const rooms = document.getElementById('rooms').value;
  const area = parseFloat(document.getElementById('area').value) || 0;
  const service = document.getElementById('service').value;
  const quality = document.getElementById('quality').value;

  let basePrice = 0;
  switch(quality) {
    case 'economy': basePrice = 800; break;
    case 'standard': basePrice = 1200; break;
    case 'premium': basePrice = 1800; break;
    case 'luxury': basePrice = 2500; break;
  }

  let serviceMultiplier = 1;
  if (service === 'modular-kitchen') serviceMultiplier = 1.2;
  if (service === 'wardrobe') serviceMultiplier = 0.8;
  if (service === 'living-room') serviceMultiplier = 1.1;
  if (service === 'bedroom') serviceMultiplier = 0.9;

  let propertyMultiplier = 1;
  if (propertyType === 'villa') propertyMultiplier = 1.3;
  if (propertyType === 'independent-house') propertyMultiplier = 1.2;
  if (propertyType === 'office') propertyMultiplier = 1.1;

  let roomAdjustment = 1;
  if (rooms === "1") roomAdjustment = 1.1;
  if (rooms === "2") roomAdjustment = 1;
  if (rooms === "3") roomAdjustment = 0.95;
  if (rooms === "4") roomAdjustment = 0.9;
  if (rooms === "5+") roomAdjustment = 0.85;

  const estimatedPrice = area * basePrice * serviceMultiplier * propertyMultiplier * roomAdjustment;

  const formatter = new Intl.NumberFormat('en-IN', {
    style: 'currency',
    currency: 'INR',
    maximumFractionDigits: 0
  });

  document.getElementById('price').textContent = formatter.format(estimatedPrice);
  document.getElementById('result').style.display = 'block';
  document.getElementById('result').scrollIntoView({ behavior: 'smooth' });
}
</script>

</body>
</html>
