@foreach (Alert::getMessages() as $type => $messages)
  <div class="alert-wrapper">
    @foreach ($messages as $message)
      <div class="alert-animation animated zoomIn">
        <div class="alert-fix">
          <div class="alert alert-{{ $type }}"><strong>{{ ucfirst(trans('alerts.' . $type)) }}!</strong> {{ $message }} <span class="alert-close"></span></div>
        </div>
      </div>
    @endforeach
  </div>
@endforeach