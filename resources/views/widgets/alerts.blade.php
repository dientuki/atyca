@foreach (Alert::getMessages() as $type => $messages)
  <div class="alert-wrapper">
    @foreach ($messages as $message)
      <div class="alert alert-{{ $type }}"><strong>{{ $type }}!</strong> {{ $message }} <span class="alert-close"></span></div>
    @endforeach
  </div>
@endforeach