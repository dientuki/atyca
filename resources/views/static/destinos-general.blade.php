@extends('layouts.site')

@section ('content')

  <?php $destinations = array('Argentina', 'Aruba', 'Bolivia', 'Brasil','Canadá','Chile', 'Costa Rica', 'Ecuador','EEUU','Guatemala','México', 'Panama', 'Perú', 'República Dominicana','Uruguay','Venezuela'); ?>

  <section class="destinations">
    <h6 class="visuallyhidden">Destinos</h6>
    <ul class="destinations-list clearfix">

      @foreach ($destinations as $destination)

        <?php $slug = str_slug($destination); ?>
        <li class="destinations-country">
          <a class="destinations-link" href="{{ route('destinations.show', ['slug' => $slug]) }}" title="{{ $destination  }}">
            <img alt="{{ $destination  }}" class="afterload destinations-flag" data-original="{{ asset('images/flags/'.$slug.'.png') }}" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEHAAEALAAAAAABAAEAAAICTAEAOw==" title="{{ $destination  }}">
            <span class="destinations-text">{{ $destination  }}</span>
          </a>
        </li>

      @endforeach

    </ul>
  </section>


@endsection