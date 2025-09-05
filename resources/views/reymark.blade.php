<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Reymark Morales - My Portfolio</title>

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
      background-color: #0f2d19; /* Dark Green Background */
      color: #e0f7e9; /* Light Text */
    }

    header {
      background-color: #14532d;
      color: white;
      padding: 20px;
      text-align: center;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    header h1 {
      font-size: 28px;
    }

    /* Top right buttons */
    .top-buttons {
      position: absolute;
      right: 20px;
      top: 20px;
    }

    .top-buttons a {
      background: #2e8b57; /* green button */
      color: white;
      padding: 8px 15px;
      margin-left: 10px;
      border-radius: 6px;
      font-size: 14px;
      font-weight: 500;
      text-decoration: none;
      transition: background 0.3s, transform 0.2s;
    }

    .top-buttons a:hover {
      background: #3fa76c;
      transform: scale(1.05);
    }

    .top-buttons i {
      margin-right: 6px;
    }

    nav {
      margin-top: 10px;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-weight: 500;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #c3f3d1;
    }

    .hero {
      text-align: center;
      padding: 40px 20px;
      background-color: #1c3d2a;
    }

    .hero img {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #2e8b57;
    }

    .hero h2 {
      margin-top: 15px;
      font-size: 24px;
      color: #c3f3d1;
    }

    .container {
      max-width: 900px;
      margin: auto;
      padding: 30px 20px;
    }

    section {
      background: #14532d;
      padding: 25px;
      margin-bottom: 30px;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0, 255, 100, 0.1);
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    section:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0, 255, 100, 0.15);
    }

    section h3 {
      margin-bottom: 15px;
      color: #90ee90;
      text-transform: uppercase;
      font-size: 18px;
    }

    ul {
      padding-left: 20px;
    }

    ul li {
      margin-bottom: 8px;
    }

    .contact p {
      margin-bottom: 10px;
    }

    footer {
      background-color: #14532d;
      color: white;
      text-align: center;
      padding: 15px;
      font-size: 14px;
    }

    .social-links {
      margin-top: 10px;
    }

    .social-links a {
      color: #90ee90;
      margin: 0 8px;
      font-size: 20px;
      transition: transform 0.2s, color 0.2s;
    }

    .social-links a:hover {
      transform: scale(1.2);
      color: #ffffff;
    }

    @media (max-width: 600px) {
      nav a {
        display: inline-block;
        margin: 5px 8px;
      }

      .hero img {
        width: 100px;
        height: 100px;
      }

      .hero h2 {
        font-size: 20px;
      }

      section h3 {
        font-size: 16px;
      }

      .top-buttons {
        position: static;
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Reymark Morales</h1>

    <!-- Top Right Buttons -->
    <div class="top-buttons">
      <a href="{{ url('profile') }}"><i class="fas fa-home"></i> Home</a>
      <a href="{{ url('jomsresume') }}"><i class="fas fa-file-alt"></i> Jomsresume</a>
    </div>

    <nav>
      <a href="#about">About</a>
      <a href="#hobbies">Hobbies</a>
      <a href="#background">Background</a>
      <a href="#skills">Skills</a>
      <a href="#status">Status</a>
      <a href="#education">Education</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <div class="hero">
    <img src="{{ asset('images/reymark.jpg') }}" alt="Photo of Reymark Morales">
    <h2>Welcome to My Portfolio</h2>
    <p>3rd Year IT Student | Hardworking | Determined</p>
  </div>

  <div class="container">
    <section id="about">
      <h3>About Me</h3>
      <p>Hello! My name is <strong>Reymark Morales</strong>. I am 20 years old and I live in Bucao East, Tagudin, Ilocos Sur. I am currently a 3rd year Information Technology (IT) student. I am a hardworking and determined person who strives to do my best in everything I do.</p>
    </section>

    <section id="hobbies">
      <h3>Hobbies</h3>
      <ul>
        <li>Cycling</li>
        <li>Running</li>
        <li>Playing Games</li>
      </ul>
    </section>

    <section id="background">
      <h3>Background</h3>
      <p>I come from a supportive family who instilled in me the values of perseverance, responsibility, 
        and determination. Their sacrifices inspire me to remain focused on my studies and work diligently
        toward my goals. Growing up in this environment has motivated me to strive for success, not only for
        my personal growth but also to give back to my family and contribute to my community.</p>
    </section>

    <section id="skills">
      <h3>Skills</h3>
      <ul>
        <li>Time Management</li>
        <li>Teamwork</li>
        <li>Writing</li>
        <li>Creativity</li>
      </ul>
    </section>

    <section id="status">
      <h3>Status</h3>
      <ul>
        <li>Unidentified</li>
      </ul>
    </section>

    <section id="education">
      <h3>Education</h3>
      <ul>
        <li>Man-Atong Elementary School</li>
        <li>Tagudin National High School - JHS</li>
        <li>Tagudin National High School - SHS</li>
        <li>BS Information Technology - Ongoing</li>
      </ul>
    </section>

    <section id="contact" class="contact">
      <h3>Contact</h3>
      <p><strong>Email:</strong> reymarkmorales58@gmail.com</p>
      <p><strong>Phone:</strong> 0938-631-3974</p>

      <div class="social-links">
        <a href="https://web.facebook.com/reymark.morales.790" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/zoldykte/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://github.com/rey27-git" target="_blank"><i class="fab fa-github"></i></a>
      </div>
    </section>
  </div>

  <footer>
    &copy; 2025 Reymark Morales | All Rights Reserved
  </footer>

</body>
</html>
