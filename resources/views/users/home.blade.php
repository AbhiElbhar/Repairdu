@extends('layouts.users.main')

@section('content')

@foreach ($slider as $item)
@if ($loop->index == 0)

<div class="banner-area bg_image--1 bg_image rts-section-gap">
    <div class="container shape-line">
        <div class="row align-items-start pt--100 pt_sm--50 banner-shape-red">
            <div class="col-lg-6 order-xl-1 order-md-2 order-sm-1 order-1">
                <div class="banner-one-content-wrapper">
                    <h1 class="title-banner" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        {{$item->title}}
                    </h1>
                    <p class="banner-disc" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        {{$item->description}}
                    </p>
                    <div class="banner-wrapper button" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                        <a href="#" class="rts-btn btn-primary">Get Started</a>
                        
                        <a href="{{$item->url}}" class="btn-watch-video fancybox fancybox.iframe ml--25">
                            <span class="icon"></span>
                            <span class="text">Play Video</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-xl-2">
                <div class="banner-thumb-1 banner-shape-one">
                    <img src="{{asset('Admin/images/'.$item->image)}}" alt="Creative_banner" data-sal-delay="200" data-sal="zoom-in" data-sal-duration="1000">
                </div>
            </div>
        </div>
    </div>     
</div>
    
@endif
@endforeach


<!-- counter up area start -->
<div class="counter-up-area ptb--100 counter-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="counter-up-wrapper-one">
                    <!-- ingle counter -->
                    <div class="counter-single" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <h2 class="title"><span class="counter plus">5</span></h2>
                        <p class="disc">Years Of Experience</p>
                    </div>
                    <!-- single-counter End -->
                    <!-- ingle counter -->
                    <div class="counter-single" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        <h2 class="title"><span class="counter k-plus">66</span></h2>
                        <p class="disc">Complete Projects</p>
                    </div>
                    <!-- single-counter End -->
                    <!-- ingle counter -->
                    <div class="counter-single" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                        <h2 class="title"><span class="counter plus">29</span></h2>
                        <p class="disc">Client Satisfied</p>
                    </div>
                    <!-- single-counter End -->
                    <!-- ingle counter -->
                    <div class="counter-single" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                        <h2 class="title"><span class="counter plus">150</span></h2>
                        <p class="disc">Global Award Winning</p>
                    </div>
                    <!-- single-counter End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counter up area End -->

<!-- about us area start -->
@foreach ($about as $item)

<div class="rts-about-us-area rts-section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="thumbnail" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <img src="{{asset('Admin/images/'.$item->image)}}" alt="creative_about">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-right-one-area">
                    <div class="title-area">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">{{$item->title}}</span>
                        <h3 class="title" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            {{$item->title}}
                        </h3>
                    </div>
                    <p class="disc" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        {{$item->description}}
                    </p>
                    <div class="button-area" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                        <a href="{{route('about')}}" class="rts-btn btn-primary">More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach
<!-- about us area end -->

