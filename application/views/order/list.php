


<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        NHOM1
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?php echo base_url('backend/images/2.png'); ?>">
                <span class="username"><?php echo $this->session->userdata('LoggedIn')['username']; ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="<?php echo base_url('logout') ?>"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                <a class="active" href="<?php echo base_url('/dashboard'); ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Brand</span>
                    </a>
                    <ul class="sub">
						
						<li><a class="dropdown-item" href="<?php echo base_url('brand/create') ?>">Add Brand</a></li>
                        <li> <a class="dropdown-item" href="<?php echo base_url('brand/list') ?>">List Brand</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Slider</span>
                    </a>
                    <ul class="sub">
						<li><a class="dropdown-item" href="<?php echo base_url('slider/create') ?>">Add Slider</a></li>
                        <li> <a class="dropdown-item" href="<?php echo base_url('slider/list') ?>">List Slider</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Category</span>
                    </a>
                    <ul class="sub">
						<li><a class="dropdown-item" href="<?php echo base_url('category/create') ?>">Add Category</a></li>
                        <li>  <a class="dropdown-item" href="<?php echo base_url('category/list') ?>">List Category</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Product</span>
                    </a>
                    <ul class="sub">
						<li> <a class="dropdown-item" href="<?php echo base_url('product/create') ?>">Add Product</a></li>
                        <li>  <a class="dropdown-item" href="<?php echo base_url('product/list') ?>">List Product</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Order</span>
                    </a>
                    <ul class="sub">
						<li><a class="dropdown-item" href="<?php echo base_url('order/list') ?>">List Order</a></li>
                       
                    </ul>
                </li>
                
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<h3>ADMIN</h3>
	</section>
 <!-- footer -->
 <div class="container">
<div class="card">
  <div class="card-header">
    List Order
  </div>
  <?php
  if($this->session->flashdata('success')){
    ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('success') ?></div>
   <?php
  }else{
    ?>
    <div ><?php echo $this->session->flashdata('error') ?></div>
    <?php
  }
   ?>  
  <div class="card-body">
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Order Code</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Status</th>
        <th scope="col">Manage</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($order  as $key => $ord){
      ?>
      <tr>
        <th scope="row"><?php echo $key ?></th>
        <td><?php echo $ord->order_code ?></td>
        <td><?php echo $ord->name ?></td>
        <td><?php echo $ord->phone ?></td>
        <td><?php echo $ord->address ?></td>
        
       
        <td>
          <?php
          if($ord->status==1){
            echo '<span class= "text text-primary">Đang chờ xử lý</span>';
          }elseif($ord->status==2){
            echo '<span class= "text text-success">Đã giao hàng</span>';
          }else{
            echo '<span class= "text text-danger">Đã hủy</span>';
          }
          ?>
        </td>
        <td>
          <a onclick="return confirm('Are you sure?')" href="<?php echo base_url('order/delete/'.$ord->order_code)?>" class="btn btn-danger">Delete</a>
          <a class= "btn btn-warning" href="<?php echo base_url('order/view/'.$ord->order_code)?>">View</a>
        </td>
      </tr>
      <?php
      }
      ?>
      
    </tbody>
  </table>
  </div>
</div>
</div>


  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="<?php echo base_url('backend/js/bootstrap.js'); ?>"></script>
<script src="<?php echo base_url('backend/js/jquery.dcjqaccordion.2.7.js'); ?>"></script>
<script src="<?php echo base_url('backend/js/scripts.js'); ?>"></script>
<script src="<?php echo base_url('backend/js/jquery.slimscroll.js'); ?>"></script>
<script src="<?php echo base_url('backend/js/jquery.nicescroll.js'); ?>"></script>

<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#000000',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
<script type="text/javascript" src="<?php echo base_url('backend/js/monthly.js'); ?>"></script>
<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
