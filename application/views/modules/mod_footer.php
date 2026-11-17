<?php
$cfg_hotline = function_exists('get_value_by_config') ? get_value_by_config(12) : '0909688810';
if (empty($cfg_hotline)) $cfg_hotline = '0909688810';

$cfg_address = function_exists('get_value_by_config') ? get_value_by_config(20) : 'Phường Thới An, TP. Hồ Chí Minh';
if (empty($cfg_address)) $cfg_address = 'Phường Thới An, TP. Hồ Chí Minh';

$cfg_vp = function_exists('get_value_by_config') ? get_value_by_config(21) : 'Phường Thới An, TP. Hồ Chí Minh';
$cfg_kho = function_exists('get_value_by_config') ? get_value_by_config(22) : 'Khu Vườn Ươm Hoa Mai Anh Dũng – Phường Thới An, TP. Hồ Chí Minh';
$cfg_email = function_exists('get_value_by_config') ? get_value_by_config(1) : 'vuonmaianhdung@gmail.com';
$cfg_zalo = function_exists('get_value_by_config') ? get_value_by_config(17) : 'https://zalo.me/0909688810';
$cfg_fb = function_exists('get_value_by_config') ? get_value_by_config(9) : '';
if (empty($cfg_fb) || $cfg_fb == '#' || $cfg_fb == 'https://www.facebook.com/' || $cfg_fb == 'https://www.facebook.com/vuonmaianhdung') {
    $cfg_fb = 'https://www.facebook.com/profile.php?id=61596384215093';
}
$cfg_map = function_exists('get_value_by_config') ? get_value_by_config(11) : '';
if (empty($cfg_map) || $cfg_map == '#') {
    $cfg_map = 'https://maps.app.goo.gl/yBmoLivjLV49q2uG7?g_st=iz';
}
$cfg_slogan = function_exists('get_value_by_config') ? get_value_by_config(23) : 'CHĂM SÓC CHUYÊN NGHIỆP – HÀI LÒNG BỀN VỮNG';
if (empty($cfg_slogan)) $cfg_slogan = 'CHĂM SÓC CHUYÊN NGHIỆP – HÀI LÒNG BỀN VỮNG';
?>

