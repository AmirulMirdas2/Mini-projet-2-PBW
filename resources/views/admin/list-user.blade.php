<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/List-user/User.css">
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <button class="toggle-sidebar">
                <img src="assets/menu.svg" alt="Toggle Sidebar" class="toggle-icon">
            </button>
            <div class="profile-section">
                <div class="profile-img">
                    <img src="assets/Firah.png" alt="Profile Image">
                </div>
                <div class="profile-info">
                    @if (Auth::check())
                        <b>
                            <p>{{ Auth::user()->name }}</p>
                        </b>
                        <b>
                            <p>{{ Auth::user()->email }}</p>
                        </b>
                    @endif
                </div>
            </div>

            <div class="sidebar-title"><b>Tentang Kami</b></div>

            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="dashboard-admin" class="nav-link">
                        <i class="fas fa-home"></i>
                        <span><b>Dashboard</b></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="add-user" class="nav-link">
                        <i class="fas fa-user"></i>
                        <span><b>Add User</b></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-user"></i>
                        <span><b>List User</b></span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="main-header">
                <h1 class="panel-title">Admin <span>Panel</span></h1>

                <div class="header-nav">
                    <a href="/sesi"><b>Logout</b></a>
                </div>
                <button class="menu-toggle">☰</button>
            </div>

            <!-- User Management Section -->
            <div class="user-management">
                <div class="kotak">
                    <div class="user-controls">
                        <div class="search-filter">
                            <div class="search-bar">
                            </div>
                        </div>
                        <a href="add-user" class="add">
                            <button class="add-user-btn">
                                <span class="plus-icon">+</span>
                                Add User
                        </a>
                        </button>
                    </div>

                    <div class="user-table">
                        <div class="table-header">
                            <div class="table-row table-header-row">
                                <div class="column">Name</div>
                                <div class="column">Email</div>
                                <div class="column">Role</div>
                                <div class="column">Joining Date</div>
                                <div class="column">Action</div>
                            </div>

                            @foreach ($users as $user)
                                <div class="table-row">
                                    <div class="column">{{ $user->name }}</div>
                                    <div class="column">{{ $user->email }}</div>
                                    <div class="column">{{ $user->role }}</div>
                                    <div class="column">{{ $user->created_at }}</div>
                                    <div class="column">
                                        <form action="{{ route('delete-user', $user->id) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete-btn">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/List-user/User.js"></script>
</body>

</html>
