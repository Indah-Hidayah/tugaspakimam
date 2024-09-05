<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap-5.3.2-dist/css/bootstrap.min.css')}}">
    <style>
body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: palevioletred;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    background-color: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
}

.input-group {
    margin-bottom: 20px;
}

.input-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.login-btn {
    width: 100%;
    padding: 10px;
    background-color: palevioletred;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
}

.login-btn:hover {
    background-color: palevioletred;
}

p {
    text-align: center;
    margin-top: 20px;
}

p a {
    color: #333;
    text-decoration: none;
}

p a:hover {
    text-decoration: underline;
}
    </style>
</head>
<body>
    @if (Session::has('pesanLogin'))
    {{ Session::get('pesanLogin') }}
    @endif
    <div class="login-container">
        <h2>Login</h2>
        <form action="/auth" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
            <p>Belum punya akun? <a href="#">Daftar</a></p>
        </form>
    </div>
</body>
<script src="{{asset('assets/bootstrap-5.3.2-dist/css/bootstrap.min.css')}}"></script>
</html>

