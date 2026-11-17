<?php
   $this->load->view('header');
   $this->load->view('header_end');	
   $this->load->view('modules/mod_header');

   // Lấy cấu hình động từ database với fallback an toàn
   $cfg_hotline = function_exists('get_value_by_config') ? get_value_by_config(12) : '';
   if (empty($cfg_hotline) || $cfg_hotline == '033.3872.153') {
       $cfg_hotline = '0909688810';
   }
   $cfg_hotline_display = '0909.688.810';

   $cfg_address = function_exists('get_value_by_config') ? get_value_by_config(20) : '';
   if (empty($cfg_address) || strpos($cfg_address, 'Phạm Văn Đồng') !== false) {
       $cfg_address = 'Phường Thới An, TP. Hồ Chí Minh';
   }

   $cfg_email = function_exists('get_value_by_config') ? get_value_by_config(1) : '';
   if (empty($cfg_email) || strpos($cfg_email, 'cycle') !== false) {
       $cfg_email = 'vuonmaianhdung@gmail.com';
   }

   $cfg_zalo = function_exists('get_value_by_config') ? get_value_by_config(17) : '';
   if (empty($cfg_zalo) || strpos($cfg_zalo, '0333872153') !== false) {
       $cfg_zalo = 'https://zalo.me/0909688810';
   }

   $cfg_map = function_exists('get_value_by_config') ? get_value_by_config(11) : '';
   if (empty($cfg_map) || $cfg_map == '#') {
       $cfg_map = 'https://maps.app.goo.gl/yBmoLivjLV49q2uG7?g_st=iz';
   }

   $cfg_fb = function_exists('get_value_by_config') ? get_value_by_config(9) : '';
   if (empty($cfg_fb) || $cfg_fb == '#' || $cfg_fb == 'https://www.facebook.com/' || $cfg_fb == 'https://www.facebook.com/vuonmaianhdung') {
       $cfg_fb = 'https://www.facebook.com/profile.php?id=61596384215093';
   }
?>

<!-- Hiệu ứng hoa mai rơi đón Tết (Tet Falling Blossom) -->
<div id="tetBlossomContainer" class="tet-blossom-container" aria-hidden="true"></div>

<!-- ============================================================== -->
<!-- SECTION 1: HERO FESTIVE BANNER                                -->
<!-- ============================================================== -->
<section class="tet-hero-section" id="heroBanner">
    <div class="tet-hero-bg-overlay"></div>
    <div class="container tet-hero-inner">
        <div class="tet-hero-content">
            <!-- Badge Chào Xuân -->
            <div class="tet-hero-badge">
                <span class="badge-icon"><i class="fas fa-star"></i></span>
                <span class="badge-text">CHÀO XUÂN TƯNG BỪNG – RƯỚC TÀI ĐÓN LỘC</span>
            </div>

            <h1 class="tet-hero-title">
                VƯỜN MAI <span class="highlight-gold">ANH DŨNG Q.12</span>
            </h1>
            
            <p class="tet-hero-location">
                <i class="fas fa-map-marker-alt text-gold"></i> PHƯỜNG THỚI AN, QUẬN 12, TP. HỒ CHÍ MINH
            </p>

            <div class="tet-hero-slogan-wrap">
                <div class="slogan-ribbon">
                    <i class="fas fa-certificate text-gold"></i>
                    <h2>CHĂM SÓC CHUYÊN NGHIỆP – HÀI LÒNG BỀN VỮNG</h2>
                    <i class="fas fa-certificate text-gold"></i>
                </div>
            </div>

            <p class="tet-hero-desc">
                Nhà vườn uy tín hàng đầu chuyên nhận <strong>Ký gửi chăm sóc hoa mai quanh năm</strong>, 
                <strong>Mua bán hoa mai Tết các loại</strong> và <strong>Cho thuê mai Tết công sở - gia đình</strong>. 
                Cam kết cây sinh trưởng sung mãn, hoa nở vàng rực rỡ, dày cánh, bung nở rộ đúng mùng 1 Tết!
            </p>

            <!-- 4 Cam kết nhanh từ Poster -->
            <div class="tet-quick-commitments">
                <div class="commit-item">
                    <i class="fas fa-clock text-gold"></i>
                    <span>Tiết kiệm thời gian, không bận rộn</span>
                </div>
                <div class="commit-item">
                    <i class="fas fa-user-graduate text-gold"></i>
                    <span>Kỹ thuật nông nghiệp chuyên sâu</span>
                </div>
                <div class="commit-item">
                    <i class="fas fa-shield-alt text-gold"></i>
                    <span>Giá cả hợp lý &amp; minh bạch</span>
                </div>
                <div class="commit-item">
                    <i class="fas fa-fan text-gold"></i>
                    <span>Cam kết nở rộ đúng dịp Tết</span>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="tet-hero-cta">
                <a href="#ky-gui-cham-soc" class="btn-tet-primary">
                    <i class="fas fa-seedling"></i> KÝ GỬI CHĂM SÓC MAI
                </a>
                <a href="#cho-thue-mai" class="btn-tet-secondary">
                    <i class="fas fa-handshake"></i> THUÊ &amp; MUA MAI TẾT
                </a>
                <a href="tel:<?php echo htmlspecialchars($cfg_hotline); ?>" class="btn-tet-call">
                    <i class="fas fa-phone-alt"></i> <span>HOTLINE: <strong><?php echo htmlspecialchars($cfg_hotline_display); ?></strong></span>
                </a>
            </div>
        </div>

        <!-- Hero Media Card -->
        <div class="tet-hero-media">
            <div class="hero-image-frame">
                <div class="gold-corner top-left"></div>
                <div class="gold-corner top-right"></div>
                <div class="gold-corner bottom-left"></div>
                <div class="gold-corner bottom-right"></div>
                
                <div class="hero-image-wrapper">
                    <img src="<?php echo base_url(); ?>images/logo.png" alt="Vườn Mai Anh Dũng Q.12 Logo" class="hero-main-logo" onerror="this.src='<?php echo base_url(); ?>images/logo_mai_anh_dung.png';">
                </div>

                <div class="hero-floating-card top-badge">
                    <div class="card-icon"><i class="fas fa-award"></i></div>
                    <div class="card-text">
                        <strong>Nghệ Nhân 15+ Năm</strong>
                        <small>Kỹ thuật uốn tỉa &amp; ép hoa</small>
                    </div>
                </div>

                <div class="hero-floating-card bottom-badge">
                    <div class="card-icon"><i class="fas fa-truck-moving"></i></div>
                    <div class="card-text">
                        <strong>Giao Nhận Tận Nhà</strong>
                        <small>Bọc màng an toàn tuyệt đối</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================== -->
