<?php 
    /*
        Template Name: home
    */
?>


<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="container-fluid" id="section-1"> 
    <div class="row">
        <div class="col-md-8 offset-md-2 d-flex justify-content-center center-text mt-10">
            <h1 class="title-center">Conheça a Portia</h1>
        </div>
        <div class="col-md-8 offset-md-2 d-flex justify-content-center mt-4 center-text mb-10">
            <h3 class="text-center">Escalas de trabalho inteligentes e adaptáveis, plenamente integradas à legislação trabalhista e implementadas com estudo e consultoria aprofundada sobre o seu negócio.</h3>
        </div>
    </div> 
</div>

<div class="container-fluid" id="section-2">
    <div class="row">
        <div class="col-md-10 offset-md-1 d-flex justify-content-center center-text">
            <h1 class="second-title-center">Nossos sistemas já atendem:</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2 justify-content-center mb-2">
            <div class="row">
                <div class="col-md-4 mt-4">
                    <div class="card mini-card">
                      <div class="card-body">
                        <div class="row">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/img/HOME/logo-airplane.png" class="mini-logo">
                        </div>
                      </div>
                      <!-- <div class="card-footer footer-mini">
                        <div class="row d-flex justify-content-center">
                          <p class="text-card-mini">Aviação</p>
                        </div>
                      </div> -->
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card mini-card">
                      <div class="card-body">
                        <div class="row">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/img/HOME/logo-shop.png" class="mini-logo">
                        </div>
                        
                      </div>
                      <!-- <div class="card-footer footer-mini">
                        <div class="row d-flex justify-content-center mt-lg-3">
                          <p class="text-card-mini">Varejo</p>
                        </div>
                      </div> -->
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card mini-card">
                      <div class="card-body">
                        <div class="row">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/img/HOME/logo-medicines.png" class="mini-logo">
                        </div>
                        
                      </div>
                      <!-- <div class="card-footer footer-mini">
                        <div class="row d-flex justify-content-center mt-3">
                          <p class="text-card-mini">Laboratórios</p>
                        </div>
                      </div> -->
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="container-fluid" id="section-3">
    <div class="row mt-5 mb-5">
        <div class="col-md-6 offset-md-3 d-flex justify-content-center center-text" id="box-third-text">
            <h1 class="third-title-center">A Portia esclarece e desata os nós da sua gestão de escalas:</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                <div class="col-md-4 p-2" id="circle-section">
                    <div class="circle">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/HOME/logo-circle-1.png" class="logo-circle">
                      </div>
                      <div class="row mt-5">
                        <p class="title-section-3">Reduzindo custos com a mão de obra e passivo trabalhista</p>
                        <p class="text-section-3">
                          Entregamos maior visibilidade aos desperdícios de recursos humanos.
                        </p>
                        <p class="text-section-3">
                          Alocamos recursos e gerenciamos as folgas nos momentos mais adequados.
                        </p>
                      </div>
                </div>
                <div class="col-md-4 p-2" id="circle-section">
                    <div class="circle">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/HOME/logo-circle-2.png" class="logo-circle">
                      </div>
        
                      <div class="row mt-5">
                        <p class="title-section-3">Melhorando o nível de serviço aos clientes</p>
                        <p class="text-section-3">
                          Garantimos que as escalas sejam construídas de forma que seu cliente tenha a melhor experiência possível, alocando recursos nos dias e horários mais adequados.
                        </p>
                      </div>
                </div>
                <div class="col-md-4 p-2" id="circle-section">
                    <div class="circle">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/HOME/logo-circle-3.png" class="logo-circle">
                      </div>
                      <div class="row mt-5">
                        <p class="title-section-3">Auxiliando na mudança cultural</p>
                        <p class="text-section-3">
                          Aumentamos a exposição do impacto das escalas aos executivos da companhia, e ao mesmo tempo entregamos maior autonomia e transparência aos funcionários.
                        </p>
                      </div>
                </div>
            </div>
        </div>
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
          <?php echo do_shortcode( '[smart_post_show id="42"]' ); ?>
        </div>
      </div>
</div>
<?php get_footer(); ?>