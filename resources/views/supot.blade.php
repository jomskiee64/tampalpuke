{{-- resources/views/supots/index.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Supots List - HALIMAW MAGSELOS</title>

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
    body { display: flex; min-height: 100vh; background: #0a0a0a; color: #fff; }

    /* Sidebar */
    .sidebar {
      width: 230px;
      background: rgba(30, 30, 30, 0.95);
      backdrop-filter: blur(10px);
      padding: 25px 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      box-shadow: 2px 0 20px rgba(255, 145, 0, 0.3);
      position: fixed;
      top: 0; bottom: 0;
      transition: 0.3s;
    }

    .brand { font-size: 1.6rem; font-weight: bold; color: #ffb300; text-align: center; margin-bottom: 40px; text-shadow: 0 0 15px #ff3d00, 0 0 25px #ffb300; }

    .nav-links { display: flex; flex-direction: column; gap: 15px; }
    .btn-add {
      display: flex; align-items: center; justify-content: center;
      gap: 10px; padding: 12px 0; font-weight: bold; font-size: 1rem;
      border-radius: 8px; text-decoration: none; transition: 0.3s;
      background: linear-gradient(45deg, #ff9100, #ff3d00); color: #fff;
      box-shadow: 0 0 8px rgba(255,145,0,0.6);
    }
    .btn-add:hover { transform: translateX(5px); box-shadow: 0 0 20px rgba(255,61,0,0.9); }

    .social { display: flex; justify-content: center; gap: 20px; margin-top: 40px; }
    .social a { font-size: 1.4rem; color: #ffb300; transition: 0.3s; }
    .social a:hover { color: #ff3d00; transform: scale(1.3); }

    /* Main content */
    .main-content {
      flex: 1;
      margin-left: 230px;
      padding: 40px;
      width: calc(100% - 230px);
      animation: fadeIn 1s ease-in-out;
    }
    @keyframes fadeIn { from {opacity:0; transform: translateY(20px);} to {opacity:1; transform: translateY(0);} }

    h1 {
      font-size: 2.4rem;
      margin-bottom: 20px;
      text-align: center;
      color: #ffb300;
      text-shadow: 0 0 20px #ff3d00, 0 0 40px #ffb300;
    }

    .container {
      background: rgba(255,255,255,0.05);
      padding: 25px 20px;
      border-radius: 15px;
      backdrop-filter: blur(10px);
      box-shadow: 0 0 25px rgba(255,179,0,0.35);
      transition: all 0.3s ease;
      overflow-x: auto;
    }
    .container:hover { box-shadow: 0 0 35px rgba(255,179,0,0.5); }

    /* Table */
    table { width: 100%; border-collapse: collapse; border-radius: 12px; overflow: hidden; }
    table th, table td { padding: 14px; text-align: center; transition: 0.3s; }
    table th {
      background: linear-gradient(45deg, #ff3d00, #ff9100);
      color: #fff;
      font-weight: bold;
      text-shadow: 0 0 10px #ffb300;
      position: sticky;
      top: 0;
      z-index: 1;
    }
    table tr:nth-child(even) { background: rgba(255,255,255,0.05); }
    table tr:hover { background: rgba(255,179,0,0.15); transform: scale(1.01); box-shadow: 0 0 15px rgba(255,179,0,0.2); }

    /* Buttons */
    .btn-edit {
      background: linear-gradient(45deg, #ffb300, #ff9100);
      color: #000;
      padding: 8px 14px;
      border-radius: 6px;
      font-weight: bold;
      transition: all 0.3s ease;
      box-shadow: 0 0 5px rgba(255,179,0,0.5);
    }
    .btn-edit:hover { background: linear-gradient(45deg, #ff9100, #ff3d00); color: #fff; box-shadow: 0 0 15px rgba(255,145,0,0.9); transform: scale(1.05); }

    .btn-delete {
      background: linear-gradient(45deg, #ff3d00, #b71c1c);
      color: #fff;
      border: none;
      cursor: pointer;
      padding: 8px 14px;
      border-radius: 6px;
      font-weight: bold;
      transition: all 0.3s ease;
      box-shadow: 0 0 5px rgba(255,61,0,0.5);
    }
    .btn-delete:hover { background: linear-gradient(45deg, #ff9100, #ff3d00); box-shadow: 0 0 15px rgba(255,61,0,0.9); transform: scale(1.05); }

    .actions { display: flex; justify-content: center; gap: 10px; flex-wrap: wrap; }

    /* Neon success */
    .success-message {
      text-align: center;
      font-weight: bold;
      margin-bottom: 15px;
      color: #ffb300;
      text-shadow: 0 0 8px #ff3d00, 0 0 15px #ffb300;
      animation: glow 1.5s infinite alternate;
    }
    @keyframes glow { from { text-shadow: 0 0 8px #ff3d00, 0 0 15px #ffb300; } to { text-shadow: 0 0 15px #ff3d00, 0 0 25px #ffb300; } }

    /* Responsive */
    @media screen and (max-width: 768px){
      .sidebar { width: 60px; padding: 20px 10px; }
      .main-content { margin-left: 60px; padding: 20px; width: calc(100% - 60px); }
      .nav-links a { font-size: 0.85rem; padding: 10px 0; }
      h1 { font-size: 2rem; }
      table th, table td { padding: 10px; font-size: 0.9rem; }
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <div>
      <div class="brand">HALIMAW MAGSELOS</div>
      <div class="nav-links">
        <a href="{{ route('supots.create') }}" class="btn-add"><i class="fas fa-plus"></i> Add a Supot</a>
      </div>
    </div>
    <div class="social">
      <a href="https://github.com" target="_blank"><i class="fab fa-github"></i></a>
      <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
      <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
  </div>

  <!-- Main content -->
  <div class="main-content">
    <h1>Supots List</h1>

    <div class="container">
      @if(session('success'))
        <p class="success-message"><i class="fas fa-check-circle"></i> {{ session('success') }}</p>
      @endif

      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gmail</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($supots as $supot)
          <tr>
            <td>{{ $supot->id }}</td>
            <td>{{ $supot->name }}</td>
            <td>{{ $supot->gmail }}</td>
            <td class="actions">
              <a href="{{ route('supots.edit',$supot->id) }}" class="btn-edit"><i class="fas fa-edit"></i> Edit</a>
              <form action="{{ route('supots.destroy',$supot->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete this supot?')">
                @csrf @method('DELETE')
                <button type="submit" class="btn-delete"><i class="fas fa-trash"></i> Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
