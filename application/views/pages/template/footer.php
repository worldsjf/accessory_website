<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-accessory</h2>
							<p>Welcome to E-ACCESSORY - The perfect destination for stylish computer accessories!</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="http://localhost:7890/images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>NZXT</p>
								<h2>24 DEC 2023</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="http://localhost:7890/images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>ASUS</p>
								<h2>10 AUG 2023</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="http://localhost:7890/images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>CORSAIR</p>
								<h2>10 AUG 2023</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="http://localhost:7890/images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>GIGABYTE</p>
								<h2>10 AUG 2023</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>79 Hồ Tùng Mậu</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Giới thiệu về công ty</a></li>
								<li><a href="#">Chính sách bảo mật</a></li>
								<li><a href="#">Quy chế hoạt động</a></li>
								<li><a href="#">Kiểm tra hóa đơn điện tử</a></li>
								<li><a href="#">Tra cứu thông tin bảo hành</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Online</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Tin khuyến mãi</a></li>
								<li><a href="#">Hướng dẫn mua online</a></li>
								<li><a href="#">Hướng dẫn mua trả góp</a></li>
								<li><a href="#">Chính sách trả góp</a></li>
								
							</ul>
						</div>
					</div>
					
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Hệ thống cửa hàng</a></li>
								<li><a href="#">Chính sách đổi trả</a></li>
								<li><a href="#">Hệ thống bảo hành</a></li>
								<li><a href="#">Giới thiệu máy đổi trả</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left"> ©  2023 Accessory Inc. Nhóm 1</p>
					
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
	
  
    <script src="<?php echo base_url('frontend/js/jquery.js') ?>"></script>
	<script src="<?php echo base_url('frontend/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('frontend/js/jquery.scrollUp.min.js') ?>"></script>
	<script src="<?php echo base_url('frontend/js/price-range.js') ?>"></script>
    <script src="<?php echo base_url('frontend/js/jquery.prettyPhoto.js') ?>"></script>
    <script src="<?php echo base_url('frontend/js/main.js') ?>"></script>
	<script>
    $('.write-comment').click(function() {
        var name_comment = $('.name_comment').val();
        var email_comment = $('.email_comment').val();
        var comment = $('.comment').val();
		var pro_id = $('.product_id_comment').val();

        if (name_comment === '' || email_comment === '' || comment === '') {
            alert('Vui lòng điền đầy đủ thông tin.');
        } else {
            $.ajax({
                method: 'POST',
                url: '/comment/send',
                data: { name_comment: name_comment, email_comment: email_comment, comment: comment ,pro_id:pro_id},
                success: function(response) {
                    alert('Cảm ơn bạn đã đánh giá sản phẩm.');
                },
                error: function(xhr, status, error) {
                    alert('Có lỗi xảy ra. Vui lòng thử lại sau.');
                }
            });
        }
    });
</script>

</body>
</html>