<!-- SECTION 2: STATS COUNTER BAR                                  -->
<!-- ============================================================== -->
<section class="tet-stats-bar">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-box">
                <div class="stat-icon"><i class="fas fa-medal"></i></div>
                <div class="stat-number">15+</div>
                <div class="stat-label">Năm Kinh Nghiệm Nghệ Thuật Mai</div>
            </div>
            <div class="stat-box">
                <div class="stat-icon"><i class="fas fa-tree"></i></div>
                <div class="stat-number">1.000+</div>
                <div class="stat-label">Gốc Mai Được Chăm Sóc Hàng Năm</div>
            </div>
            <div class="stat-box">
                <div class="stat-icon"><i class="fas fa-sun"></i></div>
                <div class="stat-number">100%</div>
                <div class="stat-label">Tỷ Lệ Hoa Nở Rực Rỡ Đúng Tết</div>
            </div>
            <div class="stat-box">
                <div class="stat-icon"><i class="fas fa-heart"></i></div>
                <div class="stat-number">100%</div>
                <div class="stat-label">Khách Hàng Hài Lòng &amp; Tin Cậy</div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================== -->
<!-- SECTION 3: GIỚI THIỆU VƯỜN MAI ANH DŨNG Q.12                   -->
<!-- ============================================================== -->
<section class="tet-section section-about" id="gioi-thieu">
    <div class="container">
        <div class="section-header text-center">
            <span class="sub-title"><i class="fas fa-fan text-gold"></i> VỀ CHÚNG TÔI <i class="fas fa-fan text-gold"></i></span>
            <h2 class="section-title">VƯỜN MAI ANH DŨNG Q.12 – ĐIỂM HẸN MAI VÀNG ĐÓN TẾT</h2>
            <div class="title-divider">
                <span class="divider-line"></span>
                <i class="fas fa-seedling text-gold"></i>
                <span class="divider-line"></span>
            </div>
            <p class="section-desc">
                Tọa lạc tại Phường Thới An, Quận 12, TP. Hồ Chí Minh, Vườn Mai Anh Dũng Q.12 tự hào là một trong những địa chỉ vườn mai uy tín, 
                quy mô với truyền thống thâm niên trong nghề trồng, tạo dáng và phục hồi mai vàng sau Tết.
            </p>
        </div>

        <div class="about-grid">
            <div class="about-card">
                <div class="card-icon-wrap">
                    <i class="fas fa-hand-holding-droplet"></i>
                </div>
                <h3>Chăm Sóc Chuẩn Kỹ Thuật</h3>
                <p>Ứng dụng quy trình chăm sóc nông nghiệp bài bản từ việc tuyển chọn giá thể đất, kích rễ, phòng trừ nấm bệnh đến chế độ phân bón vi lượng chuyên biệt cho từng giai đoạn sinh trưởng của mai.</p>
            </div>

            <div class="about-card">
                <div class="card-icon-wrap">
                    <i class="fas fa-magic"></i>
                </div>
                <h3>Nghệ Thuật Uốn Tỉa Dáng Thế</h3>
                <p>Đội ngũ nghệ nhân tài hoa am hiểu sâu sắc các thế mai phong thủy: Dáng Trực kiên định, Dáng Huyền thanh thoát, Dáng Tam Đa phúc lộc, Dáng Phụng Hoàng sum vầy mang lại đại cát đại lợi cho gia chủ.</p>
            </div>

            <div class="about-card">
                <div class="card-icon-wrap">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Giá Cả Minh Bạch – Hợp Lý</h3>
                <p>Báo giá công khai, không phát sinh chi phí phụ, cung cấp nhiều gói chăm sóc và thuê mai linh hoạt phù hợp với mọi nhu cầu từ cá nhân, hộ gia đình đến cơ quan, doanh nghiệp.</p>
            </div>

            <div class="about-card">
                <div class="card-icon-wrap">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <h3>Vận Chuyển An Toàn Chu Đáo</h3>
                <p>Hệ thống xe tải chuyên dụng, nhân viên cẩn trọng bọc màng bảo vệ từng cành hoa và nụ, cam kết giao nhận hoa mai đúng hẹn, an toàn nguyên vẹn đến tận không gian trưng bày.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================== -->
