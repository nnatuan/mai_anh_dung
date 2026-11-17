<?php
$cfg_hotline = function_exists('get_value_by_config') ? get_value_by_config(12) : '';
if (empty($cfg_hotline) || $cfg_hotline == '033.3872.153') {
    $cfg_hotline = '0909688810';
}
$cfg_hotline_display = '0909.688.810';

$cfg_address = function_exists('get_value_by_config') ? get_value_by_config(20) : '';
if (empty($cfg_address) || strpos($cfg_address, 'Phạm Văn Đồng') !== false) {
    $cfg_address = 'Phường Thới An, TP. Hồ Chí Minh';
}
$topbar_address = str_replace('Vườn Mai Anh Dũng – ', '', $cfg_address);

$cfg_zalo = function_exists('get_value_by_config') ? get_value_by_config(17) : '';
if (empty($cfg_zalo) || strpos($cfg_zalo, '0333872153') !== false) {
    $cfg_zalo = 'https://zalo.me/0909688810';
}

$cfg_map_link = function_exists('get_value_by_config') ? get_value_by_config(11) : '';
if (empty($cfg_map_link) || $cfg_map_link == '#') {
    $cfg_map_link = 'https://maps.app.goo.gl/yBmoLivjLV49q2uG7?g_st=iz';
}

$cfg_fb = function_exists('get_value_by_config') ? get_value_by_config(9) : '';
if (empty($cfg_fb) || $cfg_fb == '#' || $cfg_fb == 'https://www.facebook.com/' || $cfg_fb == 'https://www.facebook.com/vuonmaianhdung') {
    $cfg_fb = 'https://www.facebook.com/profile.php?id=61596384215093';
}

$curr_menu = isset($menu_top) ? $menu_top : 'home';
?>
<!-- Top Festive Announcement Bar -->
<div class="tet-topbar">
    <div class="container topbar-inner">
        <div class="topbar-left">
            <span class="topbar-badge"><i class="fas fa-fan fa-spin" style="--fa-animation-duration: 6s;"></i></span>
            <span class="topbar-text"><strong>VƯỜN MAI ANH DŨNG Q.12:</strong> Chăm Sóc Chuyên Nghiệp – Nở Rộ Rực Rỡ Đón Tết!</span>
        </div>
        <div class="topbar-right">
            <a href="tel:<?php echo htmlspecialchars($cfg_hotline); ?>" class="topbar-link">
                <i class="fas fa-phone-volume text-gold pulse-icon"></i>
                <span>Hotline: <strong><?php echo htmlspecialchars($cfg_hotline_display); ?></strong></span>
            </a>
            <span class="topbar-divider">|</span>
            <a href="<?php echo htmlspecialchars($cfg_map_link); ?>" target="_blank" rel="noopener noreferrer" class="topbar-link topbar-address" title="Xem trên Google Maps">
                <i class="fas fa-map-marker-alt text-gold"></i>
                <span><?php echo htmlspecialchars($topbar_address); ?></span>
            </a>
            <span class="topbar-divider">|</span>
            <div class="topbar-socials">
                <a href="<?php echo htmlspecialchars($cfg_fb); ?>" target="_blank" rel="noopener noreferrer" class="social-fb-pill" title="Fanpage Facebook Vườn Mai Anh Dũng Q.12">
                    <i class="fab fa-facebook-f"></i> <span>Facebook</span>
                </a>
                <a href="<?php echo htmlspecialchars($cfg_zalo); ?>" target="_blank" rel="noopener noreferrer" class="social-zalo-pill" title="Chat Zalo Tư Vấn">
                    <span class="zalo-tag">Zalo</span> <strong>0909.688.810</strong>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Main Sticky Festive Header -->
