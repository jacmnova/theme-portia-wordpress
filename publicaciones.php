<?php 
    /*
        Template Name: Publicaciones
    */
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
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
    

    <?php 

    $result = wp_get_recent_posts(array(
      'numberposts' => 6,
      'category' => 5,
      'post_status' => 'publish',
    ));
    
    foreach( $result as $p ){ 
      ?>
      — <a href="<?php echo get_permalink($p['ID']) ?>"><?php echo $p['post_title'] ?></a><br />    
      <?php 
    } 
    ?>

    <div class="container-fluid" id="section-4">
      <div class="row">
          <div class="col-md-10 offset-md-1 d-flex justify-content-center mt-5">
            <?php echo do_shortcode( '[smart_post_show id="29"]' ); ?>  
          </div>
        </div>
        
        
  </div>
    <!-- <div class="section-1">
      <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="row">
                    <div class="col-md-4 offset-md-8">
                        <div class="input-group mb-3">
                            <select class="form-select" id="inputGroupSelect01">
                              <option selected>CATEGORIAS </option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card w-100 article-2">
                            <img src="./src/img/HOME/slide1.png" class="card-img-top-large" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Como transformamos uma Companhia Aérea</h5>
                              <p class="card-text">Uma implementação concluída em uma empresa de aviação com 12.000 funcionários</p>
                            </div>
                            <div class="card-footer article-footer">
                              <a href="./publicacion-1.html" class="btn btn-pink">LEIA NA ÍNTEGRA <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="card w-100 article-2">
                            <img src="./src/img/HOME/slide1.png" class="card-img-top-large" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Como transformamos uma Companhia Aérea</h5>
                              <p class="card-text">Uma implementação concluída em uma empresa de aviação com 12.000 funcionários</p>
                            </div>
                            <div class="card-footer article-footer">
                              <a href="#" class="btn btn-pink">LEIA NA ÍNTEGRA <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card w-100 article-2">
                            <img src="./src/img/HOME/slide1.png" class="card-img-top-large" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Como transformamos uma Companhia Aérea</h5>
                              <p class="card-text">Uma implementação concluída em uma empresa de aviação com 12.000 funcionários</p>
                            </div>
                            <div class="card-footer article-footer">
                              <a href="#" class="btn btn-pink">LEIA NA ÍNTEGRA <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="card w-100 article-2">
                            <img src="./src/img/HOME/slide1.png" class="card-img-top-large" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Como transformamos uma Companhia Aérea</h5>
                              <p class="card-text">Uma implementação concluída em uma empresa de aviação com 12.000 funcionários</p>
                            </div>
                            <div class="card-footer article-footer">
                              <a href="#" class="btn btn-pink">LEIA NA ÍNTEGRA <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card w-100 article-2">
                            <img src="./src/img/HOME/slide1.png" class="card-img-top-large" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Como transformamos uma Companhia Aérea</h5>
                              <p class="card-text">Uma implementação concluída em uma empresa de aviação com 12.000 funcionários</p>
                            </div>
                            <div class="card-footer article-footer">
                              <a href="#" class="btn btn-pink">LEIA NA ÍNTEGRA <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card w-100 article-2">
                            <img src="./src/img/HOME/slide1.png" class="card-img-top-large" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Como transformamos uma Companhia Aérea</h5>
                              <p class="card-text">Uma implementação concluída em uma empresa de aviação com 12.000 funcionários</p>
                            </div>
                            <div class="card-footer article-footer">
                              <a href="#" class="btn btn-pink">LEIA NA ÍNTEGRA <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
      </div>
    </div>

    <div class="section-3">
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1 d-flex justify-content-center mt-5">
          <h1 class="third-title-center">Nossos cases</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 offset-md-1 d-flex justify-content-center mt-5">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    
                    <div class="col-md-6">
                      <div class="card w-100 article">
                        <img src="./src/img/HOME/slide1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Como transformamos uma Companhia Aérea</h5>
                          <p class="card-text">Uma implementação concluída em uma empresa de aviação com 12.000 funcionários</p>
                        </div>
                        <div class="card-footer article-footer">
                          <a href="#" class="btn btn-pink">LEIA NA ÍNTEGRA <i class="fas fa-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="card w-100 article">
                        <img src="./src/img/HOME/slide2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Como otimizamos o Varejo</h5>
                          <p class="card-text">Em uma empresa de mais de 30.000 funcionários tivemos resultados bastante expressivos</p>
                        </div>
                        <div class="card-footer article-footer">
                          <a href="#" class="btn btn-pink">LEIA NA ÍNTEGRA <i class="fas fa-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  
                </div>
                <div class="carousel-item ">
                  <div class="row">
                    
                    <div class="col-md-6">
                      <div class="card w-100 article">
                        <img src="./src/img/HOME/slide1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Como transformamos uma Companhia Aérea</h5>
                          <p class="card-text">Uma implementação concluída em uma empresa de aviação com 12.000 funcionários</p>
                        </div>
                        <div class="card-footer article-footer">
                          <a href="#" class="btn btn-pink">LEIA NA ÍNTEGRA <i class="fas fa-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="card w-100 article">
                        <img src="./src/img/HOME/slide2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Como otimizamos o Varejo</h5>
                          <p class="card-text">Em uma empresa de mais de 30.000 funcionários tivemos resultados bastante expressivos</p>
                        </div>
                        <div class="card-footer article-footer">
                          <a href="#" class="btn btn-pink">LEIA NA ÍNTEGRA <i class="fas fa-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  
                </div>
                <div class="row mt-4">
                  <div class="col-md-12">
                    <a href="#" class="link">VEJA MAIS CASES <i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <img src="./src/img/HOME/prev.png" width="70">
              </button>
              <button class="carousel-control-next next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <img src="./src/img/HOME/next.png" width="70">
              </button>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    
    <?php get_footer(); ?>
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