@extends('layouts.site')

@section ('content')

  <?php $destinations = array('Bariloche','Buenos Aires','Cafayate','Ushuaia','Salta','Rio de Janeiro','Santiago de Chile','Puerto Varas','Puerto Madryn','Cruce Andino','Iguazú','El Calafate'); ?>

  <section class="destinations">
    <h6 class="visuallyhidden">Destinos</h6>
    <ul class="destinations-list clearfix">

      @foreach ($destinations as $destination)

        <?php $slug = str_slug($destination); ?>
        <li class="destinations-place">
          <a class="destinations-link" href="{{ route('destinations.show', ['slug' => $slug]) }}" title="{{ $destination  }}">
            <span class="destinations-text">{{ $destination  }}</span>
            <img alt="{{ $destination  }}" class="afterload destinations-image" data-original="{{ asset('images/destinations/'.$slug.'.jpg') }}" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEHAAEALAAAAAABAAEAAAICTAEAOw==" title="{{ $destination  }}">
          </a>
        </li>

      @endforeach

    </ul>
  </section>

@endsection
