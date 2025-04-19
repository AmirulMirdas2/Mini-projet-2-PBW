<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/add-user/styles.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <button class="toggle-sidebar">
                <img src="assets/menu.svg" alt="Toggle Sidebar" class="toggle-icon">
            </button>
            <div class="profile-container">
                <div class="profile-image">
                    <img src="assets/Firah.png" alt="Profile Image">
                </div>
                @if (Auth::check())
                    <b>
                        <p>{{ Auth::user()->name }}</p>
                    </b>
                    <b>
                        <p>{{ Auth::user()->email }}</p>
                    </b>
                @endif
            </div>

            <div class="sidebar-title">Tentang Kami</div>

            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="dashboard-admin" class="nav-link">
                        <i class="fas fa-home"></i>
                        <span><b>Dashboard</b></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="add-user" class="nav-link active">
                        <i class="fas fa-user"></i>
                        <span><b>Add User</b></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('list-user') }}" class="nav-link">
                        <i class="fas fa-user"></i>
                        <span><b>List User</b></span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <div class="title">Admin <span>Panel</span></div>

                <div class="header-nav">
                    <a href="/sesi"><b>Logout</b></a>
                </div>
            </div>
            <div class="kotak">
                <div class="add-user-section">
                    <h2>Add User</h2>
                    <div class="add-user-form">
                        <form id="addUserForm" action="{{ route('add-user.store') }}" method="POST">
                            @csrf
                            <div class="form-fields">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" id="username" name="username" placeholder="Bunga Rasikah"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select id="role" name="role" required>
                                        <option value="user">user</option>
                                        <option value="admin">admin</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" placeholder="****************"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email"
                                        placeholder="Bunga.keecee@gmail.com" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="add-button">Tambahkan</button>
                                </div>
                            </div>
                        </form>
                        @if (session('success'))
                            <div id="successMessage" style="color: green; margin-top: 10px;">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/Add-user/script.js"></script>
</body>

</html>