<!-- service-appoinment-area start -->
<div class="rts-service-area bg-light rts-section-gap service-bg_shape">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area text-center">
                    <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Our software Features</h3>
                </div>
            </div>
        </div>

        <div class="row g-24 mt--5">
            @foreach ($feature as $item)
        
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <!-- single service area start -->
                <div class="rts-single-service-one">
                    {{-- <div class="icon">
                        <img src="#" alt="axela_service">
                    </div> --}}
                    <a href="{{route('feature',$item->title)}}">
                        <h5 class="title"> {{$item->title}}
                        </h5>
                    </a>
                    <p class="disc">
                        {{substr($item->description,0,95).'....'}}
                    </p>
                    <a href="{{route('feature',$item->title)}}" class="rts-read-more">Learn More<i class="far fa-chevron-double-right"></i></a>
                </div>
                <!-- single service area end -->
            </div>
                    
        @endforeach
        </div>

        <div class="row">
            <div class="col-12">
                <div class="appoinment-area-one mt--120 mt_sm--60">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- appoinment left area -->
                            @foreach ($details as $item)

                            <div class="appoinment-left">
                                <div class="title-area">
                                    <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        Get in touch
                                    </span>
                                    <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                        Have Any Project Plan
                                        In Your Mind?
                                    </h3>
                                    <p class="disc" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                        <h4 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">{{$item->address}}</h4>
                                    </p>
                                    <div class="communicate-area" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                                        <img src="{{asset('users/assets/images/appoinment/icon/01.svg')}}" alt="creative_icon">
                                        <div class="details-area">
                                            <span>Mail us 24/7:</span>
                                            <a href="mailto:{{$item->email}}"> {{$item->email}} </a>
                                        </div>
                                    </div>
                                    <div class="communicate-area mt--30" data-sal-delay="550" data-sal="slide-up" data-sal-duration="800">
                                        <img src="{{asset('users/assets/images/appoinment/icon/02.svg')}}" alt="creative_icon">
                                        <div class="details-area">
                                            <span>For urgent help;</span>
                                            <a href="tel:{{$item->mobile_no}}">{{$item->mobile_no}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                            
                            @endforeach
                            <!-- appoinment left area End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- appoinment-right -->
                            <div class="appoinment-right">
                                <form action="{{route('contact.store1')}}" method="POST">
                                    @csrf
                                    <div class="single-input" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <label for="name">Your Name*</label>
                                        <input type="text" name="name" id="name" required>
                                        <span class="text-danger">
                                            @error('name')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="single-input mt--20" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                        <label for="email">Your Email*</label>
                                        <input type="text" name="email" id="email" required>
                                        <span class="text-danger">
                                            @error('email')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="single-input mt--20" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                        <label for="subject">Your Subject*</label>
                                        <input type="text" name="subject" id="subject" required>
                                        <span class="text-danger">
                                            @error('subject')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="single-input mt--20" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                        <label for="description">How can we help you?</label>
                                        <textarea name="description" id="description"></textarea>
                                        <span class="text-danger">
                                            @error('description')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <button class="rts-btn btn-primary mt--30">Submit Now</button>
                                </form>
                            </div>
                            <!-- appoinment-right End -->
                        </div>
                    </div>
                </div>
                <div class="appoinment-shape">
                    <img class="shape-1 shape" src="{{asset('users/assets/images/appoinment/shape/01.png')}}" alt="appoinmtnt_shape" data-sal-delay="250" data-sal="slide-right" data-sal-duration="600">
                    <img class="shape shape-2" src="{{asset('users/assets/images/appoinment/shape/02.png')}}" alt="appoinmtnt_shape" data-sal-delay="150" data-sal="slide-right" data-sal-duration="800">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service-appoinment-area End -->

<!-- tart Customer feedback area -->
<div class="rts-testimonial-area-one">
    <div class="bg-light-testimonial">
        <div class="container">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area-testi">
                        <div class="title-area text-start">
                            <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Our Customer
                                Testimonial</span>
                            <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                Customer’s Feedbacks</h3>
                        </div>
                        <div class="swiper-button-wrapper">
                            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slide-div">
                        <!-- Swiper -->
                        <div class="swiper testimonial-1">
                            <div class="swiper-wrapper">
                                @foreach ($tester as $item)
        
                                <div class="swiper-slide">
                                    <div class="single-testimonial-one">
                                        <div class="header-area">
                                            {{-- <img src="assets/images/testimonials/01.png" alt="testimonials"> --}}
                                            <div class="name-desig">
                                                <a href="{{route('tester',$item->name)}}">
                                                    <h6>{{$item->name}}</h6>
                                                </a>
                                                <p><span> {{$item->position}} </span></p>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <p class="disc">
                                               {{substr($item->description,0,200).'....'}}
                                            </p>
                                        </div>
                                        <div class="footer">
                                            <div class="stars-area">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="logo">
                                                {{-- <img src="assets/images/testimonials/logo/01.png" alt="Testimonial-Logo"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                @endforeach
                            </div>
                        </div>
                        <!-- swiper end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tart Customer feedback area End -->

<!-- cta section start -->
<div class="rts-cta-section-start rts-section-gap cta-bg-h4">
    <div class="container">
        <div class="row">
            <div class="title-area text-center">
                <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Let’s work together</span>
                <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Need a successful projects?</h3>
                <div class="button-area" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <a href="{{route('register')}}" class="rts-btn btn-primary">Estimate Projects <i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cta section end -->


@endsection