<section class="content {{ get_sub_field('black') ? 'content--black' : '' }}">
  <div class="container container--small">
    @if (get_sub_field('title'))
      <h2 class="content__title">{{ get_sub_field('title') }}</h2>
    @endif
    <div class="content__text">
      @php(the_sub_field('content'))
    </div>
  </div>
</section>
