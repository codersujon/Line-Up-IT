@include('frontend.layouts.styles')
@include('frontend.layouts.preloader')
@include('frontend.layouts.cartmini')
@include('frontend.layouts.side-toggle')
@include('frontend.layouts.header-top')
@include('frontend.layouts.header')

   <main>
      @yield('main-content')
   </main>

@include('frontend.layouts.footer')
@include('frontend.layouts.scripts')