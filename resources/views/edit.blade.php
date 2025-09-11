{{-- resources/views/supots/edit.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Supot - TAMPALFOKE</title>

  <!-- ✅ FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
    body { background: #000; color: #fff; min-height: 100vh; display: flex; flex-direction: column; align-items: center; }

    /* ✅ Brand (Top-Left) */
    .brand {
      position: absolute;
      top: 20px;
      left: 30px;
      font-size: 1.8rem;
      font-weight: bold;
      color: #ffb300;
      letter-spacing: 2px;
      text-shadow: 0 0 12px #ff3d00, 0 0 25px #ffb300;
      animation: brandGlow 2.5s infinite alternate;
    }
    @keyframes brandGlow {
      from { text-shadow: 0 0 12px #ff3d00, 0 0 25px #ffb300; }
      to   { text-shadow: 0 0 25px #ff3d00, 0 0 40px #ffb300; }
    }

    /* ✅ Title */
    h1 {
      font-size: 2.4rem;
      margin: 100px 0 25px 0;
      color: #ffb300;
      text-shadow: 0 0 20px #ff3d00, 0 0 40px #ffb300;
      animation: glow 2s infinite alternate;
      text-align: center;
    }
    @keyframes glow {
      from { text-shadow: 0 0 20px #ff3d00, 0 0 40px #ffb300; }
      to   { text-shadow: 0 0 40px #ff3d00, 0 0 60px #ffb300; }
    }

    /* ✅ Container */
    .container {
      background: rgba(255,255,255,0.08);
      padding: 35px;
      border-radius: 20px;
      max-width: 500px;
      width: 90%;
      margin-bottom: 60px;
      backdrop-filter: blur(12px);
      box-shadow: 0 0 20px rgba(255,179,0,0.35);
      transition: transform 0.3s ease;
    }
    .container:hover { transform: translateY(-3px); }

    /* ✅ Labels & Inputs */
    label {
      font-weight: bold;
      display: block;
      margin-top: 15px;
      margin-bottom: 8px;
      color: #ffb300;
    }

    .input-group {
      position: relative;
      margin-bottom: 20px;
    }

    .input-group i {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: #ffb300;
      font-size: 1rem;
    }

    input[type="text"], input[type="email"] {
      width: 100%;
      padding: 12px 12px 12px 38px;
      border-radius: 10px;
      border: none;
      font-size: 15px;
      background: rgba(255,255,255,0.1);
      color: #fff;
      box-shadow: inset 0 0 8px rgba(255,179,0,0.3);
      transition: 0.3s;
    }

    input:focus {
      outline: none;
      background: rgba(255,255,255,0.15);
      box-shadow: 0 0 12px #ffb300;
    }

    /* ✅ Buttons */
    .btn {
      width: 100%;
      padding: 14px;
      border: none;
      border-radius: 10px;
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn-update {
      background: linear-gradient(45deg, #ffb300, #ff3d00); /* neon orange gradient */
      color: #fff;
      box-shadow: 0 0 15px rgba(255,179,0,0.7); /* glow effect */
    }
    .btn-update:hover {
      transform: scale(1.05);
      background: linear-gradient(45deg, #ff3d00, #ffb300);
      box-shadow: 0 0 20px rgba(255,179,0,0.9);
    }
    .btn-update:active {
      transform: scale(0.97);
    }

    .back-link {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      color: #ffb300;
      font-size: 0.95rem;
      transition: 0.3s;
    }
    .back-link:hover { text-shadow: 0 0 8px #ffb300; }

    /* ✅ Flash Messages */
    .alert {
      padding: 12px 15px;
      border-radius: 8px;
      margin-bottom: 18px;
      font-size: 0.95rem;
      text-align: center;
      animation: fadeIn 0.5s ease;
    }
    .alert-success { background: rgba(0, 255, 100, 0.2); color: #00ff88; border: 1px solid #00ff88; }
    .alert-error { background: rgba(255, 0, 50, 0.2); color: #ff4d4d; border: 1px solid #ff4d4d; }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(-10px);} to { opacity: 1; transform: translateY(0);} }

    /* ✅ Background Effects */
    .abstract {
      position: fixed;
      right: 0; top: 50%;
      transform: translateY(-50%);
      width: 500px; height: 500px;
      background: radial-gradient(circle, #ffb300, #ff3d00, transparent 70%);
      filter: blur(40px);
      animation: pulse 5s infinite alternate;
      z-index: -1;
    }
    .circle {
      position: fixed;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(255,179,0,0.9), rgba(255,61,0,0.6));
      animation: float 6s infinite ease-in-out;
      z-index: -1;
    }
    .circle:nth-child(2) { width: 80px; height: 80px; top: 20%; left: 40%; animation-delay: 0s; }
    .circle:nth-child(3) { width: 100px; height: 100px; bottom: 15%; right: 20%; animation-delay: 2s; }
    @keyframes pulse { from { transform: translateY(-50%) scale(1); } to { transform: translateY(-50%) scale(1.2); } }
    @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-20px); } }

    footer {
      margin-top: 25px;
      color: #aaa;
      font-size: 0.9rem;
      text-align: center;
    }
    footer span { color: #ffb300; font-weight: bold; }
  </style>
</head>
<body>

  <!-- ✅ Brand -->
  <div class="brand">HALIMAW MAGSELOS</div>

  <h1>Edit a Supot</h1>

  <div class="container">
    {{-- ✅ Flash Messages --}}
    @if(session('success'))
      <div class="alert alert-success"><i class="fas fa-check-circle"></i> {{ session('success') }}</div>
    @endif
    @if(session('error'))
      <div class="alert alert-error"><i class="fas fa-exclamation-circle"></i> {{ session('error') }}</div>
    @endif

    <form action="{{ route('supots.update',$supot->id) }}" method="POST">
      @csrf @method('PUT')

      <label for="name">Name:</label>
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" id="name" name="name" value="{{ $supot->name }}" required>
      </div>

      <label for="gmail">Gmail:</label>
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" id="gmail" name="gmail" value="{{ $supot->gmail }}" required>
      </div>

      <button type="submit" class="btn btn-update"><i class="fas fa-save"></i> Update</button>
    </form>

    <a href="{{ route('supots.index') }}" class="back-link"><i class="fas fa-arrow-left"></i> Back to Supots List</a>
  </div>

  <footer>
    © 2025 <span>HALIMAW MAGSELOS</span> | All Rights Reserved
  </footer>

  <!-- ✅ Background Effects -->
  <div class="abstract"></div>
  <div class="circle"></div>
  <div class="circle"></div>

</body>
</html>
