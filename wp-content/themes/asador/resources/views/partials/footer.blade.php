<footer class="footer container container--full">
  <div class="footer__wrapper container">
    <a target="_blank" href="{{ get_field('link', 'option') }}">{!! wp_get_attachment_image(get_field('logo', 'option'), 'medium', false, ['class' => 'footer__image']) !!}</a>
  </div>
</footer>
