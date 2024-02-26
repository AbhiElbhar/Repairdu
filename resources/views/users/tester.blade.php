
@extends('layouts.users.main')

@section('content')
@foreach ($tester as $item)

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">{{$item->name}}</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Home</a>
                    <span> / </span>
                    <a href="{{route('tester',$item->name)}}" class="active" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">{{$item->name}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

<div class="rts-blog-list-area rts-section-gap">
    <div class="container">
        <div class="row g-5">
            <div class="blog-single-post-listing details mb--0">
                <div class="rts-quote-area text-center">
                     <h5 class="title">{{$item->position}}</h5>
                    <p class="disc para-1">
                    {!!$item->description!!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
            
@endforeach
@endsection