<!-- Footer Đậm Chất Tết Xuân -->
<footer class="tet-footer" id="lien-he">
    <!-- Họa tiết mái ngói đình làng / viền hoa mai tết -->
    <div class="tet-footer-decoration">
        <span class="blossom-dot dot-1"></span>
        <span class="blossom-dot dot-2"></span>
        <span class="blossom-dot dot-3"></span>
    </div>

    <div class="container">
        <!-- Banner kết nối nhanh trước footer -->
        <div class="tet-footer-cta-card">
            <div class="cta-card-left">
                <span class="cta-tag"><i class="fas fa-gift"></i> ƯU ĐÃI KÝ GỬI MAI TẾT</span>
                <h3>Bạn Cần Ký Gửi Hoặc Thuê Hoa Mai Đón Tết Sum Vầy?</h3>
                <p>Liên hệ ngay hôm nay với nghệ nhân Vườn Mai Anh Dũng Q.12 để nhận tư vấn kỹ thuật phục hồi & báo giá trọn gói tốt nhất!</p>
            </div>
            <div class="cta-card-right">
                <a href="tel:<?php echo htmlspecialchars($cfg_hotline); ?>" class="btn-cta-phone">
                    <i class="fas fa-phone-volume"></i> <?php echo htmlspecialchars($cfg_hotline); ?>
                </a>
                <a href="<?php echo htmlspecialchars($cfg_zalo); ?>" target="_blank" rel="noopener noreferrer" class="btn-cta-zalo">
                    <i class="fas fa-comment-dots"></i> Nhắn Tin Zalo
                </a>
            </div>
        </div>

        <div class="tet-footer-grid">
            <!-- Cột 1: Thông tin thương hiệu Vườn Mai -->
            <div class="tet-footer-col">
                <div class="footer-brand">
                    <div class="footer-logo-wrap">
                        <img src="<?php echo base_url(); ?>images/logo.png" alt="Vườn Mai Anh Dũng Q.12 Logo" onerror="this.onerror=null; this.src='<?php echo base_url(); ?>images/logo_mai_anh_dung.png';">
                        <div>
                            <h4>VƯỜN MAI ANH DŨNG Q.12</h4>
                            <p class="footer-slogan-badge"><?php echo htmlspecialchars($cfg_slogan); ?></p>
                        </div>
                    </div>
                    <p class="footer-intro-desc">
                        Trung tâm dưỡng mai, ký gửi chăm sóc hoa mai sau Tết và cung cấp - cho thuê mai vàng thế cổ thụ, mai giảo bonsai uy tín hàng đầu tại Quận 12, TP. Hồ Chí Minh.
                    </p>
                    <ul class="footer-contact-list">
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <div>
                                <span>Hotline / Zalo hỗ trợ:</span>
                                <strong><a href="tel:<?php echo htmlspecialchars($cfg_hotline); ?>"><?php echo htmlspecialchars($cfg_hotline); ?></a></strong>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-map-marked-alt"></i>
                            <div>
                                <span>Địa chỉ vườn & Giao dịch:</span>
                                <strong><a href="<?php echo htmlspecialchars($cfg_map); ?>" target="_blank" rel="noopener noreferrer" title="Chỉ đường trên Google Maps" style="color: inherit; text-decoration: underline;"><?php echo htmlspecialchars($cfg_address); ?></a></strong>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-seedling"></i>
                            <div>
                                <span>Khu ươm dưỡng & Phục hồi mai:</span>
                                <span><?php echo htmlspecialchars($cfg_kho); ?></span>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <div>
                                <span>Hòm thư điện tử:</span>
                                <a href="mailto:<?php echo htmlspecialchars($cfg_email); ?>"><?php echo htmlspecialchars($cfg_email); ?></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Cột 2: Các dịch vụ trọng tâm -->
            <div class="tet-footer-col">
                <h4 class="footer-col-title">DỊCH VỤ HOA MAI TẾT</h4>
                <ul class="footer-links-list">
                    <li><a href="#ky-gui-cham-soc"><i class="fas fa-chevron-right"></i> Nhận ký gửi & Chăm sóc mai sau Tết</a></li>
                    <li><a href="#loi-ich-ky-gui"><i class="fas fa-chevron-right"></i> Kỹ thuật chăm sóc & Giữ cây tươi tốt</a></li>
                    <li><a href="#mua-ban-mai"><i class="fas fa-chevron-right"></i> Mua bán hoa mai Tết các loại tuyển chọn</a></li>
                    <li><a href="#cho-thue-mai"><i class="fas fa-chevron-right"></i> Cho thuê hoa mai Tết cơ quan & gia đình</a></li>
                    <li><a href="#quy-trinh"><i class="fas fa-chevron-right"></i> Quy trình 5 bước chăm sóc cả năm</a></li>
                    <li><a href="#bang-gia"><i class="fas fa-chevron-right"></i> Bảng giá dịch vụ công khai, minh bạch</a></li>
                    <li><a href="#form-dang-ky"><i class="fas fa-chevron-right"></i> Đăng ký tư vấn & Báo giá nhanh</a></li>
                </ul>
            </div>

            <!-- Cột 3: Cam kết chất lượng & Giờ làm việc -->
            <div class="tet-footer-col">
                <h4 class="footer-col-title">CAM KẾT TỪ NGHỆ NHÂN</h4>
                <div class="footer-commit-box">
                    <div class="commit-item">
                        <i class="fas fa-check-double"></i>
                        <p><strong>Nở rộ đúng dịp Tết:</strong> Đảm bảo mai trổ hoa đúng mùng 1 Tết, hoa to cánh dày, màu sắc tươi tắn rước lộc đầu xuân.</p>
                    </div>
                    <div class="commit-item">
                        <i class="fas fa-shield-alt"></i>
                        <p><strong>Bảo hành & Hợp đồng rõ ràng:</strong> Có biên bản giao nhận chụp ảnh hiện trạng chậu mai trước khi đưa về vườn.</p>
                    </div>
                    <div class="commit-item">
                        <i class="fas fa-clock"></i>
                        <p><strong>Thời gian làm việc:</strong> Mở cửa từ 07h00 đến 19h00 (Tất cả các ngày trong tuần, kể cả Thứ 7 & Chủ Nhật).</p>
                    </div>
                </div>

                <div class="footer-social-wrap">
                    <span>Kết nối với chúng tôi:</span>
                    <div class="social-pills">
                        <a href="<?php echo htmlspecialchars($cfg_zalo); ?>" target="_blank" rel="noopener noreferrer" class="social-pill zalo"><i class="fas fa-comment-dots"></i> Zalo</a>
                        <a href="<?php echo htmlspecialchars($cfg_fb); ?>" target="_blank" rel="noopener noreferrer" class="social-pill fb"><i class="fab fa-facebook-f"></i> Facebook</a>
                        <a href="tel:<?php echo htmlspecialchars($cfg_hotline); ?>" class="social-pill call"><i class="fas fa-phone"></i> Gọi ngay</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="tet-footer-bottom">
            <div class="tet-footer-bottom-inner">
                <p>&copy; <?php echo date('Y'); ?> <strong>VƯỜN MAI ANH DŨNG Q.12</strong>. Phường Thới An, Quận 12, TP. Hồ Chí Minh. Hotline: <?php echo htmlspecialchars($cfg_hotline); ?>. Toàn bộ bản quyền được bảo lưu.</p>
                <div class="tet-footer-tags">
                    <span>Chăm sóc hoa mai</span> • <span>Ký gửi mai vàng</span> • <span>Mai tết Thới An</span> • <span>Thuê mai tết HCM</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Action Facebook, Zalo & Call Buttons -->
