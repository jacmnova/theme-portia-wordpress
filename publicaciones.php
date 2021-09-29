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
            <?php echo do_shortcode( '[smart_post_show id="41"]' ); ?>  
          </div>
        </div>
        
        
  </div>

    
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