<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
<title>Good-jek Pangkalpinang</title>
<meta name="description" content="">
<meta name="author" content="">
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!--[if lte IE 8]>
		<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
	<![endif]-->
<link rel="stylesheet" href="<?=base_url('assets/templates/css/bootstrap.min.css')?>" />
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templates/css/isotope.css')?>" media="screen" />
<link rel="stylesheet" href="<?=base_url('assets/templates/js/fancybox/jquery.fancybox.css')?>" type="text/css" media="screen" />
<link href="<?=base_url('assets/templates/css/animate.css')?>" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="<?=base_url('assets/templates/js/owl-carousel/owl.carousel.css')?>" rel="stylesheet">
<link rel="stylesheet" href="<?=base_url('assets/templates/css/styles.css')?>" />
<!-- Font Awesome -->
<link href="<?=base_url('assets/templates/font/css/font-awesome.min.css')?>" rel="stylesheet">
</head>

<body>
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> 
		<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
		</button>
        <a href="<?=base_url()?>" class="navbar-brand scroll-top logo animated bounceInLeft">
		<img style="margin-top:-25px;" src="<?=base_url('assets/brand/logo-goodjek-188x76.png')?>" /></a> <!--|| 188 x 76 => margin-top:-25px; -->
	  </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
          <li class="active" id="firstLink"><a href="#home" class="scroll-link">Home</a></li>
          <li><a href="#Features" class="scroll-link">Features</a></li>
          <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
          <li><a href="#work" class="scroll-link">Events</a></li>
          <!--<li><a href="#plans" class="scroll-link">Fees</a></li>-->
          <li><a href="#team" class="scroll-link">Management</a></li>
          <li><a href="<?=base_url('privacy')?>" class="scroll-link">Privacy</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
<!--/.header-->
<div id="#top"></div>
<section id="home">
  <div class="banner-container"> 
  	<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img src="<?=base_url('assets/banner/gocar-25persen_d.jpg')?>" alt="banner" /></div>
    <div class="item"><img src="<?=base_url('assets/banner/gosend-25persen_e.jpg')?>" alt="banner" /></div>
    <div class="item"><img src="<?=base_url('assets/banner/goride-25persen_b.jpg')?>" alt="banner" /></div>
    <div class="item"><img src="<?=base_url('assets/banner/goride-25persen.jpg')?>" alt="banner" /></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
</div>
	
  </div>  
  
  <div class="container hero-text2">        
		<div class="col-md-9">
		<h2>GOOD-JEK?</h2>
			<p>
			GOOD-JEK adalah sebuah layanan pesan antar yang menggunakan teknologi online yang bertujuan untuk mempermudahkan 
			pelanggan melakukan komunikasi dengan penyedia layanan GOOD-JEK. 
			GOOD-JEK menyediakan berbagai macam layanan, termasuk transportasi dan pesan antar makanan. 
			</p>
		</div>  
		<div class="col-md-3">
			<br/>
			<br/>
			<a href="#"><img src="<?=base_url('assets/brand/play-store.png')?>"></a>
		</div>
  </div>
