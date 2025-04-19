<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Login/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="logo-header">
            <div class="logo">
                <!-- Replace the URL below with your external logo image URL -->
                <img src="{{ asset('assets/Logo.png') }}" alt="CuanFlow Logo" class="logo-image" id="logo-image">
                <div class="logo-text">CuanFlow</div>
            </div>
        </div>
        <div class="left-section">
            <div class="laptop-container">
                <img src="{{ asset('assets/Management.png') }}" alt="Laptop showing CuanFlow interface"
                    class="laptop-image">
            </div>
        </div>

        <div class="right-section">
            <div class="welcome-text">
                <h1>Hello!</h1>
                <p>We are glad to see you :)</p>
            </div>

            <div class="social-signup">
                <div class="social-buttons">
                </div>
            </div>
            <form id="login-form" method="POST" action="/sesi/create">
                @csrf <!-- Menambahkan token CSRF -->
                <div class="form-group full-width">
                    <label for="name">name</label>
                    <input type="text" value="{{ Session::get('name') }}" name="name" class="form-input" required>
                </div>

                <div class="form-group full-width">
                    <label for="username">Email</label>
                    <input type="email" value="{{ Session::get('email') }}" name="email" class="form-input"
                        required>
                </div>

                <div class="form-group full-width">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-input" required>
                </div>

                <div class="login-container">
                    <button type="submit" class="login-btn">Sign In</button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/register/script.js"></script>
</body>

</html>
