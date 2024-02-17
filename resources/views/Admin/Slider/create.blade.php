@extends('layouts.admin.main')

@section('content')

<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <h1 class="text-center">Add Slider</h1>
    <form action="{{route('slider.store')}}" class="action" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Enter Title</label>
            <input type="text" name="title" id="" class="form-control" value="{{old('title')}}">
            <span class="text-danger">
                @error('title')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="url">Enter URL</label>
            <input type="url" name="url" id="" class="form-control" value="{{old('url')}}">
            <span class="text-danger">
                @error('url')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <div class="form-group">
            <label for="image">Enter Image</label>
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
             
        <center><button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button></center>
    </form>
</div>
@endsection