</section>
<section id="Features" class="page-section colord">
  <div class="container">
    <div class="row"> 
      <!-- item -->
	  <div class="col-md-3 text-center"> 
      <a href="<?=base_url('Good-Jek')?>" class="link-unstyled">
	  <div class="box-item">
	  <i class="circle"><img src="<?=base_url('assets/brand/ic_ride_cut.png')?>" alt=""></i>
        <h3 style="color:#ffffff;">Good Ride</h3>
        <p style="color:#f4f4f4;">Dengan Good-jek, Anda bisa dengan mudah pergi ke suatu tempat di sekitar Pangkalpinang, Bangka Belitung.</p>
      </div>
	  </a>
	  </div>
      <!-- end: --> 
      
      <!-- item -->
	  <div class="col-md-3 text-center">
      <a href="<?=base_url('Good-Mart')?>" class="link-unstyled">
	  <div class="box-item">
	  <i class="circle"> <img src="<?=base_url('assets/brand/ic_mart_cut.png')?>" alt="" /></i>
        <h3 style="color:#ffffff;">Good Mart</h3>
        <p style="color:#f4f4f4;">Good Mart merupakan layanan untuk berblanja berbagai jenis barang di sekitar pangkalpiang, Bangka Belitung.</p>
      </div>
	  </a>
	  </div>
      <!-- end: --> 
      
      <!-- item -->
      <div class="col-md-3 text-center">
	  <a href="<?=base_url('Good-Food')?>" class="link-unstyled">
	  <div class="box-item">
	  <i class="circle"> <img src="<?=base_url('assets/brand/ic_food_cut.png')?>" alt="" /></i>
        <h3 style="color:#ffffff;">Good Food</h3>
        <p style="color:#f4f4f4;">Good Food merupakan layanan pesan antar makanan dan minuman yang ada di sekitar Pangkalpinang.</p>
      </div>
	  </a>
	  </div>
      <!-- end: --> 
      
      <!-- item -->
      <div class="col-md-3 text-center">
	  <a href="<?=base_url('good-jek')?>" class="link-unstyled">
	  <div class="box-item">
	  <i class="circle"> <img src="<?=base_url('assets/brand/ic_how_cut.png')?>" alt="" /></i>
        <h3 style="color:#ffffff;">Other Services</h3>
        <p style="color:#f4f4f4;">Temukan layanan-layanan berbasis teknologi lainya yang akan mempermudah Anda yang tinggal di Pangkalpinang.</p>
      </div>
      <!-- end:-->
	  </a>
	  </div>
    </div>
  </div>
  <!--/.container--> 
</section>
<section id="aboutUs">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2>About Us</h2>
      <p>GOOD-JEK telah beroperasi di sekitar Kota Pangkalpinang dan akan dikembangkan di daerah Bangka Belitung lainnya <br/>seperti Sungailiat, Koba, Mentok, Toboali dan Belitung.</p>
    </div>
    <div class="row feature design">
      <div class="area1 columns left">
        <h3>Apa yang bisa dilakukan Aplikasi ini?</h3>
        <p>
			Aplikasi ini memungkinkan Anda untuk mengirimkan permintaan untuk suatu Layanan kepada  Penyedia Layanan. 
			Penyedia Layanan memiliki kebijakan sendiri dan menyeluruh untuk menerima atau menolak setiap permintaan Anda atas Layanan.
		</p>
        <p>
			Kami akan melakukan semua upaya wajar untuk menghubungkan Anda dengan Penyedia Layanan untuk mendapatkan Layanan, 
			tergantung kepada keberadaan Penyedia Layanan di atau di sekitar lokasi Anda pada saat Anda melakukan pemesanan Layanan.
		</p>
		<a href="#" class="btn">Download .apk</a>
      </div>
      <div class="area2 columns feature-media right"> <img src="<?=base_url('assets/banner/2-orang.jpg')?>" alt="" width="100%"> </div>
    </div>
    <div class="row dataTxt">	
						<div class="col-md-4 col-sm-6">
							<h3>Our Services</h3>
							<p>Aplikasi ini merupakan aplikasi perangkat lunak yang berfungsi sebagai sarana untuk menemukan layanan  </p>
                            <p>
								Aplikasi ini merupakan aplikasi perangkat lunak yang berfungsi sebagai sarana untuk menemukan layanan menggunakan sepeda motor
								yang disediakan oleh pihak ketiga dalam hal ini adalah pengemudi ojek. Aplikasi ini menawarkan informasi tentang layanan yang 
								ditawarkan oleh Penyedia Layanan. Anda dapat melakukan permintaan melalui aplikasi.
							<p>
							<br>
						</div>
						
						<div class="col-md-4 col-sm-6">
							
							<h3>Layanan</h3>
							<p>Jenis layanan yang dapat diminta melalui Aplikasi adalah: </p>
                            <ul class="listArrow">
								<li>Kurir Instan</li>
								<li>Pengiriman makanan</li>
								<li>Pembelanjaan pribadi</li>
								<li>Layanan lain yang dapat kami tambahkan dari waktu ke waktu </li>
							</ul>
							<!-- Accordion starts -->
							</div>
						
						<div class="col-md-4 col-sm-6">
							
							<h3>Cara Penggunaan</h3>
							<p>Cara menggunakan layanan aplikasi GOOD-JEK setelah mengistal di Play Store</p>
                            <ul  class="list3">
								<li>Download aplikasi GOOD-JEK di Play Store</li>
								<li>Pilih salah satu tab menu pada aplikasi</li>
								<li>Isi data yang diinginkan pada aplikasi.</li> 
								<li>Tekan proses, maka pesanan akan diproses.</li> 
							</ul>
                            
							<!-- Accordion starts -->
							</div>
						
					</div>
  </div>
