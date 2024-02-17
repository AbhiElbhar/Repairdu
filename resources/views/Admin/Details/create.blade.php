@extends('layouts.admin.main')

@section('content')

<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <h1 class="text-center">Add Details</h1>
    <form action="{{route('detail.store')}}" class="action" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="email">Enter Email</label>
            <input type="text" name="email" id="" class="form-control" value="{{old('email')}}">
            <span class="text-danger">
                @error('email')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="mobile_no">Enter Mobile Number</label>
            <input type="text" name="mobile_no" id="" class="form-control" value="{{old('mobile_no')}}">
            <span class="text-danger">
                @error('mobile_no')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <div class="form-group">
            <label for="address">Address</label><br>
            <textarea name="address" id="" cols="14" rows="5" class="form-control summernote">{{old('address')}}</textarea>
            <span class="text-danger">
                @error('address')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="logo">Enter logo</label>
            <input type="file" name="logo" id="" class="form-control" value="{{old('logo')}}" >
            <span class="text-danger">
                @error('logo')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="favicon">Enter favicon</label>
            <input type="file" name="favicon" id="" class="form-control" value="{{old('favicon')}}" >
            <span class="text-danger">
                @error('favicon')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <center><button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button></center>

    </form>
</div>

@endsection