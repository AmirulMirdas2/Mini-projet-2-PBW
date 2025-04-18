<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CuanFlow - Login</title>
    <link rel="stylesheet" href='css/Login/styles.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="logo-header">
            <div class="logo">
                <img src="{{ asset('assets/logo-website.png') }}" alt="CuanFlow Logo" class="logo-image"
                    id="logo-image">
                <div class="logo-text">CuanFlow</div>
            </div>
        </div>
        <div class="left-section">
            <div class="laptop-container">
                <img src="{{ asset('assets/MacBook Air (15 inch).png') }}" alt="Laptop showing CuanFlow interface"
                    class="laptop-image">
            </div>
        </div>

        <div class="right-section">
            <div class="welcome-text">
                <h1>Welcome Back</h1>
                <p>Please login to your account</p>
            </div>

            @if ($errors->any())
                <div class="rr">
                    <div class="error-messages">
                        @foreach ($errors->all() as $error)
                            <p class="error-text">{{ $error }}</p>
                        @endforeach
                    </div>
                </div>
            @endif

            <form id="login-form" method="POST" action="/sesi">
                @csrf
                <div class="form-group full-width">
                    <label for="username">Email</label>
                    <input type="email" value="{{ Session::get('email') }}" name="email" class="form-input"
                        required>
                </div>

                <div class="form-group full-width">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-input" required>
                </div>

                <div class="forgot-password">
                    <a href="/sesi/register" class="forgot-link">Register</a>
                </div>

                <div class="login-container">
                    <button type="submit" class="login-btn">Log In</button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/Login/script.js') }}"></script>
</body>

</html>
