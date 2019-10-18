<header class="header">
  <?php the_custom_logo(); ?>
  @if (has_nav_menu('primary_navigation'))
    <a href="#" class="header__menu-toggle js-menu">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="text">{{ esc_html__('Menú', 'corpfin') }}</span>
    </a>
    <nav class="nav-primary">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'container' => false]) !!}
    </nav>
  @endif
</header>
