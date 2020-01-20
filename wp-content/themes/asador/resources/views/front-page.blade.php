
@extends('layouts.app')

@section('content')

@while (have_rows('blocks')) @php(the_row())
  @include('partials.block-' . get_row_layout())
@endwhile

@if (have_rows('contact')) @php(the_row())
  <section class="contact" id="reservas">
    <div class="contact__iframe">
      {!! get_sub_field('iframe') !!}
    </div>
    <div class="contact__data">
      {!! wp_get_attachment_image(get_sub_field('title'), 'full', false, ['class' => 'contact__title']) !!}
      <div class="contact__wrapper">
        <div class="contact__info">
          <p class="contact__address">{{ get_sub_field('address') }}</p>
          <p class="contact__phone">{{ get_sub_field('phone') }}</p>
          <p class="contact__email">{{ get_sub_field('email') }}</p>
        </div>
        <div class="contact__schedule">
          {!! get_sub_field('schedule') !!}
        </div>
      </div>
    </div>
  </section>
  @if (get_sub_field('map'))
    <section id="map" class="map" data-lat="{{ get_sub_field('map')['lat'] }}" data-lng="{{ get_sub_field('map')['lng'] }}">
    </section>
    <script src="//maps.google.com/maps/api/js?key=AIzaSyDi3Nfc8OxZr_UE_X-o4RXyruymMY3aV2o&#038;libraries=places&#038;language=es"></script>
  @endif
@endif

@endsection

