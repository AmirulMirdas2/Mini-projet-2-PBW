<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CuanFlow - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/css/Dashboard-Admin/styles.css" />
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <button class="toggle-sidebar">
                <i class="fas fa-bars"></i>
            </button>
            <div class="profile-section">
                <div class="profile-img">
                    <img src="/assets/Firah.png" alt="Profile Image" />
                </div>
                <div class="profile-info">
                    <h3>Firah Maulida</h3>
                    <p>Firmann@admin.com</p>
                </div>
            </div>

            <div class="sidebar-title"><b>Tentang Kami</b></div>

            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
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
                    <a href="list-user" class="nav-link">
                        <i class="fas fa-user"></i>
                        <span><b>List User</b></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pages/ProfileAdmin/ProfileAdmin.html" class="nav-link">
                        <i><img src="/assets/setting.png" alt="" /></i>
                        <span><b>Pengaturan</b></span>
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

            <div class="kotak">
                <!-- Stats Cards -->
                <div class="stats-container">
                    <div class="stat-card">
                        <div class="stat-card-content">
                            <h3 class="stat-title">Users</h3>
                            <div class="stat-value">128</div>
                            <div class="progress-bar">
                                <div class="progress" style="width: 75%"></div>

                            </div>
                        </div>
                        <div class="stat-card-icon">
                            <img src="/assets/admin-user.PNG" alt="Users Icon" />
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-card-content">
                            <h3 class="stat-title">New User</h3>
                            <div class="stat-value">28</div>
                            <div class="stat-subtitle">this month</div>
                            <div class="progress-bar">
                                <div class="progress" style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="stat-card-icon">
                            <img src="/assets/admin-newuser.PNG" alt="New User Icon" />
                        </div>
                    </div>


                    <div class="stat-card">
                        <div class="stat-card-content">
                            <h3 class="stat-title">Activity Level</h3>
                            <div class="stat-value">78%</div>
                            <div class="progress-bar">
                                <div class="progress" style="width: 78%"></div>

                            </div>
                        </div>
                        <div class="stat-card-icon">
                            <img src="/assets/activity-level.PNG" alt="Activity Icon" />
                        </div>
                    </div>
                </div>

                <!-- Two-Column Layout -->
                <div class="content-columns">
                    <!-- Left Column - Activity Section -->
                    <div class="column-left">
                        <div class="activity-section">
                            <h2 class="section-title">Recent Activity</h2>

                            <ul class="activity-list">
                                <li class="activity-item">
                                    <div class="activity-icon icon-new-user"></div>
                                    <div class="activity-content">
                                        <h4 class="activity-title">2 New users registered</h4>
                                        <p class="activity-time">5 minutes ago</p>
                                    </div>
                                </li>

                                <li class="activity-item">
                                    <div class="activity-icon icon-admin"></div>
                                    <div class="activity-content">
                                        <h4 class="activity-title">Admin Changes the Rules</h4>
                                        <p class="activity-time">45 minutes ago</p>
                                    </div>
                                </li>

                                <li class="activity-item">
                                    <div class="activity-icon icon-system"></div>
                                    <div class="activity-content">
                                        <h4 class="activity-title">System update successful</h4>
                                        <p class="activity-time">3 hours ago</p>
                                    </div>
                                </li>

                                <li class="activity-item">
                                    <div class="activity-icon icon-new-user"></div>
                                    <div class="activity-content">
                                        <h4 class="activity-title">
                                            User JohnDoe updated profile
                                        </h4>
                                        <p class="activity-time">Yesterday</p>
                                    </div>
                                </li>

                                <li class="activity-item">
                                    <div class="activity-icon icon-system"></div>
                                    <div class="activity-content">
                                        <h4 class="activity-title">User Sarah deleted account</h4>
                                        <p class="activity-time">2 days ago</p>
                                    </div>
                                </li>

                                <li class="activity-item">
                                    <div class="activity-icon icon-admin"></div>
                                    <div class="activity-content">
                                        <h4 class="activity-title">Failed login attempt</h4>
                                        <p class="activity-time">3 days ago</p>
                                    </div>
                                </li>

                                <li class="activity-item">
                                    <div class="activity-icon icon-system"></div>
                                    <div class="activity-content">
                                        <h4 class="activity-title">User A set to inactive</h4>
                                        <p class="activity-time">3 hours ago</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="column-left">
                        <!-- Online Users Section -->
                        <div class="online-users-section">
                            <h3 class="online-users-title">User online today</h3>
                            <div class="activity-chart">
                                <img src="/assets/Grafik-online.PNG" alt="User Activity Chart" />
                            </div>
                        </div>

                        <!-- Top Users Section - MODIFIED WITH NEW CHART DESIGN -->
                        <div class="top-users">
                            <div class="top-users-header">
                                <h3 class="top-users-title">Top 6 most active users</h3>
                            </div>

                            <!-- New chart with names next to bars -->
                            <div class="chart-container">
                                <div class="chart-item">
                                    <div class="chart-number">1</div>
                                    <div class="chart-name">Amirul Mirdas</div>
                                    <div class="chart-bar-container">
                                        <div class="chart-bar chart-bar-amirul"></div>
                                    </div>
                                </div>

                                <div class="chart-item">
                                    <div class="chart-number">2</div>
                                    <div class="chart-name">Bunga Rasikhah</div>
                                    <div class="chart-bar-container">
                                        <div class="chart-bar chart-bar-bunga"></div>
                                    </div>
                                </div>

                                <div class="chart-item">
                                    <div class="chart-number">3</div>
                                    <div class="chart-name">Razian Sabri</div>
                                    <div class="chart-bar-container">
                                        <div class="chart-bar chart-bar-razian"></div>
                                    </div>
                                </div>

                                <div class="chart-item">
                                    <div class="chart-number">4</div>
                                    <div class="chart-name">Firah Maulida</div>
                                    <div class="chart-bar-container">
                                        <div class="chart-bar chart-bar-firah"></div>
                                    </div>
                                </div>

                                <div class="chart-item">
                                    <div class="chart-number">5</div>
                                    <div class="chart-name">Rini Hartati</div>
                                    <div class="chart-bar-container">
                                        <div class="chart-bar chart-bar-rini"></div>
                                    </div>
                                </div>

                                <div class="chart-item">
                                    <div class="chart-number">6</div>
                                    <div class="chart-name">Budi Pratama</div>
                                    <div class="chart-bar-container">
                                        <div class="chart-bar chart-bar-budi"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/Dashboard-Admin/script.js"></script>
</body>

</html>
