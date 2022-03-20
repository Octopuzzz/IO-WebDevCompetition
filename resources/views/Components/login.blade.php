<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link href="css/styles.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <div class="login-form-header">
                @if(session()->has('LogErr'))
                    <div>{{ session('LogErr') }}</div>
                @endif
                @if(session()->has('success'))
                    <div>{{ session('success') }}</div>
                @endif
                <h1>Welcome to <span class="ic">IC</span> <span class="food">Food</span></h1>
            </div>
            <div class="login-form-body">
                <form action="/login" method="POST">
                    @csrf
                    <div class="login-form-input">
                        <label class="text-input-box"  for="email">Email</label>
                        <input class="input-box" type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    @error('email')
                        <div>{{ $message }}</div>
                    @enderror
                    <div class="login-form-input password">
                        <label class="text-input-box" for="password">Password</label>
                        <input class="input-box" type="password" name="password" id="password" required autocomplete="password">
                        <span>
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>

                    <div class="remember-container">
                        <div class="login-form-input">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">Remember Me</label>
                        </div>
                        <p>Forget Password</p>
                    </div>

                    <div class="login-form-input">
                        <button class="login-btn" type="submit">Login</button>
                    </div>
                </form>
                <small class="register">
                    Don’t have account?<a href="/register">Sign Up</a>
                </small>
            </div>
        </div>
        <div class="login-img">
            <img src="./assets/login-picture.png" alt="">
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/js/all.min.js"></script>
<script src="js/script2.js"></script>
</html>
