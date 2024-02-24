@extends('layouts.users.main')

@section('content')
@foreach ($feature1 as $item)

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">{{$item->title}}</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Home</a>
                    <span> / </span>
                    <a href="{{route('feature',$item->title)}}" class="active" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">{{$item->title}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->


<div class="rts-about-us-area rts-section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="thumbnail sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <img src="{{asset('Admin/images/'.$item->image)}}" alt="creative_about" height="500px" width="500px">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-right-one-area">
                    <div class="title-area">
                        <h3 class="title animated fadeIn sal-animate" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            {{$item->title}}
                        </h3>
                    </div>
                    <p class="disc sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        </p>{!!$item->description!!}<p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection