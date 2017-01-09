@foreach (Alert::getMessages() as $type => $messages)
  <div class="alert-wrapper">
    @foreach ($messages as $message)
      <div class="alert alert-{{ $type }}"><strong>{{ ucfirst(trans('alerts.' . $type)) }}!</strong> {{ $message }} <span class="alert-close"></span></div>
    @endforeach
  </div>
@endforeach

<div class="alert-wrapper">
  <div class="alert-animation animated zoomIn">
    <div class="alert-fix">
      <div class="alert alert-success"><strong>success!</strong> el mensaje es claro <span class="alert-close"></span></div>
    </div>
  </div>
  <div class="alert-animation animated zoomIn">
    <div class="alert-fix">
      <div class="alert alert-success"><strong>success!</strong> el mensaje es claro <span class="alert-close"></span></div>
    </div>
  </div>
  <div class="alert-animation animated zoomIn">
    <div class="alert-fix">
      <div class="alert alert-success"><strong>success!</strong> el mensaje es claro <span class="alert-close"></span></div>
    </div>
  </div>
  <div class="alert-animation animated zoomIn">
    <div class="alert-fix">
      <div class="alert alert-success"><strong>success!</strong> el mensaje es claro <span class="alert-close"></span></div>
    </div>
  </div>




</div>