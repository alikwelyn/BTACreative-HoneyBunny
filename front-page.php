<?php get_header(); ?>

    <section id="home">
      <div class="container-fluid">
        <div id="banner-indicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/imgs/banners/banner-topo-petshop.png')">
              <div class="carousel-caption">
                <a href="#contato" class="btn btn__yellow">fale conosco</a>                 
              </div>
            </div>
            <div class="carousel-item " style="background-image: url('<?php bloginfo('template_url'); ?>/assets/imgs/banners/banner-topo-banho-tosa.png')">
              <div class="carousel-caption">
                <a href="#contato" class="btn btn__yellow">fale conosco</a>                 
              </div>
            </div>
            <div class="carousel-item" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/imgs/banners/banner-topo-consultorio.png')">
              <div class="carousel-caption">
                <a href="#contato" class="btn btn__yellow">fale conosco</a>                 
              </div>
            </div>
            <div class="carousel-item" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/imgs/banners/banner-topo-creche.png')">
              <div class="carousel-caption">
                <a href="#contato" class="btn btn__yellow">fale conosco</a>                 
              </div>
            </div>
            <div class="carousel-item" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/imgs/banners/banner-topo-hotel.png')">
              <div class="carousel-caption">
                <a href="#contato" class="btn btn__yellow">fale conosco</a>                 
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#banner-indicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#banner-indicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>

    <div id="servicos"> 
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <h2>serviços</h2>
            </div>
        </div>

        <div class="row">

          <div class="col-md-3">
            <div class="card card-has-bg" style="background-image:url('<?php bloginfo('template_url'); ?>/assets/imgs/bg-creche.jpg');">
              <img class="card-img d-none" src="<?php bloginfo('template_url'); ?>/assets/imgs/bg-creche.jpg" alt="Creche">
              <div class="card-img-overlay d-flex flex-column justify-content-end">
                <div class="card-body">
                  <img class="card-img mx-auto d-block" src="<?php bloginfo('template_url'); ?>/assets/imgs/creche-icon.svg" width="100" height="100">
                  <h4 class="card-title">creche</h4>
                  <p class="card-text">Em um espaço de 300m2, os cães ficam livres para brincar, correr e socializar entre eles. Em nossa programação diária, os cães se divertem, aprendem, se alimentam e descansam.</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn btn-block btn__yellow">saiba mais</a>   
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-has-bg" style="background-image:url('<?php bloginfo('template_url'); ?>/assets/imgs/bg-hotel.jpg');">
              <img class="card-img d-none" src="<?php bloginfo('template_url'); ?>/assets/imgs/bg-hotel.jpg" alt="Hotel">
              <div class="card-img-overlay d-flex flex-column justify-content-end">
                <div class="card-body">
                  <img class="card-img mx-auto d-block" src="<?php bloginfo('template_url'); ?>/assets/imgs/hotel-icon.svg" width="100" height="100">
                  <h4 class="card-title">hotel</h4>
                  <p class="card-text">Na hospedagem os cães aproveitam as atividades diárias e descansam com mais freqüência para evitar exaustão e fadiga, por isso a rotina do hotel é diferente da creche.</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn btn-block btn__yellow">saiba mais</a>   
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-has-bg" style="background-image:url('<?php bloginfo('template_url'); ?>/assets/imgs/bg-bet.jpg');">
              <img class="card-img d-none" src="<?php bloginfo('template_url'); ?>/assets/imgs/bg-bet.jpg" alt="Banho e Tosa">
              <div class="card-img-overlay d-flex flex-column justify-content-end">
                <div class="card-body">
                  <img class="card-img mx-auto d-block" src="<?php bloginfo('template_url'); ?>/assets/imgs/bet-icon.svg" width="100" height="100">
                  <h4 class="card-title">banho e tosa</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn btn-block btn__yellow">saiba mais</a>   
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-has-bg" style="background-image:url('<?php bloginfo('template_url'); ?>/assets/imgs/bg-consultorio.jpg');">
              <img class="card-img d-none" src="<?php bloginfo('template_url'); ?>/assets/imgs/bg-consultorio.jpg" alt="Consultório">
              <div class="card-img-overlay d-flex flex-column justify-content-end">
                <div class="card-body">
                  <img class="card-img mx-auto d-block" src="<?php bloginfo('template_url'); ?>/assets/imgs/consultorio-icon.svg" width="100" height="100">
                  <h4 class="card-title">consultório</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn btn-block btn__yellow mt-auto">saiba mais</a>   
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

    <div id="historia"> 
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center h-100">
          <div class="col-md-6 order-2 order-sm-1  text-center">
            <img src="<?php bloginfo('template_url'); ?>/assets/imgs/img-historia.jpg" width="768">
          </div>
          <div class="col-md-6 order-1 order-sm-2">
            <h2>quem<br>somos</h2>
            <p>A Honey Bunny entende que o cão faz parte da vida de seu dono e por consequência, da sociedade, buscamos a harmonia na relação homem/animal, respeitando e conscientizando todos acerca das questões individuais, sociais e ambientais.<br><br>

            Nossa missão é tornar harmoniosa e saudável a relação entre homens e cães através de atividade física, disciplina e acompanhamento especializado.<br><br>

            Com perspectiva de ser referência no segmento de cuidados para cães, tornando-se uma empresa admirada pela responsabilidade, criatividade, respeito e pela maneira como conduz suas relações com clientes, cães, funcionários e a sociedade.</p>
          </div>
        </div>
      </div>
    </div>

    <div id="gfa"> 
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center h-100">

          <div class="col-md-6 order-1 order-sm-1 order-md-1">
            <h2>galeria de fotos</h2>
          </div>
          <div class="col-md-6 order-3 order-sm-3 order-md-2">
            <h2>avisos</h2>
          </div>

          <div class="col-md-6 order-2 order-sm-2">
            <?php echo do_shortcode('[envira-gallery id="147"]'); ?>
          </div>
          <div class="col-md-6 order-4 order-sm-4">
            <div class="row">
              <div class="col-md-12">
                <div class="notice">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
              <div class="col-md-12">
                <div class="notice">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 order-5 order-sm-5">
            <a href="#contato" class="btn btn__yellow">fale conosco</a>   
          </div>

        </div>
      </div>
    </div>

    <div id="blog__hb"> 
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>blog</h2>
          </div>
        </div>

        <div class="row">
          <?php $query = new WP_Query(array('posts_per_page'   => 3,));while ($query->have_posts()): $query->the_post(); add_filter( 'the_title', 'max_title_length');?>
              <div class="col-md-4">
                <div class="card">
                    <?php the_post_thumbnail('index-thumb', ['class' => 'card-img-top']); ?>
                    <div class="card-body">
                      <p class="blog-date"><?php echo get_the_date(); ?></p>
                      <p class="blog-name"><?php echo get_author_name(); ?></p>
                      <a href="<?php the_permalink(); ?>"><h5 class="blog-title"><?php echo wp_trim_excerpt( get_the_title() ); ?></h5></a>
                      <?php the_excerpt(); ?>
                      <a href="<?php the_permalink(); ?>" class="btn btn-block btn__purple__b">ler matéria completa</a>
                    </div>
                </div>
              </div>
          <?php endwhile; wp_reset_postdata(); ?>

          <div class="col-md-12 text-center">
            <a href="blog" class="btn btn__yellow">ver matérias anteriores</a>
          </div>
        </div>

      </div>
    </div>

    <div id="financiamento"> 
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-12">
              <h2>depoimentos</h2>
            </div>
            <div class="col-md-12">
            </div>
        </div>
      </div>
    </div>

    <div id="contato"> 
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <h2>fale conosco</h2>
            </div>
            <div class="col-md-6 mx-auto">
              <?php echo do_shortcode ('[contact-form-7 id="20" title="Formulário de contato 1"]'); ?>
            </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>