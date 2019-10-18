<section class="slide owl-carousel">
  @while (have_rows('slider'))  @php(the_row())
    <article class="slide__item">
      {!! wp_get_attachment_image(get_sub_field('image'), 'full') !!}
      <h2 class="slide__title">{{ the_sub_field('text') }}</h2>
    </article>
  @endwhile
</section>