</section> 
<section id="work" class="page-section page">
  <div class="container text-center">
    <div class="heading">
      <h2>Events</h2>
      <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, alias enim placeat earum quos ab.</p>-->
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="portfolio">
          <ul class="filters list-inline">
            <li> <a class="active" data-filter="*" href="#">All</a> </li>
            <li> <a data-filter=".photography" href="#">Events</a> </li>
            <li> <a data-filter=".branding" href="#">Games</a> </li>
            <li> <a data-filter=".web" href="#">Science fair</a> </li>
          </ul>
          <ul class="items list-unstyled clearfix animated fadeInRight showing" data-animation="fadeInRight" style="position: relative; height: 438px;">
            <li class="item branding" style="position: absolute; left: 0px; top: 0px;"> 
								 			 
			  <figure class="effect-bubba">
						<img src="<?=base_url('assets/brand/qrcode.png')?>" alt="img02"/>
						<figcaption>
							<h2>B-Events</h2> 
							<a href="<?=base_url('assets/brand/qrcode.png')?>" class="fancybox">View more</a> 
						</figcaption>			
					</figure> 
					
			  </li>
			  
			 
			  
			  
            <li class="item photography" style="position: absolute; left: 292px; top: 0px;"> 
			<figure class="effect-bubba">
						<img src="<?=base_url('assets/banner/hut-ri.jpg')?>" alt="img02"/>
						<figcaption>
							<h2>B-Events</h2> 
							<a href="<?=base_url('assets/banner/hut-ri.jpg')?>" class="fancybox">View more</a> 
						</figcaption>			
					</figure> 
			  </li>
            <li class="item branding" style="position: absolute; left: 585px; top: 0px;"> 
			<figure class="effect-bubba">
						<img src="<?=base_url('assets/banner/kumpul.jpg')?>" alt="img02"/>
						<figcaption>
							<h2>B-Events</h2> 
							<a href="<?=base_url('assets/banner/kumpul.jpg')?>" class="fancybox">View more</a> 
						</figcaption>			
					</figure>  
			  </li>
            <li class="item photography" style="position: absolute; left: 877px; top: 0px;"> 
			<figure class="effect-bubba">
						<img src="<?=base_url('assets/banner/orang-tua.jpg')?>" alt="img02"/>
						<figcaption>
							<h2>B-Events</h2> 
							<a href="<?=base_url('assets/banner/orang-tua.jpg')?>" class="fancybox">View more</a> 
						</figcaption>			
					</figure>  
			  </li>
            <li class="item photography" style="position: absolute; left: 0px; top: 219px;"> 
			<figure class="effect-bubba">
						<img src="<?=base_url('assets/banner/orang-tua.jpg')?>" alt="img02"/>
						<figcaption>
							<h2>B-Events</h2> 
							<a href="<?=base_url('assets/banner/orang-tua.jpg')?>" class="fancybox">View more</a> 
						</figcaption>			
					</figure> 
			  </li>
            <li class="item web" style="position: absolute; left: 292px; top: 219px;"> 
			<figure class="effect-bubba">
						<img src="<?=base_url('assets/banner/orang-tua.jpg')?>" alt="img02"/>
						<figcaption>
							<h2>B-Events</h2> 
							<a href="<?=base_url('assets/banner/orang-tua.jpg')?>" class="fancybox">View more</a> 
						</figcaption>			
					</figure> 
			  </li>
            <li class="item photography" style="position: absolute; left: 585px; top: 219px;">
			<figure class="effect-bubba">
						<img src="<?=base_url('assets/banner/orang-tua.jpg')?>" alt="img02"/>
						<figcaption>
							<h2>B-Events</h2> 
							<a href="<?=base_url('assets/banner/orang-tua.jpg')?>" class="fancybox">View more</a> 
						</figcaption>			
					</figure> 
			  </li>
            <li class="item web" style="position: absolute; left: 877px; top: 219px;">
			<figure class="effect-bubba">
						<img src="<?=base_url('assets/banner/orang-tua.jpg')?>" alt="img02"/>
						<figcaption>
							<h2>B-Events</h2> 
							<a href="<?=base_url('assets/banner/orang-tua.jpg')?>" class="fancybox">View more</a> 
						</figcaption>			
					</figure> 
			  </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--<section id="plans" class="page-section">
  <div class="container">
    <div class="heading text-center"> 
      <h2>Fees</h2>
      <p>At lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.</p>
    </div>
    <div class="row flat">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <ul class="plan plan1">
          <li class="plan-name">Basic </li>
          <li class="plan-price"> <strong>$29</strong> / month </li>
          <li> <strong>5GB</strong> Storage </li>
          <li> <strong>1GB</strong> RAM </li>
          <li> <strong>400GB</strong> Bandwidth </li>
          <li> <strong>10</strong> Email Address </li>
          <li> <strong>Forum</strong> Support </li>
          <li class="plan-action"> <a href="#" class="btn btn-danger btn-lg">Signup</a> </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <ul class="plan plan2 featured">
          <li class="plan-name">Standard </li>
          <li class="plan-price"> <strong>$39</strong> / month </li>
          <li> <strong>5GB</strong> Storage </li>
          <li> <strong>1GB</strong> RAM </li>
          <li> <strong>400GB</strong> Bandwidth </li>
          <li> <strong>10</strong> Email Address </li>
          <li> <strong>Forum</strong> Support </li>
          <li class="plan-action"> <a href="#" class="btn btn-danger btn-lg">Signup</a> </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <ul class="plan plan3">
          <li class="plan-name">Advanced </li>
          <li class="plan-price"> <strong>$199</strong> / month </li>
          <li> <strong>50GB</strong> Storage </li>
          <li> <strong>8GB</strong> RAM </li>
          <li> <strong>1024GB</strong> Bandwidth </li>
          <li> <strong>Unlimited</strong> Email Address </li>
          <li> <strong>Forum</strong> Support </li>
          <li class="plan-action"> <a href="#" class="btn btn-danger btn-lg">Signup</a> </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <ul class="plan plan4">
          <li class="plan-name">Mighty </li>
          <li class="plan-price"> <strong>$999</strong> / month </li>
          <li> <strong>50GB</strong> Storage </li>
          <li> <strong>8GB</strong> RAM </li>
          <li> <strong>1024GB</strong> Bandwidth </li>
          <li> <strong>Unlimited</strong> Email Address </li>
          <li> <strong>Forum</strong> Support </li>
          <li class="plan-action"> <a href="#" class="btn btn-danger btn-lg">Signup</a> </li>
        </ul>
      </div>
    </div>
  </div>
