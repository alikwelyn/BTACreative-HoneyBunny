<?php get_header(); ?>

    <div class="panels">
      <div class="select">
        <h1>SELECIONE A ÁREA DE INTERESSE</h1>
      </div>
      <div class="logo">
        <img src="<?php bloginfo('template_url'); ?>/assets/imgs/logo.svg" width="150" alt="Frigga Sustentabilidade">
      </div>
      <a href="residencial" class="panel">
        <div class="panel__content mb" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/imgs/residencial.png);">
          <h3 class="panel__title">Residencial</h3>
          <p class="panel__sub">Desenvolvemos soluções inovadoras e personalizadas sob medida para a sua residência, com segurança, tecnologia, sustentabilidade e economia.<br><br>
            Prepare-se agora para o futuro contribuindo com o meio ambiente. 
          </p>
        </div>
      </a>
      <a href="comercial" class="panel">
        <div class="panel__content" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/imgs/comercial.png)">
          <h3 class="panel__title">Comercial</h3>
          <p class="panel__sub">Reduza seus custos operacionais, agregue valor ao seu negócio e aumente a sua visibilidade investindo em sustentabilidade.<br><br>
          Não perca tempo e saia na frente dos seus concorrentes. 
          </p>
        </div>
      </a>
      <a href="industrial" class="panel">
        <div class="panel__content" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/imgs/industrial.png)">
          <h3 class="panel__title">Industrial</h3>
          <p class="panel__sub">Torne sua indústria mais rentável, fortaleça a sua marca e saia na frente dos seus concorrentes com projetos de impacto socioambiental.
          </p>
        </div>
      </a>
      <a href="rural" class="panel">
        <div class="panel__content" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/imgs/rural.png); background-position: 46% center;">
          <h3 class="panel__title">Rural</h3>
          <p class="panel__sub">Valorize sua propriedade e reduza custos através de soluções inovadoras, utilizando os recursos naturais disponíveis para o crescimento do seu agronegócio.
          </p>
        </div>
      </a>
    </div>
    
<?php get_footer(); ?>