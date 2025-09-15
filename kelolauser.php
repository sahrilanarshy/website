<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gameboost Admin - Kelola User</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Gameboost Admin</h2>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li>
                        <a href="dashboard.php">
                            <i class="fas fa-th-large"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="kelolaorder.php">
                            <i class="fas fa-shopping-cart"></i> Kelola Order
                        </a>
                    </li>
                    <li>
                        <a href="verifikasibayar.php">
                            <i class="fas fa-check-circle"></i> Verifikasi Bayar <span class="badge">3</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            <i class="fas fa-users"></i> Kelola User
                        </a>
                    </li>
                    <li>
                        <a href="kelolagame.php">
                            <i class="fas fa-gamepad"></i> Kelola Game
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <header class="topbar">
                <div class="user-info">
                    <i class="fas fa-user-circle"></i> Admin
                </div>
                <div class="logout">
                    <a href="#">
                        <i class="fas fa-sign-out-alt"></i> Keluar
                    </a>
                </div>
            </header>
            <div class="dashboard-section">
                <h1>Kelola User</h1>

                <div class="card-container two-columns">
                    <div class="card">
                        <div class="card-body">
                            <h2>3</h2>
                            <p>Total Customer</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h2>3</h2>
                            <p>Total Joki</p>
                        </div>
                    </div>
                </div>

                <div class="user-tabs">
                    <a href="#" class="tab active">Customer (3)</a>
                    <a href="#" class="tab">Joki (3)</a>
                </div>

                <div class="user-list">
                    <h3>Daftar Customer</h3>
                    <div class="user-item">
                        <div class="user-info-section">
                            <div class="user-main-info">
                                <h4>Zio Valentino Gunawan</h4>
                                <span class="user-id">CUST-001</span>
                            </div>
                            <div class="user-contact-info">
                                <p><strong>Email:</strong> Zioval@gmail.com</p>
                                <p><strong>Phone:</strong> 082374657785</p>
                            </div>
                            <div class="user-actions">
                                <a href="#" class="btn btn-detail"><i class="fas fa-info-circle"></i> Detail</a>
                                <a href="#" class="btn btn-suspend"><i class="fas fa-ban"></i></a>
                            </div>
                        </div>
                        <div class="user-status-section">
                            <div class="status-badge active">Aktif</div>
                            <p><strong>Total Order:</strong> 7</p>
                            <p><strong>Total Spent:</strong> Rp 800.000</p>
                        </div>
                    </div>

                    <div class="user-item">
                        <div class="user-info-section">
                            <div class="user-main-info">
                                <h4>Alif Micca Muhammad</h4>
                                <span class="user-id">CUST-002</span>
                            </div>
                            <div class="user-contact-info">
                                <p><strong>Email:</strong> Miccabell@gmail.com</p>
                                <p><strong>Phone:</strong> 082456879907</p>
                            </div>
                            <div class="user-actions">
                                <a href="#" class="btn btn-detail"><i class="fas fa-info-circle"></i> Detail</a>
                                <a href="#" class="btn btn-suspend"><i class="fas fa-ban"></i></a>
                            </div>
                        </div>
                        <div class="user-status-section">
                            <div class="status-badge active">Aktif</div>
                            <p><strong>Total Order:</strong> 9</p>
                            <p><strong>Total Spent:</strong> Rp 900.000</p>
                        </div>
                    </div>

                    <div class="user-item">
                        <div class="user-info-section">
                            <div class="user-main-info">
                                <h4>Sahril Sidik</h4>
                                <span class="user-id">CUST-001</span>
                            </div>
                            <div class="user-contact-info">
                                <p><strong>Email:</strong> SahrilWFC@gmail.com</p>
                                <p><strong>Phone:</strong> 082145638654</p>
                            </div>
                            <div class="user-actions">
                                <a href="#" class="btn btn-detail"><i class="fas fa-info-circle"></i> Detail</a>
                                <a href="#" class="btn btn-activate">Aktifkan</a>
                            </div>
                        </div>
                        <div class="user-status-section">
                            <div class="status-badge suspended">Suspend</div>
                            <p><strong>Total Order:</strong> 11</p>
                            <p><strong>Total Spent:</strong> Rp 1,000,000</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>