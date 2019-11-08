@extends('layouts.home-general')

@section ('content')

  <?php //$excursions = array('Bariloche','Buenos Aires','Cafayate', 'Cordoba', 'Mendoza', 'Montevideo', 'Ushuaia','Salta','Rio de Janeiro','Santiago de Chile','Puerto Varas','Puerto Madryn','Iguazú','El Calafate'); ?>
  <?php $excursions = array('Bariloche','Buenos Aires', 'Calafate','Cordoba', 'Iguazú', 'Mendoza', 'Montevideo', 'Puerto Madryn', 'Puerto Varas', 'Rio de Janeiro', 'Salta', 'Santiago de Chile'); ?>

  <section class="destinations">
    <h6 class="visuallyhidden">Excursiones</h6>
    <ul class="destinations-list clearfix">

      @foreach ($excursions as $excursion)

        <?php $slug = str_slug($excursion); ?>
        <li class="destinations-place">
          <a class="destinations-link" href="{{ route('excursions.show', ['slug' => $slug]) }}" title="{{ $excursion  }}">
            <span class="destinations-text">{{ $excursion  }}</span>
            <img alt="{{ $excursion  }}" class="afterload destinations-image" data-original="{{ asset('images/excursions/'.$slug.'.jpg') }}" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEHAAEALAAAAAABAAEAAAICTAEAOw==" title="{{ $excursion  }}">
          </a>
        </li>

      @endforeach

    </ul>
  </section>

@endsection