<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Jomel Guzman - My Portfolio</title>

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background: #000;
      color: #fff;
      line-height: 1.6;
      overflow-x: hidden;
      position: relative;
    }

    .resume-wrapper {
      max-width: 1200px;
      margin: 50px auto;
      display: flex;
      flex-wrap: wrap;
      background: rgba(255,255,255,0.05);
      box-shadow: 0 5px 25px rgba(255,179,0,0.3);
      border-radius: 20px;
      overflow: hidden;
      backdrop-filter: blur(12px);
      position: relative;
      z-index: 2;
      animation: fadeInWrapper 0.8s ease-out;
    }

    @keyframes fadeInWrapper {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Sidebar */
    .sidebar {
      background: rgba(255, 179, 0, 0.08);
      width: 300px;
      padding: 30px;
      flex-shrink: 0;
      text-align: center;
      backdrop-filter: blur(10px);
      position: sticky;
      top: 0;
      height: 100vh;
      overflow-y: auto;
    }

    .sidebar img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid #ffb300;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .sidebar img:hover {
      transform: scale(1.05);
      box-shadow: 0 0 20px #ffb300;
    }

    .sidebar h2 {
      margin-top: 15px;
      font-size: 22px;
      color: #ffb300;
      text-shadow: 0 0 10px #ff3d00;
    }

    .sidebar p { font-size: 14px; color: #ccc; }

    .sidebar nav { margin-top: 30px; }
    .sidebar nav a {
      display: flex;
      align-items: center;
      color: #ccc;
      text-decoration: none;
      padding: 10px;
      border-radius: 8px;
      margin-bottom: 10px;
      transition: background 0.3s, transform 0.2s;
    }
    .sidebar nav a i { margin-right: 10px; color: #ffb300; }
    .sidebar nav a.active,
    .sidebar nav a:hover {
      background-color: rgba(255, 179, 0, 0.2);
      color: #fff;
      transform: translateX(5px);
    }

    .contact-info { margin-top: 30px; font-size: 14px; }
    .contact-info i { width: 20px; color: #ffb300; }

    .social-links a {
      display: inline-block;
      margin: 10px 5px 0 0;
      color: #fff;
      font-size: 18px;
      transition: color 0.3s, transform 0.2s;
    }
    .social-links a:hover { color: #ffb300; transform: scale(1.1); }

    /* Main Content */
    .main {
      flex: 1;
      padding: 40px;
    }
    .main section {
      margin-bottom: 40px;
      padding: 25px;
      background: rgba(255,255,255,0.05);
      border-radius: 12px;
      box-shadow: 0 3px 15px rgba(255,179,0,0.2);
      border-left: 5px solid #ffb300;
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.6s ease;
    }
    .main section.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .main h1 {
      font-size: 36px;
      margin-bottom: 15px;
      color: #ffb300;
      text-shadow: 0 0 12px #ff3d00;
    }
    .main h2 {
      font-size: 20px;
      color: #ffb300;
      margin-bottom: 15px;
      text-transform: uppercase;
      text-shadow: 0 0 8px #ff3d00;
    }
    .main p, .main ul { font-size: 16px; color: #ddd; }
    ul { list-style-type: disc; padding-left: 20px; }
    ul li { margin-bottom: 8px; }

    /* Home Button */
    .home-button {
      position: fixed;
      top: 20px;
      right: 20px;
      z-index: 1000;
    }
    .home-button a {
      display: inline-block;
      padding: 10px 20px;
      background: linear-gradient(45deg, #ffb300, #ff3d00);
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .home-button a:hover {
      transform: scale(1.1);
      box-shadow: 0 0 15px #ffb300;
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: rgba(255, 179, 0, 0.1);
      color: #ccc;
      font-size: 14px;
      border-top: 1px solid rgba(255,179,0,0.3);
      margin-top: 40px;
    }

    .back-to-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background: #ffb300;
      color: #000;
      padding: 12px;
      border-radius: 50%;
      cursor: pointer;
      display: none;
      transition: transform 0.3s;
    }
    .back-to-top:hover { transform: scale(1.2); }

    @media (max-width: 768px) {
      .resume-wrapper { flex-direction: column; }
      .sidebar { width: 100%; height: auto; position: relative; }
      .main { padding: 20px; }
      .sidebar nav a { justify-content: center; }
    }

    /* Background effects */
    .abstract {
      position: absolute;
      right: -150px;
      top: 50%;
      transform: translateY(-50%);
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, #ffb300, #ff3d00, transparent 70%);
      filter: blur(50px);
      animation: pulse 6s infinite alternate;
      z-index: 1;
    }
    .circle {
      position: absolute;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(255,179,0,0.9), rgba(255,61,0,0.6));
      animation: float 6s infinite ease-in-out;
      z-index: 1;
    }
    .circle:nth-child(1) { width: 100px; height: 100px; top: 20%; left: 15%; animation-delay: 0s; }
    .circle:nth-child(2) { width: 80px; height: 80px; bottom: 20%; right: 10%; animation-delay: 2s; }
    .circle:nth-child(3) { width: 60px; height: 60px; top: 70%; left: 25%; animation-delay: 4s; }

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
  </style>
</head>
<body>

  <!-- Home Button (fixed top-right, outside of sections) -->
  <div class="home-button">
    <a href="{{ url('profile') }}"><i class="fas fa-home"></i> Home</a>
    <a href="{{ url('reymark resume') }}"><i class=""></i> Reymark Resume</a>
     
  </div>

  <div class="resume-wrapper">
    <!-- Sidebar -->
    <aside class="sidebar">
      <img src="https://github.com/jomskiee64/my-portfolio/blob/main/jomel.jpg?raw=true" alt="Jomel Guzman" />
      <h2>Jomel Guzman</h2>
      <p>Good Student | My Personal Information</p>

      <nav>
        <a href="#about"><i class="fas fa-user"></i>About Me</a>
        <a href="#hobbies"><i class="fas fa-heart"></i>Hobbies</a>
        <a href="#background"><i class="fas fa-briefcase"></i>Background</a>
        <a href="#skills"><i class="fas fa-lightbulb"></i>Skills</a>
        <a href="#projects"><i class="fas fa-code"></i>Status</a>
        <a href="#education"><i class="fas fa-graduation-cap"></i>Education</a>
        <a href="#achievements"><i class="fas fa-trophy"></i>Achievements</a>
        <a href="#contact"><i class="fas fa-envelope"></i>Contact</a>
      </nav>

      <div class="contact-info">
        <p><i class="fas fa-envelope"></i> guzmanjomel0@email.com</p>
        <p><i class="fas fa-phone"></i> 0907-134-2294</p>
      </div>

      <div class="social-links">
        <a href="https://www.facebook.com/joms.rawet.uki/" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/solstice_joms/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://github.com/jomskiee64" target="_blank"><i class="fab fa-github"></i></a>
      </div>
    </aside>

    <!-- Main -->
    <main class="main">
      <section id="about">
        <h1>About Me</h1>
        <p>Hello! My name is <strong>Jomel Onido</strong>. I’m 18 years old and I live in Rimos 2, Luna, La Union. I’m a motivated individual who believes in the power of growth and continuous learning.</p>
      </section>

      <section id="hobbies">
        <h2>Hobbies</h2>
        <ul>
          <li>Going to the Gym</li>
          <li>Walking and Outdoor Activities</li>
          <li>Eating</li>
          <li>Sleeping</li>
        </ul>
      </section>

      <section id="background">
        <h2>Background</h2>
        <p>I come from a hardworking and supportive family. My upbringing has instilled values such as discipline, resilience, and the importance of integrity.</p>
      </section>

      <section id="skills">
        <h2>Skills</h2>
        <ul>
          <li>Cooking</li>
          <li>Washing Dishes</li>
          <li>Cleaning</li>
          <li>Sleeping</li>
        </ul>
      </section>

      <section id="projects">
        <h2>Status</h2>
        <ul>
          <li>Minsan single</li>
          <li>Kadalasan single</li>
        </ul>
      </section>

      <section id="education">
        <h2>Education</h2>
        <ul>
          <li>Bagumbahay Elementary School</li>
          <li>Luna National High School - JHS</li>
          <li>Luna National High School - SHS</li>
          <li>BS Information Technology - Ongoing</li>
        </ul>
      </section>

      <section id="achievements">
        <h2>Achievements</h2>
        <ul>
          <li>I won an argument with my girlfriend - 2024</li>
        </ul>
      </section>

      <section id="contact">
        <h2>Contact</h2>
        <p><strong>Email:</strong> guzmanjomel0@email.com</p>
        <p><strong>Phone:</strong> 0907-134-2294 - Smart/ TNT</p>
        <p><strong>Phone:</strong> 0948-668-5871 - Globe</p>
      </section>
    </main>
  </div>

  <footer>
    <p>© 2025 Jomel Guzman | All Rights Reserved</p>
  </footer>

  <!-- Back to Top -->
  <div class="back-to-top" id="backToTop"><i class="fas fa-arrow-up"></i></div>

  <!-- Background Effects -->
  <div class="abstract"></div>
  <div class="lines">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>

  <!-- Scripts -->
  <script>
    // Scroll animations
    const sections = document.querySelectorAll(".main section");
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) entry.target.classList.add("visible");
      });
    }, { threshold: 0.2 });
    sections.forEach(sec => observer.observe(sec));

    // Back to top
    const backToTop = document.getElementById("backToTop");
    window.addEventListener("scroll", () => {
      backToTop.style.display = window.scrollY > 300 ? "block" : "none";
    });
    backToTop.addEventListener("click", () => window.scrollTo({ top: 0, behavior: "smooth" }));

    // Active nav highlight
    const navLinks = document.querySelectorAll(".sidebar nav a");
    window.addEventListener("scroll", () => {
      let fromTop = window.scrollY + 100;
      sections.forEach(section => {
        if (section.offsetTop <= fromTop && section.offsetTop + section.offsetHeight > fromTop) {
          navLinks.forEach(link => link.classList.remove("active"));
          document.querySelector('.sidebar nav a[href="#' + section.id + '"]').classList.add("active");
        }
      });
    });
  </script>
</body>
</html>
