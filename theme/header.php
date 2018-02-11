<!doctype html>
<html <?php language_attributes(); ?>>

  <head>
    <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/app.css"> 
    <?php wp_head(); ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
</head>
	
  <body <?php body_class(); ?>>

  <!-- BEGIN content -->
  <div class="out">
    <!-- begin header -->
    <header class="header">
      <div class="container">
        <div class="header__wrap">
          <div class="header__logo">
            <a href="<?php echo home_url( '/' ); ?>" class="logo">
              <div class="logo__part1">JET</div>
              <div class="logo__part2">RO</div>
            </a>
          </div>
          <div class="header__nav">
            <nav class="nav"> 
            <?php 

            $menuParameters = array(
              'menu'=> 'mymenu',
              'container'       => false,
              'echo'            => false,
              'items_wrap'      => '%3$s',
              'depth'           => 0,
            );

            echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
             ?>
             </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->


