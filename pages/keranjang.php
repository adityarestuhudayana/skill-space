<?php $activePage = 'keranjang'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Keranjang - Kelola jasa yang akan dipesan di SkillSpace.">
    <title>Keranjang - SkillSpace</title>
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
        <header class="page-header" id="page-header-keranjang">
            <a href="beranda.php" class="page-header__back" aria-label="Kembali">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
            </a>
            <h1 class="page-header__title">Keranjang <span class="page-header__count">(2)</span></h1>
            <button class="page-header__action page-header__action--text" id="btn-edit-cart">Edit</button>
        </header>

        <main class="content content--with-header" id="content-keranjang">
            <div class="cart-layout">
                <!-- Cart Items -->
                <div class="cart-items" id="cart-items">
                    <!-- Item 1 -->
                    <div class="cart-card" id="cart-item-1">
                        <label class="cart-card__check">
                            <input type="checkbox" name="cart-select" id="check-cart-1">
                            <span class="cart-card__checkmark"></span>
                        </label>
                        <div class="cart-card__thumb">
                            <img src="../assets/images/Jasa 1.png" alt="Bantuan Coding">
                        </div>
                        <div class="cart-card__info">
                            <h3 class="cart-card__title">Bantuan Coding</h3>
                            <p class="cart-card__seller">Oleh Sagara Mahendra</p>
                            <p class="cart-card__price">Rp 60.000</p>
                        </div>
                        <div class="cart-card__qty">
                            <button class="cart-card__qty-btn" aria-label="Kurang">−</button>
                            <span class="cart-card__qty-val">1</span>
                            <button class="cart-card__qty-btn" aria-label="Tambah">+</button>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="cart-card" id="cart-item-2">
                        <label class="cart-card__check">
                            <input type="checkbox" name="cart-select" id="check-cart-2">
                            <span class="cart-card__checkmark"></span>
                        </label>
                        <div class="cart-card__thumb">
                            <img src="../assets/images/Jasa 1.png" alt="Bantuan Coding">
                        </div>
                        <div class="cart-card__info">
                            <h3 class="cart-card__title">Bantuan Coding</h3>
                            <p class="cart-card__seller">Oleh Sagara Mahendra</p>
                            <p class="cart-card__price">Rp 60.000</p>
                        </div>
                        <div class="cart-card__qty">
                            <button class="cart-card__qty-btn" aria-label="Kurang">−</button>
                            <span class="cart-card__qty-val">1</span>
                            <button class="cart-card__qty-btn" aria-label="Tambah">+</button>
                        </div>
                    </div>
                </div>

                <!-- Cart Summary (Desktop) -->
                <div class="cart-summary" id="cart-summary">
                    <h3 class="cart-summary__title">Ringkasan Belanja</h3>
                    <div class="cart-summary__row">
                        <span>Total Harga (2 jasa)</span>
                        <span>Rp 120.000</span>
                    </div>
                    <div class="cart-summary__row">
                        <span>Biaya Layanan</span>
                        <span>Rp 3.000</span>
                    </div>
                    <div class="cart-summary__divider"></div>
                    <div class="cart-summary__row cart-summary__row--total">
                        <span>Total</span>
                        <span>Rp 123.000</span>
                    </div>
                    <button class="btn btn--primary btn--block" id="btn-checkout">Checkout (2)</button>
                </div>
            </div>
        </main>
    </div>

    <?php include 'includes/bottom-nav.php'; ?>
    <script src="../assets/js/main.js"></script>
</body>
</html>
