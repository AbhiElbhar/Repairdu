@extends('layouts.admin.main')

@section('content')


{{--  --}}
<div class="container sm-4">
    <h1 class="text-center">Add About-Us</h1>
    <form action="{{route('about.store')}}" class="action" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Enter Your title</label>
            <input type="text" name="title" id="" class="form-control" value="{{old('title')}}">
            <span class="text-danger">
                @error('title')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="mobile_no">Enter Your title</label>
            <input type="text" name="mobile_no" id="" class="form-control" value="{{old('mobile_no')}}">
            <span class="text-danger">
                @error('mobile_no')
                {{$message}}
                @enderror
            </span>
        </div>
                
        <div class="form-group">
            <label for="image">Enter Your Image</label>
            <input type="file" name="image" id="" class="form-control" value="{{old('image')}}" >
            <span class="text-danger">
                @error('image')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <div class="form-group">
            <label for="description">Description</label><br>
            <textarea name="description" id="" cols="14" rows="5" class="form-control summernote">{{old('description')}}</textarea>
            <span class="text-danger">
                @error('description')
                {{$message}}
                @enderror
            </span>
        </div>

        <center><button type="submit" class="btn btn-primary">Submit</button></center>
    </form>
</div>

@endsection