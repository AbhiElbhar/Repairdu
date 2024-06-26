@extends('layouts.users.main')

@section('content')

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Privacy & Terms</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Home</a>
                    <span> / </span>
                    <a href="{{route('policy')}}" class="active" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">Privacy & Terms.</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->
@foreach ($policy as $item)

<div class="rts-blog-list-area rts-section-gap">
    <div class="container">
        <div class="row g-5">
            <div class="blog-single-post-listing details mb--0">
                <div class="rts-quote-area text-center">
                    <h4>Privacy Policy</h4>
                    <p class="disc para-1">
                    {!!$item->policy!!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="rts-blog-list-area rts-section-gap">
    <div class="container">
        <div class="row g-5">
            <div class="blog-single-post-listing details mb--0">
                <div class="rts-quote-area text-center">
                    <h4>Terms & Condition</h4>
                    <p class="disc para-1">
                    {!!$item->terms!!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach
@endsection

@push('title')
    @php
        $Privacy = 'Privacy & Terms'
    @endphp
    {{$Privacy}}
@endpush