<!doctype html>
<html lang="en">
  
<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/07-03-2020/estate_liberty-demo_Free/58112989/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jun 2025 16:10:20 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Estate Agent a Real Estate Category Bootstrap Responsive Website Template | Home :: W3layouts</title>
    <!-- web fonts -->
    <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Hind&amp;display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?=base_url('static/home/');?>assets/css/style-liberty.css">
  </head>
  <body>


<!-- Top Menu 1 -->
<section class="w3l-top-menu-1">
	<div class="top-hd">
		<div class="container">
	<header class="row">
		<div class="social-top col-lg-3 col-6">
			<li>Follow Us</li>
			<li><a href="#"><span class="fa fa-facebook"></span></a></li>
			<li><a href="#"><span class="fa fa-instagram"></span></a> </li>
				<li><a href="#"><span class="fa fa-twitter"></span></a></li>
				<li><a href="#"><span class="fa fa-vimeo"></span></a> </li>
		</div>
		<div class="accounts col-lg-9 col-6">
				<li class="top_li"><span class="fa fa-mobile"></span><a href="tel:+142 5897555">8788278367</a> </li>
        <?php $session = session(); if($session->get('user_id')==''){ ?>
				<li class="top_li1"><a href="<?=base_url('login');?>">Login</a></li>
				<li class="top_li2"><a href="<?=base_url('register');?>">Register</a></li>
        <?php }else{ ?>
          <li class="top_li1"><a href="<?=base_url('welcome');?>">Welcome <?=ucwords($session->get('fullname'));?></a></li>
				  <li class="top_li2"><a href="<?=base_url('signout');?>">Logout</a></li>
        <?php } ?>
		</div>
		
	</header>
</div>
</div>
</section>
<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
      <a class="navbar-brand" href="<?=base_url();?>"><span class="fa fa-home"></span> Estate Agent</a>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url();?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('about');?>">About</a>
          </li>
        
          <li class="nav-item mr-0">
            <a class="nav-link" href="<?=base_url('contact');?>">Contact</a>
          </li>
        </ul>
       
      </div>
    </div>
  </nav>
</section>

