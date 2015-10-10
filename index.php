<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
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
		<?= do_shortcode('[slider]');?>
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
						<li><a href="#dishes" data-toggle="tab">Посуда</a></li>
						<li class="active"><a href="#all_prod" data-toggle="tab">Отобразить все</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane" id="kits">
							<div class="row packages__block">
								<?php echo do_shortcode('[packages]') ?>
							</div>

							<div class="row">
								<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-12">
									<a href="#" class="production__item--showmore" data-type="packages" data-page="0">Показать больше товаров</a>
								</div>
							</div>
						</div>
					<div class="tab-pane" id="dishes">
							<div class="row dishes__block">
								<?php echo do_shortcode('[dishes]') ?>
							</div>
							<div class="row">
								<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-12">
									<a href="#" class="production__item--showmore" data-type="dishes" data-page="0">Показать больше товаров</a>
								</div>
							</div>
						</div>
					<div class="tab-pane active" id="all_prod">
						<div class="row any__block">
							<?php echo do_shortcode('[any]') ?>
						</div>

						<div class="row">
							<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-12">
								<a href="#" class="production__item--showmore" data-type="any" data-page="0">Показать больше товаров</a>
							</div>
						</div>
					</div>
					</div>
				</div>	
			</div>
		</div>
	</section>

	<section class="license">
		<div class="container">			
		
			<h1 class="block_title">Наши лицензиары</h1>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
					<div class="license__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/l1.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
					<div class="license__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/l2.png" alt="">
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
					<div class="license__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/l3.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
					<div class="license__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/l4.png" alt="">
					</div>
				</div>
			</div>
				
		</div>
	</section>

	<section class="channels">
		<div class="container-fluid">
			<h1 class="block_title">Каналы сбыта</h1>
			<div class="row">
				<div class="col-lg-17 col-sm-17 col-xs-6 col-md-17 ">
					<div class="channels__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/c1.png" alt="">
					</div>
				</div>
				<div class="col-lg-17 col-sm-17 col-xs-6 col-md-17">
					<div class="channels__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/c2.png" alt="">
					</div>
				</div>
				<div class="col-lg-17 col-sm-17 col-xs-6 col-md-17">
					<div class="channels__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/c3.png" alt="">
					</div>
				</div>
				<div class="col-lg-17 col-md-17 col-sm-17 col-xs-6">
					<div class="channels__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/c4.png" alt="">
					</div>
				</div>
				<div class="col-lg-17 col-md-17 col-sm-17 col-xs-6">
					<div class="channels__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/c5.png" alt="">
					</div>
				</div>
				<div class="col-lg-17 col-md-17 col-sm-17 col-xs-6">
					<div class="channels__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/c6.png" alt="">
					</div>
				</div>
				<div class="col-xs-offset-3 col-lg-17 col-md-17 col-sm-17 col-xs-6">
					<div class="channels__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/c7.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="adress">
		<div class="container">
			<h1>+7 (495) 961-28-83</h1>
			<h3>Москва, Садовническая улица,76/71</h3>
			<h4>По общим вопросам <a href="mailto:info@medialand.su">info@medialand.su</a></h4>			
		</div>
	</section>

	<section class="workers">
		<div class="container">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="workers__item">
					<div class="workers__item--avatar">
						<img src="<?php bloginfo('template_directory'); ?>/img/w1.png" alt="">
					</div>
					<h4>Дана Паримбетова</h4>
					<p>Генеральный директор</p>
					<a href="mailto:danap@medialand.su">danap@medialand.su</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="workers__item">
					<div class="workers__item--avatar">
						<img src="<?php bloginfo('template_directory'); ?>/img/w2.png" alt="">
					</div>
					<h4>Павел Каюров</h4>
					<p>Коммерческий директор</p>
					<a href="mailto:kayurov.p@gmail.com">kayurov.p@gmail.com</a>
					<a href="mailto:kayurov@medialand.su">kayurov@medialand.su</a>

				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="workers__item">
					<div class="workers__item--avatar">
						<img src="<?php bloginfo('template_directory'); ?>/img/w3.png" alt="">
					</div>
					<h4>Марианна Герус</h4>
					<p>Юридический отдел</p>
					<a href="mailto:marianna@medialand.su">marianna@medialand.su</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="workers__item">
					<div class="workers__item--avatar">
						<img src="<?php bloginfo('template_directory'); ?>/img/w4.png" alt="">
					</div>
					<h4>Ирина Селезнева</h4>
					<p>Руководитель отдела продаж</p>
					<a href="mailto:irina@medialand.su">irina@medialand.su</a>
				</div>
			</div>
		</div>
		<h3><span class="blue">Карта проезда</span> в наш офис</h3>
		<div class="map">
			<div id="map_canvas" style="width:100%; height:100%"></div>
		</div>
	</section>

	<footer class="footer">
		<div class="container">
			<ul class="nav">
				<li><a href="#">О компании</a></li>
					<li><a href="#">Наша продукция</a></li>
					<li><a href="#">Наши лицензиары</a></li>
					<li><a href="#">Каналы сбыта</a></li>
					<li><a href="#">Контакты</a></li>				
			</ul>
			<h1>+7 (495) 961-28-83</h1>
			<h5>© 2015 medialand. ВСЕ ПРАВА ЗАЩИЩЕНЫ.</h5>
			<div class="col-lg-4 col-lg-offset-4 col-md-5 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
			<div class="social">
				<a href="#" class="social__icon"><i class="fa  fa-google-plus"></i></a>
				<a href="#" class="social__icon"><i class="fa fa-twitter"></i></a>
				<a href="#" class="social__icon"><i class="fa fa-facebook"></i></a>
				<a href="#" class="social__icon"><i class="fa fa-vk"></i></a>
				<a href="#" class="social__icon"><i class="mail"></i></a>
				<a href="#" class="social__icon"><i class="ya"></i></a>
				<a href="#" class="social__icon"><i class="lj"></i></a>
				<a href="#" class="social__icon"><i class="fa fa-odnoklassniki"></i></a>
			</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript">
		addLoadEvent = function(func){if(typeof jQuery!="undefined")jQuery(document).ready(func);else if(typeof wpOnload!='function'){wpOnload=func;}else{var oldonload=wpOnload;wpOnload=function(){oldonload();func();}}};
		var ajaxurl = '/wp-admin/admin-ajax.php',
			pagenow = 'toplevel_page_mainpage',
			typenow = '',
			adminpage = 'toplevel_page_mainpage',
			thousandsSeparator = ' ',
			decimalPoint = ',',
			isRtl = 0;
	</script>
<?php wp_footer(); ?>
</body>
</html>