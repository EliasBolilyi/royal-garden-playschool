<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	 
	<title><?php wp_title(); ?></title>
    <link rel="icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/build/images/favicon.ico">
    
    <?php wp_head(); ?>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link href="<?php echo get_template_directory_uri(); ?>/build/lib/animate/hover.css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/build/lib/swiper/swiper.min.css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/build/lib/animate/animate.css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/build/styles/style.min.css?v=0.001" rel="stylesheet">
	 
	<meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:image" content="build/common/og.jpg">
	<meta property="og:description" content="">
</head>
<body>

	<header class="header-wrp">

		<div class="top-header top-header_padd">
			<div class="container">
				<div class="row justify-content-center">

					<div class="col-lg-3 col-md-6 col-7">
						<div class="top-header__item">
							<span class="top-header__item-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/location.svg" alt="">
							</span>
							<span class="top-header__item-text top-header__item-text_padd">Посёлок Кировское , ул. Строителей 68</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-5 align-center align-right_mob">
						<div class="top-header__item">
							<span class="top-header__item-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/phone.svg" alt="">
							</span>
							<a href="tel:+380 (67) 435 00 00" class="top-header__item-text top-header__item-text_padd">+380 (67) 435 00 00</a>
						</div>
					</div>
					<div class="col-lg-3 align-center hidden_tab">
						<div class="top-header__item">
							<span class="top-header__item-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/instagram.svg" alt="">
							</span>
							<a href="https://www.instagram.com/royal_garden_playschool/" class="top-header__item-text top-header__item-text_padd">@royal_garden_playschool</a>
						</div>
					</div>
					<div class="col-lg-3 align-right hidden_tab">
						<div class="top-header__item">
							<span class="top-header__item-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/facebook.svg" alt="">
							</span>
							<a href="@royal_garden_playschool" class="top-header__item-text top-header__item-text_padd">@royal_garden_playschool</a>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="main-header">
			<div class="container justify-content-center">

				<div class="logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/build/images/logo.svg" alt=""></a></div>

				<div class="burger">
					<div id="nav-icon" class="nav-icon" class="visible-xs visible-sm visible-md visible-lg">
						<span class="nav-icon__item"></span>
						<span class="nav-icon__item"></span>
						<span class="nav-icon__item"></span>
					</div>
				</div>

				<?php wp_nav_menu(array( 'theme_location' => 'menu-main', 'menu_class' => '' )); ?>

			</div>
		</div>

	</header>

	<div id="main-menu" class="main-menu main-menu_padd">

		<div class="container">
			<div class="row">
				<div class="offset-xl-1 col-xl-4">

					<div class="menu-wrp">

						<?php wp_nav_menu(array( 'theme_location' => 'menu-main-big', 'menu_class' => '' )); ?>

					</div>
					
				</div>
			</div>
		</div>

		<div class="main-menu__img">
			<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/menu-img.jpg" alt="">
		</div>

	</div>