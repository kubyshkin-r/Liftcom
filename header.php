<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    <style>
        *{
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

 <body id="control-scroll"  <?php body_class('control-scroll'); ?>> 
 <?php wp_body_open(); ?>

    <div class="wrapper-header">
        <div class="header">
            <div class="logo">
                <div class="logo__name"><a href="http://liftcom-group.ru/">ЛИФТКОМ</a></div>
                <div class="logo__line"></div>
                <div class="logo__contact">
                    <a href="tel:+79858566300">8&nbsp;(985)&nbsp;856 6300</a>
                    <a href="mailto:liftcom_info@mail.ru">liftcom_info@mail.ru</a>
                </div>
            </div>
            <div class="mobile-menu-1">
                <input type="checkbox" id="checkbox" class="mobile-menu__checkbox" onchange="fun1()">
                <label for="checkbox" class="mobile-menu__btn">
                    <div class="mobile-menu__icon"></div>
                </label>
            </div>    
        </div>
        <nav class="navigation" id="oneid">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
                        'menu_class'      => 'navigation__menu', 
					)
				);
				?>
        </nav>  
    </div>		
    <div class="container">