<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gameboost Admin - Verifikasi Bayar</title>
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
                    <li class="active">
                        <a href="#">
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
                <h1>Verifikasi Bayar</h1>

                <div class="card-container two-columns">
                    <div class="card">
                        <div class="card-body">
                            <h2>1</h2>
                            <p>Pembayaran Menunggu</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h2>1</h2>
                            <p>Pembayaran Terverifikasi</p>
                        </div>
                    </div>
                </div>

                <div class="payment-list">
                    <h3>Verifikasi Pembayaran</h3>
                    <div class="payment-item">
                        <div class="payment-header">
                            <div class="payment-id">PAY-001</div>
                            <div class="payment-status waiting">Menunggu Verifikasi</div>
                        </div>
                        <div class="payment-details">
                            <div class="detail-row">
                                <p><strong>Order:</strong> ORD-001</p>
                                <p><strong>Tanggal:</strong> 30-09-2025</p>
                            </div>
                            <div class="detail-row">
                                <p><strong>Customer:</strong> Zio</p>
                                <p><strong>Jumlah:</strong> Rp 200.000</p>
                            </div>
                            <div class="detail-row">
                                <p><strong>Metode:</strong> Bank Transfer BCA</p>
                            </div>
                            <div class="bukti-transfer">
                                <p><strong>Bukti Transfer:</strong></p>
                                <div class="bukti-wrapper">
                                    <img src="placeholder-image.png" alt="Bukti Transfer">
                                    <a href="#" class="btn-bukti"><i class="fas fa-search-plus"></i> Lihat Lengkap</a>
                                </div>
                            </div>
                        </div>
                        <div class="payment-actions">
                            <button class="btn btn-accept"><i class="fas fa-check"></i> Terima</button>
                            <button class="btn btn-reject"><i class="fas fa-times"></i> Tolak</button>
                        </div>
                    </div>

                    <div class="payment-item">
                        <div class="payment-header">
                            <div class="payment-id">PAY-002</div>
                            <div class="payment-status completed">Terverifikasi</div>
                        </div>
                        <div class="payment-details">
                            <div class="detail-row">
                                <p><strong>Order:</strong> ORD-006</p>
                                <p><strong>Tanggal:</strong> 01-09-2025</p>
                            </div>
                            <div class="detail-row">
                                <p><strong>Customer:</strong> Ajax</p>
                                <p><strong>Jumlah:</strong> Rp 300.000</p>
                            </div>
                            <div class="detail-row">
                                <p><strong>Metode:</strong> Bank Transfer Mandiri</p>
                            </div>
                            <div class="bukti-transfer">
                                <p><strong>Bukti Transfer:</strong></p>
                                <div class="bukti-wrapper">
                                    <img src="placeholder-image.png" alt="Bukti Transfer">
                                    <a href="#" class="btn-bukti"><i class="fas fa-search-plus"></i> Lihat Lengkap</a>
                                </div>
                            </div>
                        </div>
                        <div class="payment-actions">
                            </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>