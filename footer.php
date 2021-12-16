  <footer>
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-12">
          <img src="<?php bloginfo('template_url'); ?>/assets/imgs/hb-purple.svg" width="220" alt="Frigga Sustentabilidade">
          <ul class="styled-icons icon-theme-colored list-inline">
            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <div class="uni">
                <h3>unidade moema</h3>
                <p>petshop, banho e tosa e consultório</p>
                <p class="hor">segunda a sexta, das 9h às 18h sábado das 9h às 15h</p>
                <a href="#VerTelefone" class="btn btn-block btn__purple" id="VerTelefone" onclick="VerTelefone()">ver telefone</a>
                <p class="end">Alameda dos Tupiniquins, 232<br>São Paulo<br>CEP 06722-370</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="uni">
                <h3>unidade moema</h3>
                <p>petshop, banho e tosa e consultório</p>
                <p class="hor">segunda a sexta, das 9h às 18h sábado das 9h às 15h</p>
                <a href="#VerTelefone2" class="btn btn-block btn__purple" id="VerTelefone2" onclick="VerTelefone2()">ver telefone</a>
                <p class="end">Alameda dos Tupiniquins, 232<br>São Paulo<br>CEP 06722-370</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-md-4 copy-client">
            <img src="<?php bloginfo('template_url'); ?>/assets/imgs/logo.svg" alt="Logo Athos Medical" width="300">
          </div>
          <div class="col-xs-12 col-md-4">
          </div>
          <div class="col-xs-12 col-md-4 dev-bta">
			  <span>Desenvolvido por </span><a href="https://btacreative.com.br/" alt=""><img src="<?php bloginfo('template_url'); ?>/assets/imgs/logo-bta-principal.svg" width="75" alt="BTA Creative"></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

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