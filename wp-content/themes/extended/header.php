<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); wp_title();?></title>
<?php wp_head();?>
</head>
<body>
<div class="karkas">
	<div class="header">
		<a href="<?php echo home_url();//получить ссылку на домашнюю страницу?>"><img class="logo" src="<?php bloginfo('template_url')?>/images/logo.png" alt="" /></a>
		<p class="head-contakt">
		<img src="<?php bloginfo('template_url')?>/images/mail.png" alt="" /><a href="mailto:<?php bloginfo('admin_email');?>"><?php bloginfo('admin_email');?></a>&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp; <img src="<?php bloginfo('template_url')?>/images/phone.png" alt="" /><?php echo get_option('my_phone');?>
		</p>
		<div class="head-soc">
			<?php if(!dynamic_sidebar('icons_header')):?>
				<p>Место для социальных иконок</p>
			<?php endif;?>
		</div>
		<div class="menu">
			<?php wp_nav_menu(array(
				'container' => '', 
				'menu_class' => '', 
				'theme_location' => 'header_menu',
			));?>
			<div class="search">
				<form action="">
					<input name="s" class="search-txt" type="text" name="search" value="Поиск" onfocus="if(this.value=='Поиск')this.value=''" onblur="if(this.value=='')this.value='Поиск'" />
					<input type="image" src="<?php bloginfo('template_url')?>/images/search.png"/>
				</form>
			</div>
		</div>
	</div>