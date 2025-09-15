<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gameboost Admin - Kelola Game</title>
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
                    <li>
                        <a href="kelolauser.php">
                            <i class="fas fa-users"></i> Kelola User
                        </a>
                    </li>
                    <li class="active">
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
                <h1>Kelola Game</h1>

                <div class="card-container three-columns">
                    <div class="card">
                        <div class="card-body">
                            <h2>3</h2>
                            <p>Total Game</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h2>3</h2>
                            <p>Game Aktif</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h2>29</h2>
                            <p>Total Order</p>
                        </div>
                    </div>
                </div>

                <div class="game-list-header">
                    <h3>Daftar Game</h3>
                    <a href="#" class="btn btn-add-game"><i class="fas fa-plus"></i> Tambah Game</a>
                </div>

                <div class="game-list">
                    <div class="game-item">
                        <div class="game-logo-wrapper">
                            <img src="https://via.placeholder.com/50x50" alt="Mobile Legends Logo" class="game-logo">
                        </div>
                        <div class="game-details">
                            <div class="game-details-header">
                                <div class="game-title-wrapper">
                                    <h4>Mobile Legends</h4>
                                    <span class="game-id">Game-001</span>
                                </div>
                                <div class="game-stats">
                                    <p><strong>Total Paket:</strong> 8</p>
                                    <p><strong>Total Order:</strong> 43</p>
                                </div>
                            </div>
                            <div class="game-info-row">
                                <p><strong>Kategori:</strong> MOBA</p>
                                <p><strong>Deskripsi:</strong> Kalahkan musuh dan naikkan rank</p>
                            </div>
                            <div class="game-actions">
                                <a href="#" class="btn btn-action-edit"><i class="fas fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-action-deactivate"><i class="fas fa-times"></i> Non-Aktifkan</a>
                                <a href="#" class="btn btn-action-delete"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                        <div class="game-status active-status">Aktif</div>
                    </div>
                    
                    <div class="game-item">
                        <div class="game-logo-wrapper">
                            <img src="https://via.placeholder.com/50x50" alt="PUBG Mobile Logo" class="game-logo">
                        </div>
                        <div class="game-details">
                            <div class="game-details-header">
                                <div class="game-title-wrapper">
                                    <h4>PUBG Mobile</h4>
                                    <span class="game-id">Game-002</span>
                                </div>
                                <div class="game-stats">
                                    <p><strong>Total Paket:</strong> 5</p>
                                    <p><strong>Total Order:</strong> 29</p>
                                </div>
                            </div>
                            <div class="game-info-row">
                                <p><strong>Kategori:</strong> Battle Royale</p>
                                <p><strong>Deskripsi:</strong> Jadilah satu-satunya yang bertahan</p>
                            </div>
                            <div class="game-actions">
                                <a href="#" class="btn btn-action-edit"><i class="fas fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-action-deactivate"><i class="fas fa-times"></i> Non-Aktifkan</a>
                                <a href="#" class="btn btn-action-delete"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                        <div class="game-status active-status">Aktif</div>
                    </div>

                    <div class="game-item">
                        <div class="game-logo-wrapper">
                            <img src="https://via.placeholder.com/50x50" alt="Genshin Impact Logo" class="game-logo">
                        </div>
                        <div class="game-details">
                            <div class="game-details-header">
                                <div class="game-title-wrapper">
                                    <h4>Genshin Impact</h4>
                                    <span class="game-id">Game-003</span>
                                </div>
                                <div class="game-stats">
                                    <p><strong>Total Paket:</strong> 6</p>
                                    <p><strong>Total Order:</strong> 33</p>
                                </div>
                            </div>
                            <div class="game-info-row">
                                <p><strong>Kategori:</strong> RPG</p>
                                <p><strong>Deskripsi:</strong> Game RPG Open World dengan dunia yang luas</p>
                            </div>
                            <div class="game-actions">
                                <a href="#" class="btn btn-action-edit"><i class="fas fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-action-activate">Aktifkan</a>
                                <a href="#" class="btn btn-action-delete"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                        <div class="game-status inactive-status">Tidak Aktif</div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>