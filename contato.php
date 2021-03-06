<?php 
    /*
        Template Name: Contato
    */
?>

<?php get_sidebar(); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9290f66e82.js" crossorigin="anonymous"></script>
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/about.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/scroll.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/nav-bar.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/footer.css" rel="stylesheet">
    <title>Portia - Quem somos</title>
    <?php wp_head(); ?>
  </head>
  <body>  
      

<!-- Modal -->

<div class="modal fade" id="GabrielRoque" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-profile">
      <div class="modal-body p-5">
        <div class="row close-fa">
          <div class="col-md-1 offset-10">
            <button type="button" class="btn-closed" data-bs-dismiss="modal">
              <i class="fas fa-times icon-fa"></i>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 border-left-card">
            <div class="card w-100 article">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/profiles/Gabriel Roque.png" class="card-img-top" alt="..." >
              <div class="row">
                <div class="col-md-12 d-flex justify-content-end container-btn">
                </div>
              </div>
              <div class="card-body">
                <h5 class="card-title-white">Gabriel Roque</h5>
                <p class="card-text-white">S??cio fundador e diretor executivo</p>
              </div>
              <div class="card-footer article-footer">
                <a href="https://www.linkedin.com/in/lgabrielroque" class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM</a>
                <p class="card-email-white">gabriel.roque@portialac.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="body-text">
              <p class="text-modal">Bacharel em Engenharia Mec??nica pela Unicamp, p??s-graduado em Estrat??gia de Neg??cios pela FIA e mestre em Engenharia de Produ????o pela USP. 
                Tem mais de dez anos de carreira desenvolvidos nas ??reas de planejamento estrat??gico, gest??o e opera????es. 
                Foi gerente de planejamento de capacidade operacional da Latam, liderando projetos de implanta????o de sistemas de WFM (Workforce Management) 
                e Controller da Diretoria de Servi??os Aeroportu??rios na mesma companhia. 
                Tem vasta experi??ncia em projetos de excel??ncia operacional, modelagem de custos, log??stica e mudan??a de cultura em players de diversos segmentos. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="CarlosSanjuan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-profile">
      <div class="modal-body p-5">
        <div class="row close-fa">
          <div class="col-md-1 offset-10">
            <button type="button" class="btn-closed" data-bs-dismiss="modal">
              <i class="fas fa-times icon-fa"></i>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 border-left-card">
            <div class="card w-100 article">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/profiles/carlos.png" class="card-img-top" alt="..." >
              <div class="row">
                <div class="col-md-12 d-flex justify-content-end container-btn">
                </div>
              </div>
              <div class="card-body">
                <h5 class="card-title-white">Carlos Sanju??n</h5>
                <p class="card-text-white">S??cio fundador e diretor corporativo</p>
              </div>
              <div class="card-footer article-footer">
                <a href="#" class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM</a>
                <p class="card-email-white">email@portialac.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="body-text">
              <p class="text-modal">Bacharel em Engenharia Mec??nica pela Unicamp, p??s-graduado em Estrat??gia de Neg??cios pela FIA e mestre em Engenharia de Produ????o pela USP. 
                Tem mais de dez anos de carreira desenvolvidos nas ??reas de planejamento estrat??gico, gest??o e opera????es. 
                Foi gerente de planejamento de capacidade operacional da Latam, liderando projetos de implanta????o de sistemas de WFM (Workforce Management) 
                e Controller da Diretoria de Servi??os Aeroportu??rios na mesma companhia. 
                Tem vasta experi??ncia em projetos de excel??ncia operacional, modelagem de custos, log??stica e mudan??a de cultura em players de diversos segmentos. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ErikaStecko" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-profile">
      <div class="modal-body p-5">
        <div class="row close-fa">
          <div class="col-md-1 offset-10">
            <button type="button" class="btn-closed" data-bs-dismiss="modal">
              <i class="fas fa-times icon-fa"></i>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 border-left-card">
            <div class="card w-100 article">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/ABOUT/Erika Stecko-1@2x.png" class="card-img-top" alt="..." >
              <div class="row">
                <div class="col-md-12 d-flex justify-content-end container-btn">
                </div>
              </div>
              <div class="card-body">
                <h5 class="card-title-white">Erika Stecko </h5>
                <p class="card-text-white">Consultor</p>
              </div>
              <div class="card-footer article-footer">
                <a href="https://www.linkedin.com/in/erika-stecko-69a375b2 " class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM </a>
                <p class="card-email-white">erika.stecko@portialac.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="body-text">
              <p class="text-modal">Formada em Rela????es Internacionais, com p??s gradua????o em Economia pela FGV e em An??lises em Big Data pela FIA. 
                Mais de 8 anos de experi??ncia em Capacity Planning e Workforce Management. Participou ativamente de implementa????es de solu????es de Capacity e WFM em grandes empresas, 
                auxiliando na cria????o de novos processos e procedimentos internos. Possui tamb??m experi??ncia em projetos de log??stica e supply chain, com maior foco em an??lise de dados. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="CaioAndrade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-profile">
      <div class="modal-body p-5">
        <div class="row close-fa">
          <div class="col-md-1 offset-10">
            <button type="button" class="btn-closed" data-bs-dismiss="modal">
              <i class="fas fa-times icon-fa"></i>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 border-left-card">
            <div class="card w-100 article">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/profiles/Caio Andrade.png" class="card-img-top" alt="..." >
              <div class="row">
                <div class="col-md-12 d-flex justify-content-end container-btn">
                </div>
              </div>
              <div class="card-body">
                <h5 class="card-title-white">Caio Andrade </h5>
                <p class="card-text-white">Consultor</p>
              </div>
              <div class="card-footer article-footer">
                <a href="https://www.linkedin.com/in/caio-andrade-006435101 " class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM </a>
                <p class="card-email-white">caio.andrade@portialac.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="body-text">
              <p class="text-modal"> 
                Graduado em Avia????o Civil, possui MBA em Gest??o Estrat??gica pela ESALQ-USP e certifica????o Black Belt. Atua????o de 10 anos em ??reas de Planejamento Operacional, Gest??o de Performance e Work Force Management. Liderou a implanta????o de sistema de WFM na Latam Cargo. Foi respons??vel pelo planejamento de capacidade de todos os aeroportos do Nordeste com opera????o da Latam. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="GabrielaGara" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-profile">
      <div class="modal-body p-5">
        <div class="row close-fa">
          <div class="col-md-1 offset-10">
            <button type="button" class="btn-closed" data-bs-dismiss="modal">
              <i class="fas fa-times icon-fa"></i>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 border-left-card">
            <div class="card w-100 article">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/profiles/Gabriela Gara.png" class="card-img-top" alt="..." >
              <div class="row">
                <div class="col-md-12 d-flex justify-content-end container-btn">
                </div>
              </div>
              <div class="card-body">
                <h5 class="card-title-white">Gabriela Gara </h5>
                <p class="card-text-white">Consultora</p>
              </div>
              <div class="card-footer article-footer">
                <a href="https://www.linkedin.com/in/gabriela-gara" class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM</a>
                <p class="card-email-white">gabriela.gara@portialac.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="body-text">
              <p class="text-modal">
                Bacharel em Engenharia Mec??nica pela Escola Polit??cnica da USP com ??nfase em biomec??nica, p??s-graduada em BI pela ESPM. Atua desde 2013 em Capacity Planning e Workforce Management. Foi respons??vel pelo planejamento operacional de mais de 15 aeroportos da Latam. Possui experi??ncia em planejamento de processos, dimensionamento operacional e projetos. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="FilipeSoares" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-profile">
      <div class="modal-body p-5">
        <div class="row close-fa">
          <div class="col-md-1 offset-10">
            <button type="button" class="btn-closed" data-bs-dismiss="modal">
              <i class="fas fa-times icon-fa"></i>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 border-left-card">
            <div class="card w-100 article">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/profiles/Filipe Soares.png" class="card-img-top" alt="..." >
              <div class="row">
                <div class="col-md-12 d-flex justify-content-end container-btn">
                </div>
              </div>
              <div class="card-body">
                <h5 class="card-title-white">Filipe Soares </h5>
                <p class="card-text-white">Consultor</p>
              </div>
              <div class="card-footer article-footer">
                <a href="https://www.linkedin.com/in/filipe-d-soares-069ab816 " class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM</a>
                <p class="card-email-white">filipe.soares@portialac.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="body-text">
              <p class="text-modal">Bacharel em Engenharia Bioqu??mica pela Universidade de S??o Paulo, possui MBA em Gest??o da Qualidade pela Escola Polit??cnica da USP. 
                Atuou por mais de 4 anos com o estudo de demandas para o setor p??blico e desde 2018 atua como consultor com experi??ncia em Garantia da Qualidade e Work Force Management.  
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="VitorAgostini" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-profile">
      <div class="modal-body p-5">
        <div class="row close-fa">
          <div class="col-md-1 offset-10">
            <button type="button" class="btn-closed" data-bs-dismiss="modal">
              <i class="fas fa-times icon-fa"></i>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 border-left-card">
            <div class="card w-100 article">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/profiles/Vitor Agostini.png" class="card-img-top" alt="..." >
              <div class="row">
                <div class="col-md-12 d-flex justify-content-end container-btn">
                </div>
              </div>
              <div class="card-body">
                <h5 class="card-title-white">Vitor Agostini </h5>
                <p class="card-text-white">Consultor</p>
              </div>
              <div class="card-footer article-footer">
                <a href="https://www.linkedin.com/in/vitorhugoagostini " class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM </a>
                <p class="card-email-white">vitor.agostini@portialac.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="body-text">
              <p class="text-modal">Bacharel em Engenharia Aeroespacial e em Ci??ncia e Tecnologia pela Universidade Federal do ABC. Possui grande experi??ncia em planejamento e gest??o operacional, implanta????o e desenvolvimento de sistemas combinado com an??lise de dados. Foi respons??vel pelo desenvolvimento da ??rea de Capacity na Avianca Brasil. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="GiovanniZerlin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-profile">
      <div class="modal-body p-5">
        <div class="row close-fa">
          <div class="col-md-1 offset-10">
            <button type="button" class="btn-closed" data-bs-dismiss="modal">
              <i class="fas fa-times icon-fa"></i>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 border-left-card">
            <div class="card w-100 article">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/profiles/Giovanni.png" class="card-img-top" alt="..." >
              <div class="row">
                <div class="col-md-12 d-flex justify-content-end container-btn">
                </div>
              </div>
              <div class="card-body">
                <h5 class="card-title-white">Giovanni Zerlin </h5>
                <p class="card-text-white">Consultor </p>
              </div>
              <div class="card-footer article-footer">
                <a href="https://www.linkedin.com/in/giovanni-zerlin " class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM</a>
                <p class="card-email-white">giovanni.zerlin@portialac.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="body-text">
              <p class="text-modal">Bacharel em Ci??ncia e Tecnologia pela Universidade Federal do ABC, desde 2015 atuando com an??lise de dados, implementa????o de sistemas e desenvolvimento comercial. Respons??vel por implementar sistemas de analise de dados de RH na am??rica latina e participa????o na constru????o de grandes produtos como Serasa Limpa Nome. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="MarianaNery" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-profile">
      <div class="modal-body p-5">
        <div class="row close-fa">
          <div class="col-md-1 offset-10">
            <button type="button" class="btn-closed" data-bs-dismiss="modal">
              <i class="fas fa-times icon-fa"></i>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 border-left-card">
            <div class="card w-100 article">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/profiles/MarianaNery.png" class="card-img-top" alt="..." >
              <div class="row">
                <div class="col-md-12 d-flex justify-content-end container-btn">
                </div>
              </div>
              <div class="card-body">
                <h5 class="card-title-white">Mariana Nery</h5>
                <p class="card-text-white">Consultor </p>
              </div>
              <div class="card-footer article-footer">
                <a href="https://www.linkedin.com/in/giovanni-zerlin " class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM</a>
                <p class="card-email-white">mariana.nery@portialac.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="body-text">
              <p class="text-modal">
                Bacharel em Turismo pela Universidade de S??o Paulo (USP) e com Especializa????o em Data Science (2019). Profissional com vis??o data driven, experi??ncia de 8+ anos em Data Analysis & BI e ampla experi??ncia em projetos variados (incluindo gest??o e coordena????o), marketing digital e educa????o. Utiliza????o de plataformas de tratamento e visualiza????o de dados e uso de metodologias ??geis.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Diego" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-profile">
      <div class="modal-body p-5">
        <div class="row close-fa">
          <div class="col-md-1 offset-10">
            <button type="button" class="btn-closed" data-bs-dismiss="modal">
              <i class="fas fa-times icon-fa"></i>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 border-left-card">
            <div class="card w-100 article">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/profiles/diego.png" class="card-img-top" alt="..." >
              <div class="row">
                <div class="col-md-12 d-flex justify-content-end container-btn">
                </div>
              </div>
              <div class="card-body">
                <h5 class="card-title-white">Diego Ongaro </h5>
                <p class="card-text-white">Consultor </p>
              </div>
              <div class="card-footer article-footer">
                <a href="https://www.linkedin.com/in/giovanni-zerlin " class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM</a>
                <p class="card-email-white">diego.ongaro@portialac.com </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="body-text">
              <p class="text-modal">
                Formado em gest??o da Tecnologia da Informa????o, disp??e de background t??cnico com mais de 5 anos em infraestrutura de TI de n??vel Data Center, possui experiencia em gest??o de projetos e metodologias ??geis. Foi respons??vel pela implementa????o de solu????o BI numa startup (Donuts e Caf??) localizada na prov??ncia de Cork no sul da Irlanda.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



    <?php get_sidebar(); ?>
    
    <div class="section-1">
        <div class="row" id="text">
          <div class="col-md-8 offset-md-2 d-flex justify-content-center">
            <h1 class="title-center">Sobre a Portia</h1>
          </div>
          <div class="col-md-8 offset-md-2  mt-4">
            <h4 class="text-center">A Portia ?? uma empresa especializada em cuidar da transforma????o de processos operacionais e recursos, por meio de tecnologia e compreens??o profunda dos problemas e necessidades de cada tipo de neg??cio. </h3>
            <h4 class="text-center">A base do nosso time ?? a colabora????o, e contamos com especialistas com conhecimento 360 em diversos segmentos de mercado. </h3>
            <h4 class="text-center">Somos apaixonados por resolver problemas. Colocamos a m??o na massa e trabalhamos dia-a-dia esclarecendo quest??es ??? aplicando raz??o e l??gica para criar harmonia.</h3>
          </div>
        </div>
    </div>

    <div class="section-2">
        <div class="row" id="portai">
          <div class="col-md-6 offset-md-1 d-flex justify-content-center mt-5">
            <div>
                <h3 class="title-portai"><span class="title-bold">Portia de Shakespeare</span>,<span class="title-regular"> nossa inspira????o</span></h3>
                <p class="sub-text mt-4">Portia ?? a protagonista do romance ???O Mercador de Veneza??? de Shakespeare. </p>
                <p class="sub-text"><span class="sub-text-portai">??tica, sagacidade e lealdade </span>fazem de Portia uma das personagens mais famosas de Shakespeare. </p>
                <p class="sub-text"><span class="sub-text-portai">Portia</span> supera todos os obst??culos que se apresentam, de maneira brilhante</p></p>
            </div>
          </div>
          <div class="col-md-4">
           <img src="<?php echo get_template_directory_uri() ?>/assets/img/ABOUT/portia-big.png" class="portia mt-5">
        </div>

        </div>
    </div>

    <div class="section-2-text">
      <div class="row">
        <div class="col-md-10 offset-md-1 d-flex justify-content-center mt-5">
          <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-9">
              <p class="light-text">A Portia tamb??m faz parte do ecossistema Ekantika, uma rede de empresas conectadas pelo prop??sito de despertar e provocar evolu????es em diversos tipos de neg??cio. </p>
              <p class="light-text">A parceria com a Ekantika nos garante uma troca de conhecimentos intensa, al??m de fornecer insumos para o DNA de consultoria que a Portia carrega.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5 mb-5" id="section-2-2">

        <div class="col-md-10 offset-md-1 d-flex justify-content-center" id="section-2-2-2">
          <div class="row">
              <div class="col-md-12">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/ABOUT/portai-diagram.png" class="diagram">
              </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section-2-1">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 mt-5">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-center-section-2">Parceiros</h1>
                        </div>
                    </div>
                    <div class="row mt-4 mb-4">
                        <div class="col-md-4 col-sm-4 d-flex justify-content-center">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/img/ABOUT/logo-beholder.png" class="logo-parceiros" id="beholder" width="150" height="170">
                        </div>
                        <div class="col-md-4 col-sm-4 d-flex justify-content-center">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/img/ABOUT/logo-ievo.png" class="logo-parceiros" id="ievo" width="250" height="135">
                        </div>
                        <div class="col-md-4 col-sm-4 d-flex justify-content-center">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/img/ABOUT/logo-mitika.png" class="logo-parceiros" id="mitika" width="250" height="200">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-2-2" id="team">
      <div class="container" >
          <div class="row">
              <div class="col-md-12 mt-5">
                  <div class="row mb-5">
                      <div class="col-md-12">
                          <h1 class="title-center-section-2">Nosso time</h1>
                      </div>
                  </div>
                  <div class="row mt-5 mb-4">
                      <div class="col-md-3 d-flex justify-content-center">
                        <div class="card w-100 article">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/img/profiles/Gabriel Roque.png" class="card-img-top" alt="...">
                          <div class="row">
                            <div class="col-md-12 d-flex justify-content-end container-btn">
                              <button class="btn button-card" data-bs-toggle="modal" data-bs-target="#GabrielRoque">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/ABOUT/Componente 2 ??? 2.png">
                              </button>
                            </div>
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Gabriel Roque</h5>
                            <p class="card-text">S??cio fundador e diretor executivo</p>
                          </div>
                          <div class="card-footer article-footer">
                            <a href="https://www.linkedin.com/in/lgabrielroque" class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 d-flex justify-content-center">
                        <div class="card w-100 article">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/img/profiles/carlos.png" class="card-img-top" alt="...">
                          <div class="row">
                            <div class="col-md-12 d-flex justify-content-end container-btn">
                              <button class="btn button-card" data-bs-toggle="modal" data-bs-target="#CarlosSanjuan">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/ABOUT/Componente 2 ??? 2.png">
                              </button>
                            </div>
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Carlos Sanju??n</h5>
                            <p class="card-text">S??cio fundador e diretor corporativo</p>
                          </div>
                          <div class="card-footer article-footer">
                            <a href="#" class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM</a>
                            
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 d-flex justify-content-center">
                        <div class="card w-100 article">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/img/ABOUT/Erika Stecko-1@2x.png" class="card-img-top" alt="...">
                          <div class="row">
                            <div class="col-md-12 d-flex justify-content-end container-btn">
                              <button class="btn button-card" data-bs-toggle="modal" data-bs-target="#ErikaStecko">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/ABOUT/Componente 2 ??? 2.png">
                              </button>
                            </div>
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Erika Stecko</h5>
                            <p class="card-text">Consultora</p>
                          </div>
                          <div class="card-footer article-footer">
                            <a href="https://www.linkedin.com/in/erika-stecko-69a375b2 " class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 d-flex justify-content-center">
                        <div class="card w-100 article">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/img/profiles/Caio Andrade.png" class="card-img-top" alt="...">
                          <div class="row">
                            <div class="col-md-12 d-flex justify-content-end container-btn">
                              <button class="btn button-card" data-bs-toggle="modal" data-bs-target="#CaioAndrade">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/ABOUT/Componente 2 ??? 2.png">
                              </button>
                            </div>
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Caio Andrade</h5>
                            <p class="card-text">Consultora</p>
                          </div>
                          <div class="card-footer article-footer">
                            <a href="https://www.linkedin.com/in/caio-andrade-006435101 " class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM </a>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="row mt-5 mb-5">
                      <div class="col-md-3 d-flex justify-content-center">
                        <div class="card w-100 article">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/img/profiles/Gabriela Gara.png" class="card-img-top" alt="...">
                          <div class="row">
                            <div class="col-md-12 d-flex justify-content-end container-btn">
                              <button class="btn button-card" data-bs-toggle="modal" data-bs-target="#GabrielaGara">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/ABOUT/Componente 2 ??? 2.png">
                              </button>
                            </div>
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Gabriela Gara</h5>
                            <p class="card-text">Consultora</p>
                          </div>
                          <div class="card-footer article-footer">
                            <a href="https://www.linkedin.com/in/gabriela-gara" class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 d-flex justify-content-center">
                        <div class="card w-100 article">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/img/profiles/Filipe Soares.png" class="card-img-top" alt="...">
                          <div class="row">
                            <div class="col-md-12 d-flex justify-content-end container-btn">
                              <button class="btn button-card" data-bs-toggle="modal" data-bs-target="#FilipeSoares">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/ABOUT/Componente 2 ??? 2.png">
                              </button>
                            </div>
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Filipe Soares</h5>
                            <p class="card-text">Consultor</p>
                          </div>
                          <div class="card-footer article-footer">
                            <a href="https://www.linkedin.com/in/filipe-d-soares-069ab816 " class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 d-flex justify-content-center">
                        <div class="card w-100 article">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/img/profiles/Vitor Agostini.png" class="card-img-top" alt="...">
                          <div class="row">
                            <div class="col-md-12 d-flex justify-content-end container-btn">
                              <button class="btn button-card" data-bs-toggle="modal" data-bs-target="#VitorAgostini">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/ABOUT/Componente 2 ??? 2.png">
                              </button>
                            </div>
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Vitor Agostini</h5>
                            <p class="card-text">Consultor</p>
                          </div>
                          <div class="card-footer article-footer">
                            <a href="https://www.linkedin.com/in/vitorhugoagostini " class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 d-flex justify-content-center">
                        <div class="card w-100 article">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/img/profiles/Giovanni.png" class="card-img-top" alt="...">
                          <div class="row">
                            <div class="col-md-12 d-flex justify-content-end container-btn">
                              <button class="btn button-card" data-bs-toggle="modal" data-bs-target="#GiovanniZerlin">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/ABOUT/Componente 2 ??? 2.png">
                              </button>
                            </div>
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Giovanni Zerlin</h5>
                            <p class="card-text">Consultor</p>
                          </div>
                          <div class="card-footer article-footer">
                            <a href="https://www.linkedin.com/in/giovanni-zerlin " class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM</a>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="row mt-5 mb-5">
                    <div class="col-md-3 d-flex justify-content-center">
                      <div class="card w-100 article">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/profiles/MarianaNery.png" class="card-img-top" alt="...">
                        <div class="row">
                          <div class="col-md-12 d-flex justify-content-end container-btn">
                            <button class="btn button-card" data-bs-toggle="modal" data-bs-target="#MarianaNery">
                              <img src="<?php echo get_template_directory_uri() ?>/assets/img/ABOUT/Componente 2 ??? 2.png">
                            </button>
                          </div>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Mariana Nery</h5>
                          <p class="card-text">Consultora</p>
                        </div>
                        <div class="card-footer article-footer">
                          <a href="https://www.linkedin.com/in/marianapnery/" class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                      <div class="card w-100 article">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/profiles/diego.png" class="card-img-top" alt="...">
                        <div class="row">
                          <div class="col-md-12 d-flex justify-content-end container-btn">
                            <button class="btn button-card" data-bs-toggle="modal" data-bs-target="#Diego">
                              <img src="<?php echo get_template_directory_uri() ?>/assets/img/ABOUT/Componente 2 ??? 2.png">
                            </button>
                          </div>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Diego Ongaro</h5>
                          <p class="card-text">Consultor</p>
                        </div>
                        <div class="card-footer article-footer">
                          <a href="https://www.linkedin.com/in/diego-ongaro-de-mello-lopes-564b07a7/" class="btn btn-pink"><i class="fab fa-linkedin"></i> ENVIE UMA MENSAGEM</a>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
          </div>
      </div>
    </div>

    <div class="section-3" id="contato">

      <div class="container ">
        <div class="row ">
          <div class="col-md-12 d-flex justify-content-center ">
          <h1 class="third-title-center" style="margin-top: 80px ;">Fale conosco</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12  d-flex justify-content-center mt-5">
            <div class="row">
              <div class="col-md-6 form-group">
                <div class="row">
                  <div class="mb-3">
                    <input type="text" class="form-control input-contact" id="name" placeholder="NOME*" required v-model="from_name">
                  </div>
                  <div class="mb-3">
                    <input type="email" class="form-control input-contact" id="mail" placeholder="E-MAIL:*" required v-model="mail">
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control input-contact" id="phone" placeholder="TELEFONE:" v-model="phone">
                  </div>
                  <div class="mb-3 mt-5">
                    <textarea class="form-control input-contact-text" id="text" placeholder="MENSAGEM:*" rows="3" v-model="message"></textarea>
                  </div>

                  <button @click="enviar" class="btn btn-pink">Enviar </button>
                </div>
                <div class="row mt-4">
                  <p class="text-contact">+55 11 4115-7724 | +55 11 3062-5920</p>
                  <p class="text-contact">Avenida Queiroz Filho, 1700 Sala 201 - torre A</p>
                  <p class="text-contact">S??o Paulo - SP</p>
                </div>
                
              </div>
              <div class="col-md-6">

                <div class="row">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.69045597357!2d-46.735516485022586!3d-23.543633284691655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce561dfe7d912d%3A0xce2f8c4581fa13c2!2sAv.%20Queiroz%20Filho%2C%201700%20-%20Vila%20Hamburguesa%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2005319-000%2C%20Brasil!5e0!3m2!1spt-BR!2sve!4v1620394264567!5m2!1spt-BR!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 deflex justify-content-center">
            <div class="alert alert-success alert-dismissible fade d-flex justify-content-center" role="alert" id="mailSucess">
              <strong>Recebemos sua mensagem, em breve entraremos em contato</strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="alert alert-danger alert-dismissible fade d-flex justify-content-center" role="alert" id="mailError">
              <strong>Ocorreu um problema ao enviar o e-mail</strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid footer w-100" id="footer-web">
        <div class="row">
          <div class="col-md-10 offset-1 mt-5">
            <div class="row">
              <div class="col-md-6 center-text">
                <h1 class="title-footer">Newsletter</h1>
                <p class="text-footer">Se inscreva e mantenha-se atualizado</p>
              </div>
              <div class="col-md-6">
                <div class="input-group mb-3 input-footer">
                  <input type="text" class="form-control input-footer" placeholder="DIGITE SEU EMAIL" aria-label="DIGITE SEU EMAIL" aria-describedby="button-addon2">
                  <button class="btn btn-input-vine" type="button" id="button-addon2">
                    <i class="fas fa-arrow-right"></i>
                  </button>
                </div>
              </div>
            </div>
            
            <div class="row mt-4">
              <div class="col-md-5">
                <p class="text-footer">+55 11 4115-7724</p>
                <p class="text-footer">+55 11 3062-5929</p>
              </div>
              <div class="col-md-4">
                <h4 class="title-footer">Envie uma mensagem</h4>
                <p class="text-footer"><a href="https://www.linkedin.com/company/portia-lac/">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/HOME/likedin.png" class="linkedin" width="35"></a> 
                  contato@portialac.com
                </p>
              </div>
              <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/HOME/logo.png" class="logo-footer">
              </div>
            </div>
  
            <div class="row mb-4">
              <div class="col-md-12">
                <p class="text-footer">Avenida Queiroz Filho, 1700</p>
                <p class="text-footer">sala 201 - torre A</p>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="container-fluid footer" id="footer-movil">
        <div class="row" id="row-movil">
          <div class="col-md-12 mt-5">
            <div class="row">
              <div class="col-md-6 center-text">
                <h1 class="title-footer">Newsletter</h1>
                <p class="text-footer">Se inscreva e mantenha-se atualizado</p>
              </div>
              <div class="col-md-6">
                <div class="input-group mb-3 input-footer">
                  <input type="text" class="form-control input-footer" placeholder="DIGITE SEU EMAIL" aria-label="DIGITE SEU EMAIL" aria-describedby="button-addon2">
                  <button class="btn btn-input-vine" type="button" id="button-addon2">
                    <i class="fas fa-arrow-right"></i>
                  </button>
                </div>
              </div>
            </div>
            
            <div class="row mt-4">
              <div class="col-md-5 ">
                <p class="text-footer">+55 11 4115-7724</p>
                <p class="text-footer">+55 11 3062-5929</p>
              </div>
              <div class="col-md-4">
                <h4 class="title-footer">Envie uma mensagem</h4>
                <p class="text-footer"><a href="https://www.linkedin.com/company/portia-lac/">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/HOME/likedin.png" class="linkedin" width="35"></a> 
                  contato@portialac.com
                </p>
              </div>
              <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/HOME/logo.png" class="w-100">
              </div>
            </div>
  
            <div class="row mb-4">
              <div class="col-md-12">
                <p class="text-footer">Avenida Queiroz Filho, 1700</p>
                <p class="text-footer">sala 201 - torre A</p>
              </div>
            </div>
          </div>
        </div>
    </div>
  
    <?php wp_footer(); ?>

    
      
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>

      
    $(document).ready(function () {
        // Handler for .ready() called.
        $('html, body').animate({
            scrollTop: $('#team').offset().top
        }, 'slow');
    });
      
      
        var elmnt = document.getElementById("contact");
        elmnt.scrollIntoView();
      
      </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js">
</script>
<script src="https://cdn.emailjs.com/dist/email.min.js" type="text/javascript">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
<script>
    (function(){
        emailjs.init("user_DAWrpiViCkCTKP8hBBqWS");
     })();
    const vue = new Vue({
        el: '#contato',
        data(){
            return {
                from_name: '',
                mail: '',
                phone: '',
                message: '',
            }
        },
        methods: {
            enviar(){
                let data = {
                    name: this.from_name,
                    mail: this.mail,
                    phone: this.phone,
                    message: this.message,
                };
                
                emailjs.send("service_tvd52hd","template_t5yfzsx", data)
                .then(function(response) {
                    if(response.text === 'OK'){
                      document.getElementById('mailSucess').classList.add('show');
                      clear()
                    }
                   console.log("SUCCESS. status=%d, text=%s", response.status, response.text);
                }, function(err) {
                      document.getElementById('mailError').classList.add('show');
                   console.log("FAILED. error=", err);
                });
            }
        }
    });

    function clear() {
      console.log("limpiando")
      document.getElementById('name').value = '';
      document.getElementById('mail').value = '';
      document.getElementById('phone').value = '';
      document.getElementById('text').value = '';
    }
</script>

  </body>
</html>