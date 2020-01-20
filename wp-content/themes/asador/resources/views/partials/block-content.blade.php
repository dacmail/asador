<section id="{{ sanitize_title(get_sub_field('title')) }}" class="content content--{{ get_sub_field('style') }} content--{{ get_sub_field('align') }} {{ get_sub_field('mobile_text') ? 'content--text' : '' }} container container--full js-content">
  <div class="content__slide js-slide owl-carousel">
  @if (wp_is_mobile())
    @foreach (get_sub_field('images_mobile') as $image)
      {!! wp_get_attachment_image($image, 'huge') !!}
    @endforeach
  @else
    @foreach (get_sub_field('images') as $image)
      {!! wp_get_attachment_image($image, 'huge') !!}
    @endforeach
  @endif
  </div>

  <div class="content__wrapper">
    @if (get_sub_field('title'))
      <h2 class="content__title">{{ get_sub_field('title') }}</h2>
    @endif
    @if (wp_is_mobile())
      @php($menus = get_sub_field('menu_mobile'))
    @else
      @php($menus = get_sub_field('menu'))
    @endif
    <div class="content__text">
      @php(the_sub_field('text'))
    </div>

    @if (get_sub_field('button') && $menus)
      <a class="js-gallery button button--{{ get_sub_field('style') }}" href="{{ wp_get_attachment_url($menus[0]) }}">{{ get_sub_field('button') }}</a>

      <div class="content__menu">
        @foreach ($menus as $i => $menu)
          @if ($i > 0)
            <a class="js-gallery" href="{{ wp_get_attachment_url($menu) }}">Menu</a>
          @endif
        @endforeach
      </div>
    @endif
  </div>


  <style>
    #{{ sanitize_title(get_sub_field('title')) }} .content__wrapper {
      @if (get_sub_field('full'))
        width: 100%;
      @else
        width: 60%;
      @endif
    }
    @media (min-width: 1024px) {
      #{{ sanitize_title(get_sub_field('title')) }} .content__wrapper {
        width: {{ get_sub_field('width') }}%;
      }
    }
  </style>
</section>
