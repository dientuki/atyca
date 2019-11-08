@extends('layouts.home-general')

@section ('content')

  <?php $destinations = array('Argentina', 'Aruba', 'Bolivia', 'Brasil','Canadá','Chile', 'Costa Rica', 'Ecuador','EEUU','Guatemala','México', 'Panama', 'Perú', 'República Dominicana','Uruguay','Venezuela'); ?>

  <section class="destinations">
    <h6 class="visuallyhidden">Destinos</h6>
    <ul class="destinations-list clearfix">

      @foreach ($destinations as $destination)

        <?php $slug = str_slug($destination); ?>
        <li class="destinations-country">
          <a class="destinations-link" href="#" title="{{ $destination  }}"><!-- {{ route('destinations.show', ['slug' => $slug]) }} -->
            <img alt="{{ $destination  }}" class="afterload destinations-flag" data-original="{{ asset('images/flags/'.$slug.'.png') }}" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEHAAEALAAAAAABAAEAAAICTAEAOw==" title="{{ $destination  }}">
            @if ($destination == 'República Dominicana')
              <span class="destinations-text">R. Dominicana</span>
            @else
              <span class="destinations-text">{{ $destination  }}</span>

            @endif

          </a>
        </li>

      @endforeach

    </ul>
  </section>


@endsection
