<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */
?>
  <!DOCTYPE html>
  <html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href=<?php bloginfo( 'stylesheet_url') ?> rel="stylesheet">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div id="page" class="hfeed site">

      <a class="skip-link screen-reader-text" href="#content">
        <?php esc_html( 'Skip to content' ); ?>
      </a>
      <header id="masthead" class="site-header container" role="banner">

        <div class="site-branding">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img id="header-logo" src=<?php echo get_template_directory_uri() . "/media/logos/inhabitent-logo-tent-white.svg" ?> alt=""></a>
        </div>
        <!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation" role="navigation">
          <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
          <div class="header-search">
            <form role="search" method="get" class="search-form" action="//localhost:3000/inhabitent/">
              <fieldset>
                <a href="#0" class="search-toggle">
                <i class="fa fa-search"></i>
              </a>
                <label>
                <input type="search" class="search-field" placeholder="SEARCH ..." value="" name="s" title="Search for:" />
              </label>
              </fieldset>
            </form>
          </div>
        </nav>
        <!-- #site-navigation -->
      </header>
      <!-- #masthead -->

      <div id="content" class="site-content">