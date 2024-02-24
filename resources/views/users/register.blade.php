
@extends('layouts.users.main')

@section('content')

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Register</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="bread-tag">
                    <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Home</a>
                    <span> / </span>
                    <a href="{{route('register')}}" class="active" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->

<div class="rts-contact-form-area">
    <div class="container">
        
        <div class="rts-contact-fluid rts-section-gap">
            <div class="form-wrapper">
                <div id="form-messages"></div>
                <div class="row justify-content-center">
                    <form action="{{route('register.store1')}}" method="post"  class="row justify-content-center">
                        @csrf
                        <div class="col-8 mb-6">
                            <div class="form-group">
                                <label for="name">Your Business Name</label>
                                <input type="text" name="name" placeholder="Your Business Name" value="{{old('name')}}" required>
                                <span class="text-danger">
                                    @error('name')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-8 mb-6">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" placeholder="Email Address" value="{{old('email')}}" required>
                                <span class="text-danger">
                                    @error('email')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-8 mb-6">
                            <div class="form-group">
                                <label for="mobile_no">Phone Number</label>
                                <input type="text" name="mobile_no" placeholder="Your mobile_no" value="{{old('mobile_no')}}">
                                <span class="text-danger">
                                    @error('mobile_no')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-8 mb-6">
                            <div class="form-group">
                                <label for="package">Enter package</label>
                                <select name="package" id="">
                                    @if (!empty($id))
                                        <option value="{{$id}}">{{$id}}</option> 
                                        @endif
                                        <option value=""> -- Select Package -- </option>
                                        @foreach ($pricing as $value)
                                        @if ($loop->index == 0)
                                        @foreach ($value->pricing as $item)
                                        <option value="{{$item->package}}"> {{$item->package}} </option>                            
                                        @endforeach                           
                                        @endif
                                        @endforeach
                                    </select>
                                    <span class="text-danger">
                                        @error('package')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-8 mb-6">
                                <div class="form-group">
                                    <label for="package_type">Enter package Type</label>
                                    <select name="package_type" id="">
                                        @if (!empty($id1))
                                            <option value="{{$id1}}">{{$id1}}</option> 
                                            @endif
                                            <option value=""> -- Select Package type -- </option>
                                            @foreach ($pricing as $value)
                                            <option value="{{$value->time}}"> {{$value->time}} </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('package_type')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-8 mb-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" placeholder="Your password">
                                        <span class="text-danger">
                                            @error('password')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-8 mb-6">
                                    <div class="form-group">
                                        <label for="c_password">Comfirm Password</label>
                                        <input type="password" name="c_password" placeholder="Your comfirm_password">
                                        <span class="text-danger">
                                            @error('c_password')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div>
                                <button type="submit" class="rts-btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        @endsection