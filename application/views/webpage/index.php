<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Youth and Beauty Clinic adalah klnik kecantikan yang berlokasi di Jakarta Selatan, Kemang. Klnik estetika ini akan menyediakan berbagai jasa service yang bertujuan menampilkan kecantikan wanita sebenarnya.">
	<meta name="author" content="PT KUNPRODUCTION DIGITAL AGENCY">
	<meta name="description" content="Youth and Beauty Clinic adalah klnik kecantikan yang berlokasi di Jakarta Selatan, Kemang. Klnik estetika ini akan menyediakan berbagai jasa service yang bertujuan menampilkan kecantikan wanita sebenarnya.">
        <meta name="keywords" content="klinik kecantikan di jakarta, klinik kecantikan jakarta, klinik estetika jakarta, klinik kecantikan kemang">

  <title>SDIT Insan Mulia Jakarta
</title>
  <link href="<?php echo base_url().'assets/';?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets/';?>css/animate.min.css" rel="stylesheet"> 
  <link href="<?php echo base_url().'assets/';?>css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets/';?>css/lightbox.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets/';?>css/main.css" rel="stylesheet">
  <link id="css-preset" href="<?php echo base_url().'/assets/';?>css/presets/preset2.css" rel="stylesheet">
  <link href="<?php echo base_url().'/assets/';?>css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'> -->
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1">
		<script type="text/javascript" src="<?php echo base_url().'assets/';?>js/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/';?>js/Before-After-Image/distr/imgslider.min.css">
		<script type="text/javascript" src="<?php echo base_url().'assets/';?>js/Before-After-Image/distr/imgslider.min.js"></script>
		<style>
			h1{
				margin: auto;
				text-align: center;
			}
			.codeblock{
				margin-top:15px;
				border:1px solid black;
				background: #ddd;
			}
			#caption{
				font-size: .8em;
				color:#222;
			}
			code p{
				padding-left: 10px;
			}
			#mainDiv{
				width:90%;
				margin: auto;
				max-width:600px;
				margin:auto;
			}
		</style>
	</head>
	<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
		<?php $nos = 1; foreach($slider as $row){ ?>
        <div class="item <?php if($nos == 1){ echo 'active'; }?>" style="background-image: url(<?php echo base_url().'upload/img/'.$row->file_name; $nos++?>)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig textLeft"><span> <?php echo $row->title; ?></span></h1>
            <p class="animated fadeInRightBig"><?php echo $row->desc; ?></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
		<?php } ?>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container" >
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">
            <h1><img class="img-responsive" src="<?php echo base_url().'assets/';?>images/logo.png" alt="logo"></h1>
          </a>   
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>                 
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Tentang Kami</a></li>
            <li class="scroll"><a href="#services">Kegiatan</a></li> 
            <li class="scroll"><a href="#about-us">Galeri Photo</a></li>                     
            <li class="scroll"><a href="#berita">Berita Terbaru</a></li>
            <li class="scroll"><a href="#blog">Kontak Kami</a></li>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <section id="services2" style="background-color : #444">
    <div class="container"><br/>
      <div> 
        <div class="row">
			<div class="col-sm-6 text-right" id="youtubeT">
			  
			</div>
			<div class="col-sm-4" >
				<h2 class="section-heading" style="color:#fff">Lebih jauh tau tentang SDIT Insan Mulia Jakarta</h2>
				<h4 class="text-right" style="color:#fff">Tentang Kami ></h4>
			</div>
        </div>
      </div>
    </div>
  </section><!--/#services-->
  
  <section id="blog2" style="background:#ccc">
    <div class="container">
		<ul class="nav nav-tabs">
		  <li class="active"><a data-toggle="tab" href="#menu1" >Fasilitas Sekolah</a></li>
		  <li><a data-toggle="tab" href="#menu2">Ekstrakulikuler</a></li>
		</ul>

		<div class="tab-content" style="padding : 10px">
		  <div id="menu1" class="tab-pane in active">
			<div class="row">
			  <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
				<div class="post-thumb">
				  <div id="post-carousel22"  class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					  <?php $d = 1; foreach($dokter as $dok){?>
					  <div class="item <?php if($d == 1){ echo "active"; } $d++; ?>">
						<a href="#B"><img class="img-responsive" style="width: 550px ; height: 250px"  src="<?php echo base_url().'upload/img/'.$dok->file_name;?>" alt=""></a>
						<div class="entry-header">
						  <h3 class="text-center"><a href="#B">Ruang Kelas</a></h3>
						</div>
					  </div>        
					  <?php } ?>
					</div>                               
					<a class="blog-left-control" href="#post-carousel22" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="blog-right-control" href="#post-carousel22" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
				  </div>
				  <div class="post-icon">
					<i class="fa fa-user"></i>
				  </div>
				</div>
			  </div>  
			  <div class="col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
				<div class="post-thumb">
				  <div id="post-carousel2"  class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					  <?php $d = 1; foreach($other as $otr){?>
					  <div class="item <?php if($d == 1){ echo "active"; } $d++; ?>">
						<a href="#B"><img class="img-responsive" style="width: 550px ; height: 250px"  src="<?php echo base_url().'upload/img/'.$otr->file_name;?>" alt=""></a>
						<div class="entry-header">
						  <h3 class="text-center"><a href="#B">Masjid</a></h3>
						</div>
					  </div>        
					  <?php } ?>
					</div>                               
					<a class="blog-left-control" href="#post-carousel2" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="blog-right-control" href="#post-carousel2" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
				  </div>
				  <div class="post-icon">
					<i class="fa fa-user"></i>
				  </div>
				</div>
			  </div>  
			  <div class="col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
				<div class="post-thumb">
				  <div id="post-carousel25"  class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					  <?php $d = 1; foreach($room as $rooms){?>
					  <div class="item <?php if($d == 1){ echo "active"; } $d++; ?>">
						<a href="#B"><img class="img-responsive" style="width: 550px ; height: 250px"  src="<?php echo base_url().'upload/img/'.$rooms->file_name;?>" alt=""></a>
						<div class="entry-header">
						  <h3 class="text-center"><a href="#B">Lab Komputer</a></h3>
						</div>
					  </div>        
					  <?php } ?>
					</div>                               
					<a class="blog-left-control" href="#post-carousel25" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="blog-right-control" href="#post-carousel25" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
				  </div>
				  <div class="post-icon">
					<i class="fa fa-user"></i>
				  </div>
				</div>
			  </div>      
			  <div class="col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
				<div class="post-thumb">
				  <div id="post-carousel29"  class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					  <?php $d = 1; foreach($dokter as $dok){?>
					  <div class="item <?php if($d == 1){ echo "active"; } $d++; ?>">
						<a href="#B"><img class="img-responsive" style="width: 550px ; height: 250px"  src="<?php echo base_url().'upload/img/'.$dok->file_name;?>" alt=""></a>
						<div class="entry-header">
						  <h3 class="text-center"><a href="#B">Halaman Bermain</a></h3>
						</div>
					  </div>        
					  <?php } ?>
					</div>                               
					<a class="blog-left-control" href="#post-carousel29" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="blog-right-control" href="#post-carousel29" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
				  </div>
				  <div class="post-icon">
					<i class="fa fa-user"></i>
				  </div>
				</div>
			  </div>                 
			</div> 
		  </div>
		  <div id="menu2" class="tab-pane fade">
			<div class="row">
			  <div class="col-sm-3">
				<div class="post-thumb">
				  <div id="post-carousel32"  class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					  <?php $d = 1; foreach($dokter as $dok){?>
					  <div class="item <?php if($d == 1){ echo "active"; } $d++; ?>">
						<a href="#B"><img class="img-responsive" style="width: 550px ; height: 250px"  src="<?php echo base_url().'upload/img/'.$dok->file_name;?>" alt=""></a>
						<div class="entry-header">
						  <h3 class="text-center"><a href="#B">Ruang Kelas</a></h3>
						</div>
					  </div>        
					  <?php } ?>
					</div>                               
					<a class="blog-left-control" href="#post-carousel32" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="blog-right-control" href="#post-carousel32" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
				  </div>
				  <div class="post-icon">
					<i class="fa fa-user"></i>
				  </div>
				</div>
			  </div>  
			  <div class="col-sm-3 ">
				<div class="post-thumb">
				  <div id="post-carousel4"  class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					  <?php $d = 1; foreach($other as $otr){?>
					  <div class="item <?php if($d == 1){ echo "active"; } $d++; ?>">
						<a href="#B"><img class="img-responsive" style="width: 550px ; height: 250px"  src="<?php echo base_url().'upload/img/'.$otr->file_name;?>" alt=""></a>
						<div class="entry-header">
						  <h3 class="text-center"><a href="#B">Masjid</a></h3>
						</div>
					  </div>        
					  <?php } ?>
					</div>                               
					<a class="blog-left-control" href="#post-carousel4" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="blog-right-control" href="#post-carousel4" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
				  </div>
				  <div class="post-icon">
					<i class="fa fa-user"></i>
				  </div>
				</div>
			  </div>  
			  <div class="col-sm-3" >
				<div class="post-thumb">
				  <div id="post-carousel35"  class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					  <?php $d = 1; foreach($room as $rooms){?>
					  <div class="item <?php if($d == 1){ echo "active"; } $d++; ?>">
						<a href="#B"><img class="img-responsive" style="width: 550px ; height: 250px"  src="<?php echo base_url().'upload/img/'.$rooms->file_name;?>" alt=""></a>
						<div class="entry-header">
						  <h3 class="text-center"><a href="#B">Lab Komputer</a></h3>
						</div>
					  </div>        
					  <?php } ?>
					</div>                               
					<a class="blog-left-control" href="#post-carousel35" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="blog-right-control" href="#post-carousel35" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
				  </div>
				  <div class="post-icon">
					<i class="fa fa-user"></i>
				  </div>
				</div>
			  </div>      
			  <div class="col-sm-3" >
				<div class="post-thumb">
				  <div id="post-carousel39"  class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					  <?php $d = 1; foreach($dokter as $dok){?>
					  <div class="item <?php if($d == 1){ echo "active"; } $d++; ?>">
						<a href="#B"><img class="img-responsive" style="width: 550px ; height: 250px"  src="<?php echo base_url().'upload/img/'.$dok->file_name;?>" alt=""></a>
						<div class="entry-header">
						  <h3 class="text-center"><a href="#B">Halaman Bermain</a></h3>
						</div>
					  </div>        
					  <?php } ?>
					</div>                               
					<a class="blog-left-control" href="#post-carousel39" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="blog-right-control" href="#post-carousel39" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
				  </div>
				  <div class="post-icon">
					<i class="fa fa-user"></i>
				  </div>
				</div>
			  </div>                 
			</div> 
		  </div>
		</div>
      <div class="blog-posts">
                      
      </div>
    </div>
  </section><!--/#blog-->
  
  <section id="berita">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-left col-sm-12">
            <h2>Berita Terbaru</h2>
          </div>
        </div> 
      </div>
      <div class="our-services"> 
        <div class="row">
		<?php foreach($berita as $rowProf){ ?>
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">              
			  <a href="#B"><img class="img-responsive img-rounded" src="<?php echo base_url().'upload/img/'.$rowProf->file_name;?>" alt="" style="width:500px"></a>
            <div class="service-info">
              <h3 class="text-center"><a href="#b"><?php echo $rowProf->title; ?></a></h3>
              <?php echo substr($rowProf->desc,0, 80);?> <br/><a href="#a">view Detail...</a>
            </div>
          </div>
		<?php } ?>
        </div>
      </div>
    </div>
  </section><!--/#services-->
  <section id="blog" style="background:#ccc">
    <div class="container">
      <div class="row">
        <div class="heading text-left col-sm-12 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Galeri Photo</h2>
        </div>
      </div>
      <div class="blog-posts">
		<div class="row">  
		  <div class="row">
			<?php foreach($gallery as $rowProf){ ?>
			  <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">              
				  <a href="#B"><img class="img-responsive img-rounded" src="<?php echo base_url().'upload/img/'.$rowProf->file_name;?>" alt="" style="width:500px"></a>
				<div class="service-info">
				  <h3 class="text-center"><a href="#b"><?php echo $rowProf->title; ?></a></h3>
				</div>
			  </div>
			<?php } ?>
			</div>
		  </div>                  
		</div>               
	</div>
  </section><!--/#blog-->
  <!--
  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
            <h2 class="text-center">YB's Media</h2>
			
			<hr/>
				Our Related Link                
            </div>
	</div>
  </section><!--/#about-us-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" style="background:#444">
		<div class="container text-center">
			Kontak Kami<br/>
			Masjid Al Mujaddid
		</div>
    </div>
  </footer>
  
	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
	  <div class="modal-dialog primary modal-lg">
		<div class="modal-content">
		  <div class="modal-header text-center">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title primary" id="memberModalLabel"><i class="icon-info"></i> INFO</h4>
		  </div>
				<div class="col-md-6 col-md-offset-3">	<br/>				
					<img class="img-responsive" style="width: 550px ; height: 250px" id="mytreath" src="" alt=""><hr/>
				</div>
				<div class="col-md-12 text-center">					
					<p id="detailHere"></p>
				</div>
		  <div class="modal-footer">
		  </div>
		</div>
	  </div>
	</div>
	<div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
	  <div class="modal-dialog primary modal-lg">
		<div class="modal-content">
		  <div class="modal-header text-center">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<img id='img-upload' src='<?php echo base_url().'upload/images/logoHead.png'; ?>' width="110px">
			<p><b>Our Promo</b></p>
		  </div>
		  <div class="modal-body text-center">
			
              <div id="post-carouselza"  class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
				  <?php $ra = 1; foreach($promo as $roms){?>
                  <div class="item <?php if($ra == 1){ echo "active"; } $ra++; ?>">
                    <a href="#B"><img class="img-rounded" src="<?php echo base_url().'upload/img/'.$roms->file_name;?>" style="width: 60%; margin-left: 20%" alt=""></a>
					<div class="entry-header">
					  <h3><a href="#B"><?php echo $roms->title; ?></a></h3>
					</div>
					<div class="entry-content">
					  <p> <?php echo $roms->desc; ?></p>
					</div>
                  </div>
				  <?php } ?>
                </div>                               
                <a class="blog-left-control" href="#post-carouselza" role="button" data-slide="prev" style="color:#0EB3C7"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carouselza" role="button" data-slide="next" style="color:#0EB3C7"><i class="fa fa-angle-right"></i></a>
              </div>
		  
		  </div>
		  <div class="modal-footer">
		  </div>
		</div>
	  </div>
	</div>

  <script type="text/javascript" src="<?php echo base_url().'assets/';?>js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/';?>js/bootstrap.min.js"></script>
  
  
