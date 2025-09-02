<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profiles</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
    body { background: #000; color: #fff; overflow-x: hidden; }

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

    .profiles {
      display: flex;
      gap: 40px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .profile-card {
      background: rgba(255,255,255,0.08);
      padding: 20px;
      border-radius: 20px;
      text-align: center;
      width: 260px;
      backdrop-filter: blur(12px);
      box-shadow: 0 0 20px rgba(255,179,0,0.4);
      transition: transform 0.3s, box-shadow 0.3s;
      position: relative;
      overflow: hidden;
    }

    .profile-card:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 0 30px rgba(255,179,0,0.6);
    }

    .profile-card img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-radius: 15px;
      margin-bottom: 15px;
      transition: transform 0.5s;
    }

    .profile-card:hover img {
      transform: scale(1.1);
    }

    .profile-card h2 {
      margin: 10px 0;
      font-size: 1.5rem; /* ✅ Same size for all names */
    }

    .profile-card h2 a {
      text-decoration: none;
      color: #fff; /* ✅ White names */
      transition: color 0.3s;
    }

    .profile-card h2 a:hover {
      color: #ff3d00; /* ✅ Hover effect (orange-red) */
    }

    .profile-card p {
      font-size: 0.9rem;
      color: #ccc;
      margin-bottom: 15px;
    }

    .profile-card a {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 20px;
      background: linear-gradient(45deg, #ffb300, #ff3d00);
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .profile-card a:hover {
      transform: scale(1.1);
      box-shadow: 0 0 15px #ffb300;
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
</head>
<body>
<div class="container">
  <h1>Meet Our Profiles</h1>

  <div class="profiles">
    <!-- Profile 1 -->
    <div class="profile-card">
  <img src="{{ asset('images/joms.jfif') }}" alt="Jomel">
  <h2><a href="https://github.com/jomskiee64" target="_blank">Jomel</a></h2>
  <p>person 1</p>
  <a href="{{ url('jomsresume') }}" target="_blank">View Resume</a>
</div>


    <!-- Profile 2 -->
    <div class="profile-card">
      <img src="{{ asset('images/reymark.jpg') }}" alt="Reymark">
      <h2><a href="https://github.com/reymark" target="_blank">Reymark </a></h2>
      <p>person 2</p>
      <a href="{{ asset('resumes/reymark_resume.pdf') }}" target="_blank">View Resume</a>
    </div>
  </div> <!-- ✅ closed profiles div -->

  <footer>© 2025 Team Profiles | All Rights Reserved</footer>
</div>

<!-- Background effects -->
<div class="abstract"></div>
<div class="circle"></div>
<div class="circle"></div>
</body>
</html>
