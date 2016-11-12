@if (App::environment('local'))
  <script type="text/javascript" src="{{URL::asset('/js/app.js')}}"></script>

@else
  <script type="text/javascript" src="{{URL::asset('/js/app.js')}}"></script>
@endif


