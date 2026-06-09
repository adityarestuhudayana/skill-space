<?php $activePage = 'notifikasi'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Notifikasi - Informasi terbaru pesanan dan aktivitas di SkillSpace.">
    <title>Notifikasi - SkillSpace</title>
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
        <header class="page-header" id="page-header-notifikasi">
            <a href="beranda.php" class="page-header__back" aria-label="Kembali">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
            </a>
            <h1 class="page-header__title">Notifikasi</h1>
            <span class="page-header__spacer"></span>
        </header>

        <main class="content content--with-header" id="content-notifikasi">
            <div class="notif-list" id="notif-list">

                <!-- Notif 1: Pesanan Diproses -->
                <div class="notif-card notif-card--unread" id="notif-1">
                    <div class="notif-card__icon notif-card__icon--image">
                        <img src="../assets/images/Jasa 1.png" alt="Pesanan">
                    </div>
                    <div class="notif-card__body">
                        <h3 class="notif-card__title">Pesanan Diproses</h3>
                        <p class="notif-card__desc">Penjual mulai mengerjakan pesanan. Estimasi selesai 2 hari.</p>
                        <span class="notif-card__time">1 menit lalu</span>
                    </div>
                </div>

                <!-- Notif 2: Pembayaran Berhasil -->
                <div class="notif-card notif-card--unread" id="notif-2">
                    <div class="notif-card__icon notif-card__icon--blue">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                    </div>
                    <div class="notif-card__body">
                        <h3 class="notif-card__title">Pembayaran Berhasil</h3>
                        <p class="notif-card__desc">Pembayaran Rp 63.000 untuk Bantuan Coding berhasil. Penjual mulai mengerjakan</p>
                        <span class="notif-card__time">2 menit lalu</span>
                    </div>
                </div>

                <!-- Notif 3: Pesanan Disetujui -->
                <div class="notif-card" id="notif-3">
                    <div class="notif-card__icon notif-card__icon--green">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <div class="notif-card__body">
                        <h3 class="notif-card__title">Pesanan Disetujui!</h3>
                        <p class="notif-card__desc">Penjual (Sagara Mahendra) telah menyetujui pesanan. Selesaikan Pembayaran untuk mulai pengerjaan</p>
                        <a href="#" class="btn btn--primary btn--sm notif-card__action" id="btn-notif-bayar">Bayar Sekarang</a>
                        <span class="notif-card__time">4 menit lalu</span>
                    </div>
                </div>

                <!-- Notif 4: Menunggu Konfirmasi -->
                <div class="notif-card" id="notif-4">
                    <div class="notif-card__icon notif-card__icon--blue">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <div class="notif-card__body">
                        <h3 class="notif-card__title">Menunggu Konfirmasi</h3>
                        <p class="notif-card__desc">Pesanan Bantuan Coding dikirim ke Penjual (Sagara Mahendra). Tunggu konfirmasi maksimal 1×24 jam.</p>
                        <span class="notif-card__time">7 menit lalu</span>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <?php include 'includes/bottom-nav.php'; ?>
    <script src="../assets/js/main.js"></script>
</body>
</html>
