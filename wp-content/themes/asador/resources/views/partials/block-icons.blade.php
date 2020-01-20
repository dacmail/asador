<section class="icons">
  @while (have_rows('icon')) @php(the_row())
    <div class="icons__icon">
      {!! wp_get_attachment_image(get_sub_field('image'), 'medium', false, ['class' => 'icons__image']) !!}
      <h2 class="icons__title">{{ get_sub_field('text') }}</h2>
    </div>
  @endwhile
</section>
