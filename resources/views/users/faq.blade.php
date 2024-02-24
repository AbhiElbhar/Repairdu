@extends('layouts.users.main')

@section('content')

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    FAQ
                </h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Home</a>
                    <span> / </span>
                    <a href="{{route('faq')}}" class="active" data-sal-delay="450" data-sal="slide-up"
                    data-sal-duration="800">FAQ</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

<!-- rts faq area start -->
<div class="rts-faq-area-one rts-section-gap">
    <div class="container">
        <div class="row g-6 align-items-center">
            <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="title-area text-start mb--50">
                    <span data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">FAQ</span>
                    <h2 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        Get Every Business Answer From Us
                    </h2>
                </div>
                <!-- accordion area faq -->
                <div class="accordion-wrapper-area wrapper-area-inner">
                    <div class="accordion" id="accordionExample">
                        @foreach ($faq as $item)

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="15">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{$loop->index+1}}" aria-expanded="false"
                                aria-controls="collapse{{$loop->index+1}}"><span>{{$loop->index+1}}</span> {{$item->question}} </button>
                            </h2>
                            <div id="collapse{{$loop->index+1}}" class="accordion-collapse collapse" aria-labelledby="{{$loop->index+1}}" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> {{$item->answer}} </p>
                                </div>
                            </div>
                        </div>
                                                    
                        @endforeach
                    </div>
                </div>
                <!-- accordion area faq end -->
            </div>
            <div class="col-lg-6" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                <div class="thumbnail-faq-h2 thumbnail-faq-inner pr--20">
                    @foreach ($about as $item)

                    <img src="{{asset('Admin/images/'.$item->image)}}" alt="faq_image" data-sal-delay="150" data-sal="slide-up"data-sal-duration="800">
                                            
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts faq area end -->

@endsection