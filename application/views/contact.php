<?php 
   $this->load->view('header');
   $this->load->view('header_end');	
   $this->load->view('modules/mod_header');		
?>
<style>
    /* Hiệu ứng hover cho các thẻ */
    .contact-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #fff;
    }
    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
	.contact-card {
    padding: 20px 12px !important;
}
	.contact-card i {
    font-size: 50px;
	color: #ffce1c !important;
}
.contact-card h5 {
    color: #000;
}
    
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<!-- header-end -->
      <main>
         <!-- breadcrumb-area -->
         <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?php echo base_url(); ?>images/test-bg.png)">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                     <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mt-100 mb-30">
                           <h2>Liên hệ</h2>
                        </div>
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Trang chủ</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb-area-end -->
         <!-- contact-area -->
         <section id="contact" class="contact-area contact-bg pt-120 pb-120 p-relative fix">
            <div class="container">
				<div class="row">
                  <div class="container py-5">
				 
    <div class="row align-items-center text-center">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div class="contact-card p-4 border rounded shadow-sm">
                <i class="bi bi-geo-alt-fill fs-2 text-primary"></i>
                <h5 class="mt-3">Địa chỉ</h5>
                <p class="text-muted mb-0"><?php echo get_value_by_config(20); ?></p>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div class="contact-card p-4 border rounded shadow-sm">
                <i class="bi bi-envelope-fill fs-2 text-primary"></i>
                <h5 class="mt-3">Email</h5>
                <p class="mb-0">
                    <a href="mailto:<?php echo get_value_by_config(1); ?>" class="text-decoration-none text-muted"><?php echo get_value_by_config(1); ?></a>
                </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-12">
            <div class="contact-card p-4 border rounded shadow-sm">
                <i class="bi bi-telephone-fill fs-2 text-primary"></i>
                <h5 class="mt-3">Hotline</h5>
                <p class="mb-0">
                    <a href="tel:+<?php echo get_value_by_config(12); ?>" class="text-decoration-none text-muted"><?php echo get_value_by_config(12); ?> - <?php echo get_value_by_config(14); ?></a>
                </p>
            </div>
        </div>
    </div>
</div>
               </div>
			   <div style="height:50px;"></div>
               <div class="row">
                  <div class="col-lg-6">
                     <div class="section-title mb-60" >
                        <span>Liên hệ</span>
                        <h2>Gửi thông tin của bạn</h2>
                     </div>
                     <form action="#" class="contact-form" >
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="contact-field p-relative c-name mb-20">                                    
                                 <input type="text" placeholder="Họ tên">
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="contact-field p-relative c-name mb-20">                                    
                                 <input type="text" placeholder="Số điện thoại">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="contact-field p-relative c-email mb-20">                                    
                                 <input type="text" placeholder="Email">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="contact-field p-relative c-subject mb-20">                                   
                                 <input type="text" placeholder="Tiêu đề">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="contact-field p-relative c-message mb-45">                                  
                                 <textarea name="message" id="message" cols="30" rows="10" placeholder="Nội dung"></textarea>
                              </div>
                              <div class="slider-btn">                                          
                                 <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Gửi thư</a>					
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-lg-6">
                     <iframe src="https://maps.google.com/maps?q=V%C6%B0%E1%BB%9Dn+Mai+Anh+D%C5%A9ng+Qu%E1%BA%ADn+12&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Bản đồ Vườn Mai Anh Dũng Q.12 Thới An"></iframe>
                  </div>
               </div>
               
            </div>
         </section>
         <!-- contact-area-end -->
      </main>
      <!-- main-area-end -->              
<?php 
	$this->load->view('modules/mod_footer');
   $this->load->view('footer');
?>