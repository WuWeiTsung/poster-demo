@include('layouts.head')
<!-- nav-bar -->
@include('layouts.nav')

@yield('page-title')
<div class="container">
  @yield('content')




</div>

@include('layouts.js')