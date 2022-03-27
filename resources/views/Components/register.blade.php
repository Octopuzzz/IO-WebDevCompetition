<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="register-container">
        <div class="img-register">
            <img src="./assets/component-5.png" alt="">
        </div>
        <div class="form-register-container">
            <form action="/register" method="post">
                @csrf
                <h1>Register</h1>
                <div class="name-row">
                    <div class="login-form-input">
                        <label for="fname">First Name</label>
                        <input type="text" name="first-name" id="fname" value="{{ old('fname') }}" required autocomplete="name" autofocus>
                    </div>
                    @error('first-name')
                        <div>{{ $message }}</div>
                    @enderror
                    <div class="login-form-input">
                        <label for="lname">Last Name</label>
                        <input type="text" name="last-name" id="lname" value="{{ old('lname') }}" required autocomplete="name" autofocus>
                    </div>
                    @error('last-name')
                        <div>{{ $message }}</div>
                    @enderror
                </div>

                <div class="register-row">
                    <div class="login-form-input">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email">
                    </div>
                    @error('email')
                        <div>{{ $message }}</div>
                    @enderror
                </div>

                <div class="register-row">
                    <div class="login-form-input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required autocomplete="password">
                    </div>
                    <div class="login-form-input">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required autocomplete="password_confirmation">
                    </div>
                    @error('password')
                        <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="term-condition">

                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">Terms & Agreement</label>

                </div>
                <div class="login-form-input">
                    <button class="register-btn" type="submit">Register</button>
                </div>


            </form>
        </div>

    </div>

</body>
</html>

