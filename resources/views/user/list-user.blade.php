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
                    <h3>Firah Maulida</h3>
                    <p>Firmann@admin.com</p>
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
                <li class="nav-item">
                    <a href="setting" class="nav-link">
                        <i><img src="/assets/setting.png" alt=""></i>
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
                    <a href="/"><b>Home</b></a>
                </div>
                <button class="menu-toggle">☰</button>
            </div>

            <!-- User Management Section -->
            <div class="user-management">
                <div class="kotak">
                    <div class="user-controls">
                        <div class="search-filter">
                            <div class="search-bar">
                                <i class="search-icon">🔍</i>
                                <input type="text" placeholder="Search...">
                            </div>
                            <div class="filter-dropdown">
                                <select>
                                    <option>All Statuses</option>
                                    <option>Active</option>
                                    <option>Not Active</option>
                                    <option>Waiting</option>
                                </select>
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
                            <div class="column checkbox-col"></div>
                            <div class="column name-col">Name</div>
                            <div class="column email-col">Email</div>
                            <div class="column status-col">Status</div>
                            <div class="column date-col">Joining Date</div>
                            <div class="column action-col"></div>
                        </div>

                        <!-- User Rows -->
                        <div class="user-row">
                            <div class="column checkbox-col"><input type="checkbox"></div>
                            <div class="column name-col">
                                <div class="user-info">
                                    <div class="user-avatar"><img src="assets/Firah.png" alt="User">
                                    </div>
                                    <span>Amirul Mirdas</span>
                                </div>
                            </div>
                            <div class="column email-col">mirdass@gmail.com</div>
                            <div class="column status-col"><span class="status active">Active</span></div>
                            <div class="column date-col">12 Jan 2024</div>
                            <div class="column action-col"><button class="delete-btn">🗑️</button></div>
                        </div>

                        <div class="user-row">
                            <div class="column checkbox-col"><input type="checkbox"></div>
                            <div class="column name-col">
                                <div class="user-info">
                                    <div class="user-avatar"><img src="assets/razian.png" alt="User">
                                    </div>
                                    <span>Razian Sabri</span>
                                </div>
                            </div>
                            <div class="column email-col">Raz.s@gmail.com</div>
                            <div class="column status-col"><span class="status active">Active</span></div>
                            <div class="column date-col">10 Marc 2024</div>
                            <div class="column action-col"><button class="delete-btn">🗑️</button></div>
                        </div>

                        <div class="user-row">
                            <div class="column checkbox-col"><input type="checkbox"></div>
                            <div class="column name-col">
                                <div class="user-info">
                                    <div class="user-avatar"><img src="assets/Bunga.png" alt="User">
                                    </div>
                                    <span>Bunga Rasikhah</span>
                                </div>
                            </div>
                            <div class="column email-col">Bunga@gmail.com</div>
                            <div class="column status-col"><span class="status not-active">Not Active</span></div>
                            <div class="column date-col">13 Feb 2024</div>
                            <div class="column action-col"><button class="delete-btn">🗑️</button></div>
                        </div>

                        <div class="user-row">
                            <div class="column checkbox-col"><input type="checkbox"></div>
                            <div class="column name-col">
                                <div class="user-info">
                                    <div class="user-avatar"><img src="assets/Firah.png" alt="User">
                                    </div>
                                    <span>Firah Maulida</span>
                                </div>
                            </div>
                            <div class="column email-col">Firah@gmail.com</div>
                            <div class="column status-col"><span class="status active">Active</span></div>
                            <div class="column date-col">20 Feb 2024</div>
                            <div class="column action-col"><button class="delete-btn">🗑️</button></div>
                        </div>

                        <div class="user-row">
                            <div class="column checkbox-col"><input type="checkbox"></div>
                            <div class="column name-col">
                                <div class="user-info">
                                    <div class="user-avatar"><img src="assets/Firah.png" alt="User">
                                    </div>
                                    <span>Rini Hartati</span>
                                </div>
                            </div>
                            <div class="column email-col">Rini.h@gmail.com</div>
                            <div class="column status-col"><span class="status waiting">Waiting</span></div>
                            <div class="column date-col">5 Marc 2024</div>
                            <div class="column action-col"><button class="delete-btn">🗑️</button></div>
                        </div>

                        <div class="user-row">
                            <div class="column checkbox-col"><input type="checkbox"></div>
                            <div class="column name-col">
                                <div class="user-info">
                                    <div class="user-avatar"><img src="assets/Mirul.png" alt="User">
                                    </div>
                                    <span>Budi Pratama</span>
                                </div>
                            </div>
                            <div class="column email-col">Budi.p@gmail.com</div>
                            <div class="column status-col"><span class="status active">Active</span></div>
                            <div class="column date-col">15 April 2024</div>
                            <div class="column action-col"><button class="delete-btn">🗑️</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/List-user/User.js"></script>
</body>

</html>
