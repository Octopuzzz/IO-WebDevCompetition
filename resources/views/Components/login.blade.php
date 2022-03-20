<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                <h1>Welcome to IC Food</h1>
            </div>
            <div class="login-form-body">
                <form action="/login" method="POST">
                    @csrf
                    <div class="login-form-input">
                        <label for="email">Email</label>
                        <input class="input-box" type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    @error('email')
                        <div>{{ $message }}</div>
                    @enderror
                    <div class="login-form-input">
                        <label for="password">Password</label>
                        <input class="input-box" type="password" name="password" id="password" required autocomplete="password">
                    </div>

                    <div class="login-form-input">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">Remember Me</label>
                    </div>
                    <div class="login-form-input">
                        <button type="submit">Login</button>
                    </div>
                </form>
                <small class="register">
                    Not Registered? <a href="/register">Register now !</a>
                </small>
            </div>
        </div>
    </div>
</body>
</html>
