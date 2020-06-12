<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    
    @include('frontend.templates.partials.head')
  </head>
  <body>
  @include('frontend.templates.partials.navigasi')
  <div class="site-wrap">
  @yield('content')

  @include('frontend.templates.partials.scripts')
    
  @include('frontend.templates.partials.footer')
    </div>
  </body>
</html>