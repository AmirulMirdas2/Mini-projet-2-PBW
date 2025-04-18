<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CuanFlow - Tips & Trik</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/Tips&Trik/Tips&Trik.css" />
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
            <a href="kalender" class="nav-item">
                <i class="fas fa-calendar"></i>
                <span>Kalender</span>
            </a>
            <a href="#" class="nav-item active">
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

        <!-- Tips & Trik Main Container -->
        <div class="tips-trik-container">
            <!-- Tips Header Section -->
            <div class="tips-header">
                <h2>
                    <span class="tips">TIPS &</span> <span class="trik">TRIK</span>
                </h2>
            </div>

            <!-- Modified Tips Content - Two Columns Layout -->
            <div class="tips-content">
                <!-- Left Column (1-4) -->
                <div class="tips-column left-column">
                    <ul class="tips-list">
                        <li>Catat Setiap Pemasukan & Pengeluaran</li>
                        <li>
                            Gunakan Aturan 50/30/20
                            <ul class="tips-list-sub">
                                <li>50% untuk kebutuhan (makan, transportasi, tagihan)</li>
                                <li>30% untuk keinginan (hiburan, hobi, liburan)</li>
                                <li>20% untuk tabungan dan investasi</li>
                            </ul>
                        </li>
                        <li>Siapkan Dana Darurat</li>
                        <li>Hindari Hutang yang Tidak Perlu</li>
                    </ul>
                </div>

                <!-- Right Column (5-10) -->
                <div class="tips-column right-column">
                    <ul class="tips-list">
                        <li>Manfaatkan Promo dan Cashback</li>
                        <li>Buat Anggaran Bulanan</li>
                        <li>Investasi untuk Masa Depan</li>
                        <li>Hindari Pengeluaran Impulsif</li>
                        <li>Gunakan Aplikasi Keuangan</li>
                        <li>Tetapkan Tujuan Keuangan Jangka Panjang</li>
                    </ul>
                </div>
            </div>

            <!-- Video Section -->
            <div class="video-section">
                <h3>Lihat beberapa konten menarik mengenai kelola keuangan</h3>
                <div class="videos-container">
                    <!-- Video Card 1 -->
                    <div class="video-card" data-video-id="Y717Iij2Nls">
                        <img src="https://img.youtube.com/vi/Y717Iij2Nls/maxresdefault.jpg" alt="Tips Kelola Keuangan"
                            class="video-thumbnail" onerror="this.src='https://img.youtube.com/vi/Y717Iij2Nls/0.jpg'" />
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>

                    <!-- Video Card 2 -->
                    <div class="video-card" data-video-id="9O73aOoper0">
                        <img src="https://img.youtube.com/vi/9O73aOoper0/maxresdefault.jpg" alt="Tips Kelola Keuangan"
                            class="video-thumbnail" onerror="this.src='https://img.youtube.com/vi/9O73aOoper0/0.jpg'" />
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>

                    <!-- Video Card 3 -->
                    <div class="video-card" data-video-id="VaiqGsot5ws">
                        <img src="https://img.youtube.com/vi/VaiqGsot5ws/maxresdefault.jpg" alt="Tips Kelola Keuangan"
                            class="video-thumbnail" onerror="this.src='https://img.youtube.com/vi/VaiqGsot5ws/0.jpg'" />
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>

                    <!-- Video Card 4 (duplicate of video 3) -->
                    <div class="video-card" data-video-id="VaiqGsot5ws">
                        <img src="https://img.youtube.com/vi/VaiqGsot5ws/maxresdefault.jpg" alt="Tips Kelola Keuangan"
                            class="video-thumbnail" onerror="this.src='https://img.youtube.com/vi/VaiqGsot5ws/0.jpg'" />
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>

                    <!-- Video Card 5 -->
                    <div class="video-card" data-video-id="qbgcFocUDVw">
                        <img src="https://img.youtube.com/vi/qbgcFocUDVw/maxresdefault.jpg" alt="Tips Kelola Keuangan"
                            class="video-thumbnail" onerror="this.src='https://img.youtube.com/vi/qbgcFocUDVw/0.jpg'" />
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>

                    <!-- Video Card 6 -->
                    <div class="video-card" data-video-id="ElLqjlcqm24">
                        <img src="https://img.youtube.com/vi/ElLqjlcqm24/maxresdefault.jpg" alt="Tips Kelola Keuangan"
                            class="video-thumbnail"
                            onerror="this.src='https://img.youtube.com/vi/ElLqjlcqm24/0.jpg'" />
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal -->
    <div class="video-modal" id="videoModal">
        <div class="modal-content">
            <span class="close-modal" id="closeModal">&times;</span>
            <iframe class="video-iframe" id="videoIframe" allowfullscreen></iframe>
        </div>
    </div>

    <script src="js/Tips&Trik/Tips&Trik.js"></script>
</body>

</html>
