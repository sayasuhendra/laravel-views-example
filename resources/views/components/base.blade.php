<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @stack('meta')
  <title>{{ config('app.name') }}</title>
  @laravelViewsStyles(livewire)
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/prism.css') }}">
</head>
<body >
  {{ $slot }}
  @laravelViewsScripts
  <script src="{{ asset('/js/prism.js') }}"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-B8S2MSHNE7"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-B8S2MSHNE7');
  </script>
</body>
</html>