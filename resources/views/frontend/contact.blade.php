@extends('frontend.master')
@section('main-content')

      <!-- hero-area-start -->
      <div class="hero-arera course-item-height" data-background="{{asset('frontend')}}/img/slider/course-slider.jpg">
      <div class="container">
            <div class="row">
                  <div class="col-xl-12">
                  <div class="hero-course-1-text">
                        <h2>যোগাযোগ</h2>
                  </div>
                  <div class="course-title-breadcrumb">
                        <nav>
                              <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{Route('frontend.home')}}">হোম</a></li>
                              <li class="breadcrumb-item"><span>যোগাযোগ</span></li>
                              </ol>
                        </nav>
                  </div>
                  </div>
            </div>
      </div>
      </div>
      <!-- hero-area-end -->

      @include('frontend.layouts.contact-area')
      
@endsection



