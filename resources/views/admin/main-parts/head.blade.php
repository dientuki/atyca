<meta charset="utf-8">
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<meta name="_token" content="{!! csrf_token() !!}"/>
<title>
  Atyca Operadora
</title>
<meta name="description">
<link rel="canonical">

<!-- Mobile viewport optimization http://goo.gl/b9SaQ -->
<meta content="True" name="HandheldFriendly">
<meta content="320" name="MobileOptimized">
<meta content="width=device-width, target-densitydpi=160dpi, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta content="on" http-equiv="cleartype">

@if (App::environment('local'))
  <link href='{{URL::asset('css/admin.css')}}' rel='stylesheet'>


@else
  <link href='{{URL::asset('css/admin.css')}}' rel='stylesheet'>
@endif

<!-- Favicon -->
<!--
<link href="http://tn.com.ar/favicon.ico" rel="shortcut icon">
<link href="http://tn.cdncmd.com/sites/all/themes/dientuki/images/touch-icon-114-tn.png" rel="apple-touch-icon-precomposed" sizes="114x114">
<link href="http://tn.cdncmd.com/sites/all/themes/dientuki/images/touch-icon-72-tn.png" rel="apple-touch-icon-precomposed" sizes="72x72">
<link href="http://tn.cdncmd.com/sites/all/themes/dientuki/images/touch-icon-57-tn.png" rel="apple-touch-icon-precomposed">
-->