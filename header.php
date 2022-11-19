<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <?php wp_head(); ?>
    <title>Financial</title>
  </head>
  <body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <h6 class="text-white text-center mt-3">Menu</h6>
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
      <a href="javascript:;"
        ><img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="logo" class="logo-img"
      /></a>
    </div>

    <header class="site-navbar site-navbar-target" role="banner">
      <div class="container">
        <div class="row align-items-center position-relative">
          <div class="col-3">
            <div class="site-logo">
              <a href="javascript:;" class="font-weight-bold"
                ><img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="logo" class="logo-img"
              /></a>
            </div>
          </div>

          <div class="col-9 text-right">
            <span class="d-inline-block d-sm-none"
              ><a
                href="#"
                class="text-primary site-menu-toggle js-menu-toggle py-5"
                ><span class="icon-menu h3 text-white"></span></a
            ></span>

            <nav
              class="site-navigation text-right ml-auto d-none d-sm-block"
              role="navigation"
            >
              <ul class="site-menu main-menu js-clone-nav ml-auto">
                <li class="active"><a href="#" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">About</a></li>
                <li><a href="#" class="nav-link">Services</a></li>
                <li><a href="#" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>