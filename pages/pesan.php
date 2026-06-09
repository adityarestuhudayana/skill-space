<?php
// Halaman Pesan - Shared for Pembeli & Penjual
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pesan - Berkomunikasi dengan freelancer dan klien di SkillSpace.">
    <title>Pesan - SkillSpace</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/homepage.css">
    <link rel="stylesheet" href="../assets/css/pesan.css">
</head>
<body class="has-sidebar">

    <!-- ========== SIDEBAR (Desktop) ========== -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar__top">
            <a href="beranda.php" class="sidebar__logo" id="sidebar-logo">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none">
                    <circle cx="14" cy="14" r="14" fill="#4F46E5"/>
                    <path d="M8 14.5L12 18.5L20 10.5" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>SkillSpace</span>
            </a>
            <div class="sidebar__profile" id="sidebar-profile">
                <div class="sidebar__avatar">
                    <img src="../assets/images/Ahmad Sulaiman.png" alt="Sagara Mahendra">
                </div>
                <div class="sidebar__user-info">
                    <span class="sidebar__user-name">Sagara Mahendra</span>
                    <span class="sidebar__user-major">Teknik Informatika</span>
                </div>
            </div>
        </div>
        <nav class="sidebar__nav">
            <span class="sidebar__nav-label">Menu</span>
            <ul class="sidebar__menu">
                <li><a href="beranda.php" class="sidebar__link" id="nav-beranda">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    <span>Beranda</span>
                </a></li>
                <li><a href="pesan.php" class="sidebar__link sidebar__link--active" id="nav-pesan">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    <span>Pesan</span>
                </a></li>
                <li><a href="#" class="sidebar__link" id="nav-pesanan">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                    <span>Pesanan</span>
                </a></li>
                <li><a href="#" class="sidebar__link" id="nav-keranjang">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
                    <span>Keranjang</span>
                </a></li>
            </ul>
            <span class="sidebar__nav-label">Akun</span>
            <ul class="sidebar__menu">
                <li><a href="#" class="sidebar__link" id="nav-saya">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    <span>Saya</span>
                </a></li>
                <li><a href="#" class="sidebar__link" id="nav-favorit">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                    <span>Favorit</span>
                </a></li>
                <li><a href="#" class="sidebar__link" id="nav-notifikasi">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                    <span>Notifikasi</span>
                </a></li>
            </ul>
        </nav>
        <div class="sidebar__bottom">
            <a href="#" class="sidebar__link" id="nav-pengaturan">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
                <span>Pengaturan</span>
            </a>
            <a href="../index.php" class="sidebar__link sidebar__link--danger" id="nav-logout">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
                <span>Logout</span>
            </a>
        </div>
    </aside>

    <!-- ========== MAIN WRAPPER ========== -->
    <div class="main-wrapper" id="main-wrapper">

        <!-- ========== MESSAGING AREA ========== -->
        <div class="msg" id="msg">

            <!-- ===== LEFT: Conversation List ===== -->
            <div class="msg__list" id="msg-list">
                <div class="msg__list-header">
                    <a href="beranda.php" class="msg__back" id="msg-back" aria-label="Kembali">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                    </a>
                    <h1 class="msg__list-title">Pesan</h1>
                </div>
                <div class="msg__search">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    <input type="text" placeholder="Cari Pesan" id="msg-search-input">
                </div>

                <!-- Conversation items -->
                <div class="msg__conversations" id="msg-conversations">
                    <a href="#" class="msg__conv msg__conv--active" id="conv-gema" data-conv="gema">
                        <div class="msg__conv-avatar">
                            <img src="../assets/images/Rizky Pratama.png" alt="Gema Sadewa">
                            <span class="msg__conv-status msg__conv-status--online"></span>
                        </div>
                        <div class="msg__conv-body">
                            <div class="msg__conv-top">
                                <h3 class="msg__conv-name">Gema Sadewa</h3>
                                <span class="msg__conv-time">09.15</span>
                            </div>
                            <p class="msg__conv-preview">Siapp, ditunggu bang</p>
                        </div>
                    </a>

                    <a href="#" class="msg__conv" id="conv-xabiru" data-conv="xabiru">
                        <div class="msg__conv-avatar">
                            <img src="../assets/images/Rizky Pratama.png" alt="Xabiru Galaska">
                        </div>
                        <div class="msg__conv-body">
                            <div class="msg__conv-top">
                                <h3 class="msg__conv-name">Xabiru Galaska</h3>
                                <span class="msg__conv-time">Min.</span>
                            </div>
                            <div class="msg__conv-bottom">
                                <p class="msg__conv-preview">Makasih bang, sukses terus</p>
                                <span class="msg__conv-unread">1</span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="msg__conv" id="conv-carmenita" data-conv="carmenita">
                        <div class="msg__conv-avatar">
                            <img src="../assets/images/Sarah Nadira.png" alt="Carmenita">
                        </div>
                        <div class="msg__conv-body">
                            <div class="msg__conv-top">
                                <h3 class="msg__conv-name">Carmenita</h3>
                                <span class="msg__conv-time">Min.</span>
                            </div>
                            <p class="msg__conv-preview">Boleh minta format PDF kak?</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- ===== RIGHT: Chat Detail ===== -->
            <div class="msg__chat" id="msg-chat">
                <!-- Chat header -->
                <div class="msg__chat-header" id="msg-chat-header">
                    <button class="msg__chat-back" id="msg-chat-back" aria-label="Kembali ke daftar">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                    </button>
                    <div class="msg__chat-user">
                        <div class="msg__chat-avatar">
                            <img src="../assets/images/Rizky Pratama.png" alt="Gema Sadewa">
                            <span class="msg__conv-status msg__conv-status--online"></span>
                        </div>
                        <div>
                            <h3 class="msg__chat-name">Gema Sadewa</h3>
                            <span class="msg__chat-status-text">Online</span>
                        </div>
                    </div>
                    <div class="msg__chat-actions">
                        <button class="msg__chat-action-btn" id="btn-chat-more" aria-label="Lainnya">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
                        </button>
                    </div>
                </div>

                <!-- Chat messages -->
                <div class="msg__chat-body" id="msg-chat-body">
                    <div class="msg__date-divider"><span>Hari ini</span></div>

                    <div class="msg__bubble msg__bubble--received">
                        <p>Halo bang, saya mau pesan jasa coding untuk tugas kuliah nih</p>
                        <span class="msg__bubble-time">08.30</span>
                    </div>

                    <div class="msg__bubble msg__bubble--sent">
                        <p>Halo! Boleh banget, tugas apa ya? Bisa dijelasin detailnya?</p>
                        <span class="msg__bubble-time">08.32</span>
                    </div>

                    <div class="msg__bubble msg__bubble--received">
                        <p>Tugas pemrograman web, bikin CRUD pakai PHP & MySQL bang. Deadline-nya 3 hari lagi.</p>
                        <span class="msg__bubble-time">08.35</span>
                    </div>

                    <div class="msg__bubble msg__bubble--sent">
                        <p>Oke bisa! Nanti saya kirimkan estimasi harganya ya. Kalau setuju langsung bisa mulai 👍</p>
                        <span class="msg__bubble-time">08.40</span>
                    </div>

                    <div class="msg__bubble msg__bubble--received">
                        <p>Siapp, ditunggu bang</p>
                        <span class="msg__bubble-time">09.15</span>
                    </div>
                </div>

                <!-- Chat input -->
                <div class="msg__chat-input" id="msg-chat-input">
                    <button class="msg__input-action" id="btn-attach" aria-label="Lampiran">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"/></svg>
                    </button>
                    <input type="text" class="msg__input-field" id="msg-input-field" placeholder="Ketik pesan...">
                    <button class="msg__input-send" id="btn-send" aria-label="Kirim">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    </button>
                </div>

                <!-- Empty state (shown when no conv selected on desktop) -->
                <div class="msg__empty" id="msg-empty" style="display: none;">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="var(--gray-300)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    <h3>Pilih percakapan</h3>
                    <p>Pilih salah satu percakapan untuk mulai chatting</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== BOTTOM NAV (Mobile Only) ========== -->
    <nav class="bottom-nav" id="bottom-nav">
        <a href="beranda.php" class="bottom-nav__item" id="bnav-beranda">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            <span>Dashboard</span>
        </a>
        <a href="#" class="bottom-nav__item" id="bnav-pesanan">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
            <span>Pesanan</span>
        </a>
        <a href="pesan.php" class="bottom-nav__item bottom-nav__item--active" id="bnav-pesan">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            <span>Pesan</span>
        </a>
        <a href="#" class="bottom-nav__item" id="bnav-saya">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            <span>Saya</span>
        </a>
    </nav>

    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/pesan.js"></script>
</body>
</html>
