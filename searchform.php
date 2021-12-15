<div class="search-wrapper">
  <form method="get" action="<?php echo esc_url( home_url( '/blog' ) ); ?>" role="search">
    <div class="input-holder">
        <input class="search-input" type="search" placeholder="Procurar..." name="s" value="<?php echo get_search_query(); ?>"/>
        <input type="hidden" name="post" value="buscar"/>
        <button class="search-icon" onclick="searchToggle(this, event);" type="submit"><span></span></button>
    </div>
    <span class="close" onclick="searchToggle(this, event);"></span>
  </form>
</div>