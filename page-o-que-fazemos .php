<?php 
    /*
        Template Name: Work
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
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/work.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/scroll.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/nav-bar.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/footer.css" rel="stylesheet">
        <title>Portia - O que Fazemos</title>
    </head>
    <body <?php body_class(); ?>>

        <?php get_sidebar(); ?>
            
        <div class="section-1">
            <div class="row" id="text">
            <div class="col-md-8 offset-md-2 d-flex justify-content-center">
                <h1 class="title-center">A Portia gera valor para empresas de diversos tamanhos e setores usando a gestão eficiente de escalas</h1>
            </div>
            <div class="col-md-8 offset-md-2  mt-4">
                <h3 class="text-center">Ao combinar um software de ponta com um estudo cuidadoso e aprofundado das necessidades de cada empresa, a Portia está reinventando no Brasil o que significa fazer gestão de escalas de forma inteligente. </h3>
                <!-- <h3 class="text-center">Isso é feito por meio de imersões dentro do cliente, compreensão profunda da forma de trabalho e cultura da empresa, e elaboração de processos e escalas partindo deste conhecimento. </h3>
                <h3 class="text-center">O trabalho da Portia ajuda empresas a reduzir custos com ativos trabalhistas, pois sincroniza as jornadas de trabalho dos colaboradores com as devidas camadas de legislações brasileiras. </h3>
                <h3 class="text-center">Toda essa clareza e transparência resultam em uma empresa mais enxuta e fluida, com muito mais visibilidade do todo para gerentes e diretores e maior adaptabilidade a novos cenários.</h3> -->
            </div>
            </div>
        </div>

        <div class="section-2">
            <div class="row mt-5 mb-5" id="atentions">
            <div class="col-md-10 offset-md-1 d-flex justify-content-center">
                <h1 class="second-title-center">Como trabalhamos</h1>
            </div>

            <div class="col-md-10 offset-md-1  mt-5">
                <div class="row d-flex justify-content-center">
                <div class="col-md-7">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/WORK/piece-1.png" class="piece">
                </div>
                <div class="col-md-5" id="mini-section">
                    <div class="box">
                    <h4 class="title-contend">Imersão e Modelagem</h4>
                    <br>
                    <p class="text-contend">Em conjunto com o cliente vamos compreender de forma aprofundada as necessidades e dores do negócio, e a partir desse conhecimento dimensionar demandas para cada processo operacional, respeitando a forma de trabalhar e as variáveis de cada empresa.</p>
                    </div>
                </div>
                </div>
                <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-5" id="mini-section">
                    <div class="box">
                    <h4 class="title-contend">Otimização de Escalas</h4>
                    <br>
                    <p class="text-contend">Integramos as informações recolhidas no primeiro passo e fazemos a otimização das escalas. Além disso, garantimos a gestão da melhoria contínua desses processos para que o sistema e o conhecimento que o alimenta permaneça como herança contínua na empresa.</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/WORK/piece-2.png"  class="piece">
                </div>
                </div>
                <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-7">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/WORK/piece-3.png"  class="piece">
                </div>
                <div class="col-md-5" id="mini-section">
                    <div class="box">
                    <h4 class="title-contend">Gestão Simplificada do dia-a-dia</h4>
                    <br>
                    <p class="text-contend">Com as escalas otimizadas e acessíveis em sistemas simples de se usar, colaboradores e gestores ganham mais autonomia e a empresa ganha visibilidade de seus processos operacionais, garantindo respeito às leis trabalhistas e uma cultura mais saudável.</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <?php get_footer(); ?>