<!-- SECTION 4: CHAPTER 1 - VÌ SAO KÝ GỬI HOA MAI CHĂM SÓC?         -->
<!-- ============================================================== -->
<section class="tet-section section-chapter-1" id="ky-gui-cham-soc">
    <div class="container">
        <!-- Banner Chapter 1 từ Poster -->
        <div class="chapter-banner chapter-1-banner">
            <h2 class="chapter-title">VÌ SAO KÝ GỬI HOA MAI CHĂM SÓC?</h2>
            <p class="chapter-subtitle">Những khó khăn thường gặp khi tự chăm sóc mai tại nhà sau mỗi mùa Tết</p>
        </div>

        <!-- 4 Nỗi Đau Khách Hàng (Tái Hiện Chi Tiết Theo Poster) -->
        <div class="pain-points-grid">
            <!-- Box 1 -->
            <div class="pain-box">
                <div class="pain-header">
                    <div class="pain-icon-circle">
                        <i class="fas fa-user-times"></i>
                    </div>
                    <span class="pain-num">01</span>
                </div>
                <div class="pain-body">
                    <h3 class="pain-title">Không Có Kỹ Năng Chăm Sóc</h3>
                    <p class="pain-desc">
                        Mai vàng là loại cây khó tính, đòi hỏi am hiểu kỹ thuật bấm đọt non, uốn cành, xử lý sâu đục thân, 
                        bọ trĩ và nấm hồng. Nếu không có kinh nghiệm chuyên sâu, cây rất dễ bị suy kiệt, teo cành và mất dáng thế quý.
                    </p>
                    <ul class="pain-list">
                        <li><i class="fas fa-times-circle text-danger"></i> Thiếu hiểu biết về liều lượng phân thuốc</li>
                        <li><i class="fas fa-times-circle text-danger"></i> Dễ bị bọ trĩ phá hoại đọt non &amp; mầm hoa</li>
                    </ul>
                </div>
            </div>

            <!-- Box 2 -->
            <div class="pain-box">
                <div class="pain-header">
                    <div class="pain-icon-circle">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <span class="pain-num">02</span>
                </div>
                <div class="pain-body">
                    <h3 class="pain-title">Số Lượng Cây Ít</h3>
                    <p class="pain-desc">
                        Hầu hết gia đình chỉ sở hữu từ 1 đến 2 chậu mai quý. Việc mua sắm đầy đủ bình xịt thuốc, phân bón các loại, 
                        đất trồng hữu cơ, kẽm uốn cây... vừa tốn kém chi phí vừa lãng phí khi chỉ sử dụng một lượng rất nhỏ.
                    </p>
                    <ul class="pain-list">
                        <li><i class="fas fa-times-circle text-danger"></i> Tốn kém chi phí mua sắm dụng cụ chuyên dụng</li>
                        <li><i class="fas fa-times-circle text-danger"></i> Khó bảo quản hóa chất nông nghiệp an toàn tại nhà</li>
                    </ul>
                </div>
            </div>

            <!-- Box 3 -->
            <div class="pain-box">
                <div class="pain-header">
                    <div class="pain-icon-circle">
                        <i class="fas fa-business-time"></i>
                    </div>
                    <span class="pain-num">03</span>
                </div>
                <div class="pain-body">
                    <h3 class="pain-title">Không Sắp Xếp Được Thời Gian</h3>
                    <p class="pain-desc">
                        Công việc bận rộn, áp lực cuộc sống thường nhật, những chuyến công tác hay du lịch dài ngày khiến bạn 
                        không thể tưới nước đều đặn, tỉa lá và bón thúc định kỳ. Chỉ cần bỏ quên vài ngày nắng gắt, cây có thể khô héo.
                    </p>
                    <ul class="pain-list">
                        <li><i class="fas fa-times-circle text-danger"></i> Quên tưới nước khiến rễ bị khô cháy</li>
                        <li><i class="fas fa-times-circle text-danger"></i> Không kịp thời phát hiện sâu bệnh gây hại</li>
                    </ul>
                </div>
            </div>

            <!-- Box 4 -->
            <div class="pain-box">
                <div class="pain-header">
                    <div class="pain-icon-circle">
                        <i class="fas fa-arrow-trend-down"></i>
                    </div>
                    <span class="pain-num">04</span>
                </div>
                <div class="pain-body">
                    <h3 class="pain-title">Kết Quả Không Cao</h3>
                    <p class="pain-desc">
                        Dù tốn nhiều công sức tự chăm, nhưng đến dịp Tết cây thường không nở hoặc nở sớm từ tháng 11, nụ hoa bị điếc, 
                        rụng cánh sớm, màu sắc nhợt nhạt. Điều này làm mất đi không khí may mắn, rộn ràng của gia đình trong ngày đầu năm.
                    </p>
                    <ul class="pain-list">
                        <li><i class="fas fa-times-circle text-danger"></i> Hoa nở trật thời điểm giao thừa &amp; mùng 1</li>
                        <li><i class="fas fa-times-circle text-danger"></i> Hoa thưa thớt, cánh nhỏ, nhanh rụng tàn</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Callout Banner Khuyên Khách Hàng -->
        <div class="chapter-callout">
            <div class="callout-icon">
                <i class="fas fa-lightbulb"></i>
            </div>
            <div class="callout-content">
                <h4>Giải Pháp Tối Ưu: Ký Gửi Tại Vườn Mai Anh Dũng</h4>
                <p>Thay vì tự lo toan vất vả với nhiều rủi ro, hãy để các nghệ nhân tại <strong>Vườn Mai Anh Dũng</strong> chăm sóc trọn gói cả năm với quy trình khoa học, giúp bạn thảnh thơi đón Tết và rước cây mai nở vàng rực rỡ về nhà!</p>
            </div>
            <div class="callout-btn">
                <a href="tel:<?php echo htmlspecialchars($cfg_hotline); ?>" class="btn-tet-primary">
                    <i class="fas fa-phone-alt"></i> Tư Vấn Ký Gửi Ngay
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================== -->
<!-- SECTION 5: CHAPTER 2 - KÝ GỬI HOA MAI MANG LẠI GÌ CHO KHÁCH HÀNG? -->
<!-- ============================================================== -->
<section class="tet-section section-chapter-2" id="loi-ich-ky-gui">
    <div class="container">
        <!-- Banner Chapter 2 từ Poster -->
        <div class="chapter-banner chapter-2-banner">
            <h2 class="chapter-title">KÝ GỬI HOA MAI MANG LẠI GÌ CHO KHÁCH HÀNG?</h2>
            <p class="chapter-subtitle">
                <i class="fas fa-award text-gold"></i> CHĂM SÓC CHUYÊN NGHIỆP – HÀI LÒNG BỀN VỮNG <i class="fas fa-award text-gold"></i>
            </p>
        </div>

        <!-- 4 Lợi Ích Vàng Thực Tế Từ Poster -->
        <div class="benefits-grid">
            <!-- Lợi ích 1: Thời gian -->
            <div class="benefit-card">
                <div class="benefit-img-box">
                    <div class="benefit-badge-icon"><i class="fas fa-mug-hot"></i></div>
                    <div class="benefit-accent-label">LỢI ÍCH 01</div>
                </div>
                <div class="benefit-content">
                    <h3 class="benefit-title">
                        <i class="fas fa-hourglass-half text-gold"></i> Thời Gian Thảnh Thơi
                    </h3>
                    <ul class="benefit-list">
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            <div>
                                <strong>Tiết kiệm thời gian rảnh:</strong>
                                <span>Bạn có trọn vẹn thời gian để tập trung cho công việc, chăm sóc gia đình và nghỉ ngơi cuối tuần.</span>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            <div>
                                <strong>Không bận rộn, vất vả:</strong>
                                <span>Không phải quét dọn lá vàng, không lấm lem đất cát, không phải tiếp xúc với thuốc bảo vệ thực vật.</span>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            <div>
                                <strong>Không lo về mai Tết:</strong>
                                <span>An tâm tuyệt đối vì cây luôn được theo dõi sát sao từng biến chuyển của thời tiết.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Lợi ích 2: Kỹ năng chăm sóc -->
            <div class="benefit-card">
                <div class="benefit-img-box">
                    <div class="benefit-badge-icon"><i class="fas fa-user-gear"></i></div>
                    <div class="benefit-accent-label">LỢI ÍCH 02</div>
                </div>
                <div class="benefit-content">
                    <h3 class="benefit-title">
                        <i class="fas fa-hands-helping text-gold"></i> Kỹ Năng Chăm Sóc Bài Bản
                    </h3>
                    <ul class="benefit-list">
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            <div>
                                <strong>Kỹ thuật chuyên sâu:</strong>
                                <span>Nghệ nhân giàu kinh nghiệm tại Thới An trực tiếp thăm khám bộ rễ, tỉa cành, uốn thế chuẩn dáng.</span>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            <div>
                                <strong>Chăm sóc bài bản khoa học:</strong>
                                <span>Áp dụng quy trình phân bón vi sinh cao cấp đúng kỹ thuật nông nghiệp, dưỡng nụ hoa mập khỏe.</span>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            <div>
                                <strong>Giữ cây luôn khỏe mạnh:</strong>
                                <span>Phòng trị tận gốc nấm hồng, sâu đục thân, rầy rệp; cây tăng tuổi thọ và độ sung mãn qua từng năm.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Lợi ích 3: Giá hợp lý -->
            <div class="benefit-card">
                <div class="benefit-img-box">
                    <div class="benefit-badge-icon"><i class="fas fa-piggy-bank"></i></div>
                    <div class="benefit-accent-label">LỢI ÍCH 03</div>
                </div>
                <div class="benefit-content">
                    <h3 class="benefit-title">
                        <i class="fas fa-coins text-gold"></i> Giá Cả Hợp Lý &amp; Tiết Kiệm
                    </h3>
                    <ul class="benefit-list">
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            <div>
                                <strong>Giá cả công khai minh bạch:</strong>
                                <span>Báo giá chi tiết rõ ràng ngay từ khi tiếp nhận cây, ký kết biên nhận bàn giao minh bạch.</span>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            <div>
                                <strong>Chi phí phải chăng, tiết kiệm:</strong>
                                <span>Rẻ hơn rất nhiều so với việc bạn tự mua sắm phân thuốc lẻ và chịu rủi ro làm chết cây mai đắt tiền.</span>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            <div>
                                <strong>Gói dịch vụ linh hoạt:</strong>
                                <span>Nhiều gói chăm sóc phù hợp với kích thước gốc mai nhỏ, mai trung sân vườn đến mai cổ thụ.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Lợi ích 4: Cây tươi tốt nở đúng Tết -->
            <div class="benefit-card">
                <div class="benefit-img-box">
                    <div class="benefit-badge-icon"><i class="fas fa-spa"></i></div>
                    <div class="benefit-accent-label">LỢI ÍCH 04</div>
                </div>
                <div class="benefit-content">
                    <h3 class="benefit-title">
                        <i class="fas fa-seedling text-gold"></i> Cây Tươi Tốt – Nở Đúng Dịp Tết
                    </h3>
                    <ul class="benefit-list">
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            <div>
                                <strong>Chăm sóc cây tươi tốt:</strong>
                                <span>Cây phát triển xanh mướt, tán lá xòe đều, cành dẻo dai khỏe khoắn, không bị khô chết nhánh.</span>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            <div>
                                <strong>Đảm bảo chất lượng hoa:</strong>
                                <span>Nụ hoa căng mập, bông nở to đều, màu vàng tươi thắm óng ả, cánh hoa dày lâu tàn suốt những ngày Tết.</span>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            <div>
                                <strong>Nở rộ đúng dịp Tết:</strong>
                                <span>Kỹ thuật tuốt lá và xiết nước chuẩn xác giúp hoa bung nở rực rỡ ngay đêm Giao thừa và mùng 1 Tết.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Quy trình 5 bước kỹ thuật chăm sóc tại vườn -->
        <div class="process-wrapper" id="quy-trinh">
            <div class="process-header text-center">
                <h3 class="process-title"><i class="fas fa-calendar-alt text-gold"></i> QUY TRÌNH CHĂM SÓC HOA MAI CẢ NĂM BÀI BẢN</h3>
                <p>Khép kín 5 giai đoạn vàng giúp cây mai tái sinh mãnh liệt và tích lũy nụ hoa rực rỡ</p>
            </div>

            <div class="process-timeline">
                <div class="step-card">
                    <div class="step-circle">Tháng 1-3</div>
                    <h4>Phục Hồi &amp; Tái Sinh Rễ</h4>
                    <p>Cắt bỏ hoa tàn, thu gọn tàn nhánh, thay 50-70% giá thể mới giàu dinh dưỡng, xịt thuốc kích rễ sinh học.</p>
                </div>

                <div class="step-card">
                    <div class="step-circle">Tháng 4-6</div>
                    <h4>Nuôi Dưỡng Tàn Lá &amp; Bấm Đọt</h4>
                    <p>Bón phân hữu cơ kết hợp NPK cân đối, bấm đọt định hình dáng thế, phòng ngừa bọ trĩ phá hoại chồi non.</p>
                </div>

                <div class="step-card">
                    <div class="step-circle">Tháng 7-9</div>
                    <h4>Tạo Mầm Nụ &amp; Dưỡng Hoa</h4>
                    <p>Tăng cường lân và kali để kích thích hình thành mắt kim, nuôi nụ hoa mập mạp và cứng cáp.</p>
                </div>

                <div class="step-card">
                    <div class="step-circle">Tháng 10-11</div>
                    <h4>Hãm Đọt &amp; Tích Lũy Năng Lượng</h4>
                    <p>Hạn chế đọt non phát triển, giữ bộ lá già xanh tốt để dồn toàn bộ dinh dưỡng nuôi nụ hoa đón Tết.</p>
                </div>

                <div class="step-card highlight-step">
                    <div class="step-circle">Tháng Chạp</div>
                    <h4>Trẩy Lá &amp; Bàn Giao Nở Rộ</h4>
                    <p>Theo dõi thời tiết, chọn ngày vàng tuốt lá, canh xiết nước chuẩn xác và vận chuyển hoa mai nở đẹp đến tay khách hàng.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================== -->
