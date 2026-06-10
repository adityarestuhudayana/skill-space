<?php
$activePage = 'pesan';
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

    <?php include 'includes/sidebar.php'; ?>

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

    <?php include 'includes/bottom-nav.php'; ?>

    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/pesan.js"></script>
</body>
</html>
