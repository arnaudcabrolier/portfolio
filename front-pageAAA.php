<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
      <?php wp_title(); ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

        <!-- Font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    
    <?php wp_head(); ?>
    
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <?php 
                wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
            ?>
        </nav>
      </div>
    </div>

    <!-- end header -->

	<section class="showcase">
<!--       <div class="container">
        <h1>Custom Bootstrap Wordpress Theme</h1>
        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        <a class="btn btn-primary btn-lg">Read More</a>
      </div> -->
    </section>

    <section class="boxes">
      <div class="container">
        <div class="row">

          <div class="col-md-4">
            	<?php if(is_active_sidebar('box1')) : ?>
            	<?php dynamic_sidebar('box1'); ?>
           	    <?php endif; ?>
          </div>

          <div class="col-md-4">
            	<?php if(is_active_sidebar('box2')) : ?>
            	<?php dynamic_sidebar('box2'); ?>
           	    <?php endif; ?>
          </div>

          <div class="col-md-4">
            	<?php if(is_active_sidebar('box3')) : ?>
            	<?php dynamic_sidebar('box3'); ?>
           	    <?php endif; ?>
          </div>
      </div>
    </div>

    </section>

<!-- end body -->

    <footer class="blog-footer">
      <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name');?></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <?php wp_footer(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
  </body>
</html>