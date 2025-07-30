<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Decor - Welcome</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body, html {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f2f2f2;
      height: 100%;
    }
    .navbar {
      background-color: #01053dff;
      padding: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: white;
    }
    .navbar a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
      padding: 8px 12px;
      transition: background-color 0.3s, color 0.3s;
      border-radius: 4px;
    }
    .navbar a:hover {
      background-color:#f3ebebff;
      color:#885d0fff;
    }
    .navbar a:active {
      background-color: #FF6F61;
      color: #000;
    }
    .logo {
      font-size: 1.8rem;
      font-weight: bold;
    }
    .search-container input[type="text"] {
      padding: 0.5rem;
      border: 1px solid #ccc;
      background-color:#f3ebebff
      border-radius: 4px;
    }
    .search-container button:hover {
      background-color:#f3ebebff;
      padding: 0.5rem 1rem;
      color:#885d0fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .search-container button:active{
        background-color:#FF6F61;
      color: #000;
    }
    .hero {
      background-image: url('home_background.jpg');
      background-size: cover;
      background-color:lavender;
      background-position: center;
      height: 75vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
    }
    .hero-text {
      background-color: rgba(0, 0, 0, 0.6);
      padding: 2rem;
      border-radius: 10px;
      text-align: center;
    }
    .slider-section {
      padding: 2rem;
      background-color: #FFF3E0;
      height: 45vh;
    }
    .contact-info {
      background-color: #333;
      color: white;
      padding: 2rem;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <div class="logo">DecorNest</div>
    <div>
      <a href="#home">Home</a>
      <a href="#about">About Us</a>
      <a href="#explore">Explore</a>
      <a href="#register">Register/Login</a>
    </div>
    <div class="search-container">
      <input type="text" placeholder="Search decor items...">
      <button>Search</button>
    </div>
  </div>

  <section class="hero">
    <div class="hero-text">
      <h1>Welcome to DecorNest</h1>
      <p>Your one-stop shop for all decorative home needs.</p>
      <p> Be Elegant in Your Mess</p>
      <p>OR</p>
      <p>Be Classy in Your Privacy</p>
      <p> Design your own home with the best decors from DecorNest.</p>
    </div>
  </section>

  <section class="slider-section">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="decor1.jpg" class="d-block w-100" alt="Decor Item 1">
        </div>
        <div class="carousel-item">
          <img src="decor2.jpg" class="d-block w-100" alt="Decor Item 2">
        </div>
        <div class="carousel-item">
          <img src="decor3.jpg" class="d-block w-100" alt="Decor Item 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section class="contact-info">
    <h2>Contact Us</h2>
    <p>Email: support@decornest.com</p>
    <p>Address: Bagbazar, Kathmandu, Nepal</p>
    <p>Telephone: +977-9823456789</p>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
