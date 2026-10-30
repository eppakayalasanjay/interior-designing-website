<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>JAY INTERIORS - Home Interiors</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }    
    body {
      line-height: 1.6;
      background: #fff;
      color: #333;
    }

    header {
      background: #fff;
      padding: 20px 50px;
      display: flex;
      justify-content: right;
      align-items: center;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    header img {
      height: 40px;
    }

    header nav a {
      margin-right: 20px;
      text-decoration: none;
      color: #333;
      font-weight: 500;
    }

    .hero {
      position: relative;
      display: flex;
      flex-wrap: wrap;
      padding: 120px;
      background: url('photos/jay2') no-repeat center center;
      background-size: cover;
      color: white;
    }

    .hero::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 50%;
      height: 100%;
      z-index: 1;
    }

    .hero-content,
    .hero-form {
      z-index: 2;
      position: relative;
    }

    .hero-content {
      flex: 1;
      min-width: 300px;
      padding: 20px;
    }

    .hero-content h1 {
      font-size: 2.5rem;
      color: rgba(235, 198, 9, 0.99);
      margin-bottom: 20px;
    }

    .hero-content p {
      font-size: 1.1rem;
      color: rgb(35, 206, 244);
      margin-bottom: 30px;
    }

    .hero-form {
      flex: 1;
      min-width: 250px;
      max-width: 400px;
      margin-left: auto;
      background: rgba(255,255,255,0.95);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      color: #333;
    }

    .hero-form h2 {
      font-size: 1.5rem;
      margin-bottom: 20px;
    }

    .hero-form input,
    .hero-form select,
    .hero-form button {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 0.95rem;
    }

    .hero-form button {
      background: #f4511e;
      color: #fff;
      border: none;
      cursor: pointer;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    .hero-form button:hover {
      background: #d23c0e;
    }

    .hero-form p {
      font-size: 0.85rem;
      color: #555;
      margin-top: 5px;
    }

    .hero-form p a {
      color: #f4511e;
      text-decoration: none;
    }

    .trust {
      text-align: center;
      padding: 40px 20px;
      background: #fff;
    }

    .trust img {
      max-width: 100px;
      margin: 10px;
    }
    .consultation-section {
  background-color: #f5f5f5;
  padding: 80px 20px;
  text-align: center;
  font-family: 'Poppins', sans-serif;
}

.consultation-section h2 {
  font-size: 36px;
  font-weight: 700;
  color: #2f2a37;
  margin-bottom: 20px;
}

.consultation-section p {
  font-size: 18px;
  color: #2f2a37;
  max-width: 800px;
  margin: 0 auto 40px;
  line-height: 1.6;
}

.cta-button {
  background-color: #ec4d5c;
  color: white;
  padding: 16px 32px;
  border-radius: 50px;
  text-decoration: none;
  font-weight: 600;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

.cta-button:hover {
  background-color: #d94452;
}
    .services,
    .gallery,
    .testimonials,
    .faq {
      padding: 50px 20px;
      background: #f5f5f5;
    }

    .services h2,
    .gallery h2,
    .testimonials h2,
    .faq h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 2rem;
    }
    .how-it-works-section {
  text-align: center;
  padding: 40px 20px;
  font-family: 'Arial', sans-serif;
}

.how-it-works-section h2 {
  font-size: 32px;
  font-weight: bold;
  color: #2e2e2e;
  margin-bottom: 40px;
}

.steps-container {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  gap: 40px;
  flex-wrap: wrap;
  position: relative;
}

.step {
  width: 140px;
  text-align: center;
  position: relative;
}

.step img {
  width: 100px;
  height: 100px;
  background: #fff;
  border-radius: 50%;
  padding: 10px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
  margin-bottom: 15px;
}

.step p {
  font-size: 16px;
  color: #333;
  margin: 0;
}

.cta-button {
  margin-top: 40px;
  background-color: #f2545b;
  color: white;
  padding: 14px 28px;
  border: none;
  border-radius: 25px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.3s ease;
}

.cta-button:hover {
  background-color: #d9434f;
}
    .services-grid,
    .gallery-grid,
    .faq-list {
      display: grid;
      gap: 20px;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      max-width: 1000px;
      margin: 0 auto;
    }

    .service,
    .gallery-item,
    .faq-item {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    } 
.features {
  display: flex;
  justify-content: center;
  gap: 40px;
  padding: 20px;
}

.feature-item {
  text-align: center;
  font-family: Arial, sans-serif;
  color: #2d2d2d;
}
.feature-item img {
  width: 900px;
  height: auto;
  margin-bottom: 10px;
}
    .service img,
    .gallery-item img {
      width: 100%;
      border-radius: 10px;
    }

    .testimonial {
      text-align: center;
      max-width: 600px;
      margin: 0 auto 30px auto;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .faq-item h3 {
      cursor: pointer;
      font-size: 1.1rem;
    }

    .faq-item p {
      display: none;
      padding-top: 10px;
    }

    .section-style {
      padding: 30px 40px;
      text-align: center;
      background: #fff;
    }

    .section-style h2 {
      font-size: 2.5rem;
      margin-bottom: 10px;
      color: #2b2b2b;
    }

    .section-style p {
      font-size: 1.1rem;
      color: #666;
      margin-bottom: 40px;
    }
    .quote-btn {
      background-color: #f4511e;
      color: white;
      padding: 14px 28px;
      border: none;
      border-radius: 30px;
      font-size: 1rem;
      font-weight: 500;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .quote-btn:hover {
      background-color: #d63b13;
    }

    .card-container {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
      margin-top: 40px;
    }

    .card {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      overflow: hidden;
      max-width: 320px;
      text-align: left;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      width: 100%;
      height: auto;
      display: block;
    }

    .card-content {
      padding: 20px;
    }

    .card-title {
      font-size: 1.1rem;
      font-weight: 600;
      margin-bottom: 10px;
      color: #333;
    }

    .card-desc {
      font-size: 0.95rem;
      color: #777;
      margin-bottom: 20px;
    }

    .card-button {
      padding: 10px 20px;
      border: 2px solid #f4511e;
      background: none;
      color: #f4511e;
      border-radius: 25px;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .card-button:hover {
      background: #f4511e;
      color: white;
    }
    .offer-section {
  background-color: #f5f5f5;
  padding: 60px 20px;
  font-family: 'Poppins', sans-serif;
}

.offer-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1200px;
  margin: 0 auto 40px;
  flex-wrap: wrap;
}

.offer-header h2 {
  font-size: 36px;
  color: #2f2a37;
  font-weight: 700;
}

.quote-button {
  background-color: #ec4d5c;
  color: white;
  padding: 14px 28px;
  border-radius: 50px;
  font-weight: 600;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.quote-button:hover {
  background-color: #d94452;
}

.cards-container {
  display: flex;
  justify-content: space-between;
  gap: 20px;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: auto;
}

.offer-card {
  background-color: white;
  padding: 24px;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
  flex: 1 1 30%;
  min-width: 300px;
}

.offer-card h3 {
  font-size: 20px;
  font-weight: 600;
  color: #2f2a37;
  margin-bottom: 16px;
  display: flex;
  align-items: center;
}

.icon {
  width: 24px;
  height: 24px;
  margin-right: 10px;
}

.offer-card ul {
  list-style: disc;
  padding-left: 20px;
  color: #2f2a37;
  line-height: 1.6;
}
    footer {
      background: #222;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    @media (max-width: 768px) {
      .hero {
        flex-direction: column;
        padding: 30px;
      }

      .hero-form {
        margin-left: 0;
        margin-top: 20px;
      }

      .card-container {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      document.querySelectorAll(".faq-item h3").forEach(item => {
        item.addEventListener("click", () => {
          const p = item.nextElementSibling;
          p.style.display = p.style.display === "block" ? "none" : "block";
        });
      });
    });
  </script>
</head>
<body>
  <!-- Logo with Logo Name -->
<div style="display: flex; align-items: center; gap: 10px;">
  <img src="photos/logo2.jpg" alt="Company Logo" style="height: 60px;">
  <span style="font-size: 2.5rem;">𝗝𝗔𝗬 𝗜𝗡𝗧𝗘𝗥𝗜𝗢𝗥𝗦</span>
</div>
<a href="connectdesigner.php" class="cta-button" target="_blank" style="
  position: absolute;
  top: -30px;
  right: 20px;
  padding: 10px 20px;
  background: #f4511e;
  color: white;
  border-radius: 8px;
  text-decoration: none;
  font-weight: bold;
">
 𝘚𝘩𝘢𝘳𝘦 𝘠𝘰𝘶𝘳 𝘋𝘦𝘴𝘪𝘨𝘯

</a>

  <section class="hero">
    <div class="hero-content">
      <h1>𝔅𝔯𝔦𝔫𝔤 𝔥𝔬𝔪𝔢 𝔟𝔢𝔞𝔲𝔱𝔦𝔣𝔲𝔩 𝔦𝔫𝔱𝔢𝔯𝔦𝔬𝔯𝔰 𝔱𝔥𝔞𝔱 𝔣𝔦𝔱 𝔶𝔬𝔲𝔯 𝔟𝔲𝔡𝔤𝔢𝔱</h1>
      <p>𝐸𝓍𝓅𝑒𝓇𝒾𝑒𝓃𝒸𝑒 𝓊𝓃𝓂𝒶𝓉𝒸𝒽𝑒𝒹 𝓆𝓊𝒶𝓁𝒾𝓉𝓎 & 𝓉𝒾𝓂𝑒𝓁𝓎 𝒹𝑒𝓁𝒾𝓋𝑒𝓇𝓎</p>
    </div><div class="hero-form">
    <h2>Book Your Free Consultation</h2>

<form action="submit_quote.php" method="POST">
  <input type="text" name="name" placeholder="Name" required>
  <input type="email" name="email" placeholder="Email" required>
  <input type="tel" name="phone" placeholder="Phone Number" required>
  
  <select name="city" required>
    <option value="">Select City</option>
    <option value="nizamabad">Nizamabad</option>
    <option value="hyderabad">Hyderabad</option>
    <option value="karimnagar">Karimnagar</option>
  </select>
  
  <button type="submit">Book Now</button>

  <p>
    By submitting this form, you agree to the 
    <a href="#">privacy policy</a> &amp; 
    <a href="#">terms and conditions</a>.
  </p>
</form>
    </div>
      </section>
  <div class="features">
    <div class="feature-item">
      <img src="photos/warranty.png" alt="Personalised Designs, 10-year Warranty, Transparent Pricing">
    </div>
  </div>  
  <section class="services">
    <section class="consultation-section">
      <div class="content">
        <h2>The home design you crave</h2>
        <p>
          When you give your home the Livspace touch, you get both beauty and functionality.
          We employ state-of-the-art technology to ensure your home features a flawless
          look that lasts a very long time.
        </p>
        <a href="consultation.php" class="cta-button">BOOK FREE CONSULTATION</a>
      </div>
    </section>    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interior Design Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
        }

        header {
    background-color: #fafcfe;
    color: rgb(13, 13, 13);
    padding: 1rem 0;
    display: flex;
    justify-content: center;
   
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    height: 80px;
}

        .main-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
            position: relative;
        }

        .carousel-container {
            position: relative;
            overflow: hidden;
            margin: 0 auto;
            width: 100%;
        }

        .carousel {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 100%;
        }

        .category-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            min-width: calc(33.333% - 20px);
            margin: 0 10px;
            cursor: pointer;
            text-align: center;
            flex-shrink: 0;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .category-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .category-title {
            padding: 1rem;
            font-size: 1.2rem;
            color: #2c3e50;
            font-weight: bold;
        }

        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.7);
            border: none;
            color: #2c3e50;
            font-size: 1.5rem;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: background 0.3s;
        }

        .carousel-btn:hover {
            background: rgba(255, 255, 255, 0.9);
        }

        #prevBtn {
            left: 10px;
        }

        #nextBtn {
            right: 10px;
        }

        .carousel-dots {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #ccc;
            margin: 0 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .dot.active {
            background: #2c3e50;
        }

        @media (max-width: 900px) {
            .category-card {
                min-width: calc(50% - 20px);
            }
        }

        @media (max-width: 600px) {
            .category-card {
                min-width: calc(100% - 20px);
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Interior Design Gallery</h1>
    </header>

    <div class="main-container">
        <div class="carousel-container">
            <button class="carousel-btn" id="prevBtn"><i class="fas fa-chevron-left"></i></button>
            <div class="carousel" id="carousel">
                <!-- Kitchen Designs -->
                <div class="category-card" onclick="openCategory('kitchen')">
                    <img src="photos/kd100" alt="Kitchen" class="category-img">
                    <div class="category-title">Kitchen Designs</div>
                </div>
                
                <!-- Master Bedroom -->
                <div class="category-card" onclick="openCategory('bedroom')">
                    <img src="photos/mb1" alt="Bedroom" class="category-img">
                    <div class="category-title">Master Bedroom</div>
                </div>
                
                <!-- False Ceiling -->
                <div class="category-card" onclick="openCategory('ceiling')">
                    <img src="photos/fs1" alt="Ceiling" class="category-img">
                    <div class="category-title">False Ceiling</div>
                </div>
                
                <!-- Wardrobe Designs -->
                <div class="category-card" onclick="openCategory('wardrobe')">
                    <img src="photos/wd1" alt="Wardrobe" class="category-img">
                    <div class="category-title">Wardrobe Designs</div>
                </div>
                
                <!-- Living Room -->
                <div class="category-card" onclick="openCategory('living')">
                    <img src="photos/lr1" alt="Living Room" class="category-img">
                    <div class="category-title">Living Room</div>
                </div>
                
                <!-- Dining Room -->
                <div class="category-card" onclick="openCategory('dining')">
                    <img src="photos/dr1" alt="Dining Room" class="category-img">
                    <div class="category-title">Dining Room</div>
                </div>
                
                <!-- Bathroom -->
                <div class="category-card" onclick="openCategory('bathroom')">
                    <img src="photos/bd1" alt="Bathroom" class="category-img">
                    <div class="category-title">Bathroom</div>
                </div>
                
                <!-- TV Unit -->
                <div class="category-card" onclick="openCategory('tvunit')">
                    <img src="photos/tv1" alt="TV Unit" class="category-img">
                    <div class="category-title">TV Unit</div>
                </div>
                
                <!-- Pooja Room -->
                <div class="category-card" onclick="openCategory('pooja')">
                    <img src="photos/pr1" alt="Pooja Room" class="category-img">
                    <div class="category-title">Pooja Room</div>
                </div>
                
                <!-- Balcony -->
                <div class="category-card" onclick="openCategory('balcony')">
                    <img src="photos/bl1" alt="Balcony" class="category-img">
                    <div class="category-title">Balcony</div>
                </div>
                
                <!-- Home bar  -->
                <div class="category-card" onclick="openCategory('bar')">
                    <img src="photos/ss1" alt="Home bar" class="category-img">
                    <div class="category-title">Home bar</div>
                </div>
            </div>
            <button class="carousel-btn" id="nextBtn"><i class="fas fa-chevron-right"></i></button>
        </div>
        
        <div class="carousel-dots" id="carouselDots"></div>
    </div>

    <script>
        // Carousel functionality
        const carousel = document.getElementById('carousel');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const dotsContainer = document.getElementById('carouselDots');
        const cards = document.querySelectorAll('.category-card');
        const cardCount = cards.length;
        let currentIndex = 0;
        let cardsPerView = 3;
        
        // Calculate how many cards to show based on screen size
        function updateCardsPerView() {
            if (window.innerWidth <= 900 && window.innerWidth > 600) {
                cardsPerView = 2;
            } else if (window.innerWidth <= 600) {
                cardsPerView = 1;
            } else {
                cardsPerView = 3;
            }
            updateCarousel();
            createDots();
        }
        
        // Update carousel position
        function updateCarousel() {
            const cardWidth = cards[0].offsetWidth + 20; // Include margin
            const maxIndex = Math.max(cardCount - cardsPerView, 0);
            currentIndex = Math.min(Math.max(currentIndex, 0), maxIndex);
            
            carousel.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
            updateDots();
        }
        
        // Create navigation dots
        function createDots() {
            dotsContainer.innerHTML = '';
            const dotCount = Math.max(cardCount - cardsPerView + 1, 1);
            
            for (let i = 0; i < dotCount; i++) {
                const dot = document.createElement('div');
                dot.classList.add('dot');
                if (i === currentIndex) dot.classList.add('active');
                dot.addEventListener('click', () => {
                    currentIndex = i;
                    updateCarousel();
                });
                dotsContainer.appendChild(dot);
            }
        }
        
        // Update active dot
        function updateDots() {
            const dots = document.querySelectorAll('.dot');
            dots.forEach((dot, index) => {
                if (index === currentIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }
        
        // Event listeners
        prevBtn.addEventListener('click', () => {
            currentIndex = Math.max(currentIndex - 1, 0);
            updateCarousel();
        });
        
        nextBtn.addEventListener('click', () => {
            const maxIndex = Math.max(cardCount - cardsPerView, 0);
            currentIndex = Math.min(currentIndex + 1, maxIndex);
            updateCarousel();
        });
        
        // Initialize
        window.addEventListener('load', () => {
            updateCardsPerView();
        });
        
        window.addEventListener('resize', () => {
            updateCardsPerView();
        });
        
        // Function to open category in new tab
        function openCategory(category) {
            // Sample data for each category (replace with your actual data)
            const categoryData = {
                kitchen: [

  { img: "photos/kd40", title: "Modern Kitchen", code: "KD-001" },
  { img: "photos/kd2", title: "American Walnut and Ruby Modern L-Shaped Kitchen", code: "KD-427" },
  { img: "photos/kd3", title: "Mid-Century Modern L-Shaped Kitchen with Teak Accents", code: "KD-183" },
  { img: "photos/kd4", title: "Modern Parallel Kitchen with Marble Countertop", code: "KD-562" },
  { img: "photos/kd5", title: "Sleek Black and Gold U-Shaped Kitchen with Quartz", code: "KD-319" },
  { img: "photos/kd6", title: "White Oak and Navy Blue Island Kitchen", code: "KD-745" },
  { img: "photos/kd7", title: "Matte Black Industrial Galley Kitchen with Brass", code: "KD-208" },
  { img: "photos/kd8", title: "Scandinavian White Parallel Kitchen with Wood Shelves", code: "KD-891" },
  { img: "photos/kd9", title: "Minimalist Gray L-Shaped Kitchen with Hidden Storage", code: "KD-634" },
  { img: "photos/kd10", title: "Glass and Steel Modern U-Shaped Kitchen", code: "KD-502" },
  { img: "photos/kd11", title: "Concrete and Walnut Brutalist Kitchen", code: "KD-157" },
  { img: "photos/kd12", title: "Luxury Calacatta Marble Island Kitchen", code: "KD-923" },
  { img: "photos/kd13", title: "High-Gloss Emerald Green Parallel Kitchen", code: "KD-276" },
  { img: "photos/kd14", title: "Italian Carrara Marble L-Shaped Kitchen", code: "KD-681" },
  { img: "photos/kd15", title: "Black Lacquer Kitchen with Crystal Chandelier", code: "KD-349" },
  { img: "photos/kd16", title: "Bespoke Cherry Wood Chef's Kitchen with Copper Hood", code: "KD-412" },
  { img: "photos/kd17", title: "Art Deco Inspired Kitchen with Geometric Brass Handles", code: "KD-538" },
  { img: "photos/kd18", title: "Waterfall Edge Quartz Island Kitchen with Smart Appliances", code: "KD-726" },
  { img: "photos/kd19", title: "Luxury Open-Concept Kitchen with Dual Islands", code: "KD-865" },
  { img: "photos/kd20", title: "Modern Mediterranean Kitchen with Terra Cotta Backsplash", code: "KD-194" },
  { img: "photos/kd21", title: "French Provincial Kitchen with Limestone Countertops", code: "KD-753" },
  { img: "photos/kd22", title: "Rustic Reclaimed Wood Farmhouse Kitchen with Apron Sink", code: "KD-621" },
  { img: "photos/kd23", title: "Coastal Blue Shaker-Style Kitchen with Woven Barstools", code: "KD-487" },
  { img: "photos/kd24", title: "Industrial Loft Kitchen with Exposed Brick and Ductwork", code: "KD-359" },
  { img: "photos/kd25", title: "Vintage Butcher Block Kitchen with Enamel Appliances", code: "KD-842" },
  { img: "photos/kd26", title: "Bohemian Eclectic Kitchen with Moroccan Tile Backsplash", code: "KD-715" },
  { img: "photos/kd27", title: "Modern Farmhouse Kitchen with Shiplap and Black Hardware", code: "KD-293" },
  { img: "photos/kd28", title: "Transitional Kitchen with Soapstone Countertops and Brass Faucets", code: "KD-964" },
  { img: "photos/kd29", title: "Zen-Inspired Kitchen with Bamboo Cabinets and Stone Basin", code: "KD-578" },
  { img: "photos/kd30", title: "Cottagecore Kitchen with Floral Wallpaper and Open Shelving", code: "KD-401" },
  { img: "photos/kd31", title: "Urban Industrial Kitchen with Concrete Countertops", code: "KD-836" },
  { img: "photos/kd32", title: "Compact Studio Kitchen with Fold-Down Dining Table", code: "KD-259" },
  { img: "photos/kd33", title: "Smart Kitchen with Voice-Activated Lighting and Appliances", code: "KD-647" },
  { img: "photos/kd34", title: "Hidden Panel Kitchen with Appliance Garage and Pop-Up Outlets", code: "KD-972" },
  { img: "photos/kd35", title: "Tiny Home Kitchen with Space-Saving Pull-Out Pantry", code: "KD-385" },
  { img: "photos/kd36", title: "Convertible Kitchen Island with Expandable Dining Surface", code: "KD-714" },
  { img: "photos/kd37", title: "Outdoor Kitchen with Weatherproof Stainless Steel Cabinets", code: "KD-528" },
  { img: "photos/kd38", title: "Poolside Kitchen with Built-In BBQ and Mini Fridge", code: "KD-163" },
  { img: "photos/kd39", title: "Rooftop Kitchen with Panoramic City Views", code: "KD-879" },
  { img: "photos/kd40", title: "Alfresco Kitchen with Pizza Oven and Stone Countertops", code: "KD-246" },
  { img: "photos/kd41", title: "Mountain Cabin Kitchen with Live-Edge Wood Breakfast Bar", code: "KD-693" },
  { img: "photos/kd42", title: "Two-Tone Kitchen with Navy Lower Cabinets and White Uppers", code: "KD-357" },
  { img: "photos/kd43", title: "Monochromatic Black Kitchen with Matte Finishes", code: "KD-824" },
  { img: "photos/kd44", title: "Pastel Pink Kitchen with Gold Accents and Herringbone Tile", code: "KD-591" },
  { img: "photos/kd45", title: "Bold Red Lacquer Kitchen with Glass Front Cabinets", code: "KD-732" },
  { img: "photos/kd46", title: "Eco-Friendly Kitchen with Recycled Glass Countertops", code: "KD-468" },
  { img: "photos/kd47", title: "Solar-Powered Kitchen with Energy-Efficient Appliances", code: "KD-915" },
  { img: "photos/kd48", title: "Zero-Waste Kitchen with Compost Bin and Recycling Center", code: "KD-274" },
  { img: "photos/kd49", title: "Tropical Kitchen with Palmwood Cabinets and Turquoise Backsplash", code: "KD-683" },
  { img: "photos/kd50", title: "Desert Oasis Kitchen with Terracotta Flooring", code: "KD-526" },
  { img: "photos/kd51", title: "Japanese-Inspired Kitchen with Tatami Seating Nook", code: "KD-789" },
  { img: "photos/kd52", title: "Retro Diner Kitchen with Checkerboard Flooring", code: "KD-312" },
  { img: "photos/kd53", title: "1950s Vintage Kitchen with Pastel Appliances", code: "KD-857" },
  { img: "photos/kd54", title: "Futuristic Kitchen with Holographic Interface and Auto-Chef", code: "KD-941" },
  { img: "photos/kd55", title: "Modern Gothic Kitchen with Dark Wood and Iron Accents", code: "KD-625" },
  { img: "photos/kd56", title: "Art Nouveau Kitchen with Floral Motifs and Curved Lines", code: "KD-478" },
  { img: "photos/kd57", title: "Steampunk Kitchen with Copper Pipes and Gear Details", code: "KD-369" },
  { img: "photos/kd58", title: "Rustic Tuscan Kitchen with Stone Arch and Wrought Iron", code: "KD-782" },
  { img: "photos/kd59", title: "Modern Asian Kitchen with Shoji Screens and Bamboo Flooring", code: "KD-514" },
  { img: "photos/kd60", title: "Nordic Minimalist Kitchen with Light Wood and White Walls", code: "KD-896" },
  { img: "photos/kd61", title: "Industrial Chic Kitchen with Metal Shelving and Edison Bulbs", code: "KD-237" },
  { img: "photos/kd62", title: "Coastal Cottage Kitchen with Beadboard and Nautical Accents", code: "KD-653" },
  { img: "photos/kd63", title: "Modern Colonial Kitchen with Paneled Cabinets and Pewter Hardware", code: "KD-418" },
  { img: "photos/kd64", title: "Rustic Modern Kitchen with Live Edge Counter and Steel Supports", code: "KD-761" },
  { img: "photos/kd65", title: "Parisian Chic Kitchen with Carrara Marble and Gilded Mirrors", code: "KD-329" },
  { img: "photos/kd66", title: "Modern Victorian Kitchen with Ornate Details and Rich Colors", code: "KD-875" },
  { img: "photos/kd67", title: "Tropical Modern Kitchen with Rattan Accents and Palm Frond Art", code: "KD-492" },
  { img: "photos/kd68", title: "Modern Cabin Kitchen with Cedar Planks and Stone Fireplace", code: "KD-613" },
  { img: "photos/kd69", title: "Industrial Farmhouse Kitchen with Black Fixtures and Barn Doors", code: "KD-284" },
  { img: "photos/kd70", title: "Modern Eclectic Kitchen with Mixed Metals and Bold Patterns", code: "KD-737" },
  { img: "photos/kd71", title: "Contemporary Craftsman Kitchen with Greene Style Details", code: "KD-951" },
  { img: "photos/kd72", title: "Modern Bungalow Kitchen with Built-In Banquette and Leaded Glass", code: "KD-362" },
  { img: "photos/kd73", title: "Modern Chalet Kitchen with Slate Flooring and Fur Stools", code: "KD-819" },
  { img: "photos/kd74", title: "Modern Mediterranean Kitchen with Mosaic Tile and Arched Doorways", code: "KD-574" },
  { img: "photos/kd75", title: "Modern Prairie Kitchen with Horizontal Lines and Stained Glass", code: "KD-436" },
  { img: "photos/kd76", title: "Modern Spanish Kitchen with Terracotta Tiles and Wrought Iron", code: "KD-658" },
  { img: "photos/kd77", title: "Modern English Kitchen with Aga Range and Plate Racks", code: "KD-271" },
  { img: "photos/kd78", title: "Modern Alpine Kitchen with Wood Beam Ceiling and Ski Chalet Charm", code: "KD-783" },
  { img: "photos/kd79", title: "Modern Coastal Kitchen with Driftwood Accents and Sea Glass Colors", code: "KD-924" },
  { img: "photos/kd80", title: "Modern Desert Kitchen with Adobe Walls and Cactus Decor", code: "KD-517" },
  { img: "photos/kd81", title: "Modern Tropical Kitchen with Thatched Details and Banana Leaf Motifs", code: "KD-692" },
  { img: "photos/kd82", title: "Modern Japanese Kitchen with Tatami Mat Area and Bonsai Display", code: "KD-385" },
  { img: "photos/kd83", title: "Modern Chinese Kitchen with Red Lacquer Accents and Tea Station", code: "KD-749" },
  { img: "photos/kd84", title: "Modern Indian Kitchen with Spice Rack Wall and Copper Cookware", code: "KD-216" },
  { img: "photos/kd85", title: "Modern Moroccan Kitchen with Zellige Tile and Lantern Lighting", code: "KD-563" },
  { img: "photos/kd86", title: "Modern Greek Kitchen with Whitewashed Walls and Blue Accents", code: "KD-978" },
  { img: "photos/kd87", title: "Modern French Kitchen with Provencal Touches and Lavender Decor", code: "KD-324" },
  { img: "photos/kd88", title: "Modern Italian Kitchen with Pizza Station and Wine Cellar", code: "KD-459" },
  { img: "photos/kd89", title: "Modern Scandinavian Kitchen with Hygge Touches and Sheepskin Throws", code: "KD-812" },
  { img: "photos/kd90", title: "Modern German Kitchen with Beer Tap and Pretzel Hooks", code: "KD-637" },
  { img: "photos/kd91", title: "Modern Russian Kitchen with Samovar Station and Matryoshka Decor", code: "KD-721" },
  { img: "photos/kd92", title: "Modern Mexican Kitchen with Talavera Tile and Chili Pepper Accents", code: "KD-498" },
  { img: "photos/kd93", title: "Modern Brazilian Kitchen with Tropical Woods and Carnival Colors", code: "KD-852" },
  { img: "photos/kd94", title: "Modern African Kitchen with Mudcloth Accents and Tribal Patterns", code: "KD-379" },
  { img: "photos/kd95", title: "Modern Australian Kitchen with Outback Touches and Kangaroo Motifs", code: "KD-914" },
  { img: "photos/kd96", title: "Modern New Zealand Kitchen with Maori Motifs and Kiwi Decor", code: "KD-265" },
  { img: "photos/kd97", title: "Modern Canadian Kitchen with Maple Details and Moose Accents", code: "KD-548" },
  { img: "photos/kd98", title: "Modern Arctic Kitchen with Ice-Inspired Design and Polar Bear Art", code: "KD-673" },
  { img: "photos/kd99", title: "Modern Space-Age Kitchen with LED Lighting and Futuristic Appliances", code: "KD-987" },
  { img: "photos/kd100", title: "Modern Smart Kitchen with AI Assistant and Automated Cooking", code: "KD-432" },

       ],
                bedroom: [
  
    { img: "photos/mb1", title: "Contemporary Master Bedroom with Geometric Wall Art", code: "MB-327" },
    { img: "photos/mb2", title: "Modern Master Bedroom with Queen Bed and Velvet Headboard", code: "MB-142" },
    { img: "photos/mb3", title: "Luxury Bedroom Suite with Walk-in Closet", code: "MB-589" },
    { img: "photos/mb4", title: "Minimalist Master Bedroom with Floating Nightstands", code: "MB-216" },
    { img: "photos/mb5", title: "Scandinavian Bedroom with Wood Accent Wall", code: "MB-753" },
    { img: "photos/mb6", title: "Industrial Loft-Style Master Bedroom", code: "MB-468" },
    { img: "photos/mb7", title: "Contemporary Bedroom with Statement Chandelier", code: "MB-891" },
    { img: "photos/mb8", title: "Modern Master Suite with Sitting Area", code: "MB-345" },
    { img: "photos/mb9", title: "Luxury Bedroom with Floor-to-Ceiling Windows", code: "MB-672" },
    { img: "photos/mb10", title: "Bohemian Master Bedroom with Macramé Wall Hanging", code: "MB-924" },
    { img: "photos/mb11", title: "Contemporary Bedroom with King Bed and Leather Bench", code: "MB-157" },
    { img: "photos/mb12", title: "Modern Farmhouse Master Bedroom", code: "MB-539" },
    { img: "photos/mb13", title: "Art Deco Inspired Master Suite", code: "MB-782" },
    { img: "photos/mb14", title: "Coastal Master Bedroom with Nautical Accents", code: "MB-413" },
    { img: "photos/mb15", title: "Contemporary Bedroom with Floating Shelves", code: "MB-658" },
    { img: "photos/mb16", title: "Modern Master Bedroom with Fireplace", code: "MB-291" },
    { img: "photos/mb17", title: "Luxury Bedroom with Panoramic City Views", code: "MB-876" },
    { img: "photos/mb18", title: "Minimalist Japanese-Inspired Bedroom", code: "MB-524" },
    { img: "photos/mb19", title: "Contemporary Master Suite with Dressing Room", code: "MB-937" },
    { img: "photos/mb20", title: "Modern Bedroom with Platform Bed and LED Lighting", code: "MB-365" },
    { img: "photos/mb21", title: "Luxury Master Bedroom with Crystal Chandelier", code: "MB-712" },
    { img: "photos/mb22", title: "Contemporary Bedroom with Abstract Wall Mural", code: "MB-248" },
    { img: "photos/mb23", title: "Modern Master Bedroom with Walkout Balcony", code: "MB-581" },
    { img: "photos/mb24", title: "Scandinavian Bedroom with Sheepskin Rug", code: "MB-693" },
    { img: "photos/mb25", title: "Industrial Master Bedroom with Exposed Brick", code: "MB-429" },
    { img: "photos/mb26", title: "Contemporary Bedroom with Canopy Bed", code: "MB-167" },
    { img: "photos/mb27", title: "Modern Master Suite with Coffee Station", code: "MB-834" },
    { img: "photos/mb28", title: "Luxury Bedroom with His-and-Hers Closets", code: "MB-512" },
    { img: "photos/mb29", title: "Minimalist Bedroom with Hidden Storage", code: "MB-976" },
    { img: "photos/mb30", title: "Contemporary Master Bedroom with Reading Nook", code: "MB-348" },
    { img: "photos/mb31", title: "Modern Bedroom with Wall-Mounted TV", code: "MB-761" },
    { img: "photos/mb32", title: "Luxury Master Suite with Spa Bathroom", code: "MB-195" },
    { img: "photos/mb33", title: "Contemporary Bedroom with Circular Mirror", code: "MB-623" },
    { img: "photos/mb34", title: "Modern Farmhouse Bedroom with Shiplap Wall", code: "MB-482" },
    { img: "photos/mb35", title: "Art Nouveau Inspired Master Bedroom", code: "MB-819" },
    { img: "photos/mb36", title: "Coastal Master Bedroom with Driftwood Decor", code: "MB-257" },
    { img: "photos/mb37", title: "Contemporary Bedroom with Gallery Wall", code: "MB-941" },
    { img: "photos/mb38", title: "Modern Master Bedroom with Smart Lighting", code: "MB-576" },
    { img: "photos/mb39", title: "Luxury Bedroom with Fireplace and Sitting Area", code: "MB-384" },
    { img: "photos/mb40", title: "Minimalist Zen Bedroom with Rock Garden", code: "MB-732" },
    { img: "photos/mb41", title: "Contemporary Master Suite with Office Corner", code: "MB-169" },
    { img: "photos/mb42", title: "Modern Bedroom with Upholstered Headboard", code: "MB-528" },
    { img: "photos/mb43", title: "Luxury Master Bedroom with Dressing Table", code: "MB-813" },
    { img: "photos/mb44", title: "Contemporary Bedroom with Geometric Light Fixture", code: "MB-462" },
    { img: "photos/mb45", title: "Modern Master Bedroom with Floor Lamp", code: "MB-927" },
    { img: "photos/mb46", title: "Scandinavian Bedroom with Neutral Tones", code: "MB-351" },
    { img: "photos/mb47", title: "Industrial Master Bedroom with Metal Accents", code: "MB-684" },
    { img: "photos/mb48", title: "Contemporary Bedroom with Tufted Headboard", code: "MB-239" },
    { img: "photos/mb49", title: "Modern Master Suite with Bay Window", code: "MB-517" },
    { img: "photos/mb50", title: "Luxury Bedroom with Custom Walk-in Wardrobe", code: "MB-896" },
    { img: "photos/mb51", title: "Minimalist Bedroom with Built-in Nightstands", code: "MB-643" },
    { img: "photos/mb52", title: "Contemporary Master Bedroom with Bench Seat", code: "MB-278" },
    { img: "photos/mb53", title: "Modern Bedroom with Wall Sconces", code: "MB-915" },
    { img: "photos/mb54", title: "Luxury Master Suite with Panoramic Windows", code: "MB-436" },
    { img: "photos/mb55", title: "Contemporary Bedroom with Patterned Rug", code: "MB-762" },
    { img: "photos/mb56", title: "Modern Farmhouse Bedroom with Barn Door", code: "MB-189" },
    { img: "photos/mb57", title: "Art Deco Master Bedroom with Velvet Furniture", code: "MB-554" },
    { img: "photos/mb58", title: "Coastal Master Bedroom with Seagrass Decor", code: "MB-821" },
    { img: "photos/mb59", title: "Contemporary Bedroom with Floating Desk", code: "MB-397" },
    { img: "photos/mb60", title: "Modern Master Bedroom with Smart Blinds", code: "MB-728" },
    { img: "photos/mb61", title: "Luxury Bedroom with Marble Accent Wall", code: "MB-165" },
    { img: "photos/mb62", title: "Minimalist Japanese Bedroom with Tatami Mat", code: "MB-932" },
    { img: "photos/mb63", title: "Contemporary Master Suite with Lounge Chair", code: "MB-479" },
    { img: "photos/mb64", title: "Modern Bedroom with Platform Storage Bed", code: "MB-616" },
    { img: "photos/mb65", title: "Luxury Master Bedroom with Crystal Wall Sconces", code: "MB-843" },
    { img: "photos/mb66", title: "Contemporary Bedroom with Textured Wall", code: "MB-294" },
    { img: "photos/mb67", title: "Modern Master Bedroom with Skylight", code: "MB-571" },
    { img: "photos/mb68", title: "Scandinavian Bedroom with Pendant Lights", code: "MB-128" },
    { img: "photos/mb69", title: "Industrial Master Bedroom with Concrete Floor", code: "MB-785" },
    { img: "photos/mb70", title: "Contemporary Bedroom with Four-Poster Bed", code: "MB-359" },
    { img: "photos/mb71", title: "Modern Master Suite with Vanity Area", code: "MB-624" },
    { img: "photos/mb72", title: "Luxury Bedroom with Custom Headboard Wall", code: "MB-917" },
    { img: "photos/mb73", title: "Minimalist Bedroom with Hidden TV", code: "MB-482" },
    { img: "photos/mb74", title: "Contemporary Master Bedroom with Window Seat", code: "MB-236" },
    { img: "photos/mb75", title: "Modern Bedroom with Glass Partition", code: "MB-753" },
    { img: "photos/mb76", title: "Luxury Master Suite with Dressing Island", code: "MB-518" },
    { img: "photos/mb77", title: "Contemporary Bedroom with Woven Wall Hanging", code: "MB-691" },
    { img: "photos/mb78", title: "Modern Farmhouse Bedroom with Beadboard", code: "MB-347" },
    { img: "photos/mb79", title: "Art Deco Master Bedroom with Mirrored Furniture", code: "MB-864" },
    { img: "photos/mb80", title: "Coastal Master Bedroom with Rope Accents", code: "MB-295" },
    { img: "photos/mb81", title: "Contemporary Bedroom with Built-in Bookshelf", code: "MB-712" },
    { img: "photos/mb82", title: "Modern Master Bedroom with Smart Mirror", code: "MB-438" },
    { img: "photos/mb83", title: "Luxury Bedroom with Leather Headboard", code: "MB-926" },
    { img: "photos/mb84", title: "Minimalist Zen Bedroom with Water Feature", code: "MB-563" },
    { img: "photos/mb85", title: "Contemporary Master Suite with Fireplace TV", code: "MB-187" },
    { img: "photos/mb86", title: "Modern Bedroom with Suspended Nightstands", code: "MB-654" },
    { img: "photos/mb87", title: "Luxury Master Bedroom with Herringbone Floor", code: "MB-329" },
    { img: "photos/mb88", title: "Contemporary Bedroom with Geometric Wallpaper", code: "MB-741" },
    { img: "photos/mb89", title: "Modern Master Bedroom with Blackout Curtains", code: "MB-512" },
    { img: "photos/mb90", title: "Scandinavian Bedroom with Wool Throw", code: "MB-896" },
    { img: "photos/mb91", title: "Industrial Master Bedroom with Pipe Shelving", code: "MB-273" },
    { img: "photos/mb92", title: "Contemporary Bedroom with Round Mirror", code: "MB-618" },
    { img: "photos/mb93", title: "Modern Master Suite with Breakfast Bar", code: "MB-485" },
    { img: "photos/mb94", title: "Luxury Bedroom with Custom Closet System", code: "MB-792" },
    { img: "photos/mb95", title: "Minimalist Bedroom with Sliding Door Wardrobe", code: "MB-361" },
    { img: "photos/mb96", title: "Contemporary Master Bedroom with Daybed", code: "MB-547" },
    { img: "photos/mb97", title: "Modern Bedroom with Wall-Mounted Planters", code: "MB-829" },
    { img: "photos/mb98", title: "Luxury Master Suite with His-and-Hers Bathrooms", code: "MB-174" },
    { img: "photos/mb99", title: "Contemporary Bedroom with Sculptural Lighting", code: "MB-953" },
    { img: "photos/mb100", title: "Modern Master Bedroom with Smart Home Controls", code: "MB-426" }
],
                ceiling: [
    
    { img: "photos/fs1", title: "Geometric Pattern False Ceiling with LED Cove Lighting", code: "FC-327" },
    { img: "photos/fs2", title: "Modern Gypsum False Ceiling with Spotlights", code: "FC-142" },
    { img: "photos/fs3", title: "Wooden False Ceiling with Recessed Lighting", code: "FC-589" },
    { img: "photos/fs4", title: "3D Hexagonal False Ceiling Design", code: "FC-216" },
    { img: "photos/fs5", title: "Contemporary Cloud False Ceiling with Ambient Lighting", code: "FC-753" },
    { img: "photos/fs6", title: "Minimalist False Ceiling with Linear LED Strips", code: "FC-468" },
    { img: "photos/fs7", title: "Art Deco Inspired False Ceiling with Gold Accents", code: "FC-891" },
    { img: "photos/fs8", title: "Wave Pattern False Ceiling with Indirect Lighting", code: "FC-345" },
    { img: "photos/fs9", title: "Floating Panel False Ceiling with Hidden Lights", code: "FC-672" },
    { img: "photos/fs10", title: "Medallion Style False Ceiling with Chandelier", code: "FC-924" },
    { img: "photos/fs11", title: "Industrial Metal False Ceiling with Exposed Fixtures", code: "FC-157" },
    { img: "photos/fs12", title: "Nature-Inspired Leaf Pattern False Ceiling", code: "FC-539" },
    { img: "photos/fs13", title: "Star Constellation False Ceiling with Fiber Optics", code: "FC-782" },
    { img: "photos/fs14", title: "Contemporary Coffered False Ceiling Design", code: "FC-413" },
    { img: "photos/fs15", title: "Mirror Panel False Ceiling for Small Spaces", code: "FC-658" },
    { img: "photos/fs16", title: "Traditional False Ceiling with Wooden Beams", code: "FC-291" },
    { img: "photos/fs17", title: "Modern False Ceiling with Geometric Cutouts", code: "FC-876" },
    { img: "photos/fs18", title: "Minimalist False Ceiling with Perimeter Lighting", code: "FC-524" },
    { img: "photos/fs19", title: "Luxury False Ceiling with Crystal Elements", code: "FC-937" },
    { img: "photos/fs20", title: "Futuristic False Ceiling with Smart Lighting System", code: "FC-365" },
    { img: "photos/fs21", title: "Scandinavian Style False Ceiling with Wooden Slats", code: "FC-712" },
    { img: "photos/fs22", title: "False Ceiling with Integrated Air Vents", code: "FC-248" },
    { img: "photos/fs23", title: "Contemporary False Ceiling with Floating Panels", code: "FC-581" },
    { img: "photos/fs24", title: "False Ceiling with Hidden Projector Screen", code: "FC-693" },
    { img: "photos/fs25", title: "Artistic False Ceiling with Hand-Painted Design", code: "FC-429" },
    { img: "photos/fs26", title: "False Ceiling with Integrated Sound System", code: "FC-167" },
    { img: "photos/fs27", title: "Modern False Ceiling with Asymmetric Design", code: "FC-834" },
    { img: "photos/fs28", title: "False Ceiling with Built-in Air Purification", code: "FC-512" },
    { img: "photos/fs29", title: "Tray Style False Ceiling with LED Outline", code: "FC-976" },
    { img: "photos/fs30", title: "False Ceiling with Integrated Smart Sensors", code: "FC-348" },
    { img: "photos/fs31", title: "Contemporary False Ceiling with 3D Wall Transition", code: "FC-761" },
    { img: "photos/fs32", title: "False Ceiling with Concealed Curtain Tracks", code: "FC-195" },
    { img: "photos/fs33", title: "Minimalist False Ceiling with Recessed Speakers", code: "FC-623" },
    { img: "photos/fs34", title: "False Ceiling with Integrated Ventilation System", code: "FC-482" },
    { img: "photos/fs35", title: "Modern False Ceiling with Optical Illusion Pattern", code: "FC-819" },
    { img: "photos/fs36", title: "False Ceiling with Hidden Storage Compartments", code: "FC-257" },
    { img: "photos/fs37", title: "Luxury False Ceiling with Metallic Finish", code: "FC-941" },
    { img: "photos/fs38", title: "False Ceiling with Integrated Fire Safety System", code: "FC-576" },
    { img: "photos/fs39", title: "Contemporary False Ceiling with Floating Light Boxes", code: "FC-384" },
    { img: "photos/fs40", title: "False Ceiling with Smart Climate Control Vents", code: "FC-732" },
    { img: "photos/fs41", title: "Modern False Ceiling with Interactive Lighting", code: "FC-169" },
    { img: "photos/fs42", title: "False Ceiling with Integrated Water Feature", code: "FC-528" },
    { img: "photos/fs43", title: "Minimalist False Ceiling with Hidden Service Ducts", code: "FC-813" },
    { img: "photos/fs44", title: "False Ceiling with Adjustable Acoustic Panels", code: "FC-462" },
    { img: "photos/fs45", title: "Contemporary False Ceiling with Floating Medallion", code: "FC-927" },
    { img: "photos/fs46", title: "False Ceiling with Integrated Projection Mapping", code: "FC-351" },
    { img: "photos/fs47", title: "Modern False Ceiling with Kinetic Elements", code: "FC-684" },
    { img: "photos/fs48", title: "False Ceiling with Built-in Aromatherapy System", code: "FC-239" },
    { img: "photos/fs49", title: "Contemporary False Ceiling with Glass Inserts", code: "FC-517" },
    { img: "photos/fs50", title: "False Ceiling with Integrated Digital Display", code: "FC-896" }
],
                wardrobe: [
      
    { img: "photos/wd1", title: "Modern Sliding Wardrobe with Mirror Doors", code: "WD-327" },
    { img: "photos/wd2", title: "Walk-in Wardrobe with Glass Front Cabinets", code: "WD-142" },
    { img: "photos/wd3", title: "Space-Saving Folding Wardrobe System", code: "WD-589" },
    { img: "photos/wd4", title: "Luxury Walk-in Closet with Island Dresser", code: "WD-216" },
    { img: "photos/wd5", title: "Contemporary Wardrobe with Hidden Drawers", code: "WD-753" },
    { img: "photos/wd6", title: "Minimalist Wardrobe with Push-to-Open Mechanism", code: "WD-468" },
    { img: "photos/wd7", title: "Custom Wardrobe with Shoe Display Shelves", code: "WD-891" },
    { img: "photos/wd8", title: "Mirrored Wardrobe with LED Interior Lighting", code: "WD-345" },
    { img: "photos/wd9", title: "Corner Wardrobe with Rotating Hanging System", code: "WD-672" },
    { img: "photos/wd10", title: "Smart Wardrobe with Automated Clothes Rotation", code: "WD-924" },
    { img: "photos/wd11", title: "Industrial Style Wardrobe with Metal Frames", code: "WD-157" },
    { img: "photos/wd12", title: "Scandinavian Wardrobe with Light Wood Finish", code: "WD-539" },
    { img: "photos/wd13", title: "Wardrobe with Integrated Dressing Table", code: "WD-782" },
    { img: "photos/wd14", title: "Compact Wardrobe with Pull-Out Accessory Racks", code: "WD-413" },
    { img: "photos/wd15", title: "Walk-in Wardrobe with Vanity Area", code: "WD-658" },
    { img: "photos/wd16", title: "Wardrobe with Built-In Ironing Board", code: "WD-291" },
    { img: "photos/wd17", title: "Luxury Wardrobe with Leather Inlays", code: "WD-876" },
    { img: "photos/wd18", title: "Wardrobe with Integrated Laundry Hamper", code: "WD-524" },
    { img: "photos/wd19", title: "Modern Wardrobe with Glass and Wood Combination", code: "WD-937" },
    { img: "photos/wd20", title: "Custom Wardrobe with Jewelry Organizer", code: "WD-365" },
    { img: "photos/wd21", title: "Sliding Wardrobe with Patterned Glass Doors", code: "WD-712" },
    { img: "photos/wd22", title: "Wardrobe with Built-In Shoe Storage", code: "WD-248" },
    { img: "photos/wd23", title: "Walk-in Wardrobe with Seating Area", code: "WD-581" },
    { img: "photos/wd24", title: "Wardrobe with Adjustable Shelving System", code: "WD-693" },
    { img: "photos/wd25", title: "Contemporary Wardrobe with Hidden TV Panel", code: "WD-429" },
    { img: "photos/wd26", title: "Wardrobe with Integrated Full-Length Mirror", code: "WD-167" },
    { img: "photos/wd27", title: "Luxury Wardrobe with Climate Control", code: "WD-834" },
    { img: "photos/wd28", title: "Wardrobe with Pull-Down Hanging Rods", code: "WD-512" },
    { img: "photos/wd29", title: "Modern Wardrobe with Concealed Lighting", code: "WD-976" },
    { img: "photos/wd30", title: "Wardrobe with Built-In Tie and Belt Racks", code: "WD-348" },
    { img: "photos/wd31", title: "Sliding Wardrobe with Frosted Glass Panels", code: "WD-761" },
    { img: "photos/wd32", title: "Wardrobe with Integrated Safe Compartment", code: "WD-195" },
    { img: "photos/wd33", title: "Walk-in Wardrobe with Island Storage Unit", code: "WD-623" },
    { img: "photos/wd34", title: "Wardrobe with Vertical Shoe Storage", code: "WD-482" },
    { img: "photos/wd35", title: "Contemporary Wardrobe with Slatted Doors", code: "WD-819" },
    { img: "photos/wd36", title: "Wardrobe with Pull-Out Trouser Racks", code: "WD-257" },
    { img: "photos/wd37", title: "Luxury Wardrobe with Perfume Display", code: "WD-941" },
    { img: "photos/wd38", title: "Wardrobe with Integrated Charging Station", code: "WD-576" },
    { img: "photos/wd39", title: "Modern Wardrobe with Hidden Laundry Chute", code: "WD-384" },
    { img: "photos/wd40", title: "Wardrobe with Custom Watch Display Case", code: "WD-732" },
    { img: "photos/wd41", title: "Sliding Wardrobe with Acoustic Panels", code: "WD-169" },
    { img: "photos/wd42", title: "Wardrobe with Built-In Valet Rod", code: "WD-528" },
    { img: "photos/wd43", title: "Walk-in Wardrobe with Makeup Station", code: "WD-813" },
    { img: "photos/wd44", title: "Wardrobe with Integrated Handbag Display", code: "WD-462" },
    { img: "photos/wd45", title: "Contemporary Wardrobe with Leather Handles", code: "WD-927" },
    { img: "photos/wd46", title: "Wardrobe with Smart Clothes Organization System", code: "WD-351" },
    { img: "photos/wd47", title: "Luxury Wardrobe with Glass Display Cabinets", code: "WD-684" },
    { img: "photos/wd48", title: "Wardrobe with Built-In Steam Press", code: "WD-239" },
    { img: "photos/wd49", title: "Modern Wardrobe with Hidden Jewelry Safe", code: "WD-517" },
    { img: "photos/wd50", title: "Wardrobe with Integrated Smart Mirror", code: "WD-896" },
              ],
                living: [
                
    { img: "photos/lr1", title: "Contemporary Living Room with Sectional Sofa", code: "LR-327" },
    { img: "photos/lr2", title: "Minimalist Lounge with Floating Shelves", code: "LR-142" },
    { img: "photos/lr3", title: "Modern Boho Living Space with Macramé", code: "LR-589" },
    { img: "photos/lr4", title: "Industrial Loft Living Room with Exposed Brick", code: "LR-216" },
    { img: "photos/lr5", title: "Scandinavian Lounge with Wood Accents", code: "LR-753" },
    { img: "photos/lr6", title: "Mid-Century Modern Living Area", code: "LR-468" },
    { img: "photos/lr7", title: "Luxury Living Room with Statement Chandelier", code: "LR-891" },
    { img: "photos/lr8", title: "Contemporary Space with Gallery Wall", code: "LR-345" },
    { img: "photos/lr9", title: "Modern Farmhouse Living Room", code: "LR-672" },
    { img: "photos/lr10", title: "Art Deco Lounge with Velvet Furniture", code: "LR-924" },
    { img: "photos/lr11", title: "Open Concept Living/Dining Area", code: "LR-157" },
    { img: "photos/lr12", title: "Coastal Living Room with Nautical Accents", code: "LR-539" },
    { img: "photos/lr13", title: "Modern Zen Living Space", code: "LR-782" },
    { img: "photos/lr14", title: "Contemporary Lounge with Fireplace Feature", code: "LR-413" },
    { img: "photos/lr15", title: "Eclectic Living Room with Mixed Patterns", code: "LR-658" },
    { img: "photos/lr16", title: "Minimalist Space with Neutral Palette", code: "LR-291" },
    { img: "photos/lr17", title: "Modern Traditional Living Room", code: "LR-876" },
    { img: "photos/lr18", title: "Industrial Chic Lounge Area", code: "LR-524" },
    { img: "photos/lr19", title: "Contemporary Living Room with Floor-to-Ceiling Windows", code: "LR-937" },
    { img: "photos/lr20", title: "Modern Cottage Living Space", code: "LR-365" },
    { img: "photos/lr21", title: "Luxury Lounge with Marble Accent Wall", code: "LR-712" },
    { img: "photos/lr22", title: "Contemporary Living Room with Modular Sofa", code: "LR-248" },
    { img: "photos/lr23", title: "Modern Art-Inspired Living Space", code: "LR-581" },
    { img: "photos/lr24", title: "Scandinavian Lounge with Hygge Touches", code: "LR-693" },
    { img: "photos/lr25", title: "Industrial Living Room with Metal Accents", code: "LR-429" },
    { img: "photos/lr26", title: "Contemporary Space with Statement Lighting", code: "LR-167" },
    { img: "photos/lr27", title: "Modern Mediterranean Living Room", code: "LR-834" },
    { img: "photos/lr28", title: "Minimalist Lounge with Hidden Storage", code: "LR-512" },
    { img: "photos/lr29", title: "Contemporary Living Room with Indoor Plants", code: "LR-976" },
    { img: "photos/lr30", title: "Modern Asian-Inspired Living Space", code: "LR-348" },
    { img: "photos/lr31", title: "Luxury Lounge with Smart Home Features", code: "LR-761" },
    { img: "photos/lr32", title: "Contemporary Living Room with Textured Walls", code: "LR-195" },
    { img: "photos/lr33", title: "Modern Tropical Living Space", code: "LR-623" },
    { img: "photos/lr34", title: "Industrial Loft with Concrete Finishes", code: "LR-482" },
    { img: "photos/lr35", title: "Contemporary Lounge with Circular Seating", code: "LR-819" },
    { img: "photos/lr36", title: "Modern Living Room with Double-Sided Fireplace", code: "LR-257" },
    { img: "photos/lr37", title: "Scandinavian Space with Sheepskin Throws", code: "LR-941" },
    { img: "photos/lr38", title: "Contemporary Lounge with Built-In Bookshelves", code: "LR-576" },
    { img: "photos/lr39", title: "Modern Rustic Living Room", code: "LR-384" },
    { img: "photos/lr40", title: "Art Nouveau Inspired Living Space", code: "LR-732" },
    { img: "photos/lr41", title: "Contemporary Living Room with Sunken Lounge", code: "LR-169" },
    { img: "photos/lr42", title: "Modern Space with Geometric Accent Wall", code: "LR-528" },
    { img: "photos/lr43", title: "Minimalist Lounge with Monochrome Palette", code: "LR-813" },
    { img: "photos/lr44", title: "Contemporary Living Room with Water Feature", code: "LR-462" },
    { img: "photos/lr45", title: "Modern Japanese-Inspired Living Space", code: "LR-927" },
    { img: "photos/lr46", title: "Industrial Living Room with Edison Bulbs", code: "LR-351" },
    { img: "photos/lr47", title: "Contemporary Lounge with Curved Furniture", code: "LR-684" },
    { img: "photos/lr48", title: "Modern Moroccan Living Room", code: "LR-239" },
    { img: "photos/lr49", title: "Scandinavian Space with Blue Accents", code: "LR-517" },
    { img: "photos/lr50", title: "Contemporary Living Room with Smart Glass Partitions", code: "LR-896" }
],
                dining: [
  
    { img: "photos/dr1", title: "Modern Glass Dining Table with Velvet Chairs", code: "DR-327" },
    { img: "photos/dr2", title: "Rustic Farmhouse Dining Set with Bench Seating", code: "DR-142" },
    { img: "photos/dr3", title: "Contemporary Extendable Dining Table", code: "DR-589" },
    { img: "photos/dr4", title: "Minimalist Dining Space with Floating Shelves", code: "DR-216" },
    { img: "photos/dr5", title: "Industrial Chic Dining Area with Metal Chairs", code: "DR-753" },
    { img: "photos/dr6", title: "Formal Dining Room with Crystal Chandelier", code: "DR-468" },
    { img: "photos/dr7", title: "Scandinavian Dining Set with Light Wood", code: "DR-891" },
    { img: "photos/dr8", title: "Open Concept Kitchen-Dining Combo", code: "DR-345" },
    { img: "photos/dr9", title: "Mid-Century Modern Dining Space", code: "DR-672" },
    { img: "photos/dr10", title: "Round Dining Table with Upholstered Chairs", code: "DR-924" },
    { img: "photos/dr11", title: "Asian-Inspired Dining with Low Table", code: "DR-157" },
    { img: "photos/dr12", title: "Luxury Dining Room with Marble Table", code: "DR-539" },
    { img: "photos/dr13", title: "Space-Saving Wall-Mounted Dining Table", code: "DR-782" },
    { img: "photos/dr14", title: "Bohemian Dining Area with Mixed Chairs", code: "DR-413" },
    { img: "photos/dr15", title: "Modern Banquette Dining Nook", code: "DR-658" },
    { img: "photos/dr16", title: "Traditional Dining Room with China Cabinet", code: "DR-291" },
    { img: "photos/dr17", title: "Contemporary Dining Space with Pendant Lights", code: "DR-876" },
    { img: "photos/dr18", title: "Convertible Dining Table/Home Office", code: "DR-524" },
    { img: "photos/dr19", title: "Art Deco Dining Room with Mirrored Walls", code: "DR-937" },
    { img: "photos/dr20", title: "Outdoor-Inspired Indoor Dining Area", code: "DR-365" },
    { img: "photos/dr21", title: "Modern Dining Set with Bench and Chairs", code: "DR-712" },
    { img: "photos/dr22", title: "Rustic Wooden Dining Table with Mismatched Chairs", code: "DR-248" },
    { img: "photos/dr23", title: "Small Space Dining Solution with Foldable Table", code: "DR-581" },
    { img: "photos/dr24", title: "Luxury Dining Room with Wine Display", code: "DR-693" },
    { img: "photos/dr25", title: "Contemporary Dining Space with Bold Wallpaper", code: "DR-429" },
    { img: "photos/dr26", title: "Modern Black and White Dining Room", code: "DR-167" },
    { img: "photos/dr27", title: "Industrial Dining Table with Pipe Base", code: "DR-834" },
    { img: "photos/dr28", title: "Transitional Dining Room with Mix of Styles", code: "DR-512" },
    { img: "photos/dr29", title: "Minimalist Dining Area with Built-In Storage", code: "DR-976" },
    { img: "photos/dr30", title: "Mediterranean-Inspired Dining Space", code: "DR-348" },
    { img: "photos/dr31", title: "Contemporary Dining Room with Glass Wall", code: "DR-761" },
    { img: "photos/dr32", title: "Modern Dining Set with Leather Chairs", code: "DR-195" },
    { img: "photos/dr33", title: "Vintage Dining Room with Refurbished Furniture", code: "DR-623" },
    { img: "photos/dr34", title: "Dining Area with Built-In Window Seat", code: "DR-482" },
    { img: "photos/dr35", title: "Contemporary Dining Space with Fireplace", code: "DR-819" },
    { img: "photos/dr36", title: "Modern Dining Room with Geometric Light Fixture", code: "DR-257" },
    { img: "photos/dr37", title: "Scandinavian Dining Set with Pastel Chairs", code: "DR-941" },
    { img: "photos/dr38", title: "Luxury Dining Room with Gold Accents", code: "DR-576" },
    { img: "photos/dr39", title: "Modern Dining Space with Live-Edge Table", code: "DR-384" },
    { img: "photos/dr40", title: "Contemporary Dining Area with Gallery Wall", code: "DR-732" },
    { img: "photos/dr41", title: "Industrial Dining Room with Concrete Table", code: "DR-169" },
    { img: "photos/dr42", title: "Modern Dining Set with Transparent Chairs", code: "DR-528" },
    { img: "photos/dr43", title: "Minimalist Dining Space with Hidden Leaf Table", code: "DR-813" },
    { img: "photos/dr44", title: "Contemporary Dining Room with Mirrored Ceiling", code: "DR-462" },
    { img: "photos/dr45", title: "Modern Dining Area with Smart Lighting", code: "DR-927" },
    { img: "photos/dr46", title: "Rustic Dining Room with Stone Accent Wall", code: "DR-351" },
    { img: "photos/dr47", title: "Contemporary Dining Space with Curved Bench", code: "DR-684" },
    { img: "photos/dr48", title: "Modern Dining Room with Floating Table", code: "DR-239" },
    { img: "photos/dr49", title: "Scandinavian Dining Area with Sheepskin Chairs", code: "DR-517" },
    { img: "photos/dr50", title: "Luxury Dining Room with Waterfall Table", code: "DR-896" }
],
                bathroom: [

    { img: "photos/bd1", title: "Spa-Inspired Marble Bathroom with Freestanding Tub", code: "BR-327" },
    { img: "photos/bd2", title: "Modern Wet Room with Rainfall Shower System", code: "BR-142" },
    { img: "photos/bd3", title: "Luxury His-and-Hers Bathroom with Dual Vanities", code: "BR-589" },
    { img: "photos/bd4", title: "Contemporary Bathroom with Floating Vanity", code: "BR-216" },
    { img: "photos/bd5", title: "Minimalist Bathroom with Hidden Storage", code: "BR-753" },
    { img: "photos/bd6", title: "Industrial Chic Bathroom with Concrete Finishes", code: "BR-468" },
    { img: "photos/bd7", title: "Japanese Onsen-Style Bathroom with Wood Accents", code: "BR-891" },
    { img: "photos/bd8", title: "Modern Bathroom with Smart Mirror and Lighting", code: "BR-345" },
    { img: "photos/bd9", title: "Luxury Master Bath with Panoramic Windows", code: "BR-672" },
    { img: "photos/bd10", title: "Spa Bathroom with Steam Shower and Sauna", code: "BR-924" },
    { img: "photos/bd11", title: "Contemporary Bathroom with Backlit Mirror", code: "BR-157" },
    { img: "photos/bd12", title: "Modern Black and White Bathroom Design", code: "BR-539" },
    { img: "photos/bd13", title: "Luxury Bathroom with Gold Fixtures", code: "BR-782" },
    { img: "photos/bd14", title: "Scandinavian Bathroom with Wooden Details", code: "BR-413" },
    { img: "photos/bd15", title: "Modern Bathroom with Floating Toilet", code: "BR-658" },
    { img: "photos/bd16", title: "Luxury Bathroom with Chromatherapy Tub", code: "BR-291" },
    { img: "photos/bd17", title: "Contemporary Bathroom with Nature Views", code: "BR-876" },
    { img: "photos/bd18", title: "Modern Bathroom with Digital Shower Controls", code: "BR-524" },
    { img: "photos/bd19", title: "Luxury Bathroom with Waterfall Faucets", code: "BR-937" },
    { img: "photos/bd20", title: "Spa Bathroom with Pebble Floor and Live Plants", code: "BR-365" },
    { img: "photos/bd21", title: "Modern Bathroom with Glass Partition", code: "BR-712" },
    { img: "photos/bd22", title: "Luxury Bathroom with Heated Floors", code: "BR-248" },
    { img: "photos/bd23", title: "Contemporary Bathroom with Floating Shelves", code: "BR-581" },
    { img: "photos/bd24", title: "Modern Bathroom with Skylight", code: "BR-693" },
    { img: "photos/bd25", title: "Luxury Bathroom with Bidet Toilet", code: "BR-429" },
    { img: "photos/bd26", title: "Spa Bathroom with Aromatherapy Dispenser", code: "BR-167" },
    { img: "photos/bd27", title: "Modern Bathroom with Wall-Mounted Faucets", code: "BR-834" },
    { img: "photos/bd28", title: "Luxury Bathroom with TV Mirror", code: "BR-512" },
    { img: "photos/bd29", title: "Contemporary Bathroom with Patterned Tile", code: "BR-976" },
    { img: "photos/bd30", title: "Modern Bathroom with Hidden Drain", code: "BR-348" },
    { img: "photos/bd31", title: "Luxury Bathroom with Dual Shower Heads", code: "BR-761" },
    { img: "photos/bd32", title: "Spa Bathroom with Heated Towel Rack", code: "BR-195" },
    { img: "photos/bd33", title: "Modern Bathroom with Backlit Alcove", code: "BR-623" },
    { img: "photos/bd34", title: "Luxury Bathroom with Makeup Vanity", code: "BR-482" },
    { img: "photos/bd35", title: "Contemporary Bathroom with Floating Bench", code: "BR-819" },
    { img: "photos/bd36", title: "Modern Bathroom with Smart Toilet", code: "BR-257" },
    { img: "photos/bd37", title: "Luxury Bathroom with Stone Sink", code: "BR-941" },
    { img: "photos/bd38", title: "Spa Bathroom with Mood Lighting", code: "BR-576" },
    { img: "photos/bd39", title: "Modern Bathroom with Concealed Storage", code: "BR-384" },
    { img: "photos/bd40", title: "Luxury Bathroom with Dressing Area", code: "BR-732" },
    { img: "photos/bd41", title: "Contemporary Bathroom with Geometric Tile", code: "BR-169" },
    { img: "photos/bd42", title: "Modern Bathroom with Wall-Hung Vanity", code: "BR-528" },
    { img: "photos/bd43", title: "Luxury Bathroom with Frameless Glass Shower", code: "BR-813" },
    { img: "photos/bd44", title: "Spa Bathroom with Waterfall Feature Wall", code: "BR-462" },
    { img: "photos/bd45", title: "Modern Bathroom with Recessed Medicine Cabinet", code: "BR-927" },
    { img: "photos/bd46", title: "Luxury Bathroom with Heated Mirror", code: "BR-351" },
    { img: "photos/bd47", title: "Contemporary Bathroom with Floating Tub", code: "BR-684" },
    { img: "photos/bd48", title: "Modern Bathroom with Smart Water Controls", code: "BR-239" },
    { img: "photos/bd49", title: "Luxury Bathroom with Walk-In Closet", code: "BR-517" },
    { img: "photos/bd50", title: "Spa Bathroom with Infrared Sauna", code: "BR-896" }
],
                tvunit: [
              
    { img: "photos/tv1", title: "Floating TV Unit with LED Backlighting", code: "TV-327" },
    { img: "photos/tv2", title: "Modern Media Wall with Built-In Fireplace", code: "TV-142" },
    { img: "photos/tv3", title: "Minimalist TV Console with Hidden Storage", code: "TV-589" },
    { img: "photos/tv4", title: "Industrial Pipe TV Stand with Wood Shelves", code: "TV-216" },
    { img: "photos/tv5", title: "Contemporary TV Wall Unit with Display Niches", code: "TV-753" },
    { img: "photos/tv6", title: "Scandinavian TV Bench with Drawers", code: "TV-468" },
    { img: "photos/tv7", title: "Luxury Media Wall with Ambient Lighting", code: "TV-891" },
    { img: "photos/tv8", title: "Corner TV Unit with Floating Shelves", code: "TV-345" },
    { img: "photos/tv9", title: "Modern TV Cabinet with Glass Doors", code: "TV-672" },
    { img: "photos/tv10", title: "Space-Saving Wall-Mounted TV Panel", code: "TV-924" },
    { img: "photos/tv11", title: "Rustic Wood TV Console with Metal Legs", code: "TV-157" },
    { img: "photos/tv12", title: "Smart TV Wall with Concealed Wiring", code: "TV-539" },
    { img: "photos/tv13", title: "Mid-Century Modern TV Stand", code: "TV-782" },
    { img: "photos/tv14", title: "Floating TV Shelf with Integrated Soundbar", code: "TV-413" },
    { img: "photos/tv15", title: "Contemporary Media Unit with Fireplace Insert", code: "TV-658" },
    { img: "photos/tv16", title: "Minimal TV Wall with Recessed Lighting", code: "TV-291" },
    { img: "photos/tv17", title: "Luxury Entertainment Wall with Glass Display", code: "TV-876" },
    { img: "photos/tv18", title: "Modern TV Console with Wireless Charging", code: "TV-524" },
    { img: "photos/tv19", title: "Industrial TV Stand with Casters", code: "TV-937" },
    { img: "photos/tv20", title: "Contemporary TV Panel with Hidden Storage", code: "TV-365" },
    { img: "photos/tv21", title: "Scandinavian TV Unit with Sliding Doors", code: "TV-712" },
    { img: "photos/tv22", title: "Floating Media Console with LED Strips", code: "TV-248" },
    { img: "photos/tv23", title: "Modern Entertainment Center with Bookshelves", code: "TV-581" },
    { img: "photos/tv24", title: "Minimalist TV Wall with Wood Accent", code: "TV-693" },
    { img: "photos/tv25", title: "Luxury TV Backdrop with Stone Cladding", code: "TV-429" },
    { img: "photos/tv26", title: "Contemporary TV Stand with Marble Top", code: "TV-167" },
    { img: "photos/tv27", title: "Modern Media Console with Hidden Compartments", code: "TV-834" },
    { img: "photos/tv28", title: "Industrial TV Shelf with Pipe Brackets", code: "TV-512" },
    { img: "photos/tv29", title: "Floating TV Unit with Integrated Sound System", code: "TV-976" },
    { img: "photos/tv30", title: "Contemporary Media Wall with LED Cove", code: "TV-348" },
    { img: "photos/tv31", title: "Modern TV Cabinet with Fingerprint Opening", code: "TV-761" },
    { img: "photos/tv32", title: "Minimalist TV Panel with Concealed Wiring", code: "TV-195" },
    { img: "photos/tv33", title: "Luxury Entertainment Wall with Backlit Display", code: "TV-623" },
    { img: "photos/tv34", title: "Contemporary TV Stand with Leather Inserts", code: "TV-482" },
    { img: "photos/tv35", title: "Modern Media Console with Glass Base", code: "TV-819" },
    { img: "photos/tv36", title: "Industrial TV Unit with Reclaimed Wood", code: "TV-257" },
    { img: "photos/tv37", title: "Floating TV Shelf with Hidden Storage", code: "TV-941" },
    { img: "photos/tv38", title: "Contemporary TV Wall with Geometric Pattern", code: "TV-576" },
    { img: "photos/tv39", title: "Modern Entertainment Center with Fireplace", code: "TV-384" },
    { img: "photos/tv40", title: "Minimalist TV Panel with Touch Controls", code: "TV-732" },
    { img: "photos/tv41", title: "Luxury Media Wall with Smart Lighting", code: "TV-169" },
    { img: "photos/tv42", title: "Contemporary TV Console with Woven Details", code: "TV-528" },
    { img: "photos/tv43", title: "Modern TV Stand with Built-In Planters", code: "TV-813" },
    { img: "photos/tv44", title: "Industrial Media Console with Metal Mesh", code: "TV-462" },
    { img: "photos/tv45", title: "Floating TV Unit with Mirror Back Panel", code: "TV-927" },
    { img: "photos/tv46", title: "Contemporary TV Wall with 3D Paneling", code: "TV-351" },
    { img: "photos/tv47", title: "Modern Media Console with Hidden Speakers", code: "TV-684" },
    { img: "photos/tv48", title: "Minimalist TV Shelf with Integrated Lighting", code: "TV-239" },
    { img: "photos/tv49", title: "Luxury Entertainment Wall with Motorized Panels", code: "TV-517" },
    { img: "photos/tv50", title: "Contemporary TV Unit with Rotating Base", code: "TV-896" }
],
                pooja: [
                
    { img: "photos/pr1", title: "Traditional Wooden Pooja Mandir with Carvings", code: "PR-327" },
    { img: "photos/pr2", title: "Modern Wall-Mounted Pooja Unit with LED Lighting", code: "PR-142" },
    { img: "photos/pr3", title: "Corner Pooja Niche with Glass Doors", code: "PR-589" },
    { img: "photos/pr4", title: "Contemporary Pooja Shelf with Brass Accents", code: "PR-216" },
    { img: "photos/pr5", title: "Space-Saving Foldable Pooja Door Design", code: "PR-753" },
    { img: "photos/pr6", title: "Luxury Marble Pooja Mandir with Gold Detailing", code: "PR-468" },
    { img: "photos/pr7", title: "Minimalist Pooja Wall Unit with Hidden Storage", code: "PR-891" },
    { img: "photos/pr8", title: "Traditional Kerala Style Pooja Room", code: "PR-345" },
    { img: "photos/pr9", title: "Modern Pooja Cabinet with Digital Aarti Display", code: "PR-672" },
    { img: "photos/pr10", title: "Floating Pooja Shelf with Bell Hanger", code: "PR-924" },
    { img: "photos/pr11", title: "South Indian Style Wooden Pooja Mandapam", code: "PR-157" },
    { img: "photos/pr12", title: "Contemporary Pooja Unit with Waterfall Counter", code: "PR-539" },
    { img: "photos/pr13", title: "Glass Enclosed Pooja Room with Ventilation", code: "PR-782" },
    { img: "photos/pr14", title: "Compact Pooja Almirah with Drawer Storage", code: "PR-413" },
    { img: "photos/pr15", title: "Traditional Pooja Ghar with Jali Work", code: "PR-658" },
    { img: "photos/pr16", title: "Modern Pooja Wall with Backlit Divine Artwork", code: "PR-291" },
    { img: "photos/pr17", title: "Space-Efficient Pooja Cupboard Design", code: "PR-876" },
    { img: "photos/pr18", title: "Luxury Pooja Room with Stone Carved Deity Wall", code: "PR-524" },
    { img: "photos/pr19", title: "Contemporary Pooja Nook with Foldable Seat", code: "PR-937" },
    { img: "photos/pr20", title: "Traditional Pooja Mandir with Copper Elements", code: "PR-365" },
    { img: "photos/pr21", title: "Modern Pooja Unit with Integrated Diya Stand", code: "PR-712" },
    { img: "photos/pr22", title: "Corner Pooja Cabinet with Sliding Doors", code: "PR-248" },
    { img: "photos/pr23", title: "Minimalist Pooja Wall Shelf with Bell", code: "PR-581" },
    { img: "photos/pr24", title: "Traditional Pooja Room with Hand-Painted Murals", code: "PR-693" },
    { img: "photos/pr25", title: "Contemporary Pooja Space with Water Feature", code: "PR-429" },
    { img: "photos/pr26", title: "Modern Pooja Unit with Smart Lighting System", code: "PR-167" },
    { img: "photos/pr27", title: "Compact Pooja Mandir for Apartments", code: "PR-834" },
    { img: "photos/pr28", title: "Luxury Pooja Room with Gold Leaf Ceiling", code: "PR-512" },
    { img: "photos/pr29", title: "Traditional Pooja Corner with Brass Lamps", code: "PR-976" },
    { img: "photos/pr30", title: "Modern Pooja Wall Design with Floating Shelves", code: "PR-348" }
],
                balcony: [
              
    { img: "photos/bl1", title: "Compact Urban Balcony with Foldable Furniture", code: "BL-327" },
    { img: "photos/bl2", title: "Vertical Garden Balcony", code: "BL-142" },
    { img: "photos/bl3", title: "Minimalist Balcony with Built-In Bench Storage", code: "BL-589" },
    { img: "photos/bl4", title: "Bohemian Style Balcony with Floor Cushions", code: "BL-216" },
    { img: "photos/bl5", title: "Modern Balcony with Glass Railings", code: "BL-753" },
    { img: "photos/bl6", title: "Tiny Balcony Office Conversion", code: "BL-468" },
    { img: "photos/bl7", title: "Cozy Reading Nook Balcony", code: "BL-891" },
    { img: "photos/bl8", title: "Space-Saving Balcony ", code: "BL-345" },
    { img: "photos/bl9", title: "Herb Garden Balcony with Planter Boxes", code: "BL-672" },
    { img: "photos/bl10", title: "Japanese-Inspired Zen Balcony", code: "BL-924" },
    { img: "photos/bl11", title: "Industrial Style Balcony with Metal Accents", code: "BL-157" },
    { img: "photos/bl12", title: "Scandinavian Balcony with Light Wood Flooring", code: "BL-539" },
    { img: "photos/bl13", title: "Romantic Balcony with String Lights", code: "BL-782" },
    { img: "photos/bl14", title: "Convertible Balcony Daybed Design", code: "BL-413" },
    { img: "photos/bl15", title: "Modern Balcony with Weatherproof Furniture", code: "BL-658" },
    { img: "photos/bl16", title: "Small Balcony with Fold-Down Table", code: "BL-291" },
    { img: "photos/bl17", title: "Tropical Balcony with Palm Plants", code: "BL-876" },
    { img: "photos/bl18", title: "Balcony Bar Counter with Stools", code: "BL-524" },
    { img: "photos/bl19", title: "Contemporary Balcony with Geometric Planters", code: "BL-937" },
    { img: "photos/bl20", title: "Rustic Balcony with Wooden Crates", code: "BL-365" },
    { img: "photos/bl21", title: "Smart Space Balcony with Multi-Functional Furniture", code: "BL-712" },
    { img: "photos/bl22", title: "Balcony Hammock Lounge", code: "BL-248" },
    { img: "photos/bl23", title: "Modern Balcony with Artificial Grass", code: "BL-581" },
    { img: "photos/bl24", title: "Compact Balcony Yoga Space", code: "BL-693" },
    { img: "photos/bl25", title: "Industrial Balcony with Pipe Shelving", code: "BL-429" },
    { img: "photos/bl26", title: "Balcony Greenhouse with Glass Panels", code: "BL-167" },
    { img: "photos/bl27", title: "Contemporary Balcony with Water Feature", code: "BL-834" },
    { img: "photos/bl28", title: "Small Balcony Pet Lounge", code: "BL-512" },
    { img: "photos/bl29", title: "Mediterranean Style Balcony", code: "BL-976" },
    { img: "photos/bl30", title: "Balcony Vertical Farm with Hydroponics", code: "BL-348" },
    { img: "photos/bl31", title: "Modern Balcony Privacy Screen Design", code: "BL-761" },
    { img: "photos/bl32", title: "Compact Balcony Workspace", code: "BL-195" },
    { img: "photos/bl33", title: "Balcony with Built-In Storage Seating", code: "BL-623" },
    { img: "photos/bl34", title: "Contemporary Balcony with Hanging Chair", code: "BL-482" },
    { img: "photos/bl35", title: "Minimalist Balcony with Pebble Floor", code: "BL-819" },
    { img: "photos/bl36", title: "Balcony Bird Watching Nook", code: "BL-257" },
    { img: "photos/bl37", title: "Modern Balcony with Modular Planters", code: "BL-941" },
    { img: "photos/bl38", title: "Compact Balcony Breakfast Corner", code: "BL-576" },
    { img: "photos/bl39", title: "Industrial Balcony with Edison Bulb Lighting", code: "BL-384" },
    { img: "photos/bl40", title: "Balcony with Foldable Bistro Set", code: "BL-732" },
    { img: "photos/bl41", title: "Contemporary Balcony with Mirror Wall", code: "BL-169" },
    { img: "photos/bl42", title: "Small Balcony Meditation Space", code: "BL-528" },
    { img: "photos/bl43", title: "Modern Balcony with Weatherproof Curtains", code: "BL-813" },
    { img: "photos/bl44", title: "Balcony Vertical Succulent Garden", code: "BL-462" },
    { img: "photos/bl45", title: "Compact Balcony Bar Cabinet", code: "BL-927" },
    { img: "photos/bl46", title: "Contemporary Balcony with Built-In Lighting", code: "BL-351" },
    { img: "photos/bl47", title: "Balcony with Space-Saving Swing Seat", code: "BL-684" },
    { img: "photos/bl48", title: "Modern Balcony with Tile Accent Wall", code: "BL-239" },
    { img: "photos/bl49", title: "Compact Balcony with Foldable Desk", code: "BL-517" },
    { img: "photos/bl50", title: "Contemporary Balcony with Waterproof Speakers", code: "BL-896" }
],
                bar: [
            
    { img: "photos/ss2", title: "Murphy Bed with Integrated Desk", code: "HB-327" },
    { img: "photos/ss3", title: "Foldable Wall-Mounted Dining Table", code: "HB-142" },
    { img: "photos/ss1", title: "Convertible Coffee-to-Dining Table", code: "HB-589" },
    { img: "photos/ss4", title: "Staircase with Hidden Drawer Storage", code: "HB-216" },
    { img: "photos/ss5", title: "Modular Sofa with Under-Seat Storage", code: "HB-753" },
    { img: "photos/ss6", title: "Wall-Folding Office Desk", code: "HB-468" },
    { img: "photos/ss7", title: "Nesting Tables with Expandable Surface", code: "HB-891" },
    { img: "photos/ss8", title: "Ottoman with Hidden Storage Compartment", code: "HB-345" },
    { img: "photos/ss9", title: "Vertical Bookshelf with Foldable Desk", code: "HB-672" },
    { img: "photos/ss10", title: "Multi-Level Rolling Island", code: "HB-924" }
]
            };

            // Create HTML content for the new tab
            let htmlContent = `
                <!DOCTYPE html>
                <html>
                <head>
                    <title>${category.charAt(0).toUpperCase() + category.slice(1)} Designs</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            margin: 0;
                            padding: 20px;
                            background-color: #f5f5f5;
                        }
                        .gallery-container {
                            max-width: 1200px;
                            margin: 0 auto;
                        }
                        h1 {
                            text-align: center;
                            color: #2c3e50;
                            margin-bottom: 30px;
                        }
                        .gallery {
                            display: grid;
                            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
                            gap: 10px;
                        }
                        .design-card {
                            background: white;
                            border-radius: 8px;
                            overflow: hidden;
                            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                        }
                        .design-card img {
                            width: 100%;
                            height: 200px;
                            object-fit: cover;
                        }
                        .design-info {
                            padding: 15px;
                            text-align: center;
                        }
                        .design-code {
                            font-weight: bold;
                            color: #2c3e50;
                            margin-top: 10px;
                        }
                    </style>
                </head>
                <body>
                    <div class="gallery-container">
                        <h1>${category.charAt(0).toUpperCase() + category.slice(1)} Designs</h1>
                        <div class="gallery">
            `;

            // Add designs to the page
            categoryData[category].forEach(design => {
                htmlContent += `
                    <div class="design-card">
                        <img src="${design.img}" alt="${design.title}">
                        <div class="design-info">
                            <h3>${design.title}</h3>
                            <p class="design-code">${design.code}</p>
                        </div>
                    </div>
                `;
            });

            htmlContent += `
                        </div>
                    </div>
                </body>
                </html>
            `;

            // Open new tab with the designs
            const newTab = window.open();
            newTab.document.open();
            newTab.document.write(htmlContent);
            newTab.document.close();
        }
    </script>
</body>
</html>
  <section class="testimonials">
    <h2>What Our Clients Say</h2>
    <div class="testimonial">
      <p>"Jay Interiors transformed our home beautifully. The designers were so professional and helpful throughout the process."</p>
      <strong>- Priya S.</strong>
    </div>
    <div class="testimonial">
      <p>"From design to execution, everything was smooth. Highly recommend!"</p>
      <strong>- Arjun M.</strong>
    </div>
  </section>
  <!-- Calculate Cost Section -->
  <section class="section-style">
    <h2>Interior Price Estimator</h2>
    <p>Calculate the approximate cost of doing up your interiors</p>

    <div class="card-container">
      <div class="card">
        <img src="photos/calculate.png" alt="Full Home">
        <div class="card-content">
          <div class="card-title">Full Home</div>
          <div class="card-desc">Get an approximate costing for your full home interiors.</div>
          <a href="fullhome.php">
            <button class="card-button">CALCULATE</button>
          </a>          
        </div>
      </div>
      <div class="card">
        <img src="photos/calculate.png" alt="Kitchen">
        <div class="card-content">
          <div class="card-title">Kitchen</div>
          <div class="card-desc">Get an approximate costing for kitchen interior.</div>
          <a href="kitchen.php">
            <button class="card-button">CALCULATE</button>
          </a>
                          </div>
      </div>
      <div class="card">
        <img src="photos/calculate.png" alt="Wardrobe">
        <div class="card-content">
          <div class="card-title">Wardrobe</div>
          <div class="card-desc">Get an approximate costing for Wardrobe.</div>
          <a href="wardrobe.php">
            <button class="card-button">CALCULATE</button>
          </a>          
        </div>
      </div>
    </div>
  </section>
  <section class="offer-section">
    <div class="offer-header">
      <h2>What we offer</h2>
      <a href="buttonopen.php" class="quote-button">GET FREE QUOTE</a>
    </div>
  
    <div class="cards-container">
      <!-- Card 1 -->
      <div class="offer-card">
        <h3><img src="photos/service.jpg" alt="icon" class="icon"> Our services</h3>
        <ul>
          <li>Modular kitchens</li>
          <li>Modular wardrobes</li>
          <li>Lighting</li>
          <li>Flooring</li>
          <li>Electrical work</li>
          <li>Civil work</li>
          <li>False ceiling</li>
          <li>Wall design & painting</li>
        </ul>
      </div>
  
      <!-- Card 2 -->
      <div class="offer-card">
        <h3><img src="photos/warranty1.png" alt="icon" class="icon"> Warranty</h3>
        <ul>
          <li><strong>FLAT 10-year warranty</strong>¹ – Stay worry-free with our warranty policy on modular products.</li>
          <li><strong>Up to 1-year on-site service warranty</strong>¹ – Covers painting, electrical, plumbing and more.</li>
        </ul>
      </div>
  
      <!-- Card 3 -->
      <div class="offer-card">
        <h3><img src="photos/tech.png" alt="icon" class="icon"> Technology & science</h3>
        <ul>
          <li><strong>AquaBloc®</strong> – Hermetically sealed edges to block moisture in modular cabinets.</li>
          <li><strong>AntiBubble®</strong> – Seamless panels without air bubbles.</li>
          <li><strong>DuraBuild™</strong> – Robust cabinet structure, strong and long-lasting.</li>
          <li><strong>Design Science</strong> – Improves accessibility, reduces task effort and body stress.</li>
        </ul>
      </div>
    </div>
  </section>  
  <ul>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Tested to Be the Best</title>
      <style>
        body {
          font-family: Arial, sans-serif;
          margin: 0;
          background: #f9f9f9;
        }
    
        .test-section {
          padding: 40px 20px;
          background: #fff;
          text-align: center;
        }
    
        .test-header h2 {
          font-size: 2rem;
          margin-bottom: 10px;
        }
    
        .test-header p {
          color: #555;
          margin-bottom: 30px;
        }
    
        .test-tabs {
          margin-bottom: 30px;
        }
    
        .tab-button {
          background: #eee;
          border: none;
          padding: 10px 20px;
          margin: 5px;
          font-size: 16px;
          cursor: pointer;
          border-radius: 5px;
          transition: background 0.3s;
        }
    
        .tab-button.active {
          background: #d00;
          color: #fff;
        }
    
        .test-content {
          display: none;
        }
    
        .test-content.show {
          display: block;
        }
    
        .test-wrapper {
          max-width: 1000px;
          margin: 0 auto;
          display: flex;
          flex-direction: column;
          align-items: center;
          gap: 20px;
        }
    
        @media (min-width: 768px) {
          .test-wrapper {
            flex-direction: row;
            align-items: flex-start;
          }
        }
    
        .test-video {
          width: 100%;
          max-width: 500px;
          height: auto;
          border-radius: 8px;
          flex-shrink: 0;
        }
    
        .test-info {
          text-align: left;
          max-width: 450px;
        }
    
        .test-info h3 {
          font-size: 1.5rem;
          margin-bottom: 10px;
        }
    
        .test-info p {
          color: #666;
          font-size: 1rem;
          line-height: 1.5;
        }
    
        .fade-in {
          animation: fadeIn 0.5s ease-in-out;
        }
    
        @keyframes fadeIn {
          from { opacity: 0; transform: translateY(20px); }
          to { opacity: 1; transform: translateY(0); }
        }
      </style>
    </head>
    <body>
    
    <section class="test-section">
      <div class="test-header">
        <h2>Tested to be the best</h2>
        <p>A lot of our success in modular strength hinges on testing our cabinets.</p>
      </div>
    
      <div class="test-tabs">
        <button class="tab-button active" onclick="showTest('drawer', this)">Drawer Cyclic Test</button>
        <button class="tab-button" onclick="showTest('shutter', this)">Shutter Cyclic Test</button>
        <button class="tab-button" onclick="showTest('vertical', this)">Vertical Force Test</button>
        <button class="tab-button" onclick="showTest('shelf', this)">Shelf Load Test</button>
      </div>
    
      <div class="test-content show" id="drawer">
        <div class="test-wrapper fade-in">
          <video class="test-video" autoplay muted loop playsinline>
            <source src="photos/drawer-cyclic" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="test-info">
            <h3>Drawer Cyclic Test</h3>
            <p>Ensures extended life for your cabinet drawers.</p>
          </div>
        </div>
      </div>
    
      <div class="test-content" id="shutter">
        <div class="test-wrapper fade-in">
          <video class="test-video" autoplay muted loop playsinline>
            <source src="photos/shutter" type="video/mp4">
          </video>
          <div class="test-info">
            <h3>Shutter Cyclic Test</h3>
            <p>Verifies the durability of cabinet shutters under frequent use.</p>
          </div>
        </div>
      </div>
    
      <div class="test-content" id="vertical">
        <div class="test-wrapper fade-in">
          <video class="test-video" autoplay muted loop playsinline>
            <source src="photos/vertical" type="video/mp4">
          </video>
          <div class="test-info">
            <h3>Vertical Force Test</h3>
            <p>Tests the weight-bearing capability of modular units.</p>
          </div>
        </div>
      </div>
    
      <div class="test-content" id="shelf">
        <div class="test-wrapper fade-in">
          <video class="test-video" autoplay muted loop playsinline>
            <source src="photos/shelf" type="video/mp4">
          </video>
          <div class="test-info">
            <h3>Shelf Load Test</h3>
            <p>Ensures shelves can handle heavy loads without deforming.</p>
          </div>
        </div>
      </div>
    </section>
    
    <script>
      function showTest(id, el) {
        document.querySelectorAll('.test-content').forEach(content => content.classList.remove('show'));
        document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
        document.getElementById(id).classList.add('show');
        el.classList.add('active');
      }
    </script>
    
    </body>
    </html>        
  <div class="how-it-works-section">
    <h2>How it works</h2>
    <div class="steps-container">
      <div class="step">
        <img src="photos/designer.png" alt="Meet a designer">
        <p>Meet a designer</p>
      </div>
      <div class="step">
        <img src="photos/booking.png" alt="Book a renovation">
        <p><strong>(5% payment)</strong><br>Book a renovation</p>
      </div>
      <div class="step">
        <img src="photos/execution.png" alt="Execution begins">
        <p><strong>(50% payment)</strong><br>Execution begins</p>
      </div>
      <div class="step">
        <img src="photos/installation.png" alt="Final installations">
        <p><strong>(100% payment)</strong><br>Final installations</p>
      </div>
      <div class="step">
        <img src="photos/movein.png" alt="Move in and enjoy!">
        <p><strong>Move in and enjoy!</strong></p>
      </div>
    </div>
    <a href="consultation.php">
  <button class="cta-button">BOOK FREE CONSULTATION</button>
</a>
  </div>  
  <section class="faq">
    <h2>Frequently Asked Questions</h2>
    <div class="faq-list">
      <div class="faq-item">
        <h3>How long does the interior process take?</h3>
        <p>Depending on project size, timelines can range from 4–12 weeks.</p>
      </div>
      <div class="faq-item">
        <h3>Do you offer warranty on your services?</h3>
        <p>Yes, we offer up to 10 years warranty on certain products.</p>
      </div>
      <div class="faq-item">
        <h3>Is there a consultation fee?</h3>
        <p>Consultation is absolutely free of charge.</p>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Jay Interiors. All rights reserved.</p>
  </footer>

</body>
</html>
