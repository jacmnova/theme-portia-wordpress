
<!-- As a link -->
<nav class="navbar navbar-light fixed-top nav-bar-portia mt-4" id="nav-web">
    <div class="container-fluid">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/HOME/logo.png" alt=""  height="35px" class="d-inline-block align-text-top logo">
        <?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>
        
    </div>
    </nav>

    <nav class="navbar navbar-light fixed-top nav-bar-portia mt-3" id="nav-movil">
      <div class="container-fluid">
        <div class="row w-100">
          <div class="col-md-12 d-flex justify-content-center">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/HOME/logo.png" alt=""  height="35px" class="d-inline-block align-text-top logo">
          </div>
        </div>
        <div class="row w-100 mt-1">
          <div class="col-md-12 d-flex justify-content-center">
            <?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>
          </div>
        </div>
      </div>
    </nav>

    
    <nav class="navbar navbar-vine" id="nav-phone">
      <div class="container-fluid w-100">
        <div class="row w-100">
          <div class="col-sm-12 col-xs-12 d-flex justify-content-between w-100">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/HOME/logo.png" alt=""  height="35px" class="d-inline-block align-text-top logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars white"></i>
            </button>
          </div>
          <!-- <div class="col-sm-3 col-xs-3 d-flex justify-content-">
            
          </div> -->
        </div>
    
      </div>
    </nav>

    <div class="collapse" id="navbarToggleExternalContent">
      <div class=" p-3">
        <div class="row w-100">
          <div class="col-md-12 d-flex justify-content-center w-100">
            <?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>
          </div>
        </div>
      </div>
    </div>