<!-- SECTION 6: CHAPTER 3 - MUA BÁN VÀ CHO THUÊ HOA MAI TẾT         -->
<!-- ============================================================== -->
<section class="tet-section section-chapter-3" id="mua-ban-mai">
    <div class="container">
        <!-- Banner Chapter 3 từ Poster -->
        <div class="chapter-banner chapter-3-banner">
            <h2 class="chapter-title">MUA BÁN VÀ CHO THUÊ HOA MAI TẾT</h2>
            <p class="chapter-subtitle">Giải pháp chưng hoa mai đón xuân sang trọng, đẳng cấp và tối ưu chi phí</p>
        </div>

        <!-- 2 Cột Dịch Vụ Chính: Mua Bán & Cho Thuê -->
        <div class="services-dual-grid" id="cho-thue-mai">
            <!-- Cột 1: Mua bán hoa mai Tết -->
            <div class="service-box service-box-buy">
                <div class="service-box-header">
                    <div class="service-badge-icon"><i class="fas fa-shopping-basket"></i></div>
                    <h3>MUA BÁN HOA MAI TẾT</h3>
                    <p class="service-tag">Đa Dạng Chủng Loại – Chuẩn Dáng Phong Thủy</p>
                </div>
                <div class="service-box-body">
                    <p class="service-intro">
                        Vườn Mai Anh Dũng Q.12 cung ứng hàng ngàn gốc mai vàng tuyển chọn kỹ lưỡng từ các giống mai quý: 
                        <strong>Mai giảo Thủ Đức 8-12 cánh</strong>, <strong>Mai Huỳnh Tỷ</strong>, <strong>Mai ghép Phú Tân</strong>, 
                        <strong>Mai bonsai để bàn</strong> đến các <strong>Gốc mai cổ thụ tàn thông đại thế</strong>.
                    </p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle text-gold"></i> Cây được nuôi thuần chậu, rễ khỏe, cành lá sum suê</li>
                        <li><i class="fas fa-check-circle text-gold"></i> Bông hoa nở to từ 5cm - 8cm, màu vàng tươi óng ả, thơm dịu</li>
                        <li><i class="fas fa-check-circle text-gold"></i> Cam kết giống chuẩn, bảo hành sức sống và thời điểm nở hoa</li>
                        <li><i class="fas fa-check-circle text-gold"></i> Giá cả tại vườn không qua trung gian, nhiều phân khúc giá hợp lý</li>
                    </ul>
                    <div class="service-action">
                        <a href="tel:<?php echo htmlspecialchars($cfg_hotline); ?>" class="btn-service-call">
                            <i class="fas fa-phone-alt"></i> Tư Vấn Mua Mai Tết
                        </a>
                        <a href="<?php echo htmlspecialchars($cfg_zalo); ?>" target="_blank" class="btn-service-zalo">
                            <i class="fas fa-comment-dots"></i> Nhận Báo Giá Qua Zalo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Cột 2: Cho thuê hoa mai Tết -->
            <div class="service-box service-box-rent">
                <div class="service-box-header">
                    <div class="service-badge-icon"><i class="fas fa-calendar-check"></i></div>
                    <h3>CHO THUÊ HOA MAI TẾT</h3>
                    <p class="service-tag">Cơ Quan – Doanh Nghiệp – Khách Sạn – Biệt Thự</p>
                </div>
                <div class="service-box-body">
                    <p class="service-intro">
                        Dịch vụ cho thuê mai Tết trọn gói là giải pháp thông minh được hàng trăm công ty, ngân hàng, tòa nhà văn phòng 
                        và gia đình tại TP.HCM tin tưởng lựa chọn nhiều năm liền để mang tài lộc, may mắn về không gian Tết.
                    </p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle text-gold"></i> <strong>Tiết kiệm 50% - 70%</strong> chi phí so với mua mới</li>
                        <li><i class="fas fa-check-circle text-gold"></i> Không lo lắng bảo quản, chăm sóc hay cất giữ cây sau Tết</li>
                        <li><i class="fas fa-check-circle text-gold"></i> Miễn phí vận chuyển 2 chiều, bố trí chậu sứ &amp; đôn lót sang trọng</li>
                        <li><i class="fas fa-check-circle text-gold"></i> Nhân viên kỹ thuật đến chăm sóc tận nơi trong suốt những ngày Tết</li>
                    </ul>
                    <div class="service-action">
                        <a href="tel:<?php echo htmlspecialchars($cfg_hotline); ?>" class="btn-service-call">
                            <i class="fas fa-phone-alt"></i> Đặt Thuê Mai Tết Ngay
                        </a>
                        <a href="#form-dang-ky" class="btn-service-form">
                            <i class="fas fa-edit"></i> Đăng Ký Khảo Sát Tận Nơi
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dịch Vụ Và Nhu Cầu Mai Tết (4 Khâu từ Poster) -->
        <div class="tet-demand-wrapper">
            <div class="demand-header text-center">
                <h3 class="demand-title"><i class="fas fa-star text-gold"></i> DỊCH VỤ VÀ NHU CẦU MAI TẾT TOÀN DIỆN</h3>
                <p>Khép kín quy trình phục vụ tận tâm – Khách hàng luôn an tâm và hài lòng</p>
            </div>

            <div class="demand-grid">
                <div class="demand-card">
                    <div class="demand-icon">
                        <i class="fas fa-camera-retro"></i>
                    </div>
                    <h4>Hình Ảnh Bán Hoa Mai Tết</h4>
                    <p>Hình ảnh và video thực tế 100% từng góc cạnh của cây mai tại vườn Thới An giúp khách hàng dễ dàng chọn lựa từ xa mà không cần tốn công đi lại.</p>
                </div>

                <div class="demand-card">
                    <div class="demand-icon">
                        <i class="fas fa-images"></i>
                    </div>
                    <h4>Hình Ảnh Cho Thuê Hoa Mai Tết</h4>
                    <p>Bộ sưu tập mai cho thuê đã vào chậu đẹp mắt, gắn phụ kiện câu đối tài lộc, chuẩn bị chu đáo để bàn giao trước ngày 20 - 25 tháng Chạp.</p>
                </div>

                <div class="demand-card">
                    <div class="demand-icon">
                        <i class="fas fa-users-gear"></i>
                    </div>
                    <h4>Nhu Cầu Mua Và Thuê Mai Tết</h4>
                    <p>Tư vấn chọn thế mai hợp phong thủy, cân đối diện tích sảnh chờ, phòng khách, phòng họp với mức chi phí tối ưu nhất cho từng khách hàng.</p>
                </div>

                <div class="demand-card highlight-card">
                    <div class="demand-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h4>Vận Chuyển Giao Cho Khách Hàng</h4>
                    <p>Đội ngũ xe tải chuyên dụng cẩn thận chằng buộc, giao nhận hoa mai tận nơi tại TP.HCM và các tỉnh lân cận an toàn, đúng giờ hoàng đạo.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================== -->
