<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CuanFlow - Dashboard & Kalender</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/Kalender/Kalender.css" />
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
                <div class="name">
                    <p>{{ Auth::user()->name }}</p>
                </div>
                <div class="email">
                    <p>{{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>

        <div class="tentang-kami">Tentang Kami</div>

        <!-- Updated Navigation Menu -->
        <div class="nav-container">
            <a href="dashboard-user" class="nav-item">
                <i class="fas fa-home"></i>
                <span>Dashboard</span>
            </a>
            <a href="#" class="nav-item active">
                <i class="fas fa-calendar"></i>
                <span>Kalender</span>
            </a>
            <a href="tips&trik" class="nav-item">
                <i class="fas fa-lightbulb"></i>
                <span>Tips & Trik</span>
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
                <div class="header-nav">
                    <a href="/sesi"><b>Logout</b></a>
                </div>
            </div>
        </div>

        <!-- Calendar Container - MOVED TO TOP -->
        <div class="calendar-container">
            <div class="calendar-header">
                <h2>Kelola Keuangan dengan Kalender</h2>
                <div class="calendar-nav">
                    <button id="prev-month">
                        <i class="fas fa-chevron-left"></i> Sebelumnya
                    </button>
                    <div class="calendar-month">Maret 2025</div>
                    <button id="next-month">
                        Berikutnya <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <!-- Calendar Day Names -->
            <div class="calendar-day-names">
                <div class="calendar-day-name">Min</div>
                <div class="calendar-day-name">Sen</div>
                <div class="calendar-day-name">Sel</div>
                <div class="calendar-day-name">Rab</div>
                <div class="calendar-day-name">Kam</div>
                <div class="calendar-day-name">Jum</div>
                <div class="calendar-day-name">Sab</div>
            </div>

            <!-- Calendar Grid -->
            <div class="calendar-grid">
                <!-- Previous Month -->
                <div class="calendar-day other-month">
                    <div class="calendar-day-number">23</div>
                </div>
                <div class="calendar-day other-month">
                    <div class="calendar-day-number">24</div>
                </div>
                <div class="calendar-day other-month">
                    <div class="calendar-day-number">25</div>
                </div>
                <div class="calendar-day other-month">
                    <div class="calendar-day-number">26</div>
                </div>
                <div class="calendar-day other-month">
                    <div class="calendar-day-number">27</div>
                </div>
                <div class="calendar-day other-month">
                    <div class="calendar-day-number">28</div>
                </div>

                <!-- Current Month -->
                <div class="calendar-day">
                    <div class="calendar-day-number">1</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">2</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">3</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">4</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">5</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">6</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">7</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">8</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">9</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">10</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">11</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">12</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">13</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">14</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">15</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">
                        16
                        <span class="reminder-dot"></span>
                    </div>
                    <div class="event expense">Bayar Listrik</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">17</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">18</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">19</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">20</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">21</div>
                </div>
                <div class="calendar-day today">
                    <div class="calendar-day-number">22</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">23</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">
                        24
                        <span class="reminder-dot"></span>
                    </div>
                    <div class="event income">Gajian</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">25</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">26</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">27</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">28</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">29</div>
                </div>
                <div class="calendar-day">
                    <div class="calendar-day-number">
                        30
                        <span class="reminder-dot"></span>
                    </div>
                    <div class="event expense">Bayar Sewa Rumah</div>
                </div>
            </div>
        </div>

        <!-- Catatan Section - MOVED AFTER CALENDAR -->
        <div class="catatan-container">
            <div class="catatan-header">
                <h3>Catatan:</h3>
            </div>
            <div class="catatan-list">
                <div class="catatan-item">
                    <div class="catatan-date">24/03</div>
                    <div class="catatan-text">Gajian</div>
                </div>
                <div class="catatan-item">
                    <div class="catatan-date">16/03</div>
                    <div class="catatan-text">Bonus THR</div>
                </div>
                <div class="catatan-item">
                    <div class="catatan-date">16/03</div>
                    <div class="catatan-text">Bayar Listrik</div>
                </div>
                <div class="catatan-item">
                    <div class="catatan-date">16/03</div>
                    <div class="catatan-text">Bayar Sewa Rumah</div>
                </div>
            </div>
            <div class="add-catatan">
                <input type="text" placeholder="Tambah catatan baru..." />
                <button><i class="fas fa-plus"></i> Tambah</button>
            </div>
        </div>
    </div>

    <script src="js/Kalender/Kalender.js"></script>
</body>

</html>
