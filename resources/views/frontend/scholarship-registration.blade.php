@extends('frontend.master')
@section('main-content')

      <!-- hero-area-start -->
      <div class="hero-arera course-item-height" data-background="{{asset('frontend')}}/img/slider/course-slider.jpg">
      <div class="container">
            <div class="row">
                  <div class="col-xl-12">
                  <div class="hero-course-1-text">
                        <h2>স্কলারশিপ রেজিষ্ট্রেশন</h2>
                  </div>
                  <div class="course-title-breadcrumb">
                        <nav>
                              <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{Route('frontend.home')}}">হোম</a></li>
                              <li class="breadcrumb-item"><span>স্কলারশিপ রেজিষ্ট্রেশন</span></li>
                              </ol>
                        </nav>
                  </div>
                  </div>
            </div>
      </div>
      </div>
      <!-- hero-area-end -->

      <!-- scholarship-registration-start -->
      <div class="schpreg py-5">
            <div class="container">
                  <div class="row">
                        <div class="col">
                              <div class="contact-from-input mb-20">
                                    <input type="text" class="rounded-0" placeholder="আপনার নাম (আবশ্যিক)" required="required">
                              </div>
                              <div class="contact-from-input mb-20">
                                    <input type="text" class="rounded-0" placeholder="বর্তমান ঠিকানা" required="required">
                              </div>
                              <div class="contact-from-input mb-20">
                                    <div class="row">
                                          <div class="col-12 col-lg-6">
                                                <input type="text" class="rounded-0" placeholder="মোবাইল নাম্বার
                                                " required="required">
                                           </div>
                                           <div class="col-12 col-lg-6">
                                                <input type="date" class="rounded-0" required="required">
                                           </div>
                                    </div>
                              </div>
                              <div class="contact-from-input mb-20">
                                    <input type="text" class="rounded-0" placeholder="শিক্ষাগত যোগ্যতা" required="required">
                              </div>
                              <div class="contact-select">
                                    <select class="mb-20">
                                        <option value="কোর্স সিলেক্ট করুন" selected>কোর্স সিলেক্ট করুন</option>
                                        <option value="">বেসিক কম্পিউটার এন্ড অফিস স্পেশালিস্ট</option>
                                        <option value="">গ্রাফিক্স ডিজাইন উইথ ফ্রিল্যান্সিং</option>
                                        <option value="">ডিজিটাল মার্কেটিং উইথ ফ্রিল্যান্সিং</option>
                                    </select>
                              </div>
                              <div class="form-group mb-3">
                                    <button type="submit" class="edu-btn">সাবমিট করুন</button>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <!-- scholarship-registration-end -->
   



      
@endsection



