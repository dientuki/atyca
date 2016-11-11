@if (App::environment('local'))
  <script type="text/javascript" src="{{URL::asset('js/libs/require-min.js')}}" data-main="/js/front"></script>

@else
  <script type="text/javascript" src="{{URL::asset('js/libs/require-min.js')}}" data-main="/js/front"></script>
@endif


