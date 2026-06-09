<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SkillSpace - Platform marketplace untuk menghubungkan mahasiswa berbakat dengan kebutuhan tugas dan proyek akademik di seluruh Indonesia.">
    <title>SkillSpace - Wujudkan Tugas & Proyekmu Bersama Talenta Kampus</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- ========== NAVBAR ========== -->
    <nav class="navbar" id="navbar">
        <div class="container navbar__inner">
            <a href="index.php" class="navbar__logo" id="logo">
                <svg class="navbar__logo-icon" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="14" cy="14" r="14" fill="#4F46E5"/>
                    <path d="M8 14.5L12 18.5L20 10.5" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="navbar__logo-text">SkillSpace</span>
            </a>
            <a href="#" class="btn btn--primary navbar__cta" id="btn-daftar">Daftar</a>
        </div>
    </nav>

    <!-- ========== HERO SECTION ========== -->
    <section class="hero" id="hero">
        <div class="container hero__inner">
            <div class="hero__content">
                <h1 class="hero__title">Wujudkan Tugas &amp; Proyekmu Bersama Talenta Kampus</h1>
                <p class="hero__subtitle">Dapatkan bantuan akademik berkualitas dan terjangkau dari sesama mahasiswa berprestasi di seluruh Indonesia.</p>
                <a href="#" class="btn btn--primary btn--lg hero__cta" id="btn-cari-jasa">Mulai Cari Jasa</a>
            </div>
            <div class="hero__image">
                <div class="hero__image-wrapper">
                    <img src="assets/images/Hero Illustration.png" alt="Hero Illustration SkillSpace" loading="eager">
                    <!-- Floating icons -->
                    <div class="hero__float hero__float--1" aria-hidden="true">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4F46E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <div class="hero__float hero__float--2" aria-hidden="true">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4F46E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                    </div>
                    <div class="hero__float hero__float--3" aria-hidden="true">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4F46E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== WHY SKILLSPACE ========== -->
    <section class="features" id="features">
        <div class="container">
            <h2 class="section__title">Mengapa SkillSpace?</h2>
            <div class="features__grid">
                <!-- Card 1 -->
                <div class="feature-card" id="feature-harga">
                    <div class="feature-card__icon feature-card__icon--purple">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                        </svg>
                    </div>
                    <h3 class="feature-card__title">Harga Terjangkau</h3>
                    <p class="feature-card__desc">Layanan profesional dengan harga ramah kantong mahasiswa.</p>
                </div>
                <!-- Card 2 -->
                <div class="feature-card" id="feature-verified">
                    <div class="feature-card__icon feature-card__icon--indigo">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                    </div>
                    <h3 class="feature-card__title">Seller Terverifikasi</h3>
                    <p class="feature-card__desc">Setiap seller divalidasi dengan KTM dan portofolio asli.</p>
                </div>
                <!-- Card 3 -->
                <div class="feature-card" id="feature-portfolio">
                    <div class="feature-card__icon feature-card__icon--blue">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                        </svg>
                    </div>
                    <h3 class="feature-card__title">Bangun Portofolio</h3>
                    <p class="feature-card__desc">Tempat terbaik untuk mengasah skill dan rekam jejak kerja.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== KATEGORI POPULER ========== -->
    <section class="categories" id="categories">
        <div class="container">
            <h2 class="section__title section__title--left">Kategori Populer</h2>
            <div class="categories__grid">
                <a href="#" class="category-card" id="cat-desain">
                    <div class="category-card__icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="13.5" cy="6.5" r="2.5"/>
                            <path d="M17.5 10.5a2.5 2.5 0 1 1 0 5"/>
                            <path d="M15 18a2.5 2.5 0 1 1-5 0"/>
                            <path d="M6.5 15.5a2.5 2.5 0 1 1 0-5"/>
                            <path d="M9 6a2.5 2.5 0 0 1 2-1"/>
                            <circle cx="12" cy="12" r="2"/>
                        </svg>
                    </div>
                    <span class="category-card__label">Desain</span>
                </a>
                <a href="#" class="category-card" id="cat-les-privat">
                    <div class="category-card__icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
                            <path d="M8 7h8"/>
                            <path d="M8 11h6"/>
                        </svg>
                    </div>
                    <span class="category-card__label">Les Privat</span>
                </a>
                <a href="#" class="category-card" id="cat-coding">
                    <div class="category-card__icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="16 18 22 12 16 6"/>
                            <polyline points="8 6 2 12 8 18"/>
                        </svg>
                    </div>
                    <span class="category-card__label">Coding</span>
                </a>
                <a href="#" class="category-card" id="cat-pengetikan">
                    <div class="category-card__icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="4" width="20" height="16" rx="2"/>
                            <path d="M6 8h.01"/>
                            <path d="M10 8h.01"/>
                            <path d="M14 8h.01"/>
                            <path d="M18 8h.01"/>
                            <path d="M6 12h.01"/>
                            <path d="M10 12h.01"/>
                            <path d="M14 12h.01"/>
                            <path d="M18 12h.01"/>
                            <path d="M8 16h8"/>
                        </svg>
                    </div>
                    <span class="category-card__label">Pengetikan</span>
                </a>
                <a href="#" class="category-card" id="cat-video-editing">
                    <div class="category-card__icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="23 7 16 12 23 17 23 7"/>
                            <rect x="1" y="5" width="15" height="14" rx="2" ry="2"/>
                        </svg>
                    </div>
                    <span class="category-card__label">Video Editing</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ========== FREELANCER TERATAS ========== -->
    <section class="freelancers" id="freelancers">
        <div class="container">
            <h2 class="section__title section__title--left">Freelancer Teratas</h2>
            <div class="freelancers__grid">
                <!-- Freelancer 1 -->
                <div class="freelancer-card" id="freelancer-sagara">
                    <div class="freelancer-card__image">
                        <img src="assets/images/Ahmad Sulaiman.png" alt="Sagara Mahendra">
                        <span class="freelancer-card__badge">Tersedia</span>
                    </div>
                    <div class="freelancer-card__info">
                        <div class="freelancer-card__header">
                            <h3 class="freelancer-card__name">Sagara Mahendra</h3>
                            <div class="freelancer-card__rating">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="#FBBF24" stroke="#FBBF24" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <span>4.9</span>
                            </div>
                        </div>
                        <p class="freelancer-card__major">Teknik Informatika</p>
                        <div class="freelancer-card__price">
                            <span class="freelancer-card__price-label">Mulai dari</span>
                            <span class="freelancer-card__price-value">Rp 50.000</span>
                        </div>
                    </div>
                </div>
                <!-- Freelancer 2 -->
                <div class="freelancer-card" id="freelancer-xabiru">
                    <div class="freelancer-card__image">
                        <img src="assets/images/Rizky Pratama.png" alt="Xabiru Galaska">
                        <span class="freelancer-card__badge">Tersedia</span>
                    </div>
                    <div class="freelancer-card__info">
                        <div class="freelancer-card__header">
                            <h3 class="freelancer-card__name">Xabiru Galaska</h3>
                            <div class="freelancer-card__rating">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="#FBBF24" stroke="#FBBF24" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <span>5.0</span>
                            </div>
                        </div>
                        <p class="freelancer-card__major">Desain Komunikasi Visual</p>
                        <div class="freelancer-card__price">
                            <span class="freelancer-card__price-label">Mulai dari</span>
                            <span class="freelancer-card__price-value">Rp 75.000</span>
                        </div>
                    </div>
                </div>
                <!-- Freelancer 3 -->
                <div class="freelancer-card" id="freelancer-carmenita">
                    <div class="freelancer-card__image">
                        <img src="assets/images/Sarah Nadira.png" alt="Carmenita">
                        <span class="freelancer-card__badge freelancer-card__badge--busy">Sibuk</span>
                    </div>
                    <div class="freelancer-card__info">
                        <div class="freelancer-card__header">
                            <h3 class="freelancer-card__name">Carmenita</h3>
                            <div class="freelancer-card__rating">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="#FBBF24" stroke="#FBBF24" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <span>4.8</span>
                            </div>
                        </div>
                        <p class="freelancer-card__major">Pendidikan Matematika</p>
                        <div class="freelancer-card__price">
                            <span class="freelancer-card__price-label">Mulai dari</span>
                            <span class="freelancer-card__price-value">Rp 40.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== FOOTER ========== -->
    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__brand">
                    <a href="index.php" class="footer__logo">
                        <svg class="footer__logo-icon" width="24" height="24" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="14" cy="14" r="14" fill="#4F46E5"/>
                            <path d="M8 14.5L12 18.5L20 10.5" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>SkillSpace</span>
                    </a>
                    <p class="footer__tagline">&copy; 2026 SkillSpace. Empowering student talent globally.</p>
                </div>
                <div class="footer__links">
                    <h4 class="footer__heading">Services</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Find Services</a></li>
                    </ul>
                </div>
                <div class="footer__links">
                    <h4 class="footer__heading">Community</h4>
                    <ul>
                        <li><a href="#">Become a Seller</a></li>
                        <li><a href="#">Trust & Safety</a></li>
                    </ul>
                </div>
                <div class="footer__links">
                    <h4 class="footer__heading">Legal</h4>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>
