<?php
// Shared Sidebar Component
// Usage: Set $activePage before including this file
// Example: $activePage = 'beranda';
?>
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
            <li><a href="beranda.php" class="sidebar__link <?= ($activePage ?? '') === 'beranda' ? 'sidebar__link--active' : '' ?>" id="nav-beranda">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                <span>Beranda</span>
            </a></li>
            <li><a href="pesan.php" class="sidebar__link <?= ($activePage ?? '') === 'pesan' ? 'sidebar__link--active' : '' ?>" id="nav-pesan">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                <span>Pesan</span>
            </a></li>
            <li><a href="pesanan.php" class="sidebar__link <?= ($activePage ?? '') === 'pesanan' ? 'sidebar__link--active' : '' ?>" id="nav-pesanan">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                <span>Pesanan</span>
            </a></li>
            <li><a href="keranjang.php" class="sidebar__link <?= ($activePage ?? '') === 'keranjang' ? 'sidebar__link--active' : '' ?>" id="nav-keranjang">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
                <span>Keranjang</span>
            </a></li>
        </ul>
        <span class="sidebar__nav-label">Akun</span>
        <ul class="sidebar__menu">
            <li><a href="profile.php" class="sidebar__link <?= ($activePage ?? '') === 'profile' ? 'sidebar__link--active' : '' ?>" id="nav-saya">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                <span>Saya</span>
            </a></li>
            <li><a href="#" class="sidebar__link" id="nav-favorit">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                <span>Favorit</span>
            </a></li>
            <li><a href="notifikasi.php" class="sidebar__link <?= ($activePage ?? '') === 'notifikasi' ? 'sidebar__link--active' : '' ?>" id="nav-notifikasi">
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
