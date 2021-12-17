<?php get_header(); ?>
  
    <section id="home">
      <div class="container-fluid">
        <div id="banner-indicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
                <div class="carousel-item-page active">
                  <div class="carousel-captionx">          
                    <h1><?php the_title(); ?></h1>
                    <span><?php the_time('j \d\e F \d\e Y') ?></span>               
                  </div>
                </div>
          </div>
        </div>
      </div>
    </section>

<?php while ( have_posts() ) : the_post(); ?>
    <section id="blog-single">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <div class="blog-posts single-post">
              <article class="post clearfix">
                <div class="entry-header">
                  <div class="post-thumb thumb"><?php the_post_thumbnail('post-thumb', ['class' => 'img-responsive img-fullwidth']); ?></div>
                </div>
                <div class="entry-content">
                  <?php the_content(); ?>
                </div>
              </article>


            </div>
          </div>
        </div>
      </div>
    </section> 
<?php endwhile; ?>

</div>

<?php get_footer(); ?>
