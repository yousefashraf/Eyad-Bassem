<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title', 'Site')</title>
  {{-- Use asset() for simple static setup; change to Vite helpers if you use Vite --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @stack('head')
</head>
<body>
  <x-header />

  <main role="main" class="site-main">
    @yield('content')
  </main>

  <x-footer />

  <script src="{{ asset('js/app.js') }}" defer></script>
  @stack('scripts')
</body>
</html>
