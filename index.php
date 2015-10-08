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
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/img/slide1.jpg" alt="">
						<div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-8 col-xs-11">
							<div class="header__slidedescription">
								<h2>Кот в сапогах</h2>
								<p>Набор посуды из трех предметов</p>
							</div>
						</div>
					</div>
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/img/slide1.jpg" alt="">

					</div>
				</div>
			</div>
		</div>
	</header>

	<section class="about">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
					<h3>MEDIA LAND – компания, оказывающая полный пакет услуг по организации поставок игрушек из Китая.
					 Мы действуем комплексно, полностью контролируя все этапы – от согласования заказа и 
					 запуска производства до организации транспортировки товара на Ваш склад.</h3>
					 
					 <p>Компания начала свою деятельность в 1997 году в качестве организации по продаже и 
					 	распространению компакт-дисков на территории России и стран СНГ. 
					 	Таким образом, мы стояли у самых истоков зарождения рынка легальной дистрибьюции и сразу 
					 	заняли позицию лидера, которую уверенно продолжаем удерживать и сейчас. </p>
				</div>
			</div>
		</div>
	</section>

	<section class="production">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
					<h1 class="block_title">Наша продукция</h1>
					
					<ul class="nav nav-pills center-block">
						<li><a href="#kits" data-toggle="tab">Комплеткы</a></li>
						<li class="active"><a href="#dishes" data-toggle="tab">Посуда</a></li>
						<li><a href="#all_prod" data-toggle="tab">Отобразить все</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane" id="kits">
						<h1 class="block_title">Наша продукция</h1>
					</div>
					<div class="tab-pane active" id="dishes">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p5">
								<div class="production__item">
									<img src="<?php bloginfo('template_directory'); ?>/img/lena-family_28.png" alt="">
									<a href="#">Чашка Кот в сапогах</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p5">
								<div class="production__item">
									<img src="<?php bloginfo('template_directory'); ?>/img/lena-family_33.png" alt="">
									<a href="#">Чашка Кот в сапогах</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p5">
								<div class="production__item">
									<img src="<?php bloginfo('template_directory'); ?>/img/lena-family_23.png" alt="">
									<a href="#">Чашка Кот в сапогах</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p5">
								<div class="production__item">
									<img src="<?php bloginfo('template_directory'); ?>/img/lena-family_18.png" alt="">
									<a href="#">Чашка Кот в сапогах</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p5">
								<div class="production__item">
									<img src="<?php bloginfo('template_directory'); ?>/img/lena-family_9.png" alt="">
									<a href="#">Чашка Кот в сапогах</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p5">
								<div class="production__item">
									<img src="<?php bloginfo('template_directory'); ?>/img/lena-family_15.png" alt="">
									<a href="#">Чашка Кот в сапогах</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p5">
								<div class="production__item">
									<img src="<?php bloginfo('template_directory'); ?>/img/lena-family_13.png" alt="">
									<a href="#">Чашка Кот в сапогах</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p5">
								<div class="production__item">
									<img src="<?php bloginfo('template_directory'); ?>/img/lena-family_16.png" alt="">
									<a href="#">Чашка Кот в сапогах</a>
								</div>
							</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-12">
									<a href="#" class="production__item--showmore">Показать больше товаров</a>
								</div>
							</div>
						</div>
					<div class="tab-pane" id="all_prod">
						<h1 class="block_title">Наша продукция 2</h1>
					</div>
					</div>
				</div>	
			</div>
		</div>
	</section>

	<section class="license">
		<div class="container">
			
				<div class="row">
					<h1 class="block_title">Наши лицензиары</h1>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<div class="license__item">
								<img src="<?php bloginfo('template_directory'); ?>/img/l1.png" alt="">
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<div class="license__item">
								<img src="<?php bloginfo('template_directory'); ?>/img/l2.png" alt="">
							</div>
						</div>

						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<div class="license__item">
								<img src="<?php bloginfo('template_directory'); ?>/img/l3.png" alt="">
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<div class="license__item">
								<img src="<?php bloginfo('template_directory'); ?>/img/l4.png" alt="">
							</div>
						</div>
					</div>
				</div>
				
		</div>
	</section>
<?php wp_footer(); ?>
</body>
</html>