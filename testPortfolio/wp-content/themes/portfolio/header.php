<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/animate/animate.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/fonts.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/skins/blue.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/media.css">
	<?php wp_head(); ?>
</head>
<body>
	
	<header id="header" class="header" id="home">
		<div class="container header_container">
			<div class="row">
				<div class="header_logo col-md-2 col-sm-2 col-xs-2">
					<h1><span><?php echo get_bloginfo('name'); ?></span>design</h1>
					<p><?php echo get_bloginfo('description'); ?></p>
				</div>
				<nav class="nav_menu col-md-4 col-sm-4 col-xs-4">
					<ul>
					<a href="#home">
						<i class="fa fa-home" aria-hidden="true"></i>
					</a>
						<li><a href="#about">о нас</a></li>
						<li><a href="#portfolio">портфолио</a></li>
						<li><a href="#price">цены</a></li>
						<li><a href="#contact">контакты</a></li>
					</ul>
				</nav>
				<div class="col-md-3 col-sm-3 col-xs-3 header_phone_time">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<p>+7(495)648-68-01</p>
					<i class="fa fa-clock-o" aria-hidden="true"></i>
					<p>10:00-18:00 ПН-ПТ</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 header_button">
					<button id="popup_content">Заказать обратный звонок</button>
				</div>
				<div class="header_popup">
					<form action="">
						<label for="">Заказать звонок</label>
						<input type="text" placeholder="ФИО">
						<input type="text" placeholder="Телефон">
						<input type="text" placeholder="Сообщение">
						<button type="submit">Отправить заявку</button>
						<div class="btn_close">
							<span class="line_1"></span>
							<span class="line_2"></span>
					</div>
					</form>
				</div>
			</div>
		</div>
	</header>