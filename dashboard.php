<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gameboost Admin - Dashboard</title>
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
                    <li class="active">
                        <a href="#">
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
                <h1>Dashboard</h1>
                <p class="greeting">Selamat Datang, Admin!</p>

                <div class="card-container">
                    <div class="card total-order">
                        <div class="card-header">
                            <h3>Total Order</h3>
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="card-body">
                            <h2>10</h2>
                            <p>5 menunggu, 5 selesai</p>
                        </div>
                    </div>
                    <div class="card total-customer">
                        <div class="card-header">
                            <h3>Total Customer</h3>
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-body">
                            <h2>15</h2>
                            <p>Customer yang terdaftar</p>
                        </div>
                    </div>
                    <div class="card pending-payment">
                        <div class="card-header">
                            <h3>Pembayaran Pending</h3>
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div class="card-body">
                            <h2>3</h2>
                            <p>Perlu Verifikasi pembayaran</p>
                        </div>
                    </div>
                </div>

                <div class="order-list">
                    <h3>Order Terbaru</h3>
                    <div class="order-item">
                        <div class="order-details">
                            <span class="order-id">ORD-001</span>
                            <h4>Mobile Legends</h4>
                            <p class="customer-name">Zio</p>
                            <p class="price">Rp 200.000</p>
                        </div>
                        <div class="order-status waiting">Menunggu</div>
                    </div>
                    <div class="order-item">
                        <div class="order-details">
                            <span class="order-id">ORD-002</span>
                            <h4>PUBG Mobile</h4>
                            <p class="customer-name">Micca</p>
                            <p class="price">Rp 100.000</p>
                        </div>
                        <div class="order-status processing">Diproses</div>
                    </div>
                    <div class="order-item">
                        <div class="order-details">
                            <span class="order-id">ORD-003</span>
                            <h4>Genshin Impact</h4>
                            <p class="customer-name">Sahril</p>
                            <p class="price">Rp 300.000</p>
                        </div>
                        <div class="order-status completed">Selesai</div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>