<div class="tet-floating-actions" id="tetFloatingActions">
    <a href="<?php echo htmlspecialchars($cfg_fb); ?>" target="_blank" rel="noopener noreferrer" class="float-btn float-fb" title="Fanpage Facebook Vườn Mai">
        <span class="float-pulse"></span>
        <i class="fab fa-facebook-f"></i>
        <span class="float-label">Facebook Vườn Mai</span>
    </a>
    <a href="<?php echo htmlspecialchars($cfg_zalo); ?>" target="_blank" rel="noopener noreferrer" class="float-btn float-zalo" title="Chat Zalo Tư Vấn">
        <span class="float-pulse"></span>
        <i class="fas fa-comment-dots"></i>
        <span class="float-label">Zalo: <?php echo htmlspecialchars($cfg_hotline); ?></span>
    </a>
    <a href="tel:<?php echo htmlspecialchars($cfg_hotline); ?>" class="float-btn float-call" title="Gọi Điện Trực Tiếp">
        <span class="float-pulse"></span>
        <i class="fas fa-phone-alt"></i>
        <span class="float-label">Gọi: <?php echo htmlspecialchars($cfg_hotline); ?></span>
    </a>
    <button type="button" class="float-btn float-top" id="btnBackToTop" title="Lên đầu trang">
        <i class="fas fa-arrow-up"></i>
    </button>
</div>

<!-- Container cánh hoa mai vàng rơi hiệu ứng Tết -->
<div id="tetBlossomContainer" class="tet-blossom-container" aria-hidden="true"></div>