<header class="site-header tet-header" id="mainHeader">
    <div class="container header-inner">
        <!-- Logo Brand -->
        <div class="brand-logo-wrap">
            <a href="<?php echo base_url(); ?>" class="brand-link" title="Vườn Mai Anh Dũng Q.12 - Thới An, TP.HCM">
                <div class="logo-box">
                    <img src="<?php echo base_url(); ?>images/logo.png" alt="Vườn Mai Anh Dũng Q.12 Logo" class="brand-logo-img" onerror="this.src='<?php echo base_url(); ?>images/logo_mai_anh_dung.png';">
                    <span class="logo-sparkle"></span>
                </div>
                <div class="brand-text">
                    <span class="brand-title">VƯỜN MAI ANH DŨNG Q.12</span>
                    <span class="brand-slogan"><i class="fas fa-seedling"></i> CHĂM SÓC CHUYÊN NGHIỆP – HÀI LÒNG BỀN VỮNG</span>
                </div>
            </a>
        </div>
        
        <!-- Navigation Bar -->
        <nav class="nav-links tet-nav">
            <a href="<?php echo base_url(); ?>" class="nav-item <?php echo ($curr_menu == 'home') ? 'active' : ''; ?>">
                <i class="fas fa-home nav-icon"></i>
                <span>Trang Chủ</span>
            </a>
            <a href="#gioi-thieu" class="nav-item">
                <i class="fas fa-info-circle nav-icon"></i>
                <span>Giới Thiệu</span>
            </a>
            <a href="#ky-gui-cham-soc" class="nav-item">
                <i class="fas fa-hand-holding-heart nav-icon"></i>
                <span>Ký Gửi Mai</span>
                <span class="nav-badge-hot">HOT</span>
            </a>
            <a href="#mua-ban-mai" class="nav-item">
                <i class="fas fa-shopping-cart nav-icon"></i>
                <span>Mua Bán Mai</span>
            </a>
            <a href="#cho-thue-mai" class="nav-item">
                <i class="fas fa-calendar-check nav-icon"></i>
                <span>Thuê Mai Tết</span>
            </a>
            <a href="#quy-trinh" class="nav-item">
                <i class="fas fa-clipboard-list nav-icon"></i>
                <span>Quy Trình</span>
            </a>
            <a href="#lien-he" class="nav-item">
                <i class="fas fa-envelope-open-text nav-icon"></i>
                <span>Liên Hệ</span>
            </a>
        </nav>

        <!-- Header CTA Actions -->
        <div class="header-cta-group">
            <a href="tel:<?php echo htmlspecialchars($cfg_hotline); ?>" class="btn-tet-hotline">
                <div class="btn-hotline-icon">
                    <i class="fas fa-phone-alt fa-shake"></i>
                </div>
                <div class="btn-hotline-info">
                    <span class="hotline-sub">TƯ VẤN MAI TẾT</span>
                    <strong class="hotline-main"><?php echo htmlspecialchars($cfg_hotline_display); ?></strong>
                </div>
            </a>
        </div>

        <!-- Mobile Menu Toggle Button -->
        <button class="mobile-menu-toggle tet-toggle" id="mobileMenuToggle" type="button" aria-label="Mở Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    <!-- Mobile Drawer Navigation -->
    <div class="mobile-nav-backdrop" id="mobileNavBackdrop"></div>
    <div class="mobile-nav-drawer tet-mobile-drawer" id="mobileNavDrawer">
        <div class="mobile-nav-header">
            <a href="<?php echo base_url(); ?>" class="mobile-nav-logo">
                <img src="<?php echo base_url(); ?>images/logo.png" alt="Vườn Mai Anh Dũng Q.12 Logo" onerror="this.src='<?php echo base_url(); ?>images/logo_mai_anh_dung.png';">
                <div class="mobile-logo-text">
                    <strong>VƯỜN MAI ANH DŨNG Q.12</strong>
                    <small>Phường Thới An, Quận 12, TP.HCM</small>
                </div>
            </a>
            <button class="mobile-nav-close" id="mobileNavClose" type="button" aria-label="Đóng Menu">&times;</button>
        </div>
        
        <div class="mobile-drawer-slogan">
            <i class="fas fa-award text-gold"></i> Chăm Sóc Chuyên Nghiệp – Hài Lòng Bền Vững
        </div>

        <nav class="mobile-nav-links">
            <a href="<?php echo base_url(); ?>" class="active"><i class="fas fa-home"></i> Trang Chủ</a>
            <a href="#gioi-thieu"><i class="fas fa-info-circle"></i> Về Vườn Mai Anh Dũng Q.12</a>
            <a href="#ky-gui-cham-soc"><i class="fas fa-hand-holding-heart"></i> Ký Gửi Chăm Sóc Hoa Mai <span class="mobile-badge-hot">Ưu đãi</span></a>
            <a href="#mua-ban-mai"><i class="fas fa-shopping-cart"></i> Mua Bán Hoa Mai Tết</a>
            <a href="#cho-thue-mai"><i class="fas fa-calendar-check"></i> Cho Thuê Mai Tết Cơ Quan & Gia Đình</a>
            <a href="#quy-trinh"><i class="fas fa-clipboard-list"></i> Quy Trình Kỹ Thuật 5 Bước</a>
            <a href="#hinh-anh"><i class="fas fa-images"></i> Bộ Sưu Tập Vườn Mai</a>
            <a href="#lien-he"><i class="fas fa-phone-alt"></i> Liên Hệ & Chỉ Đường</a>
        </nav>
        
        <div class="mobile-nav-footer">
            <a href="tel:<?php echo htmlspecialchars($cfg_hotline); ?>" class="btn-mobile-call">
                <i class="fas fa-phone-volume"></i> Gọi Ngay: <?php echo htmlspecialchars($cfg_hotline_display); ?>
            </a>
            <a href="<?php echo htmlspecialchars($cfg_zalo); ?>" target="_blank" class="btn-mobile-zalo">
                <i class="fas fa-comment-dots"></i> Chat Zalo Tư Vấn Nhanh
            </a>
            <a href="<?php echo htmlspecialchars($cfg_fb); ?>" target="_blank" rel="noopener noreferrer" class="btn-mobile-fb">
                <i class="fab fa-facebook-f"></i> Fanpage Facebook Vườn Mai
            </a>
            <div class="mobile-address-note">
                <i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($cfg_address); ?>
            </div>
        </div>
    </div>
</header>