<!-- SECTION 7: BẢNG GIÁ DỊCH VỤ THAM KHẢO                          -->
<!-- ============================================================== -->
<section class="tet-section section-pricing" id="bang-gia">
    <div class="container">
        <div class="section-header text-center">
            <span class="sub-title"><i class="fas fa-tag text-gold"></i> BẢNG GIÁ DỊCH VỤ <i class="fas fa-tag text-gold"></i></span>
            <h2 class="section-title">CHI PHÍ MINH BẠCH – GÓI DỊCH VỤ LINH HOẠT</h2>
            <div class="title-divider">
                <span class="divider-line"></span>
                <i class="fas fa-coins text-gold"></i>
                <span class="divider-line"></span>
            </div>
            <p class="section-desc">Giá cả công khai, hợp đồng biên nhận rõ ràng, cam kết không phát sinh bất kỳ chi phí nào ngoài thỏa thuận.</p>
        </div>

        <div class="pricing-grid">
            <!-- Gói 1 -->
            <div class="pricing-card">
                <div class="pricing-header">
                    <h3 class="plan-name">Mai Bonsai / Để Bàn</h3>
                    <div class="plan-badge">Gói Nhỏ</div>
                    <div class="plan-price">
                        <span class="currency">Chỉ từ</span>
                        <strong class="amount">800.000</strong>
                        <span class="unit">đ/năm</span>
                    </div>
                </div>
                <div class="pricing-body">
                    <ul class="plan-features">
                        <li><i class="fas fa-check text-success"></i> Đường kính hoành &lt; 20cm</li>
                        <li><i class="fas fa-check text-success"></i> Cắt tỉa, thay giá thể đất mới</li>
                        <li><i class="fas fa-check text-success"></i> Chế độ phân bón vi sinh trọn gói</li>
                        <li><i class="fas fa-check text-success"></i> Cam kết hoa nở đúng Tết</li>
                        <li><i class="fas fa-check text-success"></i> Hỗ trợ giao nhận nội thành</li>
                    </ul>
                    <a href="tel:<?php echo htmlspecialchars($cfg_hotline); ?>" class="btn-pricing">Đăng Ký Gói Này</a>
                </div>
            </div>

            <!-- Gói 2 - Phổ Biến Nhất -->
            <div class="pricing-card featured">
                <div class="popular-ribbon">PHỔ BIẾN NHẤT</div>
                <div class="pricing-header">
                    <h3 class="plan-name">Mai Trung Sân Vườn</h3>
                    <div class="plan-badge">Gói Tiêu Chuẩn</div>
                    <div class="plan-price">
                        <span class="currency">Chỉ từ</span>
                        <strong class="amount">1.500.000</strong>
                        <span class="unit">đ/năm</span>
                    </div>
                </div>
                <div class="pricing-body">
                    <ul class="plan-features">
                        <li><i class="fas fa-check text-success"></i> Đường kính hoành 20cm - 40cm</li>
                        <li><i class="fas fa-check text-success"></i> Uốn tỉa, tạo dáng thế phong thủy</li>
                        <li><i class="fas fa-check text-success"></i> Thay chậu, dưỡng rễ chuyên sâu</li>
                        <li><i class="fas fa-check text-success"></i> Nuôi nụ hoa mập dày cánh</li>
                        <li><i class="fas fa-check text-success"></i> Cam kết hoa nở rực rỡ mùng 1 Tết</li>
                        <li><i class="fas fa-check text-success"></i> Đội xe giao nhận tận nơi an toàn</li>
                    </ul>
                    <a href="tel:<?php echo htmlspecialchars($cfg_hotline); ?>" class="btn-pricing btn-featured">Đăng Ký Gói Này</a>
                </div>
            </div>

            <!-- Gói 3 -->
            <div class="pricing-card">
                <div class="pricing-header">
                    <h3 class="plan-name">Mai Đại Thụ / Mai Cổ</h3>
                    <div class="plan-badge">Gói VIP</div>
                    <div class="plan-price">
                        <span class="currency">Chỉ từ</span>
                        <strong class="amount">3.000.000</strong>
                        <span class="unit">đ/năm</span>
                    </div>
                </div>
                <div class="pricing-body">
                    <ul class="plan-features">
                        <li><i class="fas fa-check text-success"></i> Đường kính hoành &gt; 40cm</li>
                        <li><i class="fas fa-check text-success"></i> Nghệ nhân thâm niên trực tiếp chăm sóc</li>
                        <li><i class="fas fa-check text-success"></i> Chế độ dinh dưỡng đặc biệt cho mai già</li>
                        <li><i class="fas fa-check text-success"></i> Khuôn viên dưỡng cây VIP có mái che</li>
                        <li><i class="fas fa-check text-success"></i> Bảo hiểm cây mai giá trị cao</li>
                        <li><i class="fas fa-check text-success"></i> Xe cẩu chuyên dụng giao tận phòng khách</li>
                    </ul>
                    <a href="tel:<?php echo htmlspecialchars($cfg_hotline); ?>" class="btn-pricing">Liên Hệ Báo Giá VIP</a>
                </div>
            </div>

            <!-- Gói 4: Thuê Mai Doanh Nghiệp -->
            <div class="pricing-card">
                <div class="pricing-header">
                    <h3 class="plan-name">Thuê Mai Doanh Nghiệp</h3>
                    <div class="plan-badge">Trọn Gói Tết</div>
                    <div class="plan-price">
                        <span class="currency">Chỉ từ</span>
                        <strong class="amount">2.500.000</strong>
                        <span class="unit">đ/mùa</span>
                    </div>
                </div>
                <div class="pricing-body">
                    <ul class="plan-features">
                        <li><i class="fas fa-check text-success"></i> Mai chưng Tết từ 1.5m đến 4m</li>
                        <li><i class="fas fa-check text-success"></i> Chậu sứ cao cấp, đôn gỗ sang trọng</li>
                        <li><i class="fas fa-check text-success"></i> Trang trí bao lì xì, dây đỏ may mắn</li>
                        <li><i class="fas fa-check text-success"></i> Miễn phí vận chuyển giao và nhận lại</li>
                        <li><i class="fas fa-check text-success"></i> Xuất hóa đơn VAT đầy đủ theo yêu cầu</li>
                    </ul>
                    <a href="tel:<?php echo htmlspecialchars($cfg_hotline); ?>" class="btn-pricing">Đặt Thuê Công Ty</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================== -->
