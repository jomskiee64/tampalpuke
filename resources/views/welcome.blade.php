<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Abstract Landing Page</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
    body { background: #000; color: #fff; overflow-x: hidden; }

    /* Hero Section */
    .hero {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 10%;
      position: relative;
      overflow: hidden;
    }
    .hero-text {
      max-width: 500px;
      z-index: 2;
      animation: fadeIn 2s ease-out;
    }
    .hero-text h1 {
      font-size: 3.5rem;
      font-weight: bold;
      margin-bottom: 20px;
      color: #ffb300;
      text-shadow: 0 0 20px #ff3d00;
    }
    .hero-text p {
      margin-bottom: 30px;
      line-height: 1.6;
      color: #ccc;
    }
    .hero-text a {
      display: inline-block;
      padding: 14px 28px;
      background: linear-gradient(45deg, #ffb300, #ff3d00);
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      font-size: 1rem;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .hero-text a:hover {
      transform: translateY(-3px) scale(1.05);
      box-shadow: 0 0 25px #ffb300;
    }

    /* Abstract Glowing Shape */
    .abstract {
      position: absolute;
      right: 0;
      top: 50%;
      transform: translateY(-50%);
      width: 550px;
      height: 550px;
      background: radial-gradient(circle, #ffb300, #ff3d00, transparent 70%);
      filter: blur(40px);
      animation: pulse 5s infinite alternate;
      z-index: 1;
    }

    /* Floating circles */
    .circle {
      position: absolute;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(255,179,0,0.9), rgba(255,61,0,0.6));
      animation: float 6s infinite ease-in-out;
    }
    .circle:nth-child(1) { width: 100px; height: 100px; top: 20%; left: 15%; animation-delay: 0s; }
    .circle:nth-child(2) { width: 60px; height: 60px; top: 70%; left: 10%; animation-delay: 2s; }
    .circle:nth-child(3) { width: 80px; height: 80px; top: 40%; right: 25%; animation-delay: 4s; }

    /* Animated glowing lines */
    .lines { position: absolute; width: 100%; height: 100%; pointer-events: none; }
    .line {
      position: absolute;
      height: 2px;
      width: 220px;
      background: linear-gradient(90deg, #ffb300, transparent);
      animation: move 4s linear infinite;
    }
    .line:nth-child(1) { top: 30%; left: 10%; }
    .line:nth-child(2) { top: 50%; left: 20%; animation-delay: 1s; }
    .line:nth-child(3) { top: 70%; left: 5%; animation-delay: 2s; }

    @keyframes move { from { transform: translateX(-300px); opacity: 0; } to { transform: translateX(500px); opacity: 1; } }
    @keyframes pulse { from { transform: translateY(-50%) scale(1); } to { transform: translateY(-50%) scale(1.2); } }
    @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-20px); } }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
  </style>
</head>
<body>
<!-- Hero Section -->
<section class="hero" id="home">
  <div class="hero-text">
    <h1>Welcome to our web</h1>
    <p>click "get started" to have more info about us</p>
    <a href="{{ url('/profile') }}">Get Started</a>
  </div>
</section>

    <!-- Glowing Abstract Shape -->
    <div class="abstract"></div>
    <div class="lines">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>

    <!-- Floating Circles -->
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
  </section>
</body>
</html>
