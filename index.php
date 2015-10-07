<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE">
    </script>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top navigation" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>		
				<a class="navbar-brand" href="#">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
				</a>      
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">		      	     
				<ul class="nav navbar-nav navbar-right navigation__list">		      
					<li><a href="#">О компании</a></li>
					<li><a href="#">Наша продукция</a></li>
					<li><a href="#">Наши лицензиары</a></li>
					<li><a href="#">Каналы сбыта</a></li>
					<li><a href="#">Контакты</a></li>
					<li class='social'>
						<a href="#" class="social__icon"><i class="fa  fa-google-plus"></i></a>
						<a href="#" class="social__icon"><i class="fa fa-twitter"></i></a>
						<a href="#" class="social__icon"><i class="fa fa-facebook"></i></a>
						<a href="#" class="social__icon"><i class="fa fa-vk"></i></a>
						<a href="#" class="social__icon"><i class="mail"></i></a>
						<a href="#" class="social__icon"><i class="ya"></i></a>
						<a href="#" class="social__icon"><i class="lj"></i></a>
						<a href="#" class="social__icon"><i class="fa fa-odnoklassniki"></i></a>	
					</li>  		       
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<!-- <div class="fotorama" data-width="100%" data-minheight="500">
					<div class="fotorama__item" data-img="<?php bloginfo('template_directory'); ?>/img/slide1.jpg"></div>						
					<div class="fotorama__item" data-img="<?php bloginfo('template_directory'); ?>/img/slide1.jpg"></div>
				</div> -->
				<div class="responsive">
					<div><img src="<?php bloginfo('template_directory'); ?>/img/slide1.jpg" alt=""></div>
					<div><img src="<?php bloginfo('template_directory'); ?>/img/slide1.jpg" alt=""></div>
				</div>
			</div>
		</div>
	</header>
<?php wp_footer(); ?>
</body>
</html>