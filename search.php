<?php get_header(); global $wp_query;?>

    <section id="home">
      <div class="container-fluid">
        <div id="banner-indicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
                <div class="carousel-item-page active" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/imgs/banner-comercial.png')">
                  <div class="carousel-caption">          
                  <h2><?php echo $wp_query->found_posts; ?> <?php _e( 'Resultados da pesquisa<br>encontrados para', 'locale' ); ?>: "<strong><?php the_search_query(); ?></strong>"</h2>          
                  </div>
                </div>
          </div>
        </div>
      </div>
    </section>


    <section id="search">
      <div class="container">
        <div class="row">
          <div class="col-md-10 mx-auto">
            <?php if ( have_posts() ) { ?>
              <?php while ( have_posts() ) { the_post(); ?>
                <div class="list-group">
                    <a href="<?php echo get_permalink(); ?>" class="list-group-item active">
                        <h4 class="list-group-item-heading"><?php the_title();  ?></h4>
                        <p class="list-group-item-text"><?php echo substr(get_the_excerpt(), 0,200); ?>...</p>
                    </a>
                </div>
                <?php } ?>
                <?php pagination(); ?>
              <?php } ?>
          </div>
        </div>
      </div>
    </section> 

<?php get_footer(); ?>