<!-- SECTION 8: BỘ SƯU TẬP HÌNH ẢNH VƯỜN MAI & POSTER              -->
<!-- ============================================================== -->
<section class="tet-section section-gallery" id="hinh-anh">
    <div class="container">
        <div class="section-header text-center">
            <span class="sub-title"><i class="fas fa-camera text-gold"></i> BỘ SƯU TẬP HÌNH ẢNH <i class="fas fa-camera text-gold"></i></span>
            <h2 class="section-title">HÌNH ẢNH THỰC TẾ TẠI VƯỜN MAI ANH DŨNG Q.12</h2>
            <div class="title-divider">
                <span class="divider-line"></span>
                <i class="fas fa-images text-gold"></i>
                <span class="divider-line"></span>
            </div>
            <p class="section-desc">Những gốc mai nở rực sắc vàng óng ả và các ấn phẩm thông tin chính thức từ Vườn Mai Anh Dũng Q.12 – Phường Thới An, Quận 12</p>
        </div>

        <div class="gallery-grid">
            <!-- Poster Infographic Toàn Diện -->
            <div class="gallery-item full-poster-card">
                <div class="poster-preview-box">
                    <img src="<?php echo base_url(); ?>images/poster_mai_anh_dung_full.jpg" alt="Poster Vườn Mai Anh Dũng Q.12" onerror="this.src='<?php echo base_url(); ?>images/infographic_mai_2.jpg'; this.onerror=null;">
                    <div class="poster-overlay">
                        <span class="overlay-tag"><i class="fas fa-search-plus"></i> Xem Ấn Phẩm Đầy Đủ</span>
                        <h4>POSTER VƯỜN MAI ANH DŨNG Q.12</h4>
                        <p>Hướng dẫn trọn gói Ký Gửi, Mua Bán &amp; Cho Thuê Mai Tết</p>
                    </div>
                </div>
            </div>

            <!-- Thẻ Giới Thiệu Hotline & Địa chỉ -->
            <div class="gallery-item info-feature-card">
                <div class="feature-card-content">
                    <div class="feature-logo">
                        <img src="<?php echo base_url(); ?>images/logo.png" alt="Logo" onerror="this.src='<?php echo base_url(); ?>images/logo_mai_anh_dung.png';">
                    </div>
                    <h3>VƯỜN MAI ANH DŨNG Q.12</h3>
                    <p class="feature-slogan">CHĂM SÓC CHUYÊN NGHIỆP – HÀI LÒNG BỀN VỮNG</p>
                    <div class="feature-meta">
                        <div class="meta-row">
                            <i class="fas fa-map-marker-alt text-gold"></i>
                            <span><?php echo htmlspecialchars($cfg_address); ?></span>
                        </div>
                        <div class="meta-row">
                            <i class="fas fa-phone-alt text-gold"></i>
                            <span>Hotline: <strong><?php echo htmlspecialchars($cfg_hotline_display); ?></strong></span>
                        </div>
                        <div class="meta-row">
                            <i class="fas fa-envelope text-gold"></i>
                            <span>Email: <?php echo htmlspecialchars($cfg_email); ?></span>
                        </div>
                        <div class="meta-row">
                            <i class="fab fa-facebook-f text-gold"></i>
                            <span>Facebook: <a href="<?php echo htmlspecialchars($cfg_fb); ?>" target="_blank" rel="noopener noreferrer" style="color: inherit; font-weight: 600; text-decoration: underline;">Vườn Mai Anh Dũng Q.12</a></span>
                        </div>
                    </div>
                    <div class="feature-btns">
                        <a href="tel:<?php echo htmlspecialchars($cfg_hotline); ?>" class="btn-tet-primary">
                            <i class="fas fa-phone-volume"></i> Gọi Ngay 0909.688.810
                        </a>
                        <a href="<?php echo htmlspecialchars($cfg_zalo); ?>" target="_blank" class="btn-tet-zalo">
                            <i class="fas fa-comments"></i> Nhắn Tin Zalo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================== -->
