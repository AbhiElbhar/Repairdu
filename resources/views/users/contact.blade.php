@extends('layouts.users.main')

@section('content')

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Contact Us</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Home</a>
                    <span> / </span>
                    <a href="{{route('contact')}}" class="active" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

<!-- contact single area start -->
<div class="rts-contact-area-page rts-section-gap">
    <div class="container">
        <div class="row g-5">
            @foreach ($details as $item)

            <!-- single contact area -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-contact-one-inner sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="thumbnail">
                        <img src="assets/images/contact/01.png" alt="">
                    </div>
                    <div class="content">
                        <div class="icone">
                            <img src="assets/images/contact/shape/01.svg" alt="">
                        </div>
                        <div class="info">
                            <span>Call Us 24/7</span>
                            <a href="tel:{{$item->mobile_no}}">
                                <h5>{{$item->mobile_no}}</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single contact area end -->
            <!-- single contact area -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-contact-one-inner sal-animate" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="thumbnail">
                        <img src="assets/images/contact/02.png" alt="">
                    </div>
                    <div class="content">
                        <div class="icone">
                            <img src="assets/images/contact/shape/02.svg" alt="">
                        </div>
                        <div class="info">
                            <span>MAke A Quote</span>
                            <a href="mailto:{{$item->email}}">
                                <h5>{{$item->email}}</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single contact area end -->
            <!-- single contact area -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-contact-one-inner sal-animate" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="thumbnail">
                        <img src="assets/images/contact/03.png" alt="">
                    </div>
                    <div class="content">
                        <div class="icone">
                            <img src="assets/images/contact/shape/03.svg" alt="">
                        </div>
                        <div class="info">
                            <span>Service Station</span>
                            <a href="#">
                                <h5>{!!$item->address!!}</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single contact area end -->
                            
            @endforeach
        </div>
    </div>
</div>
<!-- conact single area end -->

<!-- axela map area start -->
<div class="rts-contact-map-area">
    <div class="contaciner-fluid">
        <div class="row">
            <div class="col-12">
                <div class="contact-map-area-fluid">
                    <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.288851207937!2d90.47855065!3d23.798243149999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1663151706353!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    {{-- @foreach ($details as $item)

                    <img class="location" src="{{asset('Admin/images/'.$item->logo)}}" alt="Business_map">
                                            
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- axela map area end -->

<!-- conact us form fluid start -->
<div class="rts-contact-form-area">
    <div class="container">
        
        <div class="rts-contact-fluid rts-section-gap">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area text-center">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"
                        class="sal-animate">Get in Touch</span>
                        <h3 class="title animated fadeIn sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Needs Help? Let’s Get in Touch
                        </h3>
                    </div>
                </div>
            </div>
            <div class="form-wrapper">
                <div id="form-messages"></div>
                <form action="{{route('contact.store1')}}" method="post">
                    @csrf
                    <div class="name-email">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <span class="text-danger">
                            @error('name')
                            {{$message}}
                            @enderror
                        </span>
                        <input type="email" name="email" placeholder="Email Address" required>
                        <span class="text-danger">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <input type="text" name="subject" placeholder="Your Subject">
                    <span class="text-danger">
                        @error('subject')
                        {{$message}}
                        @enderror
                    </span>
                    <textarea placeholder="Type Your Message" name="description"></textarea>
                    <span class="text-danger">
                        @error('description')
                        {{$message}}
                        @enderror
                    </span>
                    <button type="submit" class="rts-btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
    
</div>
<!-- conact us form fluid end -->

@endsection

@push('title')
    @php
        $contact = 'Contact Us'
    @endphp
    {{$contact}}
@endpush