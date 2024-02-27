@extends('layouts.users.main')

@section('content')

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Industries</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Home</a>
                    <span> / </span>
                    <a href="{{route('industry_category')}}" class="active" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">Industries</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

<!-- start service details area -->
<div class="rts-service-details-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                <!-- service details left area start -->
                @foreach ($industry_category as $item)
                @foreach ($item->industry as $item)
                @if ($loop->index < 1 )

                <div class="service-detials-step-1">
                    <div class="thumbnail mb--30" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <img src="{{asset('Admin/images/'.$item->image)}}" alt="business-area">
                    </div>
                    <h4 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">{{$item->title}}</h4>
                    <p class="disc" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <p>{!!$item->description!!}</p>
                    </p>
                </div>
                                      
                @endif                  
                @endforeach                 
                @endforeach
            </div>
            <!--rts blog wizered area -->
            <div class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_md--0 pl-lg-controler pl_sm--0">
                <!-- single wizered start -->
                <div class="rts-single-wized Categories service" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                    <div class="wized-header">
                        <h5 class="title">
                            Categories
                        </h5>
                    </div>
                    <div class="wized-body">
                        <!-- single categoris -->
                        <ul class="single-categories">
                            @foreach ($industry_category as $item)

                            <li><a href="{{route('industry',$item->name)}}">{{$item->name}} <i class="far fa-long-arrow-right"></i></a></li>
                                
                            @endforeach
                        </ul>

                    </div>
                </div>
                <!-- single wizered End -->
                
                <!-- single wizered start -->
                <div class="rts-single-wized contact service" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="wized-header">
                        
                    </div>
                    <div class="wized-body">
                        <h5 class="title">Need Help? We Are Here
                            To Help You
                        </h5>
                        <a class="rts-btn btn-primary" href="{{route('contact')}}">Contact Us</a>
                    </div>
                </div>
                <!-- single wizered End -->
            </div>
            <!-- rts- blog wizered end area -->
        </div>
    </div>
</div>
<!-- End service details area -->

@endsection

@push('title')
    @php
        $industry = 'industries'
    @endphp
    {{$industry}}
@endpush