<!-- SECTION 9: FORM ĐĂNG KÝ TƯ VẤN & BÁO GIÁ NHANH                -->
<!-- ============================================================== -->
<section class="tet-section section-contact-form" id="form-dang-ky">
    <div class="container">
        <div class="form-wrapper-box">
            <div class="form-left-info">
                <span class="badge-contact"><i class="fas fa-gift"></i> ƯU ĐÃI ĐÓN TẾT</span>
                <h3>ĐĂNG KÝ TƯ VẤN &amp; ĐẶT LỊCH KÝ GỬI MAI</h3>
                <p>Để lại thông tin hoặc liên hệ trực tiếp với Vườn Mai Anh Dũng Q.12 để nhận tư vấn kỹ thuật miễn phí và báo giá ưu đãi tốt nhất dịp Tết này!</p>
                
                <div class="contact-info-list">
                    <div class="c-info-item">
                        <div class="c-icon"><i class="fas fa-map-marked-alt"></i></div>
                        <div class="c-text">
                            <strong>Địa chỉ vườn:</strong>
                            <span><?php echo htmlspecialchars($cfg_address); ?></span>
                        </div>
                    </div>
                    <div class="c-info-item">
                        <div class="c-icon"><i class="fas fa-phone-volume"></i></div>
                        <div class="c-text">
                            <strong>Hotline tư vấn 24/7:</strong>
                            <a href="tel:<?php echo htmlspecialchars($cfg_hotline); ?>" class="c-link"><?php echo htmlspecialchars($cfg_hotline_display); ?></a>
                        </div>
                    </div>
                    <div class="c-info-item">
                        <div class="c-icon"><i class="fas fa-comment-dots"></i></div>
                        <div class="c-text">
                            <strong>Zalo kết nối nhanh:</strong>
                            <a href="<?php echo htmlspecialchars($cfg_zalo); ?>" target="_blank" class="c-link">0909.688.810 (Vườn Mai Anh Dũng Q.12)</a>
                        </div>
                    </div>
                    <div class="c-info-item">
                        <div class="c-icon"><i class="fab fa-facebook-f"></i></div>
                        <div class="c-text">
                            <strong>Fanpage Facebook chính thức:</strong>
                            <a href="<?php echo htmlspecialchars($cfg_fb); ?>" target="_blank" rel="noopener noreferrer" class="c-link">Vườn Mai Anh Dũng Q.12 (Theo dõi hình ảnh tại vườn)</a>
                        </div>
                    </div>
                    <div class="c-info-item">
                        <div class="c-icon"><i class="fas fa-clock"></i></div>
                        <div class="c-text">
                            <strong>Thời gian mở cửa:</strong>
                            <span>6h30 – 19h00 (Phục vụ tất cả các ngày trong tuần, kể cả ngày lễ Tết)</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-right-card">
                <h4 class="form-title"><i class="fas fa-envelope-open-text text-gold"></i> GỬI YÊU CẦU CHO NHÀ VƯỜN</h4>
                <form action="<?php echo base_url(); ?>contact" method="post" class="tet-consult-form" id="tetConsultForm">
                    <div class="form-group">
                        <label for="txtName"><i class="fas fa-user"></i> Họ và Tên của bạn <span class="text-danger">*</span></label>
                        <input type="text" id="txtName" name="cname" class="form-control" placeholder="Ví dụ: Anh Dũng, Chị Mai..." required>
                    </div>

                    <div class="form-group">
                        <label for="txtPhone"><i class="fas fa-phone"></i> Số Điện Thoại / Zalo <span class="text-danger">*</span></label>
                        <input type="tel" id="txtPhone" name="cphone" class="form-control" placeholder="Ví dụ: 0909xxxxxx" required>
                    </div>

                    <div class="form-group">
                        <label for="txtService"><i class="fas fa-list-ul"></i> Dịch Vụ Quý Khách Quan Tâm</label>
                        <select id="txtService" name="cservice" class="form-control">
                            <option value="ky_gui">Ký Gửi Chăm Sóc Hoa Mai Sau Tết</option>
                            <option value="thue_mai">Cho Thuê Hoa Mai Tết (Công ty, Văn phòng, Gia đình)</option>
                            <option value="mua_mai">Mua Bán Hoa Mai Tết Các Loại</option>
                            <option value="van_chuyen">Dịch Vụ Vận Chuyển Hoa Mai Tận Nơi</option>
                            <option value="khac">Tư Vấn Kỹ Thuật Uốn Tỉa, Ép Bông</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="txtNote"><i class="fas fa-comment-alt"></i> Ghi Chú Thêm Về Cây Mai</label>
                        <textarea id="txtNote" name="cnote" class="form-control" rows="3" placeholder="Ví dụ: Cây mai hoành 30cm, cần tỉa lại cành hoặc giao tại Quận Gò Vấp..."></textarea>
                    </div>

                    <button type="submit" class="btn-submit-tet">
                        <i class="fas fa-paper-plane"></i> GỬI YÊU CẦU TƯ VẤN NGAY
                    </button>
                    <p class="form-privacy-note">
                        <i class="fas fa-lock text-success"></i> Chúng tôi cam kết bảo mật 100% thông tin của quý khách!
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================== -->
<!-- SECTION 10: GOOGLE MAPS & ĐỊNH VỊ VƯỜN MAI                     -->
<!-- ============================================================== -->
<section class="tet-section section-map" id="lien-he">
    <div class="container">
        <div class="section-header text-center">
            <span class="sub-title"><i class="fas fa-compass text-gold"></i> BẢN ĐỒ ĐẾN VƯỜN <i class="fas fa-compass text-gold"></i></span>
            <h2 class="section-title">VỊ TRÍ VƯỜN MAI ANH DŨNG Q.12</h2>
            <div class="title-divider">
                <span class="divider-line"></span>
                <i class="fas fa-map-marker-alt text-gold"></i>
                <span class="divider-line"></span>
            </div>
            <p class="section-desc">Phường Thới An, Quận 12, TP. Hồ Chí Minh – Đường rộng thoáng, xe tải lớn ra vào thuận tiện bốc dỡ hoa mai</p>
            <div class="map-action-btns text-center" style="margin-top: 18px; margin-bottom: 25px;">
                <a href="<?php echo htmlspecialchars($cfg_map); ?>" target="_blank" rel="noopener noreferrer" class="btn-tet-primary" style="display: inline-flex; align-items: center; gap: 8px; text-decoration: none; margin: 4px;">
                    <i class="fas fa-map-marked-alt"></i> Mở Bản Đồ Chỉ Đường (Google Maps)
                </a>
                <a href="tel:<?php echo htmlspecialchars($cfg_hotline); ?>" class="btn-tet-secondary" style="display: inline-flex; align-items: center; gap: 8px; text-decoration: none; margin: 4px;">
                    <i class="fas fa-phone-alt"></i> Hướng Dẫn Đường Đi: <?php echo htmlspecialchars($cfg_hotline_display); ?>
                </a>
            </div>
        </div>

        <div class="map-container-box">
            <iframe src="https://maps.google.com/maps?q=V%C6%B0%E1%BB%9Dn+Mai+Anh+D%C5%A9ng+Qu%E1%BA%ADn+12&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Bản đồ Vườn Mai Anh Dũng Q.12 Thới An"></iframe>
        </div>
    </div>
</section>

<?php 
   $this->load->view('modules/mod_footer');
   $this->load->view('footer');
?>
