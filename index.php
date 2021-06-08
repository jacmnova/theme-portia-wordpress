<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
       <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta charset="utf-8">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/9290f66e82.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/9290f66e82.js" crossorigin="anonymous"></script>
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/publicaciones.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/scroll.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/nav-bar.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/footer.css" rel="stylesheet">
        <title>Portia - Publicaciones</title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php get_sidebar(); ?>
        <div class="section-1"></div>

        <style>
            .card > img{
                
                width: 100%;
                height: 382px;
            }

            #Destacado > img {
                
                width: 100%;
                height: 249px;
            }

            #Recent > img {
                border-top-left-radius: calc(.25rem - 1px);
                border-top-right-radius: calc(.25rem - 1px);
                width: 100%;
                height: 382px;
            }

            #Old > img {
                border-top-left-radius: calc(.25rem - 1px);
                border-top-right-radius: calc(.25rem - 1px);
                width: 100%;
                height: 382px;
            }
        </style>
        <div class="container mt-5">
            <!--Bucle para recorrer los post, el primero es el descatado-->
            <?php 
                $aux = 0;
                if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                
                    if ($aux == 0 ) : 
            ?>
                <!--Articulo Desctacado-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card w-100 article" id="Destacado">
                            <?php the_post_thumbnail(); ?>
                            <div class="card-body">
                              <h5 class="card-title"><?php the_title(); ?></h5>
                              <p class="card-text"><?php the_excerpt(); ?></p>
                            </div>
                              
                            <div class="card-footer article-footer">
                              <a href="<?php the_permalink(); ?>" class="btn btn-pink">LEIA NA ÍNTEGRA <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>  
                    </div>
                </div>
                <?php else : ?>

                <!--Articulos Recientes-->
                <?php if ($aux == 1 ) : ?>
                <div class="row mt-5 mb-5">
                    <div class="col-md-6">
                        <div class="card w-100 article" id="Recent">
                            <?php the_post_thumbnail(); ?>
                            <div class="card-body">
                              <h5 class="card-title"><?php the_title(); ?></h5>
                              <p class="card-text"><?php the_excerpt(); ?></p>
                            </div>
                              
                            <div class="card-footer article-footer">
                              <a href="<?php the_permalink(); ?>" class="btn btn-pink">LEIA NA ÍNTEGRA <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>  
                    </div>
                <?php endif; ?>

                <?php if ($aux == 2 ) : ?>
                    <div class="col-md-6">
                        <div class="card w-100 article" id="Recent">
                            <?php the_post_thumbnail(); ?>
                            <div class="card-body">
                              <h5 class="card-title"><?php the_title(); ?></h5>
                              <p class="card-text"><?php the_excerpt(); ?></p>
                            </div>

                            <div class="card-footer article-footer">
                              <a href="<?php the_permalink(); ?>" class="btn btn-pink">LEIA NA ÍNTEGRA <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="row mb-5">
                <?php endif; ?>

                <?php if ($aux > 2 ) : ?>
                <div class="col-md-4">
                    <div class="card w-100 article" id="Old">
                        <?php the_post_thumbnail(); ?>
                        <div class="card-body">
                          <h5 class="card-title"><?php the_title(); ?></h5>
                          <p class="card-text"><?php the_excerpt(); ?></p>
                        </div>

                        <div class="card-footer article-footer">
                          <a href="<?php the_permalink(); ?>" class="btn btn-pink">LEIA NA ÍNTEGRA <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>  
                </div>
                
                <?php endif ?>

            <?php endif; ?>

                
            <?php $aux = $aux + 1; ?>
            <?php endwhile; else : ?>
                </div>
                <!--Si no encuentra ningun Post-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card w-100 article test">
                            <div class="card-body">
                                <h5 class="card-title"> Sorry, no page was found!</h5>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
            
        </div>

        <div class="container-fluid" id="section-4">
            <div class="row">
                <div class="col-md-10 offset-md-1 d-flex justify-content-center mt-5">
                <h1 class="third-title-center">Conheça nossos cases</h1>
                </div>
              </div>
              
              
              <div class="row p-5 ">
                <div class="col-md-10 offset-md-1 d-flex justify-content-center mt-5">
                  <?php echo do_shortcode( '[smart_post_show id="100"]' ); ?>
                </div>
              </div>
        </div>

        
        <?php get_footer(); ?>

