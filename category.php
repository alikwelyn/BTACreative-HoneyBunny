<?php get_header(); ?>

    <section id="home">
      <div class="container-fluid">
        <div id="banner-indicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
                <div class="carousel-item-page active" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/imgs/banner-comercial.png')">
                  <div class="carousel-caption">          
                  <h1>BLOG</h1>
                  <?php get_search_form(); ?>            
                  </div>
                </div>
          </div>
        </div>
      </div>
    </section>

   <section id="blog__frigga"> 
      <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex mt-5">
              <?php echo do_shortcode('[ajax_load_more loading_style="blue" button_label="Carregar Mais" button_loading_label="Carregando posts..." container_type="div" transition_container_classes="css-grid" posts_per_page="6"]') ?>
            </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>