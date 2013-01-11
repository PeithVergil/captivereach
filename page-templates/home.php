<?php
/*
 * Template Name: Home
 */
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
<style type="text/css">
  body {
    padding-bottom: 40px;
  }
  .sidebar-nav {
    padding: 9px 0;
  }
</style>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-responsive.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
	<section class="section-top">
    <header id="root_header">
      <div class="container">
        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>

            <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'description' ); ?>">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" />
            </a>

            <div class="nav-collapse collapse">
              <?php wp_nav_menu( array(
                'container'  => 'ul', 
                'menu_class' => 'nav pull-right',
                'menu'       => 'mainmenu',
                'menu_id'    => 'topnav'
              )); ?>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>
    </header>

    <section id="content">
      <div class="container">
        <div class="row-fluid">
          <div class="span5 l">
            <div class="crphone"></div>
          </div><!--/span-->
          <div class="span7 r">
            <h1 class="title main">
              <?php the_field('main_text'); ?>
            </h1>
            <h4 class="title sub">
              <?php the_field('sub_text_1'); ?>
            </h4>
            <h4 class="title sub">
              <?php the_field('sub_text_2'); ?>
            </h4>
            <h4 class="title sub">
              <?php the_field('sub_text_3'); ?>
            </h4>
            <a href="#">
              <?php the_field('link_text'); ?>
            </a>
          </div><!--/span-->
        </div><!--/row-->
      </div><!--/container-->
    </section>
  </section>

  <section class="section-bot">
    <div class="container">
      <h3 class="title">Our customers include</h3>

      <div class="customer-logos">
        <ul>
          <li class="customers cox"></li>
          <li class="customers zingle"></li>
          <li class="customers delmar"></li>
          <li class="customers elwiri"></li>
          <li class="customers playar"></li>
          <li class="customers medifast"></li>
        </ul>
        <div class="clear"></div>
      </div>

      <footer id="root_footer">
        <div class="links">
          <ul>
            <li>
              <a href="#">About Us</a>
            </li>
            <li class="divider-vertical"></li>
            <li>
              <a href="#">Leadership</a>
            </li>
            <li class="divider-vertical"></li>
            <li>
              <a href="#">Blog</a>
            </li>
            <li class="divider-vertical"></li>
            <li>
              <a href="#">Privacy</a>
            </li>
            <li class="divider-vertical"></li>
            <li>
              <a href="#">Site Map</a>
            </li>
          </ul>
          <div class="clear"></div>
        </div>
      </footer>
    </div>
  </section>

   <!-- Le javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-collapse.js"></script>

 
  <?php wp_footer(); ?>
</body>
</html>