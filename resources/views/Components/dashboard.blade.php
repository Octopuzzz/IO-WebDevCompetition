<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <div class="dashboard-container">
        <div class="dashboard-form">
            <div class="dashboard-form-header">
                <h1>Dashboard</h1>
            </div>
            <form class="dashboard-form-body" action="" method="POST">
                <div class="dashboard-form-input">
                    <label for="fname">First Name</label>
                    <input type="text" name="first-name" id="fname" value="{{ $user->first_name }}" required autocomplete="name" autofocus>
                </div>
                <div class="dashboard-form-input">
                    <label for="lname">Last Name</label>
                    <input type="text" name="last-name" id="lname" value="{{ $user->last_name }}" required autocomplete="name" autofocus>
                </div>
                <div class="dashboard-form-input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ $user->email }}" required autocomplete="email">
                </div>
                <div class="dashboard-form-input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required autocomplete="password">
                </div>
                <div class="dashboard-form-input">
                    <button type="submit">Update</button>
                </div>
            </form>

            @foreach($foods as $food)
            {{-- @dd($food->image); --}}
                <div class="" >
                    <img src="{{ asset('storage/assets/'.$food->image) }}" alt=""
                    style="width:300px;">
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