<script type="text/javascript">

	$(document).ready(function() {
		// $('#memberModal').modal('show');
		addYoutube();
	});
	function addYoutube(){
		html = ' <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms"> <div class="embed-responsive embed-responsive-4by3"> <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PgEY0WAegvQ"></iframe> <br/> </div></div>';
		$('#youtubeT').html(html);
	}
	function showTreath(id,title){
		$('#memberModalLabel').html(title);		
		$('#detailHere').html('');
		$("#mytreath").attr('src','');
		$.ajax ({
			type: 'post',
			url: "<?php echo base_url();?>index.php/webPage/getDataTreath",
			dataType: "json",
			data:"id="+id,
			success:function(data){
				console.log(data);
				$.each(data,function(i,n){
					$('#detailHere').html(n['desc']);
					$("#mytreath").attr('src','<?php echo base_url().'upload/img/'; ?>'+n['file_name']);
				});
			},
			error: function(data){
				alert('Error input data');	
			}
		});
	}
</script>

  <script type="text/javascript" src="<?php echo base_url().'assets/';?>js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/';?>js/wow.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/';?>js/mousescroll.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/';?>js/smoothscroll.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/';?>js/jquery.countTo.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/';?>js/lightbox.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url().'assets/';?>js/main.js"></script>
</body>
</html>