<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CuanFlow - Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/Dashboard-User/Dashboard.css" />
</head>

<body>
    <!-- Mobile Toggle -->
    <div class="mobile-toggle">
        <i class="fas fa-bars"></i>
    </div>

    <!-- Sidebar -->
    <aside class="sidebar">
        <!-- Updated Profile Section with larger profile picture -->
        <div class="profile-container">
            <div class="profile">
                <img src="assets/Mirul.png" alt="Profile" />
            </div>
            <div class="profile-info">
                <div class="name">Amirul Mirdas</div>
                <div class="email">Amirrdass.23@gmail.com</div>
            </div>
        </div>

        <div class="tentang-kami">Tentang Kami</div>

        <!-- Updated Navigation Menu -->
        <div class="nav-container">
            <a href="Dashboard-User" class="nav-item active">
                <i class="fas fa-home"></i>
                <span>Dashboard</span>
            </a>
            <a href="kalender" class="nav-item">
                <i class="fas fa-calendar"></i>
                <span>Kalender</span>
            </a>
            <a href="tips&trik" class="nav-item">
                <i class="fas fa-lightbulb"></i>
                <span>Tips & Trik</span>
            </a>
            <a href="setting" class="nav-item">
                <i class="fas fa-user"></i>
                <span>Ubah Profil</span>
            </a>
            <a href="setting" class="nav-item">
                <i class="fas fa-cog"></i>
                <span>Pengaturan</span>
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <div class="title">
                <div class="logo">
                    <img src="assets/Logo.png" alt="Logo" />
                </div>
                <h1>Cuan <span>Flow</span></h1>
            </div>
            <div class="user-info">
                <div class="notifications">
                    <i class="fas fa-bell"></i>
                    <span class="badge">3</span>
                </div>
                <div class="user">
                    <span>Maret 2025</span>
                </div>
                <div class="user">

                    <a href="/" class="nav-item"><span>Home</span></a>

                </div>
            </div>
        </div>

        <!-- Dashboard Info -->
        <div class="dashboard-info">
            <p>Aplikasi Keuangan Anda hari ini</p>
        </div>

        <!-- Cards -->
        <div class="cards-container">
            <div class="card transaction-card">
                <div class="card-content">
                    <div class="card-title">Saldo anda</div>
                    <div class="amount">Rp. 1.000.000</div>
                </div>
                <div class="card-icon">
                    <img src="assets/Saldo.png" alt="Saldo" />
                </div>
            </div>

            <div class="card transaction-card">
                <div class="card-content">
                    <div class="card-title">Pemasukan</div>
                    <div class="amount">Rp. 500.000</div>
                </div>
                <div class="card-icon">
                    <img src="assets/Pemasukan.png" alt="Pemasukan" />
                </div>
            </div>

            <div class="card transaction-card">
                <div class="card-content">
                    <div class="card-title">Pengeluaran</div>
                    <div class="amount">Rp. 0</div>
                </div>
                <div class="card-icon">
                    <img src="assets/Pengeluaran.png" alt="Pengeluaran" />
                </div>
            </div>
        </div>

        <!-- Kelola & Catat Section (UPDATED) -->
        <div class="kelola-catat-section">
            <div class="kelola-catat-content">
                <h2>
                    <span class="kelola">Kelola</span> <span class="dan">&</span>
                    <span class="kelola">Catat</span>
                </h2>
                <p>Pantaukan keuangan anda dengan lebih terencana</p>
            </div>
            <div class="kelola-catat-image">
                <img src="assets/DashboardKalender.png" alt="Kelola Catat" />
            </div>
        </div>

        <!-- Tracker Section -->
        <div class="tracker-section">
            <div class="tracker-card">
                <div class="card-header">
                    <h2>Riwayat Keuangan</h2>
                    <div class="card-icon"></div>
                </div>
                <p>
                    Optimalkan pengeluaran dan capai tujuan finansial dengan lebih
                    terstruktur!
                </p>

                <ul class="finance-list">
                    <li class="finance-item open">
                        <div class="item-header">
                            <span>Riwayat Keuangan</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="item-content">
                            <p>
                                <i class="fas fa-plus-circle" style="color: green"></i>
                                Pemasukan
                            </p>
                            <p>Pendapatan Bulanan</p>
                            <p>Tetangga Bayar Hutang</p>
                            <p>
                                <i class="fas fa-minus-circle" style="color: red"></i>
                                Pengeluaran
                            </p>
                            <p>Bayar Listrik dan Air</p>
                            <p>Beli Sepatu</p>
                        </div>
                    </li>
                </ul>

                <!-- Calendar Image - Added -->
                <div class="calendar-image">
                    <img src="assets/Pemasukan.png" alt="Calendar" />
                </div>
            </div>

            <!-- UPDATED Tips & Trik Section with new colors -->
            <div class="tips-section">
                <h2>
                    <span class="tips">TIPS &</span> <span class="trik">TRIK</span>
                </h2>
                <p>Jadilah Cara Cerdas Kelola Keuangan!</p>
                <p>
                    Catat setiap pengeluaran kecil, tetapkan budget bulanan, dan
                    sisihkan 20% pendapatan untuk tabungan.
                </p>
                <div class="tip-icon">
                    <img src="assets/DashboardTips&Trik.png" alt="Tips" />
                </div>
            </div>
        </div>
    </div>
    <script src="js/Dashboard-User/Dashboard.js"></script>
</body>

</html>
