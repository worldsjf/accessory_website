<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?=$this->config->config["pageTitle"]?></title>
    <link href="<?php echo base_url('frontend/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('frontend/css/prettyPhoto.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('frontend/css/price-range.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('frontend/css/animate.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('frontend/css/main.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('frontend/css/responsive.css')?>" rel="stylesheet">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header">
		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 0999.999.999</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> nhom1_accessory@gmail.com</a></li>
							</ul>
						</div>
					</div>
					
<div class="col-sm-6">
    <div class="social-icons pull-right">
        <ul class="nav navbar-nav">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
        </ul>
    </div>
</div>
				</div>
			</div>
		</div>
		<!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
			
			<div class="col-sm-4">
			
			<div class="logo pull-left">
							<a href="#"><img style="width: 300px; height: 111px;" src="http://localhost:7890/images/home/logo.png" alt="" /></a>
						</div>
					<div class="btn-group pull-right">
					
					</div>
				</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							
								<?php
								if($this->session->userdata('LoggedInCustomer')){
								?>
								<li><a href="#"><i class="fa fa-user"></i> Account</a>:<?php echo $this->session->userdata('LoggedInCustomer')['username'] ?> </li>
								
								<li><a href="<?php echo base_url('checkout') ?>"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="<?php echo base_url('dang-xuat') ?>"><i class="fa fa-lock"></i> Logout</a></li>
								<?php
								}else{
								?>
								<li><a href="<?php echo base_url('dang-nhap') ?>"><i class="fa fa-lock"></i> Login</a></li>
								<?php
								}
								?>
								<li><a href="<?php echo base_url('gio-hang') ?>"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo base_url('/')?>" class="active">HOME</a></li>
								<li class="dropdown"><a href="#">SHOP<i class="fa fa-angle-down"></i></a>
								<ul role="menu" class="sub-menu">
                                        <li><a href="http://localhost:7890/danh-muc/3/vo-case">VỎ CASE</a></li>
										<li><a href="http://localhost:7890/danh-muc/7/tan-nhiet">TẢN NHIỆT</a></li>
										<li><a href="http://localhost:7890/danh-muc/8/mainboard">MAINBOARD</a></li>
										<li><a href="http://localhost:7890/danh-muc/9/chuot">CHUỘT</a></li>
										<li><a href="http://localhost:7890/danh-muc/10/ban-phim">BÀN PHÍM</a></li>
										<li><a href="http://localhost:7890/danh-muc/11/card-man-hinh">CARD MÀN HÌNH</a></li>
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">BRANDS<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="http://localhost:7890/thuong-hieu/6/nzxt">NZXT</a></li>
										<li><a href="http://localhost:7890/thuong-hieu/7/asus">ASUS</a></li>
										<li><a href="http://localhost:7890/thuong-hieu/8/corsair">CORSAIR</a></li>
										<li><a href="http://localhost:7890/thuong-hieu/9/gigabyte">GIGABYTE</a></li>
										<li><a href="http://localhost:7890/thuong-hieu/10/msi">MSI</a></li>
                                    </ul>
                                </li> 
								
								<li><a href="<?php echo base_url('contact') ?>">CONTACT</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-">
					<div class="search_box pull-right">
						<form method="GET" autocomplete="off" action="<?php echo base_url('tim-kiem') ?>">
						<input type="text" name="keyword" placeholder="Tìm kiếm sản phẩm..."/>
						<input type="submit" style="margin: 0; color:#fff" name="timkiem" value="Tìm kiếm" class="btn btn-primary" />
						</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->