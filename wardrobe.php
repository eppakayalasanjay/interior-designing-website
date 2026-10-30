<?php
// wardrobe_calculator.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wardrobe Price Calculator | Livspace</title>

    <!-- FontAwesome for the X Close Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #2e7d32;
            --primary-light: #4caf50;
            --secondary: #ff5722;
            --dark: #333;
            --light: #f9f9f9;
            --gray: #e0e0e0;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        * {
            margin: 0; padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #f5f5f5;
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
            position: relative;
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
            color: var(--primary);
            font-size: 28px;
            margin-bottom: 10px;
        }
        .calculator-header p {
            color: #666;
            font-size: 16px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark);
        }
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
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.2);
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
        .radio-option input {
            display: none;
        }
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
            background-color: rgba(46, 125, 50, 0.1);
            color: var(--primary);
            font-weight: 600;
        }
        .checkbox-group {
            margin-top: 10px;
        }
        .checkbox-option {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }
        .checkbox-option input {
            width: auto;
            margin-right: 10px;
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
            box-shadow: 0 6px 12px rgba(46, 125, 50, 0.2);
        }
        .result {
            margin-top: 25px;
            padding: 20px;
            background: #f1f8e9;
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
        .result p {
            color: #666;
            font-size: 14px;
        }
        @media (max-width: 480px) {
            .calculator-container {
                padding: 20px;
            }
            .radio-group {
                flex-direction: column;
                gap: 10px;
            }
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
        <h1>Wardrobe Price Calculator</h1>
        <p>Get an instant estimate for your custom wardrobe</p>
    </div>

    <!-- Form Fields -->
    <div class="form-group">
        <label for="wardrobe-type">Wardrobe Type</label>
        <select id="wardrobe-type">
            <option value="sliding">Sliding Door Wardrobe</option>
            <option value="hinged">Hinged Door Wardrobe</option>
            <option value="walk-in">Walk-in Wardrobe</option>
            <option value="corner">Corner Wardrobe</option>
        </select>
    </div>

    <div class="form-group">
        <label for="width">Width (in feet)</label>
        <input type="number" id="width" placeholder="Enter width" min="1" step="0.1">
    </div>

    <div class="form-group">
        <label for="height">Height (in feet)</label>
        <input type="number" id="height" placeholder="Enter height" min="1" step="0.1">
    </div>

    <div class="form-group">
        <label for="depth">Depth (in feet)</label>
        <input type="number" id="depth" placeholder="Enter depth" value="2" min="1" step="0.1">
    </div>

    <div class="form-group">
        <label>Material Type</label>
        <div class="radio-group">
            <div class="radio-option">
                <input type="radio" id="material-basic" name="material" value="basic" checked>
                <label for="material-basic">Basic (₹800/sq.ft)</label>
            </div>
            <div class="radio-option">
                <input type="radio" id="material-premium" name="material" value="premium">
                <label for="material-premium">Premium (₹1,200/sq.ft)</label>
            </div>
            <div class="radio-option">
                <input type="radio" id="material-luxury" name="material" value="luxury">
                <label for="material-luxury">Luxury (₹1,800/sq.ft)</label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Additional Features</label>
        <div class="checkbox-group">
            <div class="checkbox-option">
                <input type="checkbox" id="feature-mirror" value="mirror">
                <label for="feature-mirror">Full-length Mirror (+₹1,500)</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="feature-lighting" value="lighting">
                <label for="feature-lighting">LED Lighting (+₹2,500)</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="feature-drawers" value="drawers">
                <label for="feature-drawers">Extra Drawers (+₹1,000 per drawer)</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="feature-shoe-rack" value="shoe-rack">
                <label for="feature-shoe-rack">Built-in Shoe Rack (+₹3,000)</label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="drawer-count">Number of Extra Drawers</label>
        <input type="number" id="drawer-count" placeholder="Enter number of drawers" min="0" value="0" disabled>
    </div>

    <button onclick="calculateWardrobePrice()">
        <i class="fas fa-calculator"></i> Calculate Price
    </button>

    <div id="result" class="result">
        <h3>Estimated Wardrobe Cost</h3>
        <div class="price-display" id="price-result">₹0</div>
        <p>Includes material, labor, and installation. Final price may vary based on design choices.</p>
        <p id="breakdown" style="margin-top: 10px;"></p>
    </div>

</div>

<script>
function calculateWardrobePrice() {
    // Get input values
    const width = parseFloat(document.getElementById('width').value) || 0;
    const height = parseFloat(document.getElementById('height').value) || 0;
    const depth = parseFloat(document.getElementById('depth').value) || 0;
    
    // Validate dimensions
    if (width <= 0 || height <= 0 || depth <= 0) {
        alert('Please enter valid dimensions (width, height, and depth must be greater than 0)');
        return;
    }
    
    // Calculate surface area (approximation for wardrobe)
    // Front + back + two sides + top + bottom
    const surfaceArea = (width * height * 2) + (depth * height * 2) + (width * depth * 2);
    
    // Get material type
    let materialRate = 800; // default basic
    const material = document.querySelector('input[name="material"]:checked').value;
    
    switch(material) {
        case 'premium':
            materialRate = 1200;
            break;
        case 'luxury':
            materialRate = 1800;
            break;
    }
    
    // Calculate base price
    let basePrice = surfaceArea * materialRate;
    
    // Apply wardrobe type multiplier
    const wardrobeType = document.getElementById('wardrobe-type').value;
    let typeMultiplier = 1;
    
    switch(wardrobeType) {
        case 'sliding':
            typeMultiplier = 1.1; // 10% more for sliding doors
            break;
        case 'walk-in':
            typeMultiplier = 1.5; // 50% more for walk-in
            break;
        case 'corner':
            typeMultiplier = 1.2; // 20% more for corner
            break;
    }
    
    basePrice *= typeMultiplier;
    
    // Calculate additional features
    let featuresTotal = 0;
    let featuresBreakdown = [];
    
    if (document.getElementById('feature-mirror').checked) {
        featuresTotal += 1500;
        featuresBreakdown.push('Full-length Mirror: ₹1,500');
    }
    
    if (document.getElementById('feature-lighting').checked) {
        featuresTotal += 2500;
        featuresBreakdown.push('LED Lighting: ₹2,500');
    }
    
    if (document.getElementById('feature-shoe-rack').checked) {
        featuresTotal += 3000;
        featuresBreakdown.push('Shoe Rack: ₹3,000');
    }
    
    // Handle drawers
    if (document.getElementById('feature-drawers').checked) {
        const drawerCount = parseInt(document.getElementById('drawer-count').value) || 0;
        if (drawerCount > 0) {
            const drawersCost = drawerCount * 1000;
            featuresTotal += drawersCost;
            featuresBreakdown.push(`Extra Drawers (${drawerCount}): ₹${drawersCost.toLocaleString()}`);
        }
    }
    
    // Calculate total price
    const totalPrice = basePrice + featuresTotal;
    
    // Display result
    document.getElementById('price-result').textContent = '₹' + totalPrice.toLocaleString();
    
    // Create breakdown text
    let breakdownText = `
        <strong>Base Price:</strong> ₹${Math.round(basePrice).toLocaleString()} (${width}ft × ${height}ft × ${depth}ft, ${material} material)<br>
    `;
    
    if (featuresBreakdown.length > 0) {
        breakdownText += `
            <strong>Additional Features:</strong><br>
            ${featuresBreakdown.join('<br>')}<br>
            <strong>Features Total:</strong> ₹${featuresTotal.toLocaleString()}<br>
        `;
    }
    
    document.getElementById('breakdown').innerHTML = breakdownText;
    document.getElementById('result').style.display = 'block';
}

// Enable/disable drawer count input based on checkbox
document.getElementById('feature-drawers').addEventListener('change', function() {
    document.getElementById('drawer-count').disabled = !this.checked;
});
</script>

</body>
</html>