<!DOCTYPE html>
<html>
@include('frontend.templates.partials.head')
  <body>

  <!-- navbar -->
    @include('frontend.templates.partials.navigasi')

    <!-- Content -->
    <div class="container">    
      @yield('content')
    </div>

  @include('frontend.templates.partials.scripts')
  
  @include('frontend.templates.partials.toast')

  </body>
</html>