<?php
$activePage = 'beranda';
// Homepage - Shared for Pembeli & Penjual
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dashboard SkillSpace - Temukan freelancer dan jasa akademik terbaik dari mahasiswa berprestasi.">
    <title>Beranda - SkillSpace</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/homepage.css">
</head>
<body class="has-sidebar">

    <?php include 'includes/sidebar.php'; ?>

    <!-- ========== MAIN WRAPPER ========== -->
    <div class="main-wrapper" id="main-wrapper">

        <!-- ========== TOP BAR ========== -->
        <header class="topbar" id="topbar">
            <div class="topbar__left">
                <h2 class="topbar__greeting">Hi Sagara Mahendra!</h2>
                <p class="topbar__subtitle">Mau cari jasa apa hari ini?</p>
            </div>
            <div class="topbar__search">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                <input type="text" placeholder="Cari Jasa atau Freelancer" id="search-input">
            </div>
            <div class="topbar__actions">
                <button class="topbar__icon-btn" id="btn-notif" aria-label="Notifikasi">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                </button>
                <button class="topbar__icon-btn" id="btn-cart" aria-label="Keranjang">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
                </button>
                <div class="topbar__mobile-avatar">
                    <img src="../assets/images/Ahmad Sulaiman.png" alt="Profile">
                </div>
            </div>
        </header>

        <!-- ========== CONTENT ========== -->
        <main class="content" id="content">

            <!-- Promo Banner -->
            <section class="promo-banner" id="promo-banner">
                <div class="promo-banner__slide promo-banner__slide--active">
                    <div class="promo-banner__text">
                        <h3 class="promo-banner__title">Promo Akhir Semester!</h3>
                        <p class="promo-banner__desc">Dapatkan diskon spesial untuk les privat dan tingkatkan prestasimu sekarang.</p>
                        <a href="#" class="promo-banner__btn" id="btn-promo">Pesan Sekarang</a>
                    </div>
                    <div class="promo-banner__image">
                        <img src="../assets/images/Character Hompage.png" alt="Promo Illustration">
                    </div>
                </div>
                <div class="promo-banner__dots">
                    <span class="promo-banner__dot promo-banner__dot--active"></span>
                    <span class="promo-banner__dot"></span>
                    <span class="promo-banner__dot"></span>
                </div>
            </section>

            <!-- Kategori -->
            <section class="home-section" id="home-kategori">
                <div class="home-section__header">
                    <h2 class="home-section__title">Kategori</h2>
                    <a href="#" class="home-section__link" id="link-lihat-kategori">Lihat Semua</a>
                </div>
                <div class="home-categories">
                    <a href="#" class="home-cat" id="hcat-desain">
                        <div class="home-cat__icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="13.5" cy="6.5" r="2.5"/><path d="M17.5 10.5a2.5 2.5 0 1 1 0 5"/><path d="M15 18a2.5 2.5 0 1 1-5 0"/><path d="M6.5 15.5a2.5 2.5 0 1 1 0-5"/><path d="M9 6a2.5 2.5 0 0 1 2-1"/><circle cx="12" cy="12" r="2"/></svg></div>
                        <span>Desain</span>
                    </a>
                    <a href="#" class="home-cat" id="hcat-les-privat">
                        <div class="home-cat__icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/><path d="M8 7h8"/><path d="M8 11h6"/></svg></div>
                        <span>Les Privat</span>
                    </a>
                    <a href="#" class="home-cat" id="hcat-coding">
                        <div class="home-cat__icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
                        <span>Coding</span>
                    </a>
                    <a href="#" class="home-cat" id="hcat-pengetikan">
                        <div class="home-cat__icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M6 8h.01"/><path d="M10 8h.01"/><path d="M14 8h.01"/><path d="M18 8h.01"/><path d="M6 12h.01"/><path d="M10 12h.01"/><path d="M14 12h.01"/><path d="M18 12h.01"/><path d="M8 16h8"/></svg></div>
                        <span>Pengetikan</span>
                    </a>
                    <a href="#" class="home-cat" id="hcat-editing-video">
                        <div class="home-cat__icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg></div>
                        <span>Editing Video</span>
                    </a>
                    <a href="#" class="home-cat" id="hcat-translate">
                        <div class="home-cat__icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 8l6 6"/><path d="M4 14l6-6 2-3"/><path d="M2 5h12"/><path d="M7 2h1"/><path d="M22 22l-5-10-5 10"/><path d="M14 18h6"/></svg></div>
                        <span>Translate</span>
                    </a>
                    <a href="#" class="home-cat" id="hcat-data">
                        <div class="home-cat__icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="9" y1="21" x2="9" y2="9"/><line x1="15" y1="21" x2="15" y2="14"/><line x1="3" y1="9" x2="21" y2="9"/></svg></div>
                        <span>Data</span>
                    </a>
                    <a href="#" class="home-cat" id="hcat-dokumen">
                        <div class="home-cat__icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
                        <span>Dokumen</span>
                    </a>
                    <a href="#" class="home-cat" id="hcat-audio">
                        <div class="home-cat__icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" y1="19" x2="12" y2="23"/><line x1="8" y1="23" x2="16" y2="23"/></svg></div>
                        <span>Audio</span>
                    </a>
                    <a href="#" class="home-cat" id="hcat-foto">
                        <div class="home-cat__icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg></div>
                        <span>Foto</span>
                    </a>
                </div>
            </section>

            <!-- Freelancer Populer -->
            <section class="home-section" id="home-freelancer">
                <div class="home-section__header">
                    <h2 class="home-section__title">Freelancer Populer</h2>
                    <a href="#" class="home-section__link home-section__link--arrow" id="link-lihat-freelancer">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>
                <div class="home-freelancers">
                    <div class="home-fl-card" id="hfl-sagara">
                        <div class="home-fl-card__avatar"><img src="../assets/images/Ahmad Sulaiman.png" alt="Sagara Mahendra"></div>
                        <div class="home-fl-card__info">
                            <div class="home-fl-card__top">
                                <div><h3 class="home-fl-card__name">Sagara Mahendra</h3><p class="home-fl-card__skill">Coding & Excel</p></div>
                                <span class="home-fl-card__badge">Tersedia</span>
                            </div>
                            <div class="home-fl-card__bottom">
                                <div class="home-fl-card__rating"><svg width="14" height="14" viewBox="0 0 24 24" fill="#FBBF24" stroke="#FBBF24" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><span>4.9</span></div>
                                <div class="home-fl-card__price">Mulai dari <strong>Rp 30.000</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class="home-fl-card" id="hfl-xabiru">
                        <div class="home-fl-card__avatar"><img src="../assets/images/Rizky Pratama.png" alt="Xabiru Galaska"></div>
                        <div class="home-fl-card__info">
                            <div class="home-fl-card__top">
                                <div><h3 class="home-fl-card__name">Xabiru Galaska</h3><p class="home-fl-card__skill">Desain Poster</p></div>
                                <span class="home-fl-card__badge">Tersedia</span>
                            </div>
                            <div class="home-fl-card__bottom">
                                <div class="home-fl-card__rating"><svg width="14" height="14" viewBox="0 0 24 24" fill="#FBBF24" stroke="#FBBF24" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><span>5.0</span></div>
                                <div class="home-fl-card__price">Mulai dari <strong>Rp 25.000</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class="home-fl-card" id="hfl-carmenita">
                        <div class="home-fl-card__avatar"><img src="../assets/images/Sarah Nadira.png" alt="Carmenita"></div>
                        <div class="home-fl-card__info">
                            <div class="home-fl-card__top">
                                <div><h3 class="home-fl-card__name">Carmenita</h3><p class="home-fl-card__skill">Les Privat</p></div>
                                <span class="home-fl-card__badge home-fl-card__badge--busy">Sibuk</span>
                            </div>
                            <div class="home-fl-card__bottom">
                                <div class="home-fl-card__rating"><svg width="14" height="14" viewBox="0 0 24 24" fill="#FBBF24" stroke="#FBBF24" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><span>4.8</span></div>
                                <div class="home-fl-card__price">Mulai dari <strong>Rp 50.000</strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Jasa Populer -->
            <section class="home-section" id="home-jasa">
                <div class="home-section__header">
                    <h2 class="home-section__title">Jasa Populer</h2>
                    <a href="#" class="home-section__link home-section__link--arrow" id="link-lihat-jasa">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>
                <div class="home-services">
                    <div class="home-svc-card" id="hsvc-1">
                        <div class="home-svc-card__thumb"><img src="../assets/images/Jasa 1.png" alt="Bantuan Coding"></div>
                        <div class="home-svc-card__info">
                            <h3 class="home-svc-card__title">Bantuan Coding</h3>
                            <p class="home-svc-card__seller">Oleh Sagara Mahendra</p>
                            <p class="home-svc-card__price">Mulai dari <strong>Rp 30.000</strong></p>
                            <div class="home-svc-card__footer">
                                <span class="home-svc-card__badge">Tersedia</span>
                                <div class="home-svc-card__rating"><svg width="14" height="14" viewBox="0 0 24 24" fill="#FBBF24" stroke="#FBBF24" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><span>4.9</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="home-svc-card" id="hsvc-2">
                        <div class="home-svc-card__thumb"><img src="../assets/images/Jasa 1.png" alt="Bantuan Coding"></div>
                        <div class="home-svc-card__info">
                            <h3 class="home-svc-card__title">Bantuan Coding</h3>
                            <p class="home-svc-card__seller">Oleh Sagara Mahendra</p>
                            <p class="home-svc-card__price">Mulai dari <strong>Rp 30.000</strong></p>
                            <div class="home-svc-card__footer">
                                <span class="home-svc-card__badge">Tersedia</span>
                                <div class="home-svc-card__rating"><svg width="14" height="14" viewBox="0 0 24 24" fill="#FBBF24" stroke="#FBBF24" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><span>4.9</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="home-svc-card" id="hsvc-3">
                        <div class="home-svc-card__thumb"><img src="../assets/images/Jasa 1.png" alt="Bantuan Coding"></div>
                        <div class="home-svc-card__info">
                            <h3 class="home-svc-card__title">Bantuan Coding</h3>
                            <p class="home-svc-card__seller">Oleh Sagara Mahendra</p>
                            <p class="home-svc-card__price">Mulai dari <strong>Rp 30.000</strong></p>
                            <div class="home-svc-card__footer">
                                <span class="home-svc-card__badge">Tersedia</span>
                                <div class="home-svc-card__rating"><svg width="14" height="14" viewBox="0 0 24 24" fill="#FBBF24" stroke="#FBBF24" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><span>4.9</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <?php include 'includes/bottom-nav.php'; ?>

    <script src="../assets/js/main.js"></script>
</body>
</html>
