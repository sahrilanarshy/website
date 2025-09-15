<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gameboost Admin - Kelola Order</title>
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
                    <li class="active">
                        <a href="kelolaorder.php">
                            <i class="fas fa-shopping-cart"></i> Kelola Order
                        </a>
                    </li>
                    <li>
                        <a href="verifikasibayar.php">
                            <i class="fas fa-check-circle"></i> Verifikasi Bayar <span class="badge">3</span>
                        </a>
                    </li>
                    <li>
                        <a href="kelolauser.php">
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
                <h1>Kelola Order</h1>

                <div class="card-container">
                    <div class="card">
                        <div class="card-body">
                            <h2>1</h2>
                            <p>Order Menunggu</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h2>1</h2>
                            <p>Order Diproses</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h2>1</h2>
                            <p>Order Selesai</p>
                        </div>
                    </div>
                </div>

                <div class="order-list">
                    <h3>Daftar Order</h3>
                    <div class="order-item-detail">
                        <div class="order-summary">
                            <span class="order-id">ORD-001</span>
                            <h4>Zio</h4>
                            <p><strong>Game:</strong> Mobile Legends</p>
                            <p><strong>Paket:</strong> Epic To Legend</p>
                        </div>
                        <div class="order-meta">
                            <p><strong>Tanggal:</strong> 30-09-2025</p>
                            <p><strong>Joki:</strong> Belum ditugaskan</p>
                        </div>
                        <div class="order-actions">
                            <div class="status-price-wrapper">
                                <span class="order-status waiting">Menunggu</span>
                                <span class="price">Rp 200.000</span>
                            </div>
                            <div class="button-group">
                                <select class="joki-select">
                                    <option>Pilih Joki</option>
                                    <option>Joki A</option>
                                    <option>Joki B</option>
                                </select>
                                <a href="#" class="btn btn-detail"><i class="fas fa-info-circle"></i> Detail</a>
                            </div>
                        </div>
                    </div>

                    <div class="order-item-detail">
                        <div class="order-summary">
                            <span class="order-id">ORD-002</span>
                            <h4>Micca</h4>
                            <p><strong>Game:</strong> PUBG Mobile</p>
                            <p><strong>Paket:</strong> Classic Match 20 Wins</p>
                        </div>
                        <div class="order-meta">
                            <p><strong>Tanggal:</strong> 28-09-2025</p>
                            <p><strong>Joki:</strong> Davijoe21</p>
                        </div>
                        <div class="order-actions">
                            <div class="status-price-wrapper">
                                <span class="order-status processing">Diproses</span>
                                <span class="price">Rp 100.000</span>
                            </div>
                            <div class="button-group">
                                <a href="#" class="btn btn-complete"><i class="fas fa-check"></i> Tandai Selesai</a>
                                <a href="#" class="btn btn-detail"><i class="fas fa-info-circle"></i> Detail</a>
                            </div>
                        </div>
                    </div>

                    <div class="order-item-detail">
                        <div class="order-summary">
                            <span class="order-id">ORD-001</span>
                            <h4>Sahril</h4>
                            <p><strong>Game:</strong> Genshin Impact</p>
                            <p><strong>Paket:</strong> Exploration</p>
                        </div>
                        <div class="order-meta">
                            <p><strong>Tanggal:</strong> 21-01-2025</p>
                            <p><strong>Joki:</strong> Mbut79</p>
                        </div>
                        <div class="order-actions">
                            <div class="status-price-wrapper">
                                <span class="order-status completed">Selesai</span>
                                <span class="price">Rp 300.000</span>
                            </div>
                            <div class="button-group">
                                <a href="#" class="btn btn-detail"><i class="fas fa-info-circle"></i> Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>