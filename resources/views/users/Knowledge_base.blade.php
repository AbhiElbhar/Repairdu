@extends('layouts.users.main')

@section('content')

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">knowledge Base</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Home</a>
                    <span> / </span>
                    <a href="{{route('knowledge_base')}}" class="active" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">knowledge Base</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

<!-- rts knowledge base area -->
<div class="rts-blog-list-area rts-section-gap">
    <div class="container">
        <div class="row g-5">
            <!--rts blog wizered area -->
            <!-- single wizered start -->
            <div class="rts-single-wized Categories" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="wized-header">
                    <h5 class="title">
                        Knowledge Base
                    </h5>
                </div>
                <div class="wized-body">
                    <!-- single categoris -->
                    <ul class="single-categories">
                        @foreach ($knowledge_base as $item)

                        <li>
                            <a href="{{route('knowledge_base.title',$item->title)}}">
                                {{$item->title}}
                                <i class="far fa-long-arrow-right"></i>
                            </a>
                        </li>
                                                    
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('title')
    @php
        $base = 'Knowledge Base'
    @endphp
    {{$base}}
@endpush