<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
  <head>
    <title>Pet Sitting - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="<?php echo base_url('FontendAssets/css/animate.css'); ?>">
    
    <link rel="stylesheet" href="<?php echo base_url('FontendAssets/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('FontendAssets/css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('FontendAssets/css/magnific-popup.css'); ?>">


    <link rel="stylesheet" href="<?php echo base_url('FontendAssets/css/bootstrap-datepicker.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('FontendAssets/css/jquery.timepicker.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('FontendAssets/css/flaticon.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('FontendAssets/css/style.css'); ?>">
  </head>
  <body>

    <div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a> 
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="<?= base_url('/') ?>"><span class="flaticon-pawprint-1 mr-2"></span>Pet sitting</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<?php if (!empty($headers)): ?>
	        		<?php foreach ($headers as $item): ?>
	        			<li class="nav-item"><a href="<?= (strpos($item['header_url'], 'http') === 0) ? esc($item['header_url']) : base_url(ltrim($item['header_url'], '/')) ?>" class="nav-link"><?= esc($item['header_title']) ?></a></li>
	        		<?php endforeach; ?>
	        	<?php else: ?>
	        		<li class="nav-item active"><a href="<?= base_url('home') ?>" class="nav-link">Home</a></li>
	        		<li class="nav-item"><a href="#" class="nav-link">About</a></li>
	        		<li class="nav-item"><a href="#" class="nav-link">Veterinarian</a></li>
	        		<li class="nav-item"><a href="#" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Gallery</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
	        	<?php endif; ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
=======

<head>
    <meta charset="utf-8">
    <title>PET SHOP - Pet Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url('FontendAssets/img/favicon.ico') ?>" rel="icon">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('FontendAssets/lib/flaticon/font/flaticon.css') ?>" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url('FontendAssets/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('FontendAssets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('FontendAssets/css/style.css') ?>" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid border-bottom d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Our Office</h6>
                        <span>123 Street, New York, USA</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <span>info@example.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Call Us</h6>
                        <span>+012 345 6789</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <?php if (session()->getFlashdata('admin_error')): ?>
  <div class="alert alert-danger">
    <?= session()->getFlashdata('admin_error') ?>
  </div>
<?php endif; ?>
    <?php if (session()->getFlashdata('auth_error')): ?>
  <div class="alert alert-danger">
    <?= session()->getFlashdata('auth_error') ?>
  </div>
<?php endif; ?>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.html" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>Pet Shop</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <a href="product.html" class="nav-item nav-link">Product</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="team.html" class="dropdown-item">The Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        <?php if (session()->get('logged_in')): ?>
            <a href="<?= site_url('logout') ?>" class="dropdown-item">Log Out</a>
            <?php endif; ?>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Contact <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
>>>>>>> 3a6179a23b281024741b27a42226f0c5599bac99
    <!-- Navbar End -->