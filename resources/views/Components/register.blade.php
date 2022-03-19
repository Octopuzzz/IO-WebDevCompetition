{{-- @extends('layouts.main')

@section('container')
@endsection --}}

<form action="/register" method="post">
    @csrf
    <div class="login-form-input">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    </div>
    @error('name')
        <div>{{ $message }}</div>
    @enderror
    <div class="login-form-input">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email">
    </div>
    @error('email')
        <div>{{ $message }}</div>
    @enderror
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
    <div class="login-form-input">
        <button type="submit">Register</button>
    </div>
</form>
