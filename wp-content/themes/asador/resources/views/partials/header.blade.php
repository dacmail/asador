@if (is_front_page())
  <header class="hero container container--full">
    @if (get_field('facebook','option') || get_field('instagram','option') || get_field('twitter','option'))
      <div class="social">
        @if (get_field('facebook','option'))
          <a target="_blank" href="{{ get_field('facebook','option') }}">
            <img src="@asset('images/facebook.png')" alt="facebook">
          </a>
        @endif
        @if (get_field('instagram','option'))
          <a target="_blank" href="{{ get_field('instagram','option') }}">
            <img src="@asset('images/instagram.png')" alt="instagram">
          </a>
        @endif
        @if (get_field('twitter','option'))
          <a target="_blank" href="{{ get_field('twitter','option') }}">
            <img src="@asset('images/twitter.png')" alt="twitter">
          </a>
        @endif
      </div>
    @endif
    <video class="hero__video js-video-bg" poster="{{ wp_get_attachment_image_url(get_sub_field('video_poster'), 'huge') }}" autoplay muted loop>
        <source src="{{ wp_get_attachment_url(get_field('video', get_option('page_on_front'))) }}" type="{{ get_post_mime_type(get_field('video')) }}">
    </video>
  </header>
@endif
@if (has_nav_menu('primary_navigation'))
<nav class="header container container--full">
  {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'container' => false]) !!}
</nav>
@endif
