

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9290f66e82.js" crossorigin="anonymous"></script>
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/article.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/scroll.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/nav-bar.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/footer.css" rel="stylesheet">
    <title>Portia - Publicaciones</title>
  </head>
  <body>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_header(); ?>
    <?php get_sidebar(); ?>
    <div class="section-1"></div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12 ">
                <div class="row">
                    <div class="col-md-7">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <div class="row mt-5">
                          <?php if ( function_exists( 'wpsabox_author_box' ) ) echo wpsabox_author_box(); ?>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <p class="local-text">COMPARTILHAR:</p>
                                <div class="row">
                                    <div class="col-md-2">
                                        <button class="btn" id="facebook">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/article-1/facebook@2x.png">
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn" id="linkedin">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/article-1/linkedin_circle-1@2x.png">
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn" id="twitter">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/article-1/twitter@2x.png">
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn" id="whatsapp">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/article-1/whatsapp@2x.png">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="local-text">FAZER DOWNLOAD</p>
                                <button class="btn" id="download">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/article-1/baixar@2x.png">
                                </button>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <p class="local-text">Tags:</p>
                            </div>
                            <div class="col-md-12">
                                <span class="badge rounded-pill bg-secondary">Secondary</span>
                                <span class="badge rounded-pill bg-secondary">Secondary</span>
                                <span class="badge rounded-pill bg-secondary">Secondary</span>
                                <span class="badge rounded-pill bg-secondary">Secondary</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5" id="thumbail-post">
                        <?php the_post_thumbnail('destacada',array( 'class' => 'img-fluid rounded' )); ?>
                    </div>
                </div>

                <div class="row mt-5"><h1 class="card-title center-text"><?php the_title(); ?></h1></div>

                <div class="row mt-2">
                    <div class="col-12" id="contenido">
                      
                      <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile; else : ?>
      <div class="container mb-5">
        <div class="col-md-12">
          <p>Lo siento, no hemos encontrado ningún post.</p>
        </div>
      </div>
    <?php endif; ?>
    <?php wp_footer(); ?>
    <?php get_footer(); ?>  

    <style>
      @font-face {
        font-family: "Poppins-Bold";
        src: url("<?php echo get_template_directory_uri() ?>/assets/font/Poppins/Poppins-Bold.ttf");
      }

      @font-face {
        font-family: "Poppins-Regular";
        src: url("<?php echo get_template_directory_uri() ?>/assets/font/Poppins/Poppins-Regular.ttf");
      }

      .saboxplugin-gravatar {
        height: 100% !important;
      }

      .saboxplugin-gravatar > a > img{
        max-width: 163px !important;
      }

      .saboxplugin-authorname > a > span {
        font-family: Poppins-Bold !important;
        color: #000 !important;
        text-decoration: none !important;
      }

      .saboxplugin-desc > div > p {
        font-size: 12px !important;
      }

      .Cargo {
        font-size: 14px !important;
        font-family: Poppins-Regular !important;
        color: #440322 !important;
      }
      .saboxplugin-wrap {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box;
        box-sizing: border-box;
        border: 1px solid #eee0 !important;
        width: 100%;
        clear: both;
        display: block;
        overflow: hidden;
        word-wrap: break-word;
        position: relative;
      }

      #thumbail-post {
        margin-top: 7% !important;
      }

      #contenido > h1, h2, h3, h4, h5 {
        font-family: Poppins-Bold !important;
        margin-top: 1em !important;
        margin-bottom: 1em !important;
      }

      #contenido > p {
        margin-top: 1em !important;
        margin-bottom: 1em !important;
      }
    </style>
      
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>