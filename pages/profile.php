<?php $activePage = 'profile'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Profil Saya - Kelola akun SkillSpace.">
    <title>Profil Saya - SkillSpace</title>
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
        <main class="content content--profile" id="content-profile">

            <!-- Top Horizontal Card -->
            <div class="profile-card-horiz" id="profile-card">
                <div class="profile-card-horiz__avatar">
                    <img src="../assets/images/Ahmad Sulaiman.png" alt="Sagara Mahendra">
                </div>
                <div class="profile-card-horiz__info">
                    <h2 class="profile-card-horiz__name">Sagara Mahendra</h2>
                    <p class="profile-card-horiz__major">Teknik Informatika</p>
                    <a href="#" class="btn btn--primary btn--sm profile-card-horiz__btn">Edit Profile</a>
                </div>
            </div>

            <!-- Bottom 2-Column Grid -->
            <div class="profile-layout">
                
                <!-- Left Column: Menu -->
                <div class="profile-layout__left">
                    <div class="profile-menu-v2">
                        
                        <a href="#" class="profile-menu-v2__item profile-menu-v2__item--active">
                            <div class="profile-menu-v2__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                            </div>
                            <span>Dashboard Penjual</span>
                            <svg class="profile-menu-v2__chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                        </a>

                        <a href="pesanan.php" class="profile-menu-v2__item">
                            <div class="profile-menu-v2__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                            </div>
                            <span>Riwayat Pesanan</span>
                            <svg class="profile-menu-v2__chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                        </a>

                        <a href="#" class="profile-menu-v2__item">
                            <div class="profile-menu-v2__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                            </div>
                            <span>Favorit</span>
                            <svg class="profile-menu-v2__chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                        </a>

                        <a href="#" class="profile-menu-v2__item">
                            <div class="profile-menu-v2__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                            </div>
                            <span>Metode Pembayaran</span>
                            <svg class="profile-menu-v2__chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                        </a>

                        <a href="pesan.php" class="profile-menu-v2__item">
                            <div class="profile-menu-v2__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                            </div>
                            <span>Pesan</span>
                            <svg class="profile-menu-v2__chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                        </a>

                        <a href="#" class="profile-menu-v2__item">
                            <div class="profile-menu-v2__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                            </div>
                            <span>Bantuan</span>
                            <svg class="profile-menu-v2__chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                        </a>
                    </div>

                    <a href="../index.php" class="profile-logout-v2">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
                        <span>Keluar</span>
                    </a>
                </div>

                <!-- Right Column: Informasi Akun -->
                <div class="profile-layout__right">
                    <div class="profile-info-card">
                        <h3 class="profile-info-card__title">Informasi Akun</h3>
                        
                        <div class="profile-info-card__list">
                            <div class="profile-info-row">
                                <span class="profile-info-row__label">Nama Lengkap</span>
                                <span class="profile-info-row__value">Sagara Mahendra</span>
                            </div>
                            <div class="profile-info-row">
                                <span class="profile-info-row__label">Email</span>
                                <span class="profile-info-row__value">221450661013@unsap.ac.id</span>
                            </div>
                            <div class="profile-info-row">
                                <span class="profile-info-row__label">Nomor Telepon</span>
                                <span class="profile-info-row__value">+62 812-0000-0000</span>
                            </div>
                            <div class="profile-info-row">
                                <span class="profile-info-row__label">Program Studi</span>
                                <span class="profile-info-row__value">Teknik Informatika</span>
                            </div>
                            <div class="profile-info-row">
                                <span class="profile-info-row__label">NIM</span>
                                <span class="profile-info-row__value">221450661013</span>
                            </div>
                            <div class="profile-info-row">
                                <span class="profile-info-row__label">Tanggal Bergabung</span>
                                <span class="profile-info-row__value">8 Januari 2026</span>
                            </div>
                            <div class="profile-info-row">
                                <span class="profile-info-row__label">Status Seller</span>
                                <span class="profile-info-row__value">Aktif</span>
                            </div>
                            <div class="profile-info-row">
                                <span class="profile-info-row__label">Verivikasi KTM</span>
                                <span class="profile-info-row__value">Terverifikasi</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </main>
    </div>

    <?php include 'includes/bottom-nav.php'; ?>
    <script src="../assets/js/main.js"></script>
</body>
</html>