<!-- JavaScript tương tác: menu mobile, hoa mai rơi, scroll mượt -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    // 1. Tự động ẩn preloader nếu có
    var preloader = document.getElementById('page-preloader');
    if (preloader) {
        setTimeout(function() {
            preloader.style.opacity = '0';
            preloader.style.transition = 'opacity 0.4s ease';
            setTimeout(function() { preloader.style.display = 'none'; }, 400);
        }, 300);
    }

    // 2. Mobile Drawer Toggle
    var toggleBtn = document.getElementById('mobileMenuToggle');
    var drawer = document.getElementById('mobileNavDrawer');
    var backdrop = document.getElementById('mobileNavBackdrop');
    var closeBtn = document.getElementById('mobileNavClose');

    function openMobileMenu() {
        if (drawer && backdrop) {
            drawer.classList.add('active');
            drawer.classList.add('open');
            backdrop.classList.add('active');
            backdrop.classList.add('open');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeMobileMenu() {
        if (drawer && backdrop) {
            drawer.classList.remove('active');
            drawer.classList.remove('open');
            backdrop.classList.remove('active');
            backdrop.classList.remove('open');
            document.body.style.overflow = '';
        }
    }

    if (toggleBtn) toggleBtn.addEventListener('click', openMobileMenu);
    if (closeBtn) closeBtn.addEventListener('click', closeMobileMenu);
    if (backdrop) backdrop.addEventListener('click', closeMobileMenu);

    var mobileLinks = document.querySelectorAll('.mobile-nav-links a, .mobile-nav-link');
    mobileLinks.forEach(function (link) {
        link.addEventListener('click', closeMobileMenu);
    });

    // 3. Back to Top Button
    var topBtn = document.getElementById('btnBackToTop');
    window.addEventListener('scroll', function () {
        if (window.scrollY > 400) {
            if (topBtn) topBtn.classList.add('visible');
        } else {
            if (topBtn) topBtn.classList.remove('visible');
        }
    });

    if (topBtn) {
        topBtn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // 4. Smooth Scroll for in-page anchors
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            var targetId = this.getAttribute('href');
            if (targetId && targetId !== '#') {
                var targetElem = document.querySelector(targetId);
                if (targetElem) {
                    e.preventDefault();
                    var headerOffset = 80;
                    var elementPosition = targetElem.getBoundingClientRect().top;
                    var offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // 5. Hiệu ứng cánh hoa mai vàng rơi nhẹ nhàng (chỉ lấy cánh hoa, không thân và lá)
    var petalContainer = document.getElementById('tetBlossomContainer');
    if (petalContainer && window.innerWidth > 600) {
        var maxPetals = 6;
        for (var i = 0; i < maxPetals; i++) {
            createPetal(petalContainer);
        }
    }

    function createPetal(container) {
        var petal = document.createElement('span');
        petal.className = 'tet-petal';
        petal.innerHTML = '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:100%;display:block;"><path d="M12 2C16.5 2 20.5 6.8 18.8 13.5C17.4 18.8 13.2 21.8 12 22C10.8 21.8 6.6 18.8 5.2 13.5C3.5 6.8 7.5 2 12 2Z" fill="#FFD54F"/><path d="M12 2C14.8 4.2 16.2 8.5 15.2 13.8C14.4 18 12.6 21 12 22C12 22 10.5 16 10.8 10.5C11 6.5 11.5 3.5 12 2Z" fill="#FFB300" opacity="0.55"/></svg>';
        
        var startLeft = Math.random() * 94;
        var duration = 14 + Math.random() * 14;
        var delay = Math.random() * 16;
        var size = 12 + Math.random() * 8;
        var opacity = 0.4 + Math.random() * 0.25;

        petal.style.left = startLeft + 'vw';
        petal.style.width = size + 'px';
        petal.style.height = size + 'px';
        petal.style.opacity = opacity;
        petal.style.animationDuration = duration + 's';
        petal.style.animationDelay = delay + 's';

        container.appendChild(petal);

        // Tái tạo lại vị trí khi lặp
        petal.addEventListener('animationiteration', function () {
            petal.style.left = (Math.random() * 94) + 'vw';
        });
    }
});
</script>
