<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<h2>Register</h2>
@if($errors->any())
    <div style="color:red">{{ $errors->first() }}</div>
@endif
<form action="{{ route('register') }}" method="POST">
    @csrf
    <label>Name:</label><br>
    <input type="text" name="name" value="{{ old('name') }}" required><br><br>
    <label>Gmail:</label><br>
    <input type="email" name="gmail" value="{{ old('gmail') }}" required><br><br>
    <button type="submit">Register</button>
</form>
<a href="{{ route('login.form') }}">Login</a>
</body>
</html>
