<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo base_url('/dashboard'); ?>">ADMIN CMS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto"> 
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('/dashboard'); ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBrand" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Brand
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownBrand">
            <a class="dropdown-item" href="<?php echo base_url('brand/create') ?>">Add Brand</a>
            <a class="dropdown-item" href="<?php echo base_url('brand/list') ?>">List Brand</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownSlider" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Slider
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownSlider">
            <a class="dropdown-item" href="<?php echo base_url('slider/create') ?>">Add Slider</a>
            <a class="dropdown-item" href="<?php echo base_url('slider/list') ?>">List Slider</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCategory" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownCategory">
            <a class="dropdown-item" href="<?php echo base_url('category/create') ?>">Add Category</a>
            <a class="dropdown-item" href="<?php echo base_url('category/list') ?>">List Category</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProduct" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Product
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownProduct">
            <a class="dropdown-item" href="<?php echo base_url('product/create') ?>">Add Product</a>
            <a class="dropdown-item" href="<?php echo base_url('product/list') ?>">List Product</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownOrder" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Order
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownOrder">
            <a class="dropdown-item" href="<?php echo base_url('order/list') ?>">List Order</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $this->session->userdata('LoggedIn')['username']; ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownUser">
            <a class="dropdown-item" href="<?php echo base_url('logout') ?>">Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</div>