</section>
-->
<section id="team" class="page-section">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2>Management</h2>
      <!--<p>At variations of passages of Lorem Ipsum available, but the majority have suffered alteration..</p>-->
    </div>
    <!-- Team Member's Details -->
    <div class="team-content">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="<?=base_url('assets/banner/orang-tua.jpg')?>" alt=""> </div>
            <!-- Member Details -->
            <div class="team-title">
			<h4>John Doe</h4>
            <!-- Designation --> 
            <span class="pos">DEAN</span>
			</div>
            <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="<?=base_url('assets/banner/orang-tua.jpg')?>" alt=""> </div>
            <!-- Member Details -->
            <h4>Latief Anwar</h4>
            <!-- Designation --> 
            <span class="pos">Tukang Desain</span>
            <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="<?=base_url('assets/banner/orang-tua.jpg')?>" alt=""> </div>
            <!-- Member Details -->
            <h4>Ranith Kays</h4>
            <!-- Designation --> 
            <span class="pos">HOD</span>
            <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="<?=base_url('assets/banner/orang-tua.jpg')?>" alt=""> </div>
            <!-- Member Details -->
            <h4>Joan Ray</h4>
            <!-- Designation --> 
            <span class="pos">Finance</span>
            <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/.container--> 
</section>
<footer>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="container">
        <div class="row">
            <div class="col-md-3">
            	<div class="col">
                   <h4>Contact us</h4>
                   <ul>
                        <li>Pangkalpinang, Bangka Belitung</li>
                        <li>Phone: +22 342 2345 345 | Fax: +22 724 2342 343 </li>
                        <li>Email: <a href="mailto:info@example.com" title="Email Us">info@good-jek.com</a></li>
                        <li>Skype: <a href="skype:my.test?call" title="Skype us">good-jek</a></li>
                    </ul>
                 </div>
            </div>
            
            <div class="col-md-3">
            	<div class="col">
                    <h4>Mailing list</h4>
                    <p>Dapatkan berita-berita ter-update tentang Good-jek.</p>
                    <form class="form-inline">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Your email address...">
                            <span class="input-group-btn">
                                <button class="btn" type="button">Go!</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-md-3">
            	<div class="col col-social-icons">
                    <h4>Follow us</h4>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-flickr"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-skype"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>

             <div class="col-md-3">
             	<div class="col">
                    <h4>Latest News</h4>
                    <p>
                    Pre relase Good-jek di Kota Pangkalpinang Bangka Belitung.
                    <br><br>
                    <a href="#" class="btn">Selengkapnya!</a>
                    </p>
                </div>
            </div>
        </div>
         
    </div>
    
