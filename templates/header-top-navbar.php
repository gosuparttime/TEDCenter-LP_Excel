<div id="wrapper" class="container">
<!--[if lt IE 9]><div class="alert"><button type="button" class="close" data-dismiss="alert">×</button>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]--> 
<header class="banner row clearfix" role="banner">
  <div class="hero-image"> <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/scrum-master.jpg" alt="<?php bloginfo( 'name' ); ?>" />
    <div class="su-brand container">
      <div class="row">
        <div class="col-sm-4 col-xs-6"><a href="http://syr.edu"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/su-logotype.png" alt="Syracuse University" /></a></div>
        <div class="col-sm-7 col-sm-offset-1 hidden-xs">
          <?php
        if (has_nav_menu('utility_navigation')) :
          wp_nav_menu(array('theme_location' => 'utility_navigation', 'menu_class' => 'nav',));
        endif;
      ?>
        </div>
        
      </div>
    </div>
    <div class="site-title container">
      <div class="row">
        <div class="col-lg-5 col-md-6 col-sm-8 col-xs-12">
          <h1 class="branding"> <a href="<?php echo home_url(); ?>/">
            <?php bloginfo('name'); ?>
            </a> </h1>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="row">
<div id="content-wrap">
<?php
        if (has_nav_menu('primary_navigation')) :
?>
<div class="container">
<div class="navbar navbar-default"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><div class="row"><div class="col-xs-8">navigation</div><div class="col-xs-4"><div class="pull-right"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div></div></div> </button>
    <nav class="collapse navbar-collapse" role="navigation">
      <?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav')); ?></nav>
</div></div>
<?php endif; ?>