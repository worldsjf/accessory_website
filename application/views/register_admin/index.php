



<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Admin Web</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url('backend/css/style.css'); ?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('backend/css/style-responsive.css'); ?>" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url('backend/css/font.css'); ?>" type="text/css"/>
<link href="<?php echo base_url('backend/css/font-awesome.css'); ?>" rel="stylesheet">
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="container">
    <h2>Sign Up Admin</h2>
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
<form action="<?php echo base_url('register-insert')?>" method="POST"> 
  <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username...">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      <?php echo form_error('username'); ?>
  </div>  
  <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      <?php echo form_error('email'); ?>
  </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      <?php echo form_error('password'); ?>
  </div>
<a href="<?php echo base_url('login')?>" class="btn btn-primary">Back</a>
<button type="submit" class="btn btn-primary">Sign Up Admin</button>
</form>
</div>
</div>
<script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.dcjqaccordion.2.7.js'); ?>"></script>
<script src="<?php echo base_url('js/scripts.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.slimscroll.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.nicescroll.js'); ?>"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php echo base_url('js/flot-chart/excanvas.min.js'); ?>"></script><![endif]-->
<script src="<?php echo base_url('js/jquery.scrollTo.js'); ?>"></script>

</body>
</html>
