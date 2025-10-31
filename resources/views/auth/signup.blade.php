<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>

<body>

    <div class="container">
        <h2>Sign In to Continue</h2>
        <form class="formcontainer" method="post" action="{{ route('auth.register') }}">
            @csrf
            <div class="inputgroup">

                <label for="name">Name</label>
                <input type="text" id="name" placeholder="username" required name="name">
            </div>
            <div class="inputgroup">
                <label for="email">Email Address</label>
                <input type="email" id="email" placeholder="you@example.com" required name="email" >
            </div>

            <div class="inputgroup">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="••••••••" required name="password">
            </div>

            <button type="submit">Sign In</button>
        </form>

        <div class="link">
            Already have an Account? <a href="/login">Login</a>
        </div>
    </div>



</body>

</html>
