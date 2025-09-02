<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profiles & About Us</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
    body { background: #000; color: #fff; overflow-x: hidden; }

    /* ✅ Navbar */
    .navbar {
      position: absolute;
      top: 20px;
      right: 30px;
      display: flex;
      gap: 20px;
      z-index: 5;
    }
    .navbar a {
      color: #fff;
      text-decoration: none;
      font-size: 1.2rem;
      display: flex;
      align-items: center;
      gap: 8px;
      transition: color 0.3s;
    }
    .navbar a:hover { color: #ffb300; }
    .navbar i { font-size: 1.3rem; }

    .container {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      position: relative;
      z-index: 2;
      padding: 50px 20px;
      text-align: center;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 40px;
      color: #ffb300;
      text-shadow: 0 0 20px #ff3d00, 0 0 40px #ffb300;
      animation: glow 2s infinite alternate;
    }
    @keyframes glow {
      from { text-shadow: 0 0 20px #ff3d00, 0 0 40px #ffb300; }
      to { text-shadow: 0 0 40px #ff3d00, 0 0 60px #ffb300; }
    }

    .profiles, .about-cards {
      display: flex;
      gap: 40px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .profile-card, .about-card {
      background: rgba(255,255,255,0.08);
      padding: 20px;
      border-radius: 20px;
      text-align: center;
      width: 280px;
      backdrop-filter: blur(12px);
      box-shadow: 0 0 20px rgba(255,179,0,0.4);
      transition: transform 0.3s, box-shadow 0.3s;
      position: relative;
      overflow: hidden;
    }
    .profile-card:hover, .about-card:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 0 30px rgba(255,179,0,0.6);
    }
    .profile-card img, .about-card img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-radius: 15px;
      margin-bottom: 15px;
      transition: transform 0.5s;
    }
    .profile-card:hover img, .about-card:hover img {
      transform: scale(1.1);
    }
    .profile-card h2, .about-card h2 {
      margin: 10px 0;
      font-size: 1.5rem;
    }
    .profile-card p, .about-card p {
      font-size: 0.9rem;
      color: #ccc;
      margin-bottom: 15px;
    }

    /* Background effects */
    .abstract {
      position: absolute;
      right: 0; top: 50%;
      transform: translateY(-50%);
      width: 500px; height: 500px;
      background: radial-gradient(circle, #ffb300, #ff3d00, transparent 70%);
      filter: blur(40px);
      animation: pulse 5s infinite alternate;
      z-index: 1;
    }
    .circle {
      position: absolute;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(255,179,0,0.9), rgba(255,61,0,0.6));
      animation: float 6s infinite ease-in-out;
      z-index: 1;
    }
    .circle:nth-child(1) { width: 80px; height: 80px; top: 20%; left: 15%; animation-delay: 0s; }
    .circle:nth-child(2) { width: 100px; height: 100px; bottom: 15%; right: 20%; animation-delay: 2s; }

    @keyframes pulse { from { transform: translateY(-50%) scale(1); } to { transform: translateY(-50%) scale(1.2); } }
    @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-20px); } }

    footer {
      margin-top: 50px;
      color: #aaa;
      font-size: 0.9rem;
    }
  </style>
  <!-- ✅ Font Awesome for icons -->
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body>

<!-- ✅ Navbar -->
<div class="navbar">
  <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a>
  <a href="{{ url('profile') }}"><i class="fas fa-info-circle"></i> Profile</a>
</div>

<!-- ✅ Profiles Section -->


<!-- ✅ About Us Section -->
<div class="container" id="about">
  <h1>About Us</h1>
  <div class="about-cards">
    <div class="about-card">
      <img src="{{ asset('images/tampalpuke.jpg') }}" alt="Our Team">
      <h2>Who We Are</h2>
      <p>We are a passionate team of developers creating modern and innovative web solutions.</p>
    </div>
    <div class="about-card">
      <img src="{{ asset('images/mission.jpg') }}" alt="Our Mission">
      <h2>Our Mission</h2>
      <p>To deliver high-quality websites and applications that empower people and businesses.</p>
    </div>
    <div class="about-card">
      <img src="{{ asset('images/vission.jpg') }}" alt="Our Vision">
      <h2>Our Vision</h2>
      <p>To be recognized as a leading team in creative and impactful web development projects.</p>
    </div>
  </div>
</div>

<footer>
  © 2025 Team Profiles | All Rights Reserved
</footer>


<!-- Background effects -->
<div class="abstract"></div>
<div class="circle"></div>
<div class="circle"></div>

</body>
</html>
