<?php $activePage = 'pesanan'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pesanan - Kelola semua pesanan jasa di SkillSpace.">
    <title>Pesanan - SkillSpace</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/homepage.css">
    <link rel="stylesheet" href="../assets/css/inner-pages.css">
</head>
<body class="has-sidebar">

    <?php include 'includes/sidebar.php'; ?>

    <div class="main-wrapper" id="main-wrapper">
        <!-- Page Header -->
        <header class="page-header" id="page-header-pesanan">
            <a href="beranda.php" class="page-header__back" aria-label="Kembali">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
            </a>
            <h1 class="page-header__title">Pesanan</h1>
            <button class="page-header__action" id="btn-search-pesanan" aria-label="Cari">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            </button>
        </header>

        <main class="content content--with-header" id="content-pesanan">
            <!-- Filter Tabs -->
            <div class="filter-tabs" id="filter-tabs-pesanan">
                <button class="filter-tab filter-tab--active" data-filter="semua">Semua</button>
                <button class="filter-tab" data-filter="menunggu">Menunggu</button>
                <button class="filter-tab" data-filter="bayar">Bayar</button>
                <button class="filter-tab" data-filter="diproses">Diproses</button>
                <button class="filter-tab" data-filter="selesai">Selesai</button>
                <button class="filter-tab" data-filter="ditolak">Ditolak</button>
            </div>

            <!-- Order Cards -->
            <div class="order-list" id="order-list">
                <!-- Menunggu Konfirmasi -->
                <div class="order-card" id="order-1">
                    <span class="order-card__status order-card__status--warning">Menunggu Konfirmasi</span>
                    <div class="order-card__main">
                        <div class="order-card__thumb">
                            <img src="../assets/images/Jasa 1.png" alt="Bantuan Coding">
                        </div>
                        <div class="order-card__info">
                            <h3 class="order-card__title">Bantuan Coding</h3>
                            <p class="order-card__seller">Sagara Mahendra</p>
                            <p class="order-card__price">Rp 60.000</p>
                        </div>
                    </div>
                    <div class="order-card__note">
                        <p>Pesanan dikirim ke penjual. Tunggu konfirmasi dalam 1×24 jam.</p>
                    </div>
                    <div class="order-card__actions">
                        <a href="#" class="btn-outline btn-outline--sm" id="btn-detail-1">Lihat Detail</a>
                    </div>
                </div>

                <!-- Menunggu Pembayaran -->
                <div class="order-card" id="order-2">
                    <span class="order-card__status order-card__status--orange">Menunggu Pembayaran</span>
                    <div class="order-card__main">
                        <div class="order-card__thumb">
                            <img src="../assets/images/Jasa 1.png" alt="Bantuan Coding">
                        </div>
                        <div class="order-card__info">
                            <h3 class="order-card__title">Bantuan Coding</h3>
                            <p class="order-card__seller">Sagara Mahendra</p>
                            <p class="order-card__price">Rp 60.000</p>
                        </div>
                    </div>
                    <div class="order-card__note">
                        <p>Penjual menerima pesananmu! Bayar sebelum 5 Juni 23.59.</p>
                    </div>
                    <div class="order-card__actions">
                        <a href="#" class="btn btn--primary btn--sm" id="btn-bayar-2">Bayar Sekarang</a>
                    </div>
                </div>

                <!-- Selesai -->
                <div class="order-card" id="order-3">
                    <span class="order-card__status order-card__status--success">Selesai</span>
                    <div class="order-card__main">
                        <div class="order-card__thumb">
                            <img src="../assets/images/Jasa 1.png" alt="Bantuan Coding">
                        </div>
                        <div class="order-card__info">
                            <h3 class="order-card__title">Bantuan Coding</h3>
                            <p class="order-card__seller">Sagara Mahendra</p>
                            <p class="order-card__price">Rp 60.000</p>
                        </div>
                    </div>
                    <div class="order-card__actions">
                        <a href="#" class="btn-outline btn-outline--sm" id="btn-ulasan-3">Beri Ulasan</a>
                    </div>
                </div>

                <!-- Ditolak -->
                <div class="order-card" id="order-4">
                    <span class="order-card__status order-card__status--danger">Ditolak</span>
                    <div class="order-card__main">
                        <div class="order-card__thumb">
                            <img src="../assets/images/Jasa 1.png" alt="Bantuan Coding">
                        </div>
                        <div class="order-card__info">
                            <h3 class="order-card__title">Bantuan Coding</h3>
                            <p class="order-card__seller">Sagara Mahendra</p>
                            <p class="order-card__price">Rp 60.000</p>
                        </div>
                    </div>
                    <div class="order-card__actions">
                        <a href="#" class="btn-outline btn-outline--sm" id="btn-detail-4">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <?php include 'includes/bottom-nav.php'; ?>
    <script src="../assets/js/main.js"></script>
</body>
</html>
