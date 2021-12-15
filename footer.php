<?php if ( is_home() && is_front_page() || is_front_page() ) { ?>
<?php } ?>

<?php if ( is_home() && !is_front_page() ) { ?>
  <footer>
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-6">
          <img src="<?php bloginfo('template_url'); ?>/assets/imgs/logo.svg" width="220" alt="Frigga Sustentabilidade">
          <ul class="styled-icons icon-theme-colored list-inline">
            <li><a href="https://www.facebook.com/frigga.eco" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="http://instagram.com/frigga.eco/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/company/28883024" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="col-md-6">
          <a href="#VerTelefone" class="btn btn-block btn__white" id="VerTelefone" onclick="VerTelefone()">VER TELEFONE</a>
          <a href="#VerEmail" class="btn btn-block btn__white" id="VerEmail" onclick="VerEmail()">VER EMAIL</a>
          <div class="endereco">
            <p>Rua Doutor Ricardo Vilela, 1406<br>2º andar - Mogi das Cruzes – SP</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
    <hr>
      <div class="row">
        <div class="col-md-3">
          <?php
              wp_nav_menu( array(
                'menu'              => 'menu-footer-1',
                'theme_location'    => 'menu-footer-1',
                'depth'             => 1,
                'container'         => 'ul',
                'menu_class'        => 'm-footer',
                'fallback_cb'       => 'wp_page_menu',
              ) );
            ?>
        </div>
        <div class="col-md-2">
          <?php
              wp_nav_menu( array(
                'menu'              => 'menu-footer-2',
                'theme_location'    => 'menu-footer-2',
                'depth'             => 1,
                'container'         => 'ul',
                'menu_class'        => 'm-footer',
                'fallback_cb'       => 'wp_page_menu',
              ) );
            ?>
        </div>
        <div class="col-md-3">
          <?php
              wp_nav_menu( array(
                'menu'              => 'menu-footer-3',
                'theme_location'    => 'menu-footer-3',
                'depth'             => 1,
                'container'         => 'ul',
                'menu_class'        => 'm-footer',
                'fallback_cb'       => 'wp_page_menu',
              ) );
            ?>
        </div>
        <div class="col-md-4">
          <img src="<?php bloginfo('template_url'); ?>/assets/imgs/green-building.svg" width="75" alt="Green Building Coucil Brasil">
          <img src="<?php bloginfo('template_url'); ?>/assets/imgs/crea-sp.svg" width="75" alt="Crea-SP">
        </div>
      </div>
    </div>
  </footer>
<?php } ?>
 
<?php if ( is_blog() || is_category() || is_page() && !is_front_page() ) { ?>
  <footer>
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-6" data-aos="fade-right" data-aos-once="false" data-aos-easing="ease-in-out" data-aos-offset="100" data-aos-delay="10" data-aos-duration="1000">
          <img src="<?php bloginfo('template_url'); ?>/assets/imgs/logo.svg" width="220" alt="Frigga Sustentabilidade">
          <ul class="styled-icons icon-theme-colored list-inline">
            <li><a href="https://www.facebook.com/frigga.eco" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="http://instagram.com/frigga.eco/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/company/28883024" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="col-md-6" data-aos="fade-left" data-aos-once="false" data-aos-easing="ease-in-out" data-aos-offset="100" data-aos-delay="10" data-aos-duration="1000">
          <a href="#VerTelefone" class="btn btn-block btn__white" id="VerTelefone" onclick="VerTelefone()">VER TELEFONE</a>
          <a href="#VerEmail" class="btn btn-block btn__white" id="VerEmail" onclick="VerEmail()">VER EMAIL</a>
          <div class="endereco">
            <p>Rua Doutor Ricardo Vilela, 1406<br>2º andar - Mogi das Cruzes – SP</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
    <hr>
      <div class="row" data-aos="zoom-in" data-aos-once="false" data-aos-easing="ease-in-out" data-aos-offset="100" data-aos-delay="10" data-aos-duration="1000">
        <div class="col-md-3">
          <?php
              wp_nav_menu( array(
                'menu'              => 'menu-footer-1',
                'theme_location'    => 'menu-footer-1',
                'depth'             => 1,
                'container'         => 'ul',
                'menu_class'        => 'm-footer',
                'fallback_cb'       => 'wp_page_menu',
              ) );
            ?>
        </div>
        <div class="col-md-2">
          <?php
              wp_nav_menu( array(
                'menu'              => 'menu-footer-2',
                'theme_location'    => 'menu-footer-2',
                'depth'             => 1,
                'container'         => 'ul',
                'menu_class'        => 'm-footer',
                'fallback_cb'       => 'wp_page_menu',
              ) );
            ?>
        </div>
        <div class="col-md-3">
          <?php
              wp_nav_menu( array(
                'menu'              => 'menu-footer-3',
                'theme_location'    => 'menu-footer-3',
                'depth'             => 1,
                'container'         => 'ul',
                'menu_class'        => 'm-footer',
                'fallback_cb'       => 'wp_page_menu',
              ) );
            ?>
        </div>
        <div class="col-md-4">
          <img src="<?php bloginfo('template_url'); ?>/assets/imgs/green-building.svg" width="75" alt="Green Building Coucil Brasil">
          <img src="<?php bloginfo('template_url'); ?>/assets/imgs/crea-sp.svg" width="75" alt="Crea-SP">
        </div>
      </div>
    </div>
  </footer>
<?php } ?>

<?php wp_footer(); ?>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>AOS.init();




      $(document).ready(function () {
          $('.accordion-toggle').on('click', function(event){
              event.preventDefault();
              var accordion = $(this);
              var accordionContent = accordion.next('.accordion-content');
              accordion.toggleClass("open");
              accordionContent.slideToggle(250);

          });
      });







</script>
</body>
</html>