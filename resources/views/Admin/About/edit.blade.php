@extends('layouts.admin.main')

@section('content')

@foreach ($abouts as $about)

<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <h1 class="text-center">Edit About-Us</h1>
    <form action="{{route('about.update',$about->id)}}" class="action" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Enter Title</label>
            <input type="text" name="title" id="" class="form-control" value="{{$about->title}}">
            <span class="text-danger">
                @error('title')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="mobile_no">Enter mobile Number</label>
            <input type="text" name="mobile_no" id="" class="form-control" value="{{$about->mobile_no}}">
            <span class="text-danger">
                @error('mobile_no')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="old_image">Old Image</label><br>
            <img src="{{asset('Admin/images/'.$about->image)}}" class="rounded-cricle" width="250" height="250">
            <input type="hidden" name="old_image" id="" class="form-control" value="{{$about->image}}">
            <span class="text-danger">
                @error('old_image')
                {{$message}}
                @enderror
            </span>
        </div>
              
        <div class="form-group">
            <label for="image">Enter New Image</label>
            <input type="file" name="image" id="" class="form-control">
            <span class="text-danger">
                @error('image')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="description">Description</label><br>
            <textarea name="description" id="" cols="14" rows="5" class="form-control summernote">{{$about->description}}</textarea>
            <span class="text-danger">
                @error('description')
                {{$message}}
                @enderror
            </span>
        </div>

        <h4>SEO Section</h4>
        <div class="form-group">
            <label for="meta_title">Meta Title</label>
            <input type="text" name="meta_title" id="" class="form-control" value="{{$about->meta_title}}">
            <span class="text-danger">
                @error('meta_title')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="meta_keyword">Meta Keyword</label>
            <input type="text" name="meta_keyword" id="" class="form-control" value="{{$about->meta_keyword}}">
            <span class="text-danger">
                @error('meta_keyword')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="meta_description">Meta Description</label><br>
            <textarea name="meta_description" id="" cols="14" rows="5" class="form-control summernote">{{$about->meta_description}}</textarea>
            <span class="text-danger">
                @error('meta_description')
                {{$message}}
                @enderror
            </span>
        </div>

        <center><button type="submit" class="btn btn-primary">Update</button></center>
    </form>
</div>
    
@endforeach

@endsection