@extends('layouts.admin.main')

@section('content')

<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <h1 class="text-center">Edit Software Feature</h1>
    <form action="{{route('feature.update',$feature->id)}}" class="action" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Enter Title</label>
            <input type="text" name="title" id="" class="form-control" value="{{$feature->title}}">
            <span class="text-danger">
                @error('title')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="heading">Enter Heading</label>
            <input type="text" name="heading" id="" class="form-control" value="{{$feature->heading}}">
            <span class="text-danger">
                @error('heading')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="old_image">Old Image</label><br>
            <img src="{{asset('Admin/images/'.$feature->image)}}" class="rounded-cricle" width="250" height="250">
            <input type="hidden" name="old_image" id="" class="form-control" value="{{$feature->image}}">
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
            <textarea name="description" id="" cols="14" rows="5" class="form-control summernote">{{$feature->description}}</textarea>
            <span class="text-danger">
                @error('description')
                {{$message}}
                @enderror
            </span>
        </div>

        <h4>SEO Section</h4>
        <div class="form-group">
            <label for="meta_title">Meta Title</label>
            <input type="text" name="meta_title" id="" class="form-control" value="{{$feature->meta_title}}">
            <span class="text-danger">
                @error('meta_title')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="meta_keyword">Meta Keyword</label>
            <input type="text" name="meta_keyword" id="" class="form-control" value="{{$feature->meta_keyword}}">
            <span class="text-danger">
                @error('meta_keyword')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="meta_description">Meta Description</label><br>
            <textarea name="meta_description" id="" cols="14" rows="5" class="form-control summernote">{{$feature->meta_description}}</textarea>
            <span class="text-danger">
                @error('meta_description')
                {{$message}}
                @enderror
            </span>
        </div>

        <center><button type="submit" class="btn btn-primary">Update</button></center>
    </form>
</div>

@endsection