</footer>
<!--/.page-section-->
<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center"> Copyright 2016 | All Rights Reserved -- <a href="http://good-jek.com"> Good-jek, inc.</a> </div>
    </div>
    <!-- / .row --> 
  </div>
</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="<?=base_url('assets/templates/js/modernizr-latest.js')?>"></script> 
<script src="<?=base_url('assets/templates/js/jquery-1.8.2.min.js')?>" type="text/javascript"></script> 
<script src="<?=base_url('assets/templates/js/bootstrap.min.js')?>" type="text/javascript"></script> 
<script src="<?=base_url('assets/templates/js/jquery.isotope.min.js')?>" type="text/javascript"></script> 
<script src="<?=base_url('assets/templates/js/fancybox/jquery.fancybox.pack.js')?>" type="text/javascript"></script> 
<script src="<?=base_url('assets/templates/js/jquery.nav.js')?>" type="text/javascript"></script> 
<script src="<?=base_url('assets/templates/js/jquery.fittext.js')?>"></script> 
<script src="<?=base_url('assets/templates/js/waypoints.js')?>"></script> 
<script src="<?=base_url('assets/templates/contact/jqBootstrapValidation.js')?>"></script>
<script src="<?=base_url('assets/templates/contact/contact_me.js')?>"></script>
<script src="<?=base_url('assets/templates/js/custom.js')?>" type="text/javascript"></script> 
<script src="<?=base_url('assets/templates/js/owl-carousel/owl.carousel.js')?>"></script>
</